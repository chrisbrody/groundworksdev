<?php
/**
 * GroundWorks Engineering Theme Functions
 * Premium WordPress theme for business automation services
 */

// Theme Setup
function groundworks_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menu
    register_nav_menus(array(
        'main-menu' => 'Main Navigation'
    ));
}
add_action('after_setup_theme', 'groundworks_theme_setup');

// Enqueue Scripts and Styles
function groundworks_enqueue_scripts() {
    // Main stylesheet
    wp_enqueue_style('groundworks-style', get_stylesheet_uri(), array(), '3.0');

    // Main JavaScript
    wp_enqueue_script('groundworks-script', get_template_directory_uri() . '/js/main.js', array(), '3.0', true);

    // Pass data to JavaScript if needed
    wp_localize_script('groundworks-script', 'groundworksData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('groundworks_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'groundworks_enqueue_scripts');

// Register Widget Areas
function groundworks_widgets_init() {
    register_sidebar(array(
        'name' => 'Footer Area',
        'id' => 'footer-area',
        'before_widget' => '<div class="footer-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'groundworks_widgets_init');

// Custom Post Type: Case Studies
function create_case_study_post_type() {
    register_post_type('case_study',
        array(
            'labels' => array(
                'name' => 'Case Studies',
                'singular_name' => 'Case Study',
                'add_new' => 'Add New Case Study',
                'add_new_item' => 'Add New Case Study',
                'edit_item' => 'Edit Case Study',
                'new_item' => 'New Case Study',
                'view_item' => 'View Case Study',
                'search_items' => 'Search Case Studies',
                'not_found' => 'No case studies found',
                'not_found_in_trash' => 'No case studies found in Trash'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-portfolio',
            'rewrite' => array('slug' => 'case-studies'),
            'show_in_rest' => true
        )
    );
}
add_action('init', 'create_case_study_post_type');

// Efficiency Assessment Form Handler
function handle_efficiency_form_submission() {
    // Verify nonce
    if (!isset($_POST['efficiency_nonce']) || !wp_verify_nonce($_POST['efficiency_nonce'], 'efficiency_form_nonce')) {
        wp_die('Security check failed');
    }

    // Sanitize form data
    $waste_area = sanitize_text_field($_POST['waste_area'] ?? '');
    $team_size = sanitize_text_field($_POST['team_size'] ?? '');
    $weekly_hours = absint($_POST['weekly_hours'] ?? 10);
    $email = sanitize_email($_POST['email'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');

    // Validate required fields
    if (empty($email) || empty($waste_area)) {
        wp_redirect(add_query_arg('error', 'missing_fields', wp_get_referer()));
        exit;
    }

    // Map waste area to readable text
    $waste_areas = array(
        'sales' => 'Sales & Lead Management',
        'billing' => 'Billing & Invoicing',
        'operations' => 'Operations & Workflow',
        'government' => 'Government / Compliance'
    );
    $waste_area_text = $waste_areas[$waste_area] ?? $waste_area;

    // Calculate estimated annual cost
    $annual_hours = $weekly_hours * 52;
    $annual_cost = $annual_hours * 150;

    // Prepare email content
    $to = get_option('admin_email');
    $subject = 'New Efficiency Assessment Request - ' . ($company ?: $email);

    $email_content = "New Efficiency Assessment Request\n";
    $email_content .= "================================\n\n";
    $email_content .= "Contact Information:\n";
    $email_content .= "- Email: " . $email . "\n";
    $email_content .= "- Company: " . ($company ?: 'Not provided') . "\n\n";
    $email_content .= "Assessment Details:\n";
    $email_content .= "- Primary Waste Area: " . $waste_area_text . "\n";
    $email_content .= "- Team Size: " . $team_size . "\n";
    $email_content .= "- Weekly Manual Hours: " . $weekly_hours . " hours\n\n";
    $email_content .= "Calculated Opportunity Cost:\n";
    $email_content .= "- Annual Hours: " . number_format($annual_hours) . "\n";
    $email_content .= "- Annual Cost @ $150/hr: $" . number_format($annual_cost) . "\n\n";
    $email_content .= "Submitted from: " . home_url() . "\n";
    $email_content .= "Date: " . date('F j, Y \a\t g:i a');

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: GroundWorks <' . get_option('admin_email') . '>',
        'Reply-To: ' . $email
    );

    // Send email
    $mail_sent = wp_mail($to, $subject, $email_content, $headers);

    if ($mail_sent) {
        wp_redirect(add_query_arg('success', 'assessment', home_url()));
    } else {
        wp_redirect(add_query_arg('error', 'send_failed', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_efficiency_form_submission', 'handle_efficiency_form_submission');
add_action('admin_post_nopriv_efficiency_form_submission', 'handle_efficiency_form_submission');

// Contact Form Processing
function handle_contact_form_submission() {
    if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('Security check failed');
    }

    $name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['contact_email']);
    $business_name = sanitize_text_field($_POST['business_name']);
    $message = sanitize_textarea_field($_POST['contact_message']);
    $newsletter = isset($_POST['contact_newsletter']) ? 'Yes' : 'No';

    if (empty($name) || empty($email) || empty($message)) {
        wp_redirect(add_query_arg('error', 'missing_fields', wp_get_referer()));
        exit;
    }

    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission - ' . $name;

    $email_content = "New Contact Form Submission\n";
    $email_content .= "===========================\n\n";
    $email_content .= "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n";
    $email_content .= "Business Name: " . $business_name . "\n";
    $email_content .= "Newsletter: " . $newsletter . "\n\n";
    $email_content .= "Message:\n" . $message . "\n\n";
    $email_content .= "Submitted from: " . home_url();

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: GroundWorks <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );

    $mail_sent = wp_mail($to, $subject, $email_content, $headers);

    if ($mail_sent) {
        wp_redirect(add_query_arg('success', 'true', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('error', 'send_failed', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_contact_form_submission', 'handle_contact_form_submission');
add_action('admin_post_nopriv_contact_form_submission', 'handle_contact_form_submission');

// Gov Transition Form Processing
function handle_gov_transition_form_submission() {
    if (!wp_verify_nonce($_POST['gov_transition_nonce'], 'gov_transition_form_nonce')) {
        wp_die('Security check failed');
    }

    $town_name = sanitize_text_field($_POST['town_name']);
    $contact_name = sanitize_text_field($_POST['contact_name']);
    $contact_email = sanitize_email($_POST['contact_email']);
    $contact_phone = sanitize_text_field($_POST['contact_phone']);
    $town_website = esc_url_raw($_POST['town_website']);
    $town_size = sanitize_text_field($_POST['town_size']);
    $additional_info = sanitize_textarea_field($_POST['additional_info']);

    if (empty($town_name) || empty($contact_name) || empty($contact_email)) {
        wp_redirect(add_query_arg('error', 'missing_fields', wp_get_referer()));
        exit;
    }

    $to = get_option('admin_email');
    $subject = 'New .gov Transition Inquiry - ' . $town_name;

    $email_content = "New .gov Transition Inquiry\n";
    $email_content .= "===========================\n\n";
    $email_content .= "Town Name: " . $town_name . "\n";
    $email_content .= "Contact Name: " . $contact_name . "\n";
    $email_content .= "Contact Email: " . $contact_email . "\n";
    $email_content .= "Contact Phone: " . $contact_phone . "\n";
    $email_content .= "Current Website: " . $town_website . "\n";
    $email_content .= "Town Size: " . $town_size . "\n\n";
    $email_content .= "Additional Information:\n" . $additional_info . "\n\n";
    $email_content .= "Submitted from: " . home_url();

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: GroundWorks <' . get_option('admin_email') . '>',
        'Reply-To: ' . $contact_name . ' <' . $contact_email . '>'
    );

    $mail_sent = wp_mail($to, $subject, $email_content, $headers);

    if ($mail_sent) {
        wp_redirect(add_query_arg('success', 'true', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('error', 'send_failed', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_gov_transition_form_submission', 'handle_gov_transition_form_submission');
add_action('admin_post_nopriv_gov_transition_form_submission', 'handle_gov_transition_form_submission');

// Custom Body Classes
function groundworks_body_classes($classes) {
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }

    if (is_singular('case_study')) {
        $classes[] = 'single-case-study';
    }

    if (is_post_type_archive('case_study')) {
        $classes[] = 'archive-case-studies';
    }

    if (is_front_page()) {
        $classes[] = 'front-page';
    }

    return $classes;
}
add_filter('body_class', 'groundworks_body_classes');

// Customize Excerpt
function groundworks_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'groundworks_excerpt_length');

function groundworks_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'groundworks_excerpt_more');

// Add success/error message display
function groundworks_display_notices() {
    if (isset($_GET['success'])) {
        if ($_GET['success'] === 'assessment') {
            echo '<div class="notice-banner success">';
            echo '<div class="container">';
            echo '<p><strong>Assessment Request Received!</strong> We\'ll be in touch within 24 hours to schedule your efficiency assessment.</p>';
            echo '</div>';
            echo '</div>';
        } elseif ($_GET['success'] === 'true') {
            echo '<div class="notice-banner success">';
            echo '<div class="container">';
            echo '<p><strong>Message Sent!</strong> Thank you for reaching out. We\'ll respond within 24 hours.</p>';
            echo '</div>';
            echo '</div>';
        }
    }

    if (isset($_GET['error'])) {
        echo '<div class="notice-banner error">';
        echo '<div class="container">';
        if ($_GET['error'] === 'missing_fields') {
            echo '<p><strong>Error:</strong> Please fill in all required fields.</p>';
        } else {
            echo '<p><strong>Error:</strong> Something went wrong. Please try again or contact us directly.</p>';
        }
        echo '</div>';
        echo '</div>';
    }
}
add_action('wp_body_open', 'groundworks_display_notices');

// Add notice banner styles
function groundworks_notice_styles() {
    ?>
    <style>
        .notice-banner {
            padding: 16px 0;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.875rem;
            position: fixed;
            top: 80px;
            left: 0;
            right: 0;
            z-index: 999;
            animation: slideDown 0.3s ease;
        }
        .notice-banner.success {
            background: rgba(0, 112, 255, 0.1);
            border-bottom: 1px solid rgba(0, 112, 255, 0.3);
            color: #0070FF;
        }
        .notice-banner.error {
            background: rgba(255, 92, 0, 0.1);
            border-bottom: 1px solid rgba(255, 92, 0, 0.3);
            color: #FF5C00;
        }
        .notice-banner p {
            margin: 0;
            color: inherit;
        }
        @keyframes slideDown {
            from { transform: translateY(-100%); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
    <?php
}
add_action('wp_head', 'groundworks_notice_styles');
?>
