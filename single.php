<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
// Gather post data for schema
$post_categories = get_the_category();
$category_name = !empty($post_categories) ? $post_categories[0]->name : 'Blog';
$post_tags = get_the_tags();
$tag_names = array();
if ($post_tags) {
    foreach ($post_tags as $tag) {
        $tag_names[] = $tag->name;
    }
}
?>

<!-- JSON-LD: Article Schema (Blog Post) -->
<script type="application/ld+json">
<?php
$blog_schema = array(
    '@context'       => 'https://schema.org',
    '@type'          => 'Article',
    'headline'       => get_the_title(),
    'description'    => has_excerpt() ? get_the_excerpt() : mb_substr(wp_strip_all_tags(get_the_content()), 0, 300),
    'datePublished'  => get_the_date('c'),
    'dateModified'   => get_the_modified_date('c'),
    'url'            => get_permalink(),
    'mainEntityOfPage' => array(
        '@type' => 'WebPage',
        '@id'   => get_permalink()
    ),
    'author'         => array(
        '@type' => 'Person',
        'name'  => 'Chris Brody',
        'jobTitle' => 'Founder & Automation Engineer',
        'worksFor' => array(
            '@type' => 'Organization',
            'name'  => 'GroundWorks Development'
        )
    ),
    'publisher'      => array(
        '@type' => 'Organization',
        'name'  => 'GroundWorks Development',
        'url'   => home_url()
    ),
    'articleSection' => $category_name
);

// Add thumbnail
if (has_post_thumbnail()) {
    $blog_schema['image'] = get_the_post_thumbnail_url(get_the_ID(), 'full');
}

// Add tags as keywords
if (!empty($tag_names)) {
    $blog_schema['keywords'] = implode(', ', $tag_names);
}

// Word count for estimated reading time signal
$word_count = str_word_count(wp_strip_all_tags(get_the_content()));
$blog_schema['wordCount'] = $word_count;

echo wp_json_encode($blog_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
</script>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <a href="<?php echo home_url('/blog/'); ?>" class="back-link">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Back to Blog
            </a>
            <div class="post-meta-top">
                <span class="label" style="margin-top: 24px;"><?php echo esc_html($category_name); ?></span>
            </div>
            <h1><?php the_title(); ?></h1>
            <?php if (has_excerpt()) : ?>
                <p class="hero-copy"><?php echo get_the_excerpt(); ?></p>
            <?php endif; ?>
            <div class="post-reading-time">
                <?php echo ceil($word_count / 250); ?> min read
            </div>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <article class="blog-post-single">
            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <?php if (!empty($tag_names)) : ?>
                <div class="post-tags">
                    <?php foreach ($post_tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag->term_id); ?>" class="post-tag"><?php echo esc_html($tag->name); ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Author Box -->
            <div class="author-box">
                <div class="author-info">
                    <span class="label">Written by</span>
                    <h3>Chris Brody</h3>
                    <p>Founder of GroundWorks Development. Builds custom automation systems and operational infrastructure for small businesses and municipalities.</p>
                </div>
            </div>

            <!-- Post Navigation -->
            <div class="post-nav">
                <div class="nav-prev">
                    <?php $prev = get_previous_post(); ?>
                    <?php if ($prev) : ?>
                        <a href="<?php echo get_permalink($prev); ?>">
                            <span class="nav-label">Previous</span>
                            <span class="nav-title"><?php echo get_the_title($prev); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="nav-next">
                    <?php $next = get_next_post(); ?>
                    <?php if ($next) : ?>
                        <a href="<?php echo get_permalink($next); ?>">
                            <span class="nav-label">Next</span>
                            <span class="nav-title"><?php echo get_the_title($next); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <div class="text-center" style="max-width: 700px; margin: 0 auto;">
            <span class="label">Free Assessment</span>
            <h2>Where Is Your Business Bleeding Time?</h2>
            <p>In 45 minutes, we'll map your workflows and identify the top 3 time drains in your operation. You'll leave with a prioritized action plan—whether you work with us or not.</p>
            <a href="<?php echo home_url('/#diagnostic-form'); ?>" class="magnetic-btn" style="margin-top: 32px;">
                <span class="btn btn-primary">Request Your Free Assessment</span>
            </a>
        </div>
    </div>
</section>

<style>
    .blog-post-single {
        max-width: 760px;
        margin: 0 auto;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: var(--font-mono);
        font-size: 0.875rem;
        color: var(--text-muted);
        text-decoration: none;
        transition: color var(--transition-fast);
    }

    .back-link:hover {
        color: var(--accent-orange);
    }

    .post-meta-top {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-top: 24px;
    }

.post-reading-time {
        font-family: var(--font-mono);
        font-size: 0.8125rem;
        color: var(--text-muted);
        margin-top: 16px;
        padding-top: 16px;
        border-top: 1px solid var(--border-color);
    }

    /* Post Content Typography */
    .post-content h2 {
        font-size: 1.75rem;
        margin: 56px 0 20px;
        padding-top: 32px;
        border-top: 1px solid var(--border-color);
    }

    .post-content h2:first-child {
        margin-top: 0;
        padding-top: 0;
        border-top: none;
    }

    .post-content h3 {
        font-size: 1.25rem;
        margin: 40px 0 16px;
    }

    .post-content h4 {
        font-family: var(--font-mono);
        font-size: 1rem;
        margin: 32px 0 12px;
        color: var(--accent-orange);
    }

    .post-content p {
        color: var(--text-secondary);
        font-size: 1.0625rem;
        line-height: 1.85;
        margin-bottom: 24px;
    }

    .post-content strong {
        color: var(--text-primary);
        font-weight: 600;
    }

    .post-content em {
        color: var(--text-secondary);
    }

    .post-content ul,
    .post-content ol {
        color: var(--text-secondary);
        padding-left: 24px;
        margin-bottom: 24px;
    }

    .post-content li {
        margin-bottom: 10px;
        line-height: 1.7;
        font-size: 1.0625rem;
    }

    .post-content blockquote {
        border-left: 3px solid var(--accent-orange);
        padding: 16px 0 16px 24px;
        margin: 32px 0;
        font-style: italic;
    }

    .post-content blockquote p {
        color: var(--text-primary);
        font-size: 1.125rem;
    }

    .post-content hr {
        border: none;
        border-top: 1px solid var(--border-color);
        margin: 48px 0;
    }

    .post-content a {
        color: var(--accent-orange);
        text-decoration: underline;
        text-underline-offset: 3px;
        transition: color var(--transition-fast);
    }

    .post-content a:hover {
        color: var(--accent-orange-hover);
    }

    .post-content code {
        font-family: var(--font-mono);
        font-size: 0.875em;
        background: var(--bg-tertiary);
        padding: 2px 8px;
        border-radius: 4px;
        color: var(--accent-orange);
    }

    .post-content pre {
        background: var(--bg-tertiary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        padding: 24px;
        overflow-x: auto;
        margin: 32px 0;
    }

    .post-content pre code {
        background: none;
        padding: 0;
        font-size: 0.875rem;
        color: var(--text-secondary);
    }

    .post-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 32px 0;
    }

    /* Tags */
    .post-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 48px;
        padding-top: 32px;
        border-top: 1px solid var(--border-color);
    }

    .post-tag {
        font-family: var(--font-mono);
        font-size: 0.75rem;
        color: var(--text-muted);
        background: var(--bg-tertiary);
        padding: 6px 14px;
        border-radius: 4px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        transition: all var(--transition-fast);
    }

    .post-tag:hover {
        color: var(--accent-orange);
        background: rgba(255, 92, 0, 0.1);
    }

    /* Author Box */
    .author-box {
        margin-top: 48px;
        padding: 32px;
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 12px;
    }

    .author-info h3 {
        font-size: 1.125rem;
        margin-bottom: 8px;
    }

    .author-info p {
        color: var(--text-muted);
        font-size: 0.9375rem;
        margin: 0;
        line-height: 1.6;
    }

    /* Post Navigation */
    .post-nav {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        margin-top: 48px;
        padding-top: 48px;
        border-top: 1px solid var(--border-color);
    }

    .nav-prev,
    .nav-next {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        transition: border-color var(--transition-base);
    }

    .nav-prev:hover,
    .nav-next:hover {
        border-color: var(--border-hover);
    }

    .nav-prev a,
    .nav-next a {
        display: block;
        padding: 24px;
        text-decoration: none;
    }

    .nav-next {
        text-align: right;
    }

    .nav-label {
        display: block;
        font-family: var(--font-mono);
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--text-muted);
        margin-bottom: 8px;
    }

    .nav-title {
        display: block;
        font-size: 1rem;
        color: var(--text-primary);
        transition: color var(--transition-fast);
    }

    .nav-prev a:hover .nav-title,
    .nav-next a:hover .nav-title {
        color: var(--accent-orange);
    }

    @media (max-width: 768px) {
        .post-content h2 {
            font-size: 1.5rem;
            margin: 40px 0 16px;
        }

        .post-content p,
        .post-content li {
            font-size: 1rem;
        }

        .post-nav {
            grid-template-columns: 1fr;
        }

        .nav-next {
            text-align: left;
        }
    }
</style>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
