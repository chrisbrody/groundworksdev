<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 40px;">
                <a href="<?php echo get_post_type_archive_link('case_study'); ?>" style="color: #666; text-decoration: none; font-size: 0.9rem;">
                    ← Back to Case Studies
                </a>
            </div>
            
            <article>
                <header style="text-align: center; margin-bottom: 50px;">
                    <h1 style="margin-bottom: 15px;"><?php the_title(); ?></h1>
                    <p style="color: #666; font-size: 1.1rem;">Small Business</p>
                </header>
                
                <div style="background: white; border: 1px solid #eee; border-radius: 15px; padding: 40px;">
                    <!-- Challenge -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="color: #ff6b35; margin-bottom: 20px; font-size: 1.5rem;">The Challenge</h2>
                        <div style="font-size: 1.1rem; line-height: 1.7;">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    
                    <!-- Solution -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="color: #2c5530; margin-bottom: 20px; font-size: 1.5rem;">The Solution</h2>
                        <div style="font-size: 1.1rem; line-height: 1.7;">
                            <p>Solution details would be described here using the post excerpt or additional content.</p>
                        </div>
                    </div>
                    
                    <!-- Result -->
                    <div style="margin-bottom: 40px;">
                        <h2 style="color: #2c5530; margin-bottom: 20px; font-size: 1.5rem;">The Result</h2>
                        <div style="background: linear-gradient(135deg, #2c5530 0%, #4a7c59 100%); color: white; padding: 30px; border-radius: 10px;">
                            <div style="font-size: 1.1rem; line-height: 1.7;">
                                <p>Results and impact would be quantified here with specific metrics and outcomes.</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <!-- Navigation -->
                <div style="display: flex; justify-content: space-between; margin-top: 40px; padding-top: 30px; border-top: 1px solid #eee;">
                    <div>
                        <?php $prev_post = get_previous_post(); ?>
                        <?php if ($prev_post) : ?>
                            <a href="<?php echo get_permalink($prev_post); ?>" style="color: #666; text-decoration: none;">
                                ← Previous Case Study
                            </a>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php $next_post = get_next_post(); ?>
                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>" style="color: #666; text-decoration: none;">
                                Next Case Study →
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        </div>
        
        <!-- CTA -->
        <div style="text-align: center; margin-top: 80px; background: #f8f9fa; padding: 50px; border-radius: 15px;">
            <h2 style="margin-bottom: 20px;">Interested in Similar Results?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #666;">
                Let's discuss how I can help automate your business processes and deliver measurable improvements.
            </p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Get Your Free Consultation</a>
        </div>
    </div>
</section>

<style>
@media (max-width: 768px) {
    .section div[style*="grid-template-columns"] {
        display: block !important;
    }
}
</style>

<?php get_footer(); ?>