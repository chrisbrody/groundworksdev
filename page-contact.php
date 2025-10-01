<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="contact-header">
            <h1>Ready to Run Smarter?</h1>
            
            <p>Have a project in mind, or just want to see what’s possible? Let’s connect and find the right fit for your business.</p>
        </div>
        
        <div class="contact-form-container">
            <div class="contact-form-box">
                
                <?php 
                // Display success message if form was submitted
                if (isset($_GET['success']) && $_GET['success'] == 'true') : ?>
                    <div class="success-message">
                        <h3>Message Sent Successfully!</h3>
                        <p>I'll reply within 1 business day to schedule your no-pressure discovery call.</p>
                    </div>
                <?php endif; ?>
                
                <?php 
                // Display error message if form submission failed
                if (isset($_GET['error']) && $_GET['error'] == 'true') : 
                    $error_message = isset($_GET['message']) ? urldecode($_GET['message']) : 'An error occurred. Please try again.';
                ?>
                    <div class="error-message">
                        <h3>Error</h3>
                        <p><?php echo esc_html($error_message); ?></p>
                    </div>
                <?php endif; ?>
                
                <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="contact_form_submission">
                    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                    
                    <div class="form-group">
                        <label for="contact_name">Your Name *</label>
                        <input type="text" id="contact_name" name="contact_name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact_email">Email Address *</label>
                        <input type="email" id="contact_email" name="contact_email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="business_name">Business Name</label>
                        <input type="text" id="business_name" name="business_name">
                    </div>
                    
                    <div class="form-group">
                        <label for="contact_message">What would you like help with? *</label>
                        <textarea id="contact_message" name="contact_message" placeholder="Tell me about your business and what you'd like to automate or improve..." required></textarea>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn">Send Message</button>
                    </div>
                </form>
            </div>
            
            <!-- Next Steps -->
            <div class="next-steps next-steps-flex">
                <h3>What Happens Next?</h3>
                
                <div class="steps-flex">
                    <div class="step-item">
                        <div class="step-number">1</div>
                        <h4>Quick Response</h4>
                        <p>I'll reply within 1 business day to acknowledge your message.</p>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">2</div>
                        <h4>Discovery Call</h4>
                        <p>We'll schedule a 30-minute call to discuss your needs and goals.</p>
                    </div>
                    
                    <div class="step-item">
                        <div class="step-number">3</div>
                        <h4>Custom Proposal</h4>
                        <p>I'll create a tailored solution proposal for your specific situation.</p>
                    </div>
                </div>
                
                <p class="p-italic">No pressure, no pushy sales tactics. Just honest advice about what will work best for your business.</p>
            </div>
            
            <!-- Alternative Contact Methods -->
            <div class="contact-methods">
                <h4>Prefer to reach out directly?</h4>
                
                <div class="contact-methods-grid">
                    
                    <div>
                        <strong>Email:</strong><br>
                        <a href="mailto:contact@groundworksdev@gmail.com">
                            contact@groundworksdev.com
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@media (max-width: 768px) {
    .section div[style*="grid-template-columns"] {
        display: block !important;
    }
    
    .section div[style*="grid-template-columns"] > div {
        margin-bottom: 30px;
    }
    
    .section div[style*="grid-template-columns"] > div:last-child {
        margin-bottom: 0;
    }
    
    .section div[style*="display: flex"] {
        display: block !important;
    }
    
    .section div[style*="display: flex"] > div {
        margin-bottom: 20px;
    }
}
</style>

<?php get_footer(); ?>