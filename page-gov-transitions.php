<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="page-header">
            <h1>Helping Towns Transition to mandated .gov Websites</h1>
        </div>
        
        <!-- Main Service Section -->
        <div class="service-section">
            <div class="service-box">
                <h2>Professional .gov Websites for Small Rural Towns</h2>
                
                <div class="two-column">
                    <div>
                        <h3>The Challenge</h3>
                        <p>Small rural towns need official .gov websites to build trust with residents and comply with transparency requirements, but lack the technical expertise to navigate the complex transition process.</p>
                    </div>
                    
                    <div>
                        <h3>The Solution</h3>
                        <p>I handle the entire .gov transition process for your town - from registration to launch - ensuring a smooth, professional transition that your residents can trust.</p>
                    </div>
                </div>
                
                <div class="text-center">
                    <button onclick="openGovTransitionModal()" class="btn">Start Your Town's .gov Transition</button>
                </div>
            </div>
        </div>
        
        <!-- 6-Step Process -->
        <div class="service-section">
            <h2>Our Complete 6-Step Transition Process</h2>
            
            <div class="step-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h3>Login.gov Registration</h3>
                    <p>I help get a town representative registered on login.gov to begin the official .gov website request process. I can serve as your town's designated representative if needed.</p>
                </div>
                
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h3>.gov Domain Request</h3>
                    <p>Submit the official .gov website application for your town and manage the approval process. I handle all documentation and communications with the .gov registry.</p>
                </div>
                
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h3>Site Development & Training</h3>
                    <p>While waiting for approval, I replicate your current website for the new .gov domain and provide comprehensive training for updates. I can also handle all website management ongoing.</p>
                </div>
                
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h3>Hosting Setup</h3>
                    <p>Once your .gov domain is approved, we launch your new website. Choose between my managed hosting services or work with your town's preferred hosting provider.</p>
                </div>
                
                <div class="step-card">
                    <div class="step-number">5</div>
                    <h3>IT Integration</h3>
                    <p>Coordinate with your town's IT team (or provide IT services) to ensure smooth transition of email systems and website functionality to the new .gov infrastructure.</p>
                </div>
                
                <div class="step-card">
                    <div class="step-number">6</div>
                    <h3>Launch & Transition</h3>
                    <p>Provide official announcements for local papers, set up automatic redirects from your old website, and monitor the transition for several months until everything runs smoothly.</p>
                </div>
            </div>
        </div>
        
        <!-- Benefits Section -->
        <div class="service-section">
            <div class="benefits-section">
                <h2>Why Your Town Needs a .gov Website</h2>
                
                <div class="benefits-grid">
                    <div>
                        <h4>Enhanced Trust</h4>
                        <p>Citizens immediately recognize .gov as official government communication, building confidence in your town's online presence.</p>
                    </div>
                    
                    <div>
                        <h4>Security Standards</h4>
                        <p>.gov domains come with enhanced security measures and requirements that protect your town's data and residents' information.</p>
                    </div>
                    
                    <div>
                        <h4>Professional Image</h4>
                        <p>A .gov website demonstrates that your town is modern, professional, and committed to transparent communication.</p>
                    </div>
                    
                    <div>
                        <h4>Compliance Ready</h4>
                        <p>Meet federal and state requirements for government transparency and digital accessibility standards.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="cta-section">
            <h2>Ready to Get Your Town's Official .gov Website?</h2>
            <p>Let's discuss your town's needs and start the transition to a professional, secure .gov website that your residents can trust.</p>
            <button onclick="openGovTransitionModal()" class="btn">Schedule Your Free .gov Consultation</button>
        </div>
    </div>
</section>

<style>
@media (max-width: 768px) {
    .section div[style*="grid-template-columns: 1fr 1fr"] {
        display: block !important;
    }
    
    .section div[style*="grid-template-columns: 1fr 1fr"] > div:first-child {
        margin-bottom: 30px;
    }
    
    .section div[style*="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr))"] {
        grid-template-columns: 1fr !important;
    }
    
    .section div[style*="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr))"] {
        grid-template-columns: 1fr !important;
    }
}
</style>

<!-- Gov Transition Form Modal -->
<div id="govTransitionModal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Start Your Town's .gov Transition</h3>
            <button onclick="closeGovTransitionModal()" class="modal-close">&times;</button>
        </div>
        
        <div class="modal-body">
            <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                <div class="success-message">
                    <p>Thank you! Your .gov transition inquiry has been submitted. We'll contact you within 24 hours to discuss your town's needs.</p>
                </div>
            <?php elseif (isset($_GET['error'])): ?>
                <div class="error-message">
                    <p>There was an error submitting your form. Please try again.</p>
                </div>
            <?php else: ?>
                <form action="<?php echo admin_url('admin-post.php'); ?>" method="POST" class="gov-transition-form">
                    <input type="hidden" name="action" value="gov_transition_form_submission">
                    <?php wp_nonce_field('gov_transition_form_nonce', 'gov_transition_nonce'); ?>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="town_name">Town Name *</label>
                            <input type="text" id="town_name" name="town_name" required>
                        </div>
                        
                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="contact_name">Your Name *</label>
                            <input type="text" id="contact_name" name="contact_name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact_email">Your Email *</label>
                            <input type="email" id="contact_email" name="contact_email" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact_phone">Your Phone</label>
                            <input type="tel" id="contact_phone" name="contact_phone">
                        </div>
                        
                        <div class="form-group">
                            <label for="town_website">Current Town Website</label>
                            <input type="url" id="town_website" name="town_website" placeholder="https://">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="additional_info">Additional Information</label>
                        <textarea id="additional_info" name="additional_info" rows="3" placeholder="Tell us about your current website situation, timeline, or any specific requirements..."></textarea>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn">Get Started with .gov Transition</button>
                        <button type="button" onclick="closeGovTransitionModal()" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.modal-content {
    background: white;
    border-radius: 15px;
    max-width: 600px;
    width: 100%;
    max-height: 90vh;
    overflow-y: auto;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 30px 20px;
    border-bottom: 1px solid #eee;
}

.modal-header h3 {
    margin: 0;
    color: #1e293b;
    font-size: 1.5rem;
}

.modal-close {
    background: none;
    border: none;
    font-size: 2rem;
    color: #999;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-close:hover {
    color: #666;
}

.modal-body {
    padding: 30px;
}

.gov-transition-form .form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.gov-transition-form .form-group {
    margin-bottom: 20px;
}

.gov-transition-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.gov-transition-form input,
.gov-transition-form select,
.gov-transition-form textarea {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e1e5e9;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.gov-transition-form input:focus,
.gov-transition-form select:focus,
.gov-transition-form textarea:focus {
    outline: none;
    border-color: #1e293b;
}

.gov-transition-form textarea {
    resize: vertical;
    min-height: 100px;
}

.form-actions {
    display: flex;
    gap: 15px;
    margin-top: 30px;
    justify-content: center;
}

.form-actions .btn {
    margin: 0;
}

.success-message,
.error-message {
    padding: 20px;
    border-radius: 8px;
    text-align: center;
}

.success-message {
    background: #d4edda;
    border: 1px solid #c3e6cb;
    color: #155724;
}

.error-message {
    background: #f8d7da;
    border: 1px solid #f5c6cb;
    color: #721c24;
}

@media (max-width: 768px) {
    .modal-content {
        margin: 10px;
        max-height: 95vh;
    }
    
    .modal-header {
        padding: 20px;
    }
    
    .modal-body {
        padding: 20px;
    }
    
    .gov-transition-form .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .form-actions .btn {
        width: 100%;
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

// Only auto-open modal if there's a success/error message AND it's a form submission
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    if ((urlParams.get('success') || urlParams.get('error')) && urlParams.get('form_submitted')) {
        openGovTransitionModal();
    }
});
</script>

<?php get_footer(); ?>