<?php get_header(); ?>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content" style="max-width: 900px;">
            <a href="<?php echo get_post_type_archive_link('case_study'); ?>" class="back-link">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Back to Case Studies
            </a>
            <span class="label" style="margin-top: 24px;">
                <?php
                $client_type = get_post_meta(get_the_ID(), 'client_type', true);
                echo $client_type ? esc_html($client_type) : 'Case Study';
                ?>
            </span>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <article class="case-study-single">
            <!-- Challenge Section -->
            <div class="case-study-block">
                <div class="block-header">
                    <span class="block-number">01</span>
                    <h2>The Challenge</h2>
                </div>
                <div class="block-content">
                    <?php
                    $challenge = get_post_meta(get_the_ID(), 'challenge', true);
                    if ($challenge) {
                        $challenge = preg_replace('/^\*\*(.*?)\*\*$/m', '<h4>$1</h4>', $challenge);
                        $challenge = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $challenge);

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

            <!-- Solution Section -->
            <div class="case-study-block">
                <div class="block-header">
                    <span class="block-number">02</span>
                    <h2>The Solution</h2>
                </div>
                <div class="block-content">
                    <?php
                    $solution = get_post_meta(get_the_ID(), 'solution', true);
                    if ($solution) {
                        $solution = preg_replace('/^\*\*(.*?)\*\*$/m', '<h4>$1</h4>', $solution);
                        $solution = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $solution);

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
                        echo '<p>Solution details will be available when content is added.</p>';
                    }
                    ?>
                </div>
            </div>

            <!-- Result Section -->
            <div class="case-study-block">
                <div class="block-header">
                    <span class="block-number">03</span>
                    <h2>The Result</h2>
                </div>
                <div class="block-content">
                    <?php
                    $result = get_post_meta(get_the_ID(), 'result', true);
                    if ($result) {
                        $result = preg_replace('/^\*\*(.*?)\*\*$/m', '<h4>$1</h4>', $result);
                        $result = preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', $result);

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
                        echo '<p>Results and impact will be displayed when content is added.</p>';
                    }
                    ?>

                    <?php
                    $result_metrics = get_post_meta(get_the_ID(), 'result_metrics', true);
                    if ($result_metrics) : ?>
                        <div class="metrics-grid">
                            <?php
                            $metrics = explode("\n", $result_metrics);
                            foreach($metrics as $metric) {
                                if (trim($metric)) {
                                    echo '<div class="metric-card"><p>' . esc_html(trim($metric)) . '</p></div>';
                                }
                            }
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Technologies Used -->
            <?php
            $technologies = get_post_meta(get_the_ID(), 'technologies_used', true);
            if ($technologies) : ?>
                <div class="case-study-block">
                    <div class="block-header">
                        <span class="block-number">04</span>
                        <h2>Technologies Used</h2>
                    </div>
                    <div class="block-content">
                        <div class="tech-grid">
                            <?php
                            $tech_list = explode(',', $technologies);
                            foreach($tech_list as $tech) {
                                if (trim($tech)) {
                                    echo '<div class="tech-item"><span class="tech-icon">&#9889;</span><span>' . esc_html(trim($tech)) . '</span></div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Client Testimonial -->
            <?php
            $client_quote = get_post_meta(get_the_ID(), 'client_quote', true);
            $client_name = get_post_meta(get_the_ID(), 'client_name', true);
            if ($client_quote) : ?>
                <div class="testimonial-block">
                    <blockquote>
                        "<?php echo esc_html($client_quote); ?>"
                    </blockquote>
                    <?php if ($client_name) : ?>
                        <cite>— <?php echo esc_html($client_name); ?></cite>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <!-- Navigation -->
            <div class="case-study-nav">
                <div class="nav-prev">
                    <?php $prev_post = get_previous_post(); ?>
                    <?php if ($prev_post) : ?>
                        <a href="<?php echo get_permalink($prev_post); ?>">
                            <span class="nav-label">Previous</span>
                            <span class="nav-title"><?php echo get_the_title($prev_post); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="nav-next">
                    <?php $next_post = get_next_post(); ?>
                    <?php if ($next_post) : ?>
                        <a href="<?php echo get_permalink($next_post); ?>">
                            <span class="nav-label">Next</span>
                            <span class="nav-title"><?php echo get_the_title($next_post); ?></span>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <div class="text-center" style="max-width: 700px; margin: 0 auto;">
            <span class="label">Your Turn</span>
            <h2>Interested in Similar Results?</h2>
            <p>Let's discuss how we can help automate your business processes and deliver measurable improvements.</p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-primary" style="margin-top: 32px;">
                Get Your Free Assessment
            </a>
        </div>
    </div>
</section>

<style>
    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.875rem;
        color: #666666;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .back-link:hover {
        color: #FF5C00;
    }

    .case-study-single {
        max-width: 900px;
        margin: 0 auto;
    }

    .case-study-block {
        background: var(--bg-card, #0d0d0d);
        border: 1px solid var(--border-color, #1a1a1a);
        border-radius: 12px;
        padding: 48px;
        margin-bottom: 32px;
    }

    .block-header {
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 32px;
        padding-bottom: 24px;
        border-bottom: 1px solid var(--border-color, #1a1a1a);
    }

    .block-number {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.75rem;
        font-weight: 600;
        color: #FF5C00;
        background: rgba(255, 92, 0, 0.1);
        padding: 8px 12px;
        border-radius: 4px;
    }

    .block-header h2 {
        margin: 0;
        font-size: 1.5rem;
        color: #EDEDED;
    }

    .block-content p {
        color: #a0a0a0;
        line-height: 1.8;
    }

    .block-content h4 {
        color: #EDEDED;
        font-family: 'JetBrains Mono', monospace;
        font-size: 1rem;
        margin: 32px 0 12px;
    }

    .block-content h4:first-child {
        margin-top: 0;
    }

    .block-content ul,
    .block-content ol {
        color: #a0a0a0;
        padding-left: 24px;
        margin: 16px 0;
    }

    .block-content li {
        margin-bottom: 8px;
        line-height: 1.7;
    }

    .metrics-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
        margin-top: 32px;
    }

    .metric-card {
        background: var(--bg-tertiary, #111111);
        border-radius: 8px;
        padding: 20px;
        text-align: center;
    }

    .metric-card p {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.9375rem;
        color: #FF5C00;
        margin: 0;
        font-weight: 600;
    }

    .tech-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .tech-item {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--bg-tertiary, #111111);
        padding: 10px 16px;
        border-radius: 6px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.875rem;
        color: #a0a0a0;
    }

    .tech-icon {
        color: #0070FF;
    }

    .testimonial-block {
        background: linear-gradient(135deg, rgba(0, 112, 255, 0.05) 0%, rgba(255, 92, 0, 0.05) 100%);
        border: 1px solid var(--border-color, #1a1a1a);
        border-radius: 12px;
        padding: 64px 48px;
        text-align: center;
        margin-bottom: 32px;
    }

    .testimonial-block blockquote {
        font-size: 1.5rem;
        color: #EDEDED;
        font-style: italic;
        line-height: 1.6;
        margin: 0 0 24px;
    }

    .testimonial-block cite {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.875rem;
        color: #FF5C00;
        font-style: normal;
    }

    .case-study-nav {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
        margin-top: 64px;
        padding-top: 48px;
        border-top: 1px solid var(--border-color, #1a1a1a);
    }

    .nav-prev,
    .nav-next {
        background: var(--bg-card, #0d0d0d);
        border: 1px solid var(--border-color, #1a1a1a);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .nav-prev:hover,
    .nav-next:hover {
        border-color: #2a2a2a;
    }

    .nav-prev a,
    .nav-next a {
        display: block;
        padding: 24px;
        text-decoration: none;
    }

    .nav-next {
        text-align: right;
    }

    .nav-label {
        display: block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: #666666;
        margin-bottom: 8px;
    }

    .nav-title {
        display: block;
        font-size: 1rem;
        color: #EDEDED;
        transition: all 0.3s ease;
    }

    .nav-prev a:hover .nav-title,
    .nav-next a:hover .nav-title {
        color: #FF5C00;
    }

    @media (max-width: 768px) {
        .case-study-block {
            padding: 32px;
        }

        .block-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .testimonial-block {
            padding: 40px 24px;
        }

        .testimonial-block blockquote {
            font-size: 1.25rem;
        }

        .case-study-nav {
            grid-template-columns: 1fr;
        }

        .nav-next {
            text-align: left;
        }
    }
</style>

<?php get_footer(); ?>
