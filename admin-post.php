<?php
// Handle contact form submission
if (!defined('ABSPATH')) {
    exit;
}

// Handle contact form submission
add_action('admin_post_contact_form_submission', 'handle_contact_form_submission');
add_action('admin_post_nopriv_contact_form_submission', 'handle_contact_form_submission');

function handle_contact_form_submission() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['contact_nonce'], 'contact_form_nonce')) {
        wp_die('Security check failed. Please try again.');
    }
    
    // Sanitize and validate form data
    $contact_name = sanitize_text_field($_POST['contact_name']);
    $contact_email = sanitize_email($_POST['contact_email']);
    $business_name = sanitize_text_field($_POST['business_name']);
    $contact_message = sanitize_textarea_field($_POST['contact_message']);
    
    // Validate required fields
    $errors = array();
    
    if (empty($contact_name)) {
        $errors[] = 'Name is required.';
    }
    
    if (empty($contact_email) || !is_email($contact_email)) {
        $errors[] = 'Valid email address is required.';
    }
    
    if (empty($contact_message)) {
        $errors[] = 'Message is required.';
    }
    
    // If validation fails, redirect back with error
    if (!empty($errors)) {
        $error_message = implode(' ', $errors);
        wp_redirect(add_query_arg(array(
            'error' => 'true',
            'message' => urlencode($error_message)
        ), wp_get_referer()));
        exit;
    }
    
    // Prepare email content
    $to = get_option('admin_email'); // Site admin email
    $subject = 'New Contact Form Submission - ' . get_bloginfo('name');
    
    $message = "New contact form submission:\n\n";
    $message .= "Name: " . $contact_name . "\n";
    $message .= "Email: " . $contact_email . "\n";
    $message .= "Business Name: " . $business_name . "\n";
    $message .= "Message:\n" . $contact_message . "\n\n";
    $message .= "Submitted on: " . date('Y-m-d H:i:s') . "\n";
    $message .= "From IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $contact_name . ' <' . $contact_email . '>'
    );
    
    // Send email
    $email_sent = wp_mail($to, $subject, $message, $headers);
    
    // Store submission in database (optional)
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_submissions';
    
    // Create table if it doesn't exist
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        business_name varchar(200),
        message text NOT NULL,
        submitted_at datetime DEFAULT CURRENT_TIMESTAMP,
        ip_address varchar(45),
        PRIMARY KEY (id)
    ) $charset_collate;";
    
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    
    // Insert submission
    $wpdb->insert(
        $table_name,
        array(
            'name' => $contact_name,
            'email' => $contact_email,
            'business_name' => $business_name,
            'message' => $contact_message,
            'submitted_at' => current_time('mysql'),
            'ip_address' => $_SERVER['REMOTE_ADDR']
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s')
    );
    
    // Redirect back to contact page with success message
    if ($email_sent) {
        wp_redirect(add_query_arg('success', 'true', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg(array(
            'error' => 'true',
            'message' => urlencode('Failed to send email. Please try again.')
        ), wp_get_referer()));
    }
    exit;
}
?>