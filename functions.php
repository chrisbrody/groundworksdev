<?php
function groundworks_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    // Register navigation menu
    register_nav_menus(array(
        'main-menu' => 'Main Navigation'
    ));
}
add_action('after_setup_theme', 'groundworks_theme_setup');

function groundworks_enqueue_scripts() {
    wp_enqueue_style('groundworks-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_script('groundworks-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'groundworks_enqueue_scripts');

// Register widget areas
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

// Custom post type for Case Studies
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
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-portfolio',
            'rewrite' => array('slug' => 'case-studies')
        )
    );
}
add_action('init', 'create_case_study_post_type');


// Contact Form Processing
function handle_contact_form_submission() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['contact_email']);
    $business_name = sanitize_text_field($_POST['business_name']);
    $message = sanitize_textarea_field($_POST['contact_message']);
    $newsletter = isset($_POST['contact_newsletter']) ? 'Yes' : 'No';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        wp_redirect(add_query_arg('error', 'missing_fields', wp_get_referer()));
        exit;
    }
    
    // Prepare email content
    $to = get_option('admin_email');
    $subject = 'New Contact Form Submission from ' . get_bloginfo('name');
    
    $email_content = "New contact form submission:\n\n";
    $email_content .= "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n";
    $email_content .= "Business Name: " . $business_name . "\n";
    $email_content .= "Newsletter: " . $newsletter . "\n\n";
    $email_content .= "Message:\n" . $message . "\n\n";
    $email_content .= "Submitted from: " . home_url();
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );
    
    // Send email
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
    // Verify nonce
    if (!wp_verify_nonce($_POST['gov_transition_nonce'], 'gov_transition_form_nonce')) {
        wp_die('Security check failed');
    }
    
    // Sanitize form data
    $town_name = sanitize_text_field($_POST['town_name']);
    $contact_name = sanitize_text_field($_POST['contact_name']);
    $contact_email = sanitize_email($_POST['contact_email']);
    $contact_phone = sanitize_text_field($_POST['contact_phone']);
    $town_website = esc_url_raw($_POST['town_website']);
    $town_size = sanitize_text_field($_POST['town_size']);
    $additional_info = sanitize_textarea_field($_POST['additional_info']);
    
    // Validate required fields
    if (empty($town_name) || empty($contact_name) || empty($contact_email)) {
        wp_redirect(add_query_arg('error', 'missing_fields', wp_get_referer()));
        exit;
    }
    
    // Prepare email content
    $to = get_option('admin_email');
    $subject = 'New .gov Transition Inquiry from ' . $town_name;
    
    $email_content = "New .gov transition inquiry:\n\n";
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
        'From: ' . get_bloginfo('name') . ' <' . get_option('admin_email') . '>',
        'Reply-To: ' . $contact_name . ' <' . $contact_email . '>'
    );
    
    // Send email
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

// Add custom body classes for easier styling
function groundworks_body_classes($classes) {
    // Add page slug to body class
    if (is_page()) {
        global $post;
        $classes[] = 'page-' . $post->post_name;
    }
    
    // Add custom post type class
    if (is_singular('case_study')) {
        $classes[] = 'single-case-study';
    }
    
    if (is_post_type_archive('case_study')) {
        $classes[] = 'archive-case-studies';
    }
    
    return $classes;
}
add_filter('body_class', 'groundworks_body_classes');

// Customize excerpt length
function groundworks_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'groundworks_excerpt_length');

// Custom excerpt more text
function groundworks_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'groundworks_excerpt_more');
?>