<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="page-header">
            <h1>Case Studies</h1>
            <p>
                <?php 
                // ACF: Case Studies Archive Intro
                $archive_intro = get_field('case_studies_intro', 'option');
                echo $archive_intro ? $archive_intro : 'My work speaks through results — hours saved, revenue earned, and stress reduced.';
                ?>
            </p>
        </div>
        
        <div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="case-study">
                        <div class="two-column">
                            <div>
                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <p>
                                    <?php 
                                    // ACF: Client Type/Industry
                                    $client_type = get_field('client_type');
                                    echo $client_type ? $client_type : 'Small Business';
                                    ?>
                                </p>
                            </div>
                            
                            <div>
                                <div>
                                    <span class="label">Challenge:</span>
                                    <p>
                                        <?php 
                                        // ACF: Challenge (excerpt)
                                        $challenge = get_field('challenge');
                                        echo $challenge ? wp_trim_words($challenge, 20) : 'Challenge description...';
                                        ?>
                                    </p>
                                </div>
                                
                                <div>
                                    <span class="label">Result:</span>
                                    <p>
                                        <?php 
                                        // ACF: Result (excerpt)
                                        $result = get_field('result');
                                        echo $result ? wp_trim_words($result, 15) : 'Quantified impact...';
                                        ?>
                                    </p>
                                </div>
                                
                                <a href="<?php the_permalink(); ?>">
                                    Read Full Case Study →
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
                
                <div class="text-center">
                    <?php
                    echo paginate_links(array(
                        'prev_text' => '← Previous',
                        'next_text' => 'Next →',
                    ));
                    ?>
                </div>
            <?php else : ?>
                <p>
                    No case studies available yet. Check back soon!
                </p>
            <?php endif; ?>
        </div>
        
        <!-- CTA -->
        <div class="cta-section">
            <h2>Want to Be My Next Success Story?</h2>
            <p>
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