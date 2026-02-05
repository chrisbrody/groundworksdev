<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts: Inter + JetBrains Mono -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- JSON-LD: WebSite Schema (all pages) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "GroundWorks Development",
        "alternateName": "GroundWorks",
        "url": "<?php echo home_url(); ?>",
        "description": "Custom business automation systems that eliminate manual processes and give business owners back 10-20 hours per week.",
        "publisher": {
            "@type": "Organization",
            "name": "GroundWorks Development"
        }
    }
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Custom Cursor -->
<div class="custom-cursor"></div>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <a href="<?php echo home_url(); ?>" class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span>GROUNDWORKS</span>
                <?php endif; ?>
            </a>

            <nav class="main-nav" id="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => function() {
                        echo '<ul class="nav-menu">';
                        echo '<li><a href="' . home_url() . '">Home</a></li>';
                        echo '<li><a href="' . get_permalink(get_page_by_path('services')) . '">Services</a></li>';
                        echo '<li><a href="' . get_post_type_archive_link('case_study') . '">Case Studies</a></li>';
                        echo '<li><a href="' . get_permalink(get_page_by_path('faq')) . '">FAQ</a></li>';
                        $blog_page_id = get_option('page_for_posts');
                        $blog_url = $blog_page_id ? get_permalink($blog_page_id) : home_url('/blog/');
                        echo '<li><a href="' . $blog_url . '">Blog</a></li>';
                        echo '<li><a href="' . get_permalink(get_page_by_path('contact')) . '">Contact</a></li>';
                        echo '</ul>';
                    }
                ));
                ?>
            </nav>

            <div class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>

<main>
