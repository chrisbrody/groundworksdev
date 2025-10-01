<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>GroundWorks Development</h1>

        <p class="subheadline">Websites and Automation for Small Business</p>

        <p class="subheadline">At GroundWorks Development, we help small businesses and local organizations work smarter. We specialize in two areas: creating professional websites that are reliable and easy to manage, and building custom automation tools that take care of routine tasks in the background so you can focus on your work.</p>
    </div>
</section>

<!-- Services Summary -->
<section class="section">
    <div class="container">
        <h2>What If Your Biggest Time-Wasters Just... Disappeared?</h2>
        
        <div class="services-grid">
            <div class="service-card">
                <h3>Automation That Simplifies Your Day</h3>
                <p>Every business has those repetitive, time-consuming jobs — sending reminders, updating spreadsheets, tracking schedules. We design solutions that handle these tasks automatically, freeing up your time and reducing the chance of errors.</p>
            </div>

            <div class="service-card">
                <h3>Websites That Support Your Work</h3>
                <p>Your website should be more than a digital brochure. We build sites that are dependable, easy to update, and tailored to your needs. Hosting, security, and ongoing maintenance are included, so you don't have to worry about technical details.</p>
            </div>

            <div class="service-card">
                <h3>.gov Websites for Local Communities</h3>
                <p>For municipalities and small towns, we guide you through the transition to an official .gov website. From the paperwork to the design and launch, we make the process straightforward and manageable, helping your community build trust and credibility online.</p>
                <a href="<?php echo get_permalink(get_page_by_path('gov-transitions')); ?>">Learn more →</a>
            </div>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="section">
    <div class="container">
        <h2>Our Approach</h2>

        <p>We believe technology should work for you, not against you. That's why we take the time to understand your workflow and goals before recommending tools or building a site. The result is practical, sustainable solutions that save time and reduce frustration.</p>
    </div>
</section>

<!-- Final CTA -->
<section class="section">
    <div class="container text-center">
        <h2>Ready to Learn More?</h2>

        <p>
            We offer a complimentary consultation to help identify where automation and website improvements could make the biggest impact for you.
        </p>

        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Schedule a Consultation</a>
    </div>
</section>

<?php get_footer(); ?>