<?php get_header(); ?>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <span class="label">Results</span>
            <h1>Case Studies</h1>
            <p class="hero-copy">Our work speaks through results—hours saved, revenue earned, and stress reduced. Here's how we've helped businesses like yours.</p>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="case-studies-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="case-study-card">
                        <div class="case-study-header">
                            <span class="label">
                                <?php
                                $client_type = get_post_meta(get_the_ID(), 'client_type', true);
                                echo $client_type ? esc_html($client_type) : 'Case Study';
                                ?>
                            </span>
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>

                        <div class="case-study-body">
                            <div class="case-study-section">
                                <h4>Challenge</h4>
                                <p>
                                    <?php
                                    $challenge = get_post_meta(get_the_ID(), 'challenge', true);
                                    echo $challenge ? esc_html(wp_trim_words($challenge, 25)) : 'Manual processes were consuming valuable time and resources...';
                                    ?>
                                </p>
                            </div>

                            <div class="case-study-section">
                                <h4>Result</h4>
                                <p class="result-text">
                                    <?php
                                    $result = get_post_meta(get_the_ID(), 'result', true);
                                    echo $result ? esc_html(wp_trim_words($result, 20)) : 'Significant time and cost savings achieved...';
                                    ?>
                                </p>
                            </div>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="btn btn-ghost">
                            Read Full Case Study
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </a>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="pagination-wrapper text-center mt-80">
                <?php
                echo paginate_links(array(
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ));
                ?>
            </div>
        <?php else : ?>
            <div class="no-results-box">
                <div class="no-results-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="12" y1="18" x2="12" y2="12"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>
                </div>
                <h3>No Case Studies Yet</h3>
                <p>We're working on documenting our client success stories. Check back soon to see how we've helped businesses like yours.</p>
                <a href="<?php echo home_url(); ?>" class="btn btn-secondary" style="margin-top: 24px;">Back to Home</a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section section">
    <div class="container">
        <div class="text-center" style="max-width: 700px; margin: 0 auto;">
            <span class="label">Your Turn</span>
            <h2>Want to Be Our Next Success Story?</h2>
            <p>Let's discuss how we can help automate your business and deliver similar results. Start with a free efficiency assessment.</p>
            <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="btn btn-primary" style="margin-top: 32px;">
                Start Your Project
            </a>
        </div>
    </div>
</section>

<style>
    .case-studies-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 32px;
    }

    .case-study-card {
        background: var(--bg-card, #0d0d0d);
        border: 1px solid var(--border-color, #1a1a1a);
        border-radius: 12px;
        padding: 40px;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .case-study-card:hover {
        border-color: var(--border-hover, #2a2a2a);
        transform: translateY(-4px);
    }

    .case-study-header {
        margin-bottom: 24px;
    }

    .case-study-header h3 {
        font-size: 1.5rem;
        margin-bottom: 0;
    }

    .case-study-header h3 a {
        color: var(--text-primary, #EDEDED);
        text-decoration: none;
        transition: color 0.15s ease;
    }

    .case-study-header h3 a:hover {
        color: var(--accent-orange, #FF5C00);
    }

    .case-study-body {
        flex: 1;
        margin-bottom: 24px;
    }

    .case-study-section {
        margin-bottom: 20px;
    }

    .case-study-section h4 {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        color: var(--text-muted, #666666);
        margin-bottom: 8px;
    }

    .case-study-section p {
        font-size: 0.9375rem;
        color: var(--text-secondary, #a0a0a0);
        margin: 0;
        line-height: 1.6;
    }

    .case-study-section .result-text {
        color: var(--accent-blue, #0070FF);
        font-weight: 500;
    }

    .no-results-box {
        background: var(--bg-card, #0d0d0d);
        border: 1px solid var(--border-color, #1a1a1a);
        border-radius: 12px;
        padding: 80px 40px;
        text-align: center;
        max-width: 600px;
        margin: 0 auto;
    }

    .no-results-icon {
        color: var(--text-muted, #666666);
        margin-bottom: 24px;
    }

    .no-results-box h3 {
        font-size: 1.5rem;
        margin-bottom: 16px;
        color: var(--text-primary, #EDEDED);
    }

    .no-results-box p {
        color: var(--text-secondary, #a0a0a0);
        max-width: 400px;
        margin: 0 auto;
    }

    .pagination-wrapper a,
    .pagination-wrapper span {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.875rem;
        color: var(--text-secondary, #a0a0a0);
        text-decoration: none;
        padding: 8px 16px;
        margin: 0 4px;
        border: 1px solid var(--border-color, #1a1a1a);
        border-radius: 4px;
        transition: all 0.3s ease;
    }

    .pagination-wrapper a:hover {
        border-color: var(--accent-orange, #FF5C00);
        color: var(--accent-orange, #FF5C00);
    }

    .pagination-wrapper .current {
        background: var(--accent-orange, #FF5C00);
        border-color: var(--accent-orange, #FF5C00);
        color: var(--bg-primary, #050505);
    }

    @media (max-width: 768px) {
        .case-studies-grid {
            grid-template-columns: 1fr;
        }

        .case-study-card {
            padding: 32px;
        }

        .no-results-box {
            padding: 60px 24px;
        }
    }
</style>

<?php get_footer(); ?>
