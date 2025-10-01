<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <a href="<?php echo home_url(); ?>" class="logo">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    GroundWorks Development
                <?php endif; ?>
            </a>
            
            <nav class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => false
                ));
                ?>
            </nav>
        </div>
    </div>
</header>

<main>