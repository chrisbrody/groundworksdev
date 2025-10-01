<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>Stop Wasting Time on Tasks Your Computer Should Handle</h1>
        
        <p class="subheadline">I build custom automation tools and professional websites that actually work for your business — not against it.</p>
        
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Get Your Free Automation Audit</a>
        <a href="<?php echo get_permalink(get_page_by_path('services')); ?>" class="btn btn-secondary">See Real Examples</a>
    </div>
</section>

<!-- Services Summary -->
<section class="section">
    <div class="container">
        <h2>What If Your Biggest Time-Wasters Just... Disappeared?</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <h3>Smart Automation That Actually Works</h3>
                <p>Turn your biggest time-wasters into automated processes. While your competitors spend hours on spreadsheets and manual tasks, you'll be focusing on what actually grows your business.</p>
            </div>
            
            <div class="service-card">
                <h3>Professional Websites That Convert</h3>
                <p>Get a website that actually brings in customers, not just looks pretty. Everything included: design, hosting, updates, and maintenance — for one predictable monthly fee.</p>
            </div>
            
            <div class="service-card">
                <h3>Official .gov Sites for Small Towns</h3>
                <p>Finally get the credibility your town deserves. We handle the entire .gov transition process — paperwork, approvals, design, and launch. No bureaucratic headaches for you.</p>
                <a href="<?php echo get_permalink(get_page_by_path('gov-transitions')); ?>">See our proven 6-step process →</a>
            </div>
        </div>
    </div>
</section>

<!-- Automation Benefits -->
<section class="section">
    <div class="container">
        <h2>Real Businesses, Real Time Savings</h2>
        
        <ul class="benefits-list">
            <li>Local contractor saved 8 hours/week automating invoice generation and payment reminders</li>
            <li>Retail shop eliminated manual inventory tracking — now syncs automatically with their POS</li>
            <li>Service business automated customer follow-ups — increased repeat bookings by 40%</li>
            <li>Restaurant streamlined staff scheduling and reduced no-shows by 60%</li>
        </ul>
        
        <!-- TODO: Add testimonials -->
    </div>
</section>

<!-- How It Works -->
<section class="section how-it-works">
    <div class="container">
        <h2>Why Monthly Pricing Actually Saves You Money</h2>
        
        <ul>
            <li>No $5,000+ upfront website bill — start for less than your monthly phone plan</li>
            <li>No "surprise" hosting crashes or security breaches — we handle everything</li>
            <li>No paying extra for updates or changes — unlimited revisions included</li>
            <li>No wondering if your site is working — 24/7 monitoring and instant fixes</li>
        </ul>
        
        <div class="text-center">
            <p class="p-italic">
                One predictable monthly fee. Everything included. No surprises. Ever.
            </p>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="section">
    <div class="container text-center">
        <h2>Stop Doing Work Your Computer Should Handle</h2>
        
        <p>
            Book a free 30-minute audit call. We'll identify your biggest time-wasters and show you exactly how to automate them.
        </p>
        
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Get My Free Automation Audit</a>
    </div>
</section>

<?php get_footer(); ?>