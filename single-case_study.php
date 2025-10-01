<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="service-section">
            <div class="text-center mb-60">
                <a href="<?php echo get_post_type_archive_link('case_study'); ?>">
                    ← Back to Case Studies
                </a>
            </div>
            
            <article class="service-box">
                <header class="text-center">
                    <h1><?php the_title(); ?></h1>
                    <p><?php 
                        $client_type = get_field('client_type');
                        echo $client_type ? $client_type : 'Small Business';
                    ?></p>
                </header>
                
                <div class="mt-40">
                    <!-- Challenge -->
                    <div class="service-section">
                        <h2>The Challenge</h2>
                        <div>
                            <?php 
                            $challenge = get_field('challenge');
                            if ($challenge) {
                                // Convert markdown-style formatting to HTML
                                $challenge = preg_replace('/^\*\*(.*?)\*\*$/m', '<h4>$1</h4>', $challenge); // Convert **Headers** to h4
                                $challenge = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $challenge); // Convert **bold** to strong
                                
                                // Use wp_kses to allow specific HTML tags and output safely
                                $allowed_html = array(
                                    'h4' => array(),
                                    'strong' => array(),
                                    'p' => array(),
                                    'br' => array(),
                                    'ul' => array(),
                                    'ol' => array(),
                                    'li' => array(),
                                    'em' => array()
                                );
                                
                                echo wp_kses(wpautop($challenge), $allowed_html);
                            } else {
                                the_content();
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Solution -->
                    <div class="service-section">
                        <h2>The Solution</h2>
                        <div>
                            <?php 
                            $solution = get_field('solution');
                            if ($solution) {
                                // Convert markdown-style formatting to HTML
                                $solution = preg_replace('/^\*\*(.*?)\*\*$/m', '<h4>$1</h4>', $solution); // Convert **Headers** to h4
                                $solution = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $solution); // Convert **bold** to strong
                                
                                // Use wp_kses to allow specific HTML tags and output safely
                                $allowed_html = array(
                                    'h4' => array(),
                                    'strong' => array(),
                                    'p' => array(),
                                    'br' => array(),
                                    'ul' => array(),
                                    'ol' => array(),
                                    'li' => array(),
                                    'em' => array()
                                );
                                
                                echo wp_kses(wpautop($solution), $allowed_html);
                            } else {
                                echo '<p>Solution details will be available when ACF fields are configured or content is added.</p>';
                            }
                            ?>
                        </div>
                    </div>
                    
                    <!-- Result -->
                    <div class="service-section">
                        <h2>The Result</h2>
                        <div>
                            <?php 
                            $result = get_field('result');
                            if ($result) {
                                // Convert markdown-style formatting to HTML
                                $result = preg_replace('/^\*\*(.*?)\*\*$/m', '<h4>$1</h4>', $result); // Convert **Headers** to h4
                                $result = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $result); // Convert **bold** to strong
                                
                                // Use wp_kses to allow specific HTML tags and output safely
                                $allowed_html = array(
                                    'h4' => array(),
                                    'strong' => array(),
                                    'p' => array(),
                                    'br' => array(),
                                    'ul' => array(),
                                    'ol' => array(),
                                    'li' => array(),
                                    'em' => array()
                                );
                                
                                echo wp_kses(wpautop($result), $allowed_html);
                            } else {
                                echo '<p>Results and impact will be displayed when ACF fields are configured or content is added.</p>';
                            }
                            ?>
                        </div>
                        
                        <?php 
                        // Display Result Metrics if available
                        $result_metrics = get_field('result_metrics');
                        if ($result_metrics) : ?>
                            <div class="mt-40">
                                <h3>Key Performance Metrics</h3>
                                <div class="feature-grid">
                                    <?php 
                                    $metrics = explode("\n", $result_metrics);
                                    foreach($metrics as $metric) {
                                        if (trim($metric)) {
                                            echo '<div class="feature-card"><p>' . trim($metric) . '</p></div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                </div>
                
                <!-- Technologies Used -->
                <?php 
                $technologies = get_field('technologies_used');
                if ($technologies) : ?>
                    <div class="service-section">
                        <h2>Technologies Used</h2>
                        <div class="checkmark-grid">
                            <div>
                                <?php 
                                $tech_list = explode(',', $technologies);
                                foreach($tech_list as $tech) {
                                    if (trim($tech)) {
                                        echo '<div class="checkmark-item"><span>⚡</span><span>' . trim($tech) . '</span></div>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Client Testimonial -->
                <?php 
                $client_quote = get_field('client_quote');
                $client_name = get_field('client_name');
                if ($client_quote) : ?>
                    <div class="service-section">
                        <div class="benefits-section text-center">
                            <h3>Client Testimonial</h3>
                            <blockquote style="font-style: italic; font-size: 1.2rem; color: #475569; margin: 30px 0;">
                                "<?php echo esc_html($client_quote); ?>"
                            </blockquote>
                            <?php if ($client_name) : ?>
                                <p style="font-weight: 600; color: #1e293b;">— <?php echo esc_html($client_name); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                
                <!-- Navigation -->
                <div class="two-column text-center mt-40">
                    <div>
                        <?php $prev_post = get_previous_post(); ?>
                        <?php if ($prev_post) : ?>
                            <a href="<?php echo get_permalink($prev_post); ?>">
                                ← Previous Case Study
                            </a>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php $next_post = get_next_post(); ?>
                        <?php if ($next_post) : ?>
                            <a href="<?php echo get_permalink($next_post); ?>">
                                Next Case Study →
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        </div>
        
        <!-- CTA -->
        <div class="cta-section">
            <h2>Interested in Similar Results?</h2>
            <p>
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