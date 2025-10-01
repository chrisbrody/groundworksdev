<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="page-header">
            <h1><?php the_title(); ?></h1>
        </div>
        
        <!-- Service 1: Custom Business Automation -->
        <div class="service-section">
            <div class="service-box">
                <h2>Save Time and Money with Custom Automation</h2>
                
                <div class="two-column">
                    <div>
                        <h3>The Problem</h3>
                        <p>Manual processes waste time and money. You're spending hours on tasks that could be automated, taking you away from growing your business.</p>
                    </div>
                    
                    <div>
                        <h3>The Solution</h3>
                        <p>I analyze your workflows and build simple tools to automate repetitive tasks, giving you back hours every week.</p>
                    </div>
                </div>
                
                <h3>What I Can Automate:</h3>
                <div class="feature-grid">
                    <div class="feature-card"><h4>Invoicing & Reminders</h4><p>Auto-generate and send invoices, payment reminders</p></div>
                    <div class="feature-card"><h4>Sales Report Generation</h4><p>Compile weekly/monthly performance reports automatically</p></div>
                    <div class="feature-card"><h4>CRM/Email Sync</h4><p>Keep customer data synced across platforms</p></div>
                    <div class="feature-card"><h4>Job Scheduling</h4><p>Automated scheduling and calendar management</p></div>
                </div>
                
                <div class="text-center">
                    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Schedule Your Free Automation Audit</a>
                </div>
            </div>
        </div>
        
        <!-- Service 2: Websites for Small Businesses -->
        <div class="service-section">
            <div class="service-box">
                <h2>A Professional Website for a Simple Monthly Fee</h2>
                
                <div class="two-column">
                    <div>
                        <h3>The Problem</h3>
                        <p>High upfront costs, lack of tech skills, and outdated websites that don't represent your business properly.</p>
                    </div>
                    
                    <div>
                        <h3>The Solution</h3>
                        <p>One flat monthly plan that includes everything you need - no surprises, no technical headaches.</p>
                    </div>
                </div>
                
                <h3>Everything Included:</h3>
                <div class="checkmark-grid">
                    <div>
                        <div class="checkmark-item"><span>✓</span><span>Custom design</span></div>
                        <div class="checkmark-item"><span>✓</span><span>Mobile responsive layout</span></div>
                        <div class="checkmark-item"><span>✓</span><span>Secure hosting + SSL</span></div>
                        <div class="checkmark-item"><span>✓</span><span>Maintenance and updates</span></div>
                        <div class="checkmark-item"><span>✓</span><span>Content updates</span></div>
                        <div class="checkmark-item"><span>✓</span><span>Technical support</span></div>
                    </div>
                </div>
                
                
                <div class="text-center">
                    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Discuss Details</a>
                </div>
            </div>
        </div>
        
        <!-- Service 3: Rural Town .gov Transitions -->
        <div class="service-section">
            <div class="service-box">
                <h2>Official .gov Websites for Rural Towns</h2>
                
                <div class="two-column">
                    <div>
                        <h3>The Challenge</h3>
                        <p>Small towns need official .gov websites for credibility and compliance, but the transition process is complex and technical.</p>
                    </div>
                    
                    <div>
                        <h3>The Solution</h3>
                        <p>I handle the entire .gov transition process - from registration to launch - ensuring a smooth, professional transition.</p>
                    </div>
                </div>
                
                <h3>Complete Transition Service:</h3>
                <div class="feature-grid">
                    <div class="feature-card"><h4>Login.gov Registration</h4><p>Handle official registration and documentation</p></div>
                    <div class="feature-card"><h4>.gov Domain Request</h4><p>Manage the entire approval process</p></div>
                    <div class="feature-card"><h4>Site Development</h4><p>Replicate and enhance your current website</p></div>
                    <div class="feature-card"><h4>Smooth Launch</h4><p>Complete transition with minimal disruption</p></div>
                </div>
                
                <div class="text-center">
                    <a href="<?php echo get_permalink(get_page_by_path('gov-transitions')); ?>" class="btn">Learn About My 6-Step Process</a>
                </div>
            </div>
        </div>
        
        <!-- Bottom CTA -->
        <div class="cta-section">
            <h2>Ready to Get Started?</h2>
            <p>Let's discuss which service is right for your business and how we can start saving you time immediately.</p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Book Your Free Consultation</a>
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
}
</style>

<?php get_footer(); ?>