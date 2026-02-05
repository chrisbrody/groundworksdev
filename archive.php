<?php get_header(); ?>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <h1>Blog</h1>
            <p class="hero-copy">Insights on business automation, process optimization, and operational infrastructure.</p>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 32px;">
                <?php while (have_posts()) : the_post(); ?>
                    <div style="background: var(--bg-card); border: 1px solid var(--border-color); border-radius: 12px; padding: 24px; display: flex; flex-direction: column;">
                        <div style="margin-bottom: 16px;">
                            <?php
                            $categories = get_the_category();
                            if ($categories) {
                                echo '<span style="background: var(--bg-tertiary); padding: 4px 8px; border-radius: 4px; font-size: 0.75rem; display: inline-block; margin-right: 8px;">' . esc_html($categories[0]->name) . '</span>';
                            }
                            ?>
                        </div>

                        <h2 style="margin: 0 0 12px; font-size: 1.25rem;"><a href="<?php the_permalink(); ?>" style="color: var(--text-primary); text-decoration: none;"><?php the_title(); ?></a></h2>

                        <p style="color: var(--text-secondary); margin: 0 0 16px; flex: 1;"><?php echo wp_trim_words(strip_tags(get_the_content()), 20); ?></p>

                        <a href="<?php the_permalink(); ?>" style="color: var(--accent-orange); text-decoration: none;">Read Article →</a>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p style="text-align: center; padding: 60px 20px; color: var(--text-secondary);">No blog posts found.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
