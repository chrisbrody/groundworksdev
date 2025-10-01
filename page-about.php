<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="page-header">
            <h1><?php the_title(); ?></h1>
            
            <div class="service-section">
                <div class="service-box">
                    <!-- Owner Info -->
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/hero.jpg" alt="chris brody overlooking the canyon" style="width:100%; height:100%"> 
                        <h2>Chris Brody - Automation Tool Engineer</h2>
                    </div> 
                    <!-- Mission Statement -->
                    <h3>Mission</h3>
                    <p>
                        I help small businesses work smarter by building tools and websites that save time, reduce stress, and make day-to-day operations easier.
                    </p>

                    <!-- My Story -->
                    <h3>Story</h3>
                    
                    <div>
                        <p>I've spent years working with businesses of all shapes and sizes, and one thing always stood out: small business owners are constantly weighed down by repetitive tasks. Things like sending invoices, updating spreadsheets, or following up with customers take up hours every week — hours that could be spent growing your business or simply catching your breath.</p>
                        <p>I started GroundWorks Development because I believe small businesses deserve the same kind of smart solutions as larger companies — without the high price tag or the confusing tech talk. My goal is to make technology feel like a partner in your business, not another headache.</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class="cta-section">
                <h3>Let's Talk</h3>
                <p>
                    If you're ready to see how automation or a reliable website could save you time, I'd love to chat.
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Get In Touch</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>