<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center;">
            <h1 style="margin-bottom: 30px;">Ready to Run Smarter?</h1>
            
            <p style="font-size: 1.2rem; color: #666; margin-bottom: 50px;">Let's talk about how I can help automate your business and save you time.</p>
        </div>
        
        <div style="max-width: 600px; margin: 0 auto;">
            <div style="background: white; border: 1px solid #eee; border-radius: 15px; padding: 50px;">
                
                <?php 
                // Display success message if form was submitted
                if (isset($_GET['success']) && $_GET['success'] == 'true') : ?>
                    <div style="background: #d4edda; color: #155724; padding: 20px; border-radius: 10px; margin-bottom: 30px; text-align: center;">
                        <h3 style="margin: 0 0 10px 0; color: #155724;">Message Sent Successfully!</h3>
                        <p style="margin: 0;">I'll reply within 1 business day to schedule your no-pressure discovery call.</p>
                    </div>
                <?php endif; ?>
                
                <?php 
                // Display error message if form submission failed
                if (isset($_GET['error']) && $_GET['error'] == 'true') : 
                    $error_message = isset($_GET['message']) ? urldecode($_GET['message']) : 'An error occurred. Please try again.';
                ?>
                    <div style="background: #f8d7da; color: #721c24; padding: 20px; border-radius: 10px; margin-bottom: 30px; text-align: center;">
                        <h3 style="margin: 0 0 10px 0; color: #721c24;">Error</h3>
                        <p style="margin: 0;"><?php echo esc_html($error_message); ?></p>
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
                    
                    <div style="text-align: center;">
                        <button type="submit" class="btn">Send Message</button>
                    </div>
                </form>
            </div>
            
            <!-- Next Steps -->
            <div style="background: #f8f9fa; padding: 40px; border-radius: 15px; margin-top: 40px; text-align: center;">
                <h3 style="margin-bottom: 20px; color: #2c5530;">What Happens Next?</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; margin-top: 30px;">
                    <div>
                        <div style="background: #2c5530; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-weight: bold;">1</div>
                        <h4 style="margin-bottom: 10px;">Quick Response</h4>
                        <p style="color: #666; font-size: 0.95rem;">I'll reply within 1 business day to acknowledge your message.</p>
                    </div>
                    
                    <div>
                        <div style="background: #2c5530; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-weight: bold;">2</div>
                        <h4 style="margin-bottom: 10px;">Discovery Call</h4>
                        <p style="color: #666; font-size: 0.95rem;">We'll schedule a 30-minute call to discuss your needs and goals.</p>
                    </div>
                    
                    <div>
                        <div style="background: #2c5530; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-weight: bold;">3</div>
                        <h4 style="margin-bottom: 10px;">Custom Proposal</h4>
                        <p style="color: #666; font-size: 0.95rem;">I'll create a tailored solution proposal for your specific situation.</p>
                    </div>
                </div>
                
                <p style="margin-top: 30px; font-style: italic; color: #666;">No pressure, no pushy sales tactics. Just honest advice about what will work best for your business.</p>
            </div>
            
            <!-- Alternative Contact Methods -->
            <div style="text-align: center; margin-top: 40px; padding: 30px; border-top: 1px solid #eee;">
                <h4 style="margin-bottom: 20px; color: #666;">Prefer to reach out directly?</h4>
                
                <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">
                    
                    <div>
                        <strong>Email:</strong><br>
                        <a href="mailto:contact@groundworksdev@gmail.com" style="color: #2c5530; text-decoration: none;">
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