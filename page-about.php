<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <h1 style="text-align: center; margin-bottom: 40px;"><?php the_title(); ?></h1>
            
            <!-- Mission Statement -->
            <div style="text-align: center; margin-bottom: 60px;">
                <h2 style="font-size: 2rem; margin-bottom: 20px;">My Mission</h2>
                <p style="font-size: 1.3rem; font-style: italic; color: #2c5530;">
                    I help small businesses run smarter with software solutions that save time, cut costs, and eliminate stress.
                </p>
            </div>
            
            <!-- My Story -->
            <div style="margin-bottom: 60px;">
                <h2>My Story</h2>
                
                <div style="font-size: 1.1rem; line-height: 1.8;">
                    <p>After years of working with businesses of all sizes, I discovered that small business owners spend way too much time on repetitive tasks that could easily be automated. Whether it's manually creating invoices, copying data between spreadsheets, or following up with customers, these tasks eat away at the time you could be spending growing your business.</p>
                    <p>That's why I started GroundWorks Development. I believe every business, no matter how small, deserves access to smart automation and professional web presence without breaking the bank or dealing with complicated tech jargon.</p>
                </div>
            </div>
            
            <!-- Why Solo Works -->
            <div style="background: #f8f9fa; padding: 40px; border-radius: 10px; margin-bottom: 60px;">
                <h2>Why Solo Works Better</h2>
                
                <ul style="list-style: none; font-size: 1.1rem;">
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>→</strong> No middlemen, no project managers</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>→</strong> Lower overhead = better pricing</li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee;"><strong>→</strong> You talk directly to the builder</li>
                    <li style="padding: 10px 0;"><strong>→</strong> Faster decisions, faster results</li>
                </ul>
                
                <p style="margin-top: 30px; font-style: italic; text-align: center;">
                    Let's build something together — and keep it simple.
                </p>
            </div>
            
            <!-- CTA -->
            <div style="text-align: center; background: linear-gradient(135deg, #2c5530 0%, #4a7c59 100%); color: white; padding: 50px; border-radius: 10px;">
                <h3 style="color: white; margin-bottom: 20px;">Ready to Work Together?</h3>
                <p style="margin-bottom: 30px; font-size: 1.1rem;">
                    Let's discuss how I can help automate your business and save you time.
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Get In Touch</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>