<?php
/**
 * Blog Post Importer
 *
 * Reads markdown files from blog-content/ and creates WordPress posts.
 * Run via WP-CLI: wp eval-file import-blogs.php --allow-root
 */

if (!defined('ABSPATH')) {
    echo "This script must be run via WP-CLI:\n";
    echo "  wp eval-file import-blogs.php --allow-root\n";
    exit(1);
}

$theme_dir = get_template_directory();
$blog_dir = $theme_dir . '/blog-content';

if (!is_dir($blog_dir)) {
    echo "Error: blog-content/ directory not found at $blog_dir\n";
    exit(1);
}

$files = glob($blog_dir . '/*.md');
sort($files);

if (empty($files)) {
    echo "No .md files found in blog-content/\n";
    exit(0);
}

echo "Found " . count($files) . " blog post(s) to import.\n\n";

foreach ($files as $file) {
    $raw = file_get_contents($file);
    $filename = basename($file);

    // Split on the --- separator
    $parts = preg_split('/\n---\n/', $raw, 2);
    $header = $parts[0];
    $body = isset($parts[1]) ? trim($parts[1]) : '';

    if (empty($body)) {
        echo "Skipping $filename — no content after --- separator.\n";
        continue;
    }

    // Parse title (first line, strip # )
    $lines = explode("\n", $header);
    $title = preg_replace('/^#\s+/', '', trim($lines[0]));

    // Parse metadata
    $category = '';
    $keywords = '';
    foreach ($lines as $line) {
        if (preg_match('/^\*\*Category:\*\*\s*(.+)/', $line, $m)) {
            $category = trim($m[1]);
        }
        if (preg_match('/^\*\*SEO Keywords:\*\*\s*(.+)/', $line, $m)) {
            $keywords = trim($m[1]);
        }
    }

    // Check if post already exists
    $existing = get_page_by_title($title, OBJECT, 'post');
    if ($existing) {
        echo "Skipping \"$title\" — already exists (ID: {$existing->ID}).\n";
        continue;
    }

    // Convert markdown to HTML
    $html = markdown_to_html($body);

    // Create/get category
    $cat_id = 0;
    if ($category) {
        $term = term_exists($category, 'category');
        if (!$term) {
            $term = wp_insert_term($category, 'category');
        }
        if (!is_wp_error($term)) {
            $cat_id = is_array($term) ? $term['term_id'] : $term;
        }
    }

    // Create the post
    $post_data = array(
        'post_title'   => $title,
        'post_content' => $html,
        'post_status'  => 'publish',
        'post_type'    => 'post',
        'post_author'  => 1,
    );

    if ($cat_id) {
        $post_data['post_category'] = array($cat_id);
    }

    $post_id = wp_insert_post($post_data);

    if (is_wp_error($post_id)) {
        echo "Error creating \"$title\": " . $post_id->get_error_message() . "\n";
        continue;
    }

    // Add tags from keywords
    if ($keywords) {
        $tags = array_map('trim', explode(',', $keywords));
        wp_set_post_tags($post_id, $tags);
    }

    echo "Created: \"$title\" (ID: $post_id, Category: $category)\n";
}

echo "\nDone! All blog posts imported.\n";

/**
 * Basic markdown to HTML converter.
 * Handles: headings, bold, italic, links, lists, blockquotes, code blocks, horizontal rules.
 */
function markdown_to_html($md) {
    $lines = explode("\n", $md);
    $html = '';
    $in_list = false;
    $list_type = '';
    $in_code = false;
    $in_blockquote = false;
    $paragraph = '';

    foreach ($lines as $line) {
        // Code blocks (```)
        if (preg_match('/^```/', $line)) {
            if ($in_code) {
                $html .= "</code></pre>\n";
                $in_code = false;
            } else {
                $html = flush_paragraph($html, $paragraph);
                $paragraph = '';
                $html .= "<pre><code>";
                $in_code = true;
            }
            continue;
        }

        if ($in_code) {
            $html .= htmlspecialchars($line) . "\n";
            continue;
        }

        // Empty line — flush paragraph
        if (trim($line) === '') {
            if ($in_list) {
                $html .= "</$list_type>\n";
                $in_list = false;
            }
            if ($in_blockquote) {
                $html .= "</blockquote>\n";
                $in_blockquote = false;
            }
            $html = flush_paragraph($html, $paragraph);
            $paragraph = '';
            continue;
        }

        // Horizontal rule
        if (preg_match('/^---+$/', trim($line))) {
            $html = flush_paragraph($html, $paragraph);
            $paragraph = '';
            $html .= "<hr>\n";
            continue;
        }

        // Headings
        if (preg_match('/^(#{1,6})\s+(.+)/', $line, $m)) {
            $html = flush_paragraph($html, $paragraph);
            $paragraph = '';
            $level = strlen($m[1]);
            $text = inline_format($m[2]);
            $html .= "<h$level>$text</h$level>\n";
            continue;
        }

        // Blockquote
        if (preg_match('/^>\s*(.*)/', $line, $m)) {
            $html = flush_paragraph($html, $paragraph);
            $paragraph = '';
            if (!$in_blockquote) {
                $html .= "<blockquote>\n";
                $in_blockquote = true;
            }
            $html .= "<p>" . inline_format($m[1]) . "</p>\n";
            continue;
        }

        // Unordered list
        if (preg_match('/^[-*]\s+(.+)/', $line, $m)) {
            $html = flush_paragraph($html, $paragraph);
            $paragraph = '';
            if (!$in_list || $list_type !== 'ul') {
                if ($in_list) $html .= "</$list_type>\n";
                $html .= "<ul>\n";
                $in_list = true;
                $list_type = 'ul';
            }
            $html .= "<li>" . inline_format($m[1]) . "</li>\n";
            continue;
        }

        // Ordered list
        if (preg_match('/^\d+\.\s+(.+)/', $line, $m)) {
            $html = flush_paragraph($html, $paragraph);
            $paragraph = '';
            if (!$in_list || $list_type !== 'ol') {
                if ($in_list) $html .= "</$list_type>\n";
                $html .= "<ol>\n";
                $in_list = true;
                $list_type = 'ol';
            }
            $html .= "<li>" . inline_format($m[1]) . "</li>\n";
            continue;
        }

        // Regular text — accumulate as paragraph
        $paragraph .= ($paragraph ? ' ' : '') . trim($line);
    }

    // Flush remaining
    if ($in_list) $html .= "</$list_type>\n";
    if ($in_blockquote) $html .= "</blockquote>\n";
    if ($in_code) $html .= "</code></pre>\n";
    $html = flush_paragraph($html, $paragraph);

    return $html;
}

function flush_paragraph($html, $paragraph) {
    if (trim($paragraph) !== '') {
        $html .= "<p>" . inline_format($paragraph) . "</p>\n";
    }
    return $html;
}

function inline_format($text) {
    // Bold
    $text = preg_replace('/\*\*(.+?)\*\*/', '<strong>$1</strong>', $text);
    // Italic
    $text = preg_replace('/\*(.+?)\*/', '<em>$1</em>', $text);
    // Inline code
    $text = preg_replace('/`(.+?)`/', '<code>$1</code>', $text);
    // Links
    $text = preg_replace('/\[(.+?)\]\((.+?)\)/', '<a href="$2">$1</a>', $text);
    return $text;
}
