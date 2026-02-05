<?php get_header(); ?>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content reveal" style="max-width: 700px;">
            <span class="label">Get In Touch</span>
            <h1>Ready to Run Smarter?</h1>
            <p class="hero-copy">Have a project in mind, or just want to see what's possible? Let's connect and find the right fit for your business.</p>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="cta-container" style="gap: 60px;">
            <div class="diagnostic-form reveal">
                <form class="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="contact_form_submission">
                    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>

                    <div class="form-input-group">
                        <label for="contact_name">Your Name *</label>
                        <input type="text" id="contact_name" name="contact_name" placeholder="John Smith" required>
                    </div>

                    <div class="form-input-group">
                        <label for="contact_email">Email Address *</label>
                        <input type="email" id="contact_email" name="contact_email" placeholder="john@company.com" required>
                    </div>

                    <div class="form-input-group">
                        <label for="business_name">Business Name</label>
                        <input type="text" id="business_name" name="business_name" placeholder="Your Company">
                    </div>

                    <div class="form-input-group">
                        <label for="contact_message">What would you like help with? *</label>
                        <textarea id="contact_message" name="contact_message" rows="5" placeholder="Tell us about your business and what you'd like to automate or improve..." required style="width: 100%; padding: 16px 20px; font-family: var(--font-body); font-size: 1rem; color: var(--text-primary); background: var(--bg-tertiary); border: 1px solid var(--border-color); border-radius: 8px; outline: none; transition: var(--transition-base); resize: vertical;"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                </form>
            </div>

            <div class="cta-content reveal reveal-delay-2">
                <h3 class="offer-title" style="margin-top: 0;">What Happens Next?</h3>

                <div class="next-steps-list">
                    <div class="next-step-item">
                        <div class="step-number-inline">1</div>
                        <div>
                            <h4>Quick Response</h4>
                            <p>We'll reply within 1 business day to acknowledge your message.</p>
                        </div>
                    </div>

                    <div class="next-step-item">
                        <div class="step-number-inline">2</div>
                        <div>
                            <h4>Discovery Call</h4>
                            <p>We'll schedule a 30-minute call to discuss your needs and goals.</p>
                        </div>
                    </div>

                    <div class="next-step-item">
                        <div class="step-number-inline">3</div>
                        <div>
                            <h4>Custom Proposal</h4>
                            <p>We'll create a tailored solution proposal for your specific situation.</p>
                        </div>
                    </div>
                </div>

                <p class="guarantee">No pressure, no pushy sales tactics. Just honest advice about what will work best for your business.</p>

                <div class="contact-direct" style="margin-top: 40px; padding-top: 40px; border-top: 1px solid var(--border-color);">
                    <p class="label" style="margin-bottom: 16px;">Prefer Email?</p>
                    <a href="mailto:contact@groundworksdev.com" class="btn btn-ghost" style="padding: 0;">
                        contact@groundworksdev.com
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .next-steps-list {
        margin: 32px 0;
    }

    .next-step-item {
        display: flex;
        gap: 20px;
        margin-bottom: 24px;
        align-items: flex-start;
    }

    .step-number-inline {
        width: 36px;
        height: 36px;
        min-width: 36px;
        background: var(--bg-tertiary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: var(--font-mono);
        font-size: 0.875rem;
        font-weight: 600;
        color: var(--accent-orange);
    }

    .next-step-item h4 {
        font-family: var(--font-mono);
        font-size: 1rem;
        color: var(--text-primary);
        margin-bottom: 4px;
    }

    .next-step-item p {
        font-size: 0.9375rem;
        color: var(--text-muted);
        margin: 0;
    }

    textarea:focus {
        border-color: var(--accent-orange);
    }

    @media (max-width: 992px) {
        .cta-container {
            grid-template-columns: 1fr !important;
        }

        .diagnostic-form {
            order: 2;
        }

        .cta-content {
            order: 1;
        }
    }
</style>

<?php get_footer(); ?>
