<?php get_header(); ?>

<section class="hero" style="min-height: auto; padding: 160px 0 80px;">
    <div class="container">
        <div class="hero-content" style="max-width: 800px;">
            <h1><?php wp_title(); ?></h1>
        </div>
    </div>
</section>

<section class="section" style="padding-top: 0;">
    <div class="container">
        <div class="content-area">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post">
                        <h2><?php the_title(); ?></h2>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No content found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>