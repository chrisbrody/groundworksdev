<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Websites and Automation for Small Business — All for a Simple Monthly Fee.</h1>
        
        <p class="subheadline">No big bill. No IT headaches. Just results.</p>
        
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Book a Free Discovery Call</a>
        <a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="btn btn-secondary">See What We Can Automate</a>
    </div>
</section>

<!-- Services Summary -->
<section class="section">
    <div class="container">
        <h2>Three Services. One Goal: Save You Time.</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <h3>Custom Business Automation</h3>
                <p>Stop doing repetitive tasks manually. I build simple software tools that handle invoicing, reports, customer follow-ups, and more — automatically.</p>
            </div>
            
            <div class="service-card">
                <h3>Monthly Website Service</h3>
                <p>Professional website design, hosting, updates, and maintenance — all for one simple monthly fee. No upfront costs, no surprise bills.</p>
            </div>
            
            <div class="service-card">
                <h3>Rural Town .gov Transitions</h3>
                <p>Complete .gov website transition service for small towns — from registration to launch. Build trust with official .gov credibility.</p>
                <a href="<?php echo get_permalink(get_page_by_path('gov-transitions')); ?>" style="color: #2c5530; text-decoration: underline; font-weight: 500;">Learn about our 6-step process →</a>
            </div>
        </div>
    </div>
</section>

<!-- Automation Benefits -->
<section class="section">
    <div class="container">
        <h2>What Can Be Automated?</h2>
        
        <ul class="benefits-list">
            <li>Automating customer follow-ups</li>
            <li>Syncing spreadsheets with live databases</li>
            <li>Auto-generating and sending invoices</li>
            <li>Compiling weekly performance reports</li>
        </ul>
        
        <div style="text-align: center; margin-top: 40px;">
            <p style="font-style: italic; font-size: 1.2rem; color: #666;">
                Think you're too small to automate? You're not.
            </p>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section how-it-works">
    <div class="container">
        <h2>How Our Monthly Service Works</h2>
        
        <ul>
            <li>Website design + development</li>
            <li>Secure hosting + SSL</li>
            <li>Unlimited updates</li>
            <li>Tech support + maintenance</li>
        </ul>
        
        <div style="text-align: center; margin-top: 40px;">
            <p style="font-style: italic; font-size: 1.1rem;">
                No big bill. No IT headaches. Just results.
            </p>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="section" style="background: #f8f9fa; text-align: center;">
    <div class="container">
        <h2>Ready to Work Smarter?</h2>
        
        <p style="font-size: 1.2rem; margin-bottom: 30px;">
            Let's talk about what we can automate in your business.
        </p>
        
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Let's Talk About Your Business</a>
    </div>
</section>

<?php get_footer(); ?>