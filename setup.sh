#!/bin/bash

# GroundWorks WordPress Setup Script
# Run inside the WordPress container via:
#   docker compose exec wordpress bash /var/www/html/wp-content/themes/groundworksdev/setup.sh

# Wait for WordPress to be ready
sleep 5

# Install WP-CLI if not present
if [ ! -f /usr/local/bin/wp ]; then
    curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    mv wp-cli.phar /usr/local/bin/wp
fi

WP="wp --allow-root"

# Activate theme
$WP theme activate groundworksdev

# Create pages (skip if already exists)
echo "Creating pages..."
$WP post list --post_type=page --post_name=about --field=ID 2>/dev/null || \
    $WP post create --post_type=page --post_title="About" --post_name="about" --post_status="publish"

$WP post list --post_type=page --post_name=services --field=ID 2>/dev/null || \
    $WP post create --post_type=page --post_title="Services" --post_name="services" --post_status="publish"

$WP post list --post_type=page --post_name=contact --field=ID 2>/dev/null || \
    $WP post create --post_type=page --post_title="Contact" --post_name="contact" --post_status="publish"

$WP post list --post_type=page --post_name=gov-transitions --field=ID 2>/dev/null || \
    $WP post create --post_type=page --post_title="Gov Transitions" --post_name="gov-transitions" --post_status="publish"

$WP post list --post_type=page --post_name=faq --field=ID 2>/dev/null || \
    $WP post create --post_type=page --post_title="FAQ" --post_name="faq" --post_status="publish"

# Create Blog page (used as the posts archive)
BLOG_ID=$($WP post list --post_type=page --post_name=blog --field=ID 2>/dev/null)
if [ -z "$BLOG_ID" ]; then
    BLOG_ID=$($WP post create --post_type=page --post_title="Blog" --post_name="blog" --post_status="publish" --porcelain)
    echo "Created Blog page (ID: $BLOG_ID)"
else
    echo "Blog page already exists (ID: $BLOG_ID)"
fi

# Create/get Home page
HOME_ID=$($WP post list --post_type=page --post_name=home --field=ID 2>/dev/null)
if [ -z "$HOME_ID" ]; then
    HOME_ID=$($WP post create --post_type=page --post_title="Home" --post_name="home" --post_status="publish" --porcelain)
    echo "Created Home page (ID: $HOME_ID)"
else
    echo "Home page already exists (ID: $HOME_ID)"
fi

# Set front page and posts page
$WP option update show_on_front page
$WP option update page_on_front $HOME_ID
$WP option update page_for_posts $BLOG_ID

echo ""
echo "Importing blog posts..."
$WP eval-file /var/www/html/wp-content/themes/groundworksdev/import-blogs.php

# Flush rewrite rules
$WP rewrite flush

echo ""
echo "=========================================="
echo "Setup complete!"
echo "Homepage:  localhost:8080"
echo "Blog:      localhost:8080/blog/"
echo "Services:  localhost:8080/services/"
echo "FAQ:       localhost:8080/faq/"
echo "Contact:   localhost:8080/contact/"
echo "=========================================="
