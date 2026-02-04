<?php get_header(); ?>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content" style="max-width: 900px;">
            <span class="label">Civic Infrastructure</span>
            <h1>Helping Towns Transition to Official .gov Websites</h1>
            <p class="hero-copy">Small rural towns need official .gov websites to build trust with residents and comply with transparency requirements. We handle the entire transition process—from registration to launch.</p>
            <div class="hero-cta">
                <button onclick="openGovTransitionModal()" class="magnetic-btn">
                    <span class="btn btn-primary">Start Your Town's .gov Transition</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- 6-Step Process -->
<section class="section">
    <div class="container">
        <div class="section-header text-center" style="max-width: 700px; margin: 0 auto 64px;">
            <span class="label">The Process</span>
            <h2>Our Complete 6-Step Transition Process</h2>
            <p>We handle every aspect of the .gov transition, so your town can focus on serving residents.</p>
        </div>

        <div class="process-grid">
            <div class="process-card">
                <div class="process-number">01</div>
                <h3>Login.gov Registration</h3>
                <p>We help get a town representative registered on login.gov to begin the official .gov website request process. We can serve as your town's designated representative if needed.</p>
            </div>

            <div class="process-card">
                <div class="process-number">02</div>
                <h3>.gov Domain Request</h3>
                <p>Submit the official .gov website application for your town and manage the approval process. We handle all documentation and communications with the .gov registry.</p>
            </div>

            <div class="process-card">
                <div class="process-number">03</div>
                <h3>Site Development & Training</h3>
                <p>While waiting for approval, we replicate your current website for the new .gov domain and provide comprehensive training for updates. We can also handle all website management ongoing.</p>
            </div>

            <div class="process-card">
                <div class="process-number">04</div>
                <h3>Hosting Setup</h3>
                <p>Once your .gov domain is approved, we launch your new website. Choose between our managed hosting services or work with your town's preferred hosting provider.</p>
            </div>

            <div class="process-card">
                <div class="process-number">05</div>
                <h3>IT Integration</h3>
                <p>Coordinate with your town's IT team (or provide IT services) to ensure smooth transition of email systems and website functionality to the new .gov infrastructure.</p>
            </div>

            <div class="process-card">
                <div class="process-number">06</div>
                <h3>Launch & Transition</h3>
                <p>Provide official announcements for local papers, set up automatic redirects from your old website, and monitor the transition for several months until everything runs smoothly.</p>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="roi-section section">
    <div class="container">
        <div class="section-header text-center" style="max-width: 700px; margin: 0 auto 64px;">
            <span class="label">Why .gov Matters</span>
            <h2>Why Your Town Needs a .gov Website</h2>
        </div>

        <div class="benefits-bento">
            <div class="benefit-card">
                <div class="benefit-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <h3>Enhanced Trust</h3>
                <p>Citizens immediately recognize .gov as official government communication, building confidence in your town's online presence.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </div>
                <h3>Security Standards</h3>
                <p>.gov domains come with enhanced security measures and requirements that protect your town's data and residents' information.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <h3>Professional Image</h3>
                <p>A .gov website demonstrates that your town is modern, professional, and committed to transparent communication.</p>
            </div>

            <div class="benefit-card">
                <div class="benefit-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                </div>
                <h3>Compliance Ready</h3>
                <p>Meet federal and state requirements for government transparency and digital accessibility standards.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <div class="text-center" style="max-width: 700px; margin: 0 auto;">
            <span class="label">Get Started</span>
            <h2>Ready to Get Your Town's Official .gov Website?</h2>
            <p>Let's discuss your town's needs and start the transition to a professional, secure .gov website that your residents can trust.</p>
            <button onclick="openGovTransitionModal()" class="btn btn-primary" style="margin-top: 32px;">
                Schedule Your Free .gov Consultation
            </button>
        </div>
    </div>
</section>

<!-- Gov Transition Form Modal -->
<div id="govTransitionModal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <div>
                <span class="label">Get Started</span>
                <h3>Start Your Town's .gov Transition</h3>
            </div>
            <button onclick="closeGovTransitionModal()" class="modal-close" aria-label="Close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <div class="modal-body">
            <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                <div class="modal-success">
                    <div class="success-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <h4>Inquiry Submitted!</h4>
                    <p>Thank you! We'll contact you within 24 hours to discuss your town's .gov transition needs.</p>
                </div>
            <?php elseif (isset($_GET['error'])): ?>
                <div class="modal-error">
                    <p>There was an error submitting your form. Please try again.</p>
                </div>
            <?php else: ?>
                <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" class="gov-transition-form">
                    <input type="hidden" name="action" value="gov_transition_form_submission">
                    <?php wp_nonce_field('gov_transition_form_nonce', 'gov_transition_nonce'); ?>

                    <div class="form-row">
                        <div class="form-input-group">
                            <label for="town_name">Town Name *</label>
                            <input type="text" id="town_name" name="town_name" placeholder="e.g., Town of Springfield" required>
                        </div>

                        <div class="form-input-group">
                            <label for="town_size">Town Size</label>
                            <select id="town_size" name="town_size">
                                <option value="">Select size</option>
                                <option value="Under 500">Under 500 residents</option>
                                <option value="500-1000">500-1,000 residents</option>
                                <option value="1000-2500">1,000-2,500 residents</option>
                                <option value="2500-5000">2,500-5,000 residents</option>
                                <option value="Over 5000">Over 5,000 residents</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-input-group">
                            <label for="gov_contact_name">Your Name *</label>
                            <input type="text" id="gov_contact_name" name="contact_name" placeholder="John Smith" required>
                        </div>

                        <div class="form-input-group">
                            <label for="gov_contact_email">Your Email *</label>
                            <input type="email" id="gov_contact_email" name="contact_email" placeholder="john@townhall.org" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-input-group">
                            <label for="contact_phone">Your Phone</label>
                            <input type="tel" id="contact_phone" name="contact_phone" placeholder="(555) 123-4567">
                        </div>

                        <div class="form-input-group">
                            <label for="town_website">Current Town Website</label>
                            <input type="url" id="town_website" name="town_website" placeholder="https://townofspringfield.com">
                        </div>
                    </div>

                    <div class="form-input-group">
                        <label for="additional_info">Additional Information</label>
                        <textarea id="additional_info" name="additional_info" rows="3" placeholder="Tell us about your current website situation, timeline, or any specific requirements..."></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Get Started with .gov Transition</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
    .process-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
    }

    .process-card {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 40px;
        position: relative;
        transition: var(--transition-base);
    }

    .process-card:hover {
        border-color: var(--border-hover);
        transform: translateY(-4px);
    }

    .process-number {
        font-family: var(--font-mono);
        font-size: 0.75rem;
        font-weight: 700;
        color: var(--accent-orange);
        margin-bottom: 20px;
    }

    .process-card h3 {
        font-size: 1.25rem;
        margin-bottom: 16px;
    }

    .process-card p {
        color: var(--text-muted);
        font-size: 0.9375rem;
        margin: 0;
        line-height: 1.6;
    }

    .benefits-bento {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 24px;
    }

    .benefit-card {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        padding: 32px;
        transition: var(--transition-base);
    }

    .benefit-card:hover {
        border-color: var(--border-hover);
    }

    .benefit-icon {
        width: 48px;
        height: 48px;
        background: var(--bg-tertiary);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-blue);
        margin-bottom: 20px;
    }

    .benefit-card h3 {
        font-size: 1rem;
        margin-bottom: 12px;
    }

    .benefit-card p {
        color: var(--text-muted);
        font-size: 0.875rem;
        margin: 0;
        line-height: 1.6;
    }

    /* Modal Styles */
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        backdrop-filter: blur(8px);
    }

    .modal-content {
        background: var(--bg-card);
        border: 1px solid var(--border-color);
        border-radius: 12px;
        max-width: 600px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        padding: 32px 32px 24px;
        border-bottom: 1px solid var(--border-color);
    }

    .modal-header h3 {
        margin: 8px 0 0;
        font-size: 1.5rem;
    }

    .modal-close {
        background: none;
        border: none;
        color: var(--text-muted);
        cursor: pointer;
        padding: 4px;
        transition: var(--transition-base);
    }

    .modal-close:hover {
        color: var(--accent-orange);
    }

    .modal-body {
        padding: 32px;
    }

    .gov-transition-form .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .gov-transition-form select {
        width: 100%;
        padding: 16px 20px;
        font-family: var(--font-body);
        font-size: 1rem;
        color: var(--text-primary);
        background: var(--bg-tertiary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        outline: none;
        transition: var(--transition-base);
        cursor: pointer;
    }

    .gov-transition-form select:focus {
        border-color: var(--accent-orange);
    }

    .gov-transition-form textarea {
        width: 100%;
        padding: 16px 20px;
        font-family: var(--font-body);
        font-size: 1rem;
        color: var(--text-primary);
        background: var(--bg-tertiary);
        border: 1px solid var(--border-color);
        border-radius: 8px;
        outline: none;
        transition: var(--transition-base);
        resize: vertical;
    }

    .gov-transition-form textarea:focus {
        border-color: var(--accent-orange);
    }

    .form-actions {
        margin-top: 24px;
    }

    .form-actions .btn {
        width: 100%;
    }

    .modal-success {
        text-align: center;
        padding: 24px 0;
    }

    .success-icon {
        color: var(--accent-blue);
        margin-bottom: 24px;
    }

    .modal-success h4 {
        font-size: 1.5rem;
        margin-bottom: 12px;
    }

    .modal-success p {
        color: var(--text-secondary);
    }

    .modal-error {
        background: rgba(255, 92, 0, 0.1);
        border: 1px solid rgba(255, 92, 0, 0.3);
        border-radius: 8px;
        padding: 16px;
        text-align: center;
    }

    .modal-error p {
        color: var(--accent-orange);
        margin: 0;
    }

    @media (max-width: 992px) {
        .process-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .benefits-bento {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .process-grid {
            grid-template-columns: 1fr;
        }

        .benefits-bento {
            grid-template-columns: 1fr;
        }

        .modal-content {
            margin: 10px;
            max-height: 95vh;
        }

        .modal-header,
        .modal-body {
            padding: 24px;
        }

        .gov-transition-form .form-row {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
function openGovTransitionModal() {
    document.getElementById('govTransitionModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeGovTransitionModal() {
    document.getElementById('govTransitionModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('govTransitionModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeGovTransitionModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeGovTransitionModal();
    }
});

// Auto-open modal if there's a success/error message
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') || urlParams.get('error')) {
        openGovTransitionModal();
    }
});
</script>

<?php get_footer(); ?>
