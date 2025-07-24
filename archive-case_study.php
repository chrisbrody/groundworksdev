<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div style="text-align: center; margin-bottom: 60px;">
            <h1>Case Studies</h1>
            <p style="font-size: 1.2rem; color: #666; max-width: 600px; margin: 20px auto 0;">
                <?php 
                // ACF: Case Studies Archive Intro
                $archive_intro = get_field('case_studies_intro', 'option');
                echo $archive_intro ? $archive_intro : 'My work speaks through results — hours saved, revenue earned, and stress reduced.';
                ?>
            </p>
        </div>
        
        <div style="max-width: 900px; margin: 0 auto;">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="case-study">
                        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px; align-items: start;">
                            <div>
                                <h3 style="margin-bottom: 10px;">
                                    <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #2c5530;">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <p style="color: #666; font-size: 0.9rem; margin-bottom: 15px;">
                                    <?php 
                                    // ACF: Client Type/Industry
                                    $client_type = get_field('client_type');
                                    echo $client_type ? $client_type : 'Small Business';
                                    ?>
                                </p>
                            </div>
                            
                            <div>
                                <div style="margin-bottom: 15px;">
                                    <span class="label">Challenge:</span>
                                    <p style="margin: 5px 0;">
                                        <?php 
                                        // ACF: Challenge (excerpt)
                                        $challenge = get_field('challenge');
                                        echo $challenge ? wp_trim_words($challenge, 20) : 'Challenge description...';
                                        ?>
                                    </p>
                                </div>
                                
                                <div style="margin-bottom: 15px;">
                                    <span class="label">Result:</span>
                                    <p style="margin: 5px 0; color: #2c5530; font-weight: 600;">
                                        <?php 
                                        // ACF: Result (excerpt)
                                        $result = get_field('result');
                                        echo $result ? wp_trim_words($result, 15) : 'Quantified impact...';
                                        ?>
                                    </p>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>" style="color: #ff6b35; text-decoration: none; font-weight: 600;">
                                    Read Full Case Study →
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
                
                <div style="text-align: center; margin-top: 60px;">
                    <?php
                    echo paginate_links(array(
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p style="text-align: center; font-size: 1.1rem; color: #666;">
                    No case studies available yet. Check back soon!
                </p>
            <?php endif; ?>
        </div>
        
        <!-- CTA -->
        <div style="text-align: center; margin-top: 80px; background: linear-gradient(135deg, #2c5530 0%, #4a7c59 100%); color: white; padding: 50px; border-radius: 15px;">
            <h2 style="color: white; margin-bottom: 20px;">Want to Be My Next Success Story?</h2>
            <p style="margin-bottom: 30px; font-size: 1.1rem;">
                Let's discuss how I can help automate your business and deliver similar results.
            </p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn">Start Your Project</a>
        </div>
    </div>
</section>

<style>
@media (max-width: 768px) {
    .case-study div[style*="grid-template-columns"] {
        display: block !important;
    }
    
    .case-study div[style*="grid-template-columns"] > div:first-child {
        margin-bottom: 20px;
    }
}
</style>

<?php get_footer(); ?>