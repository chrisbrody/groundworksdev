#!/bin/bash

# Wait for WordPress to be ready
sleep 5

# Install WP-CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar

# Create pages
./wp-cli.phar page create --post_title="Home" --post_status="publish" --allow-root
./wp-cli.phar page create --post_title="About" --post_name="about" --post_status="publish" --allow-root
./wp-cli.phar page create --post_title="Services" --post_name="services" --post_status="publish" --allow-root
./wp-cli.phar page create --post_title="Contact" --post_name="contact" --post_status="publish" --allow-root
./wp-cli.phar page create --post_title="Gov Transitions" --post_name="gov-transitions" --post_status="publish" --allow-root

# Set front page
HOME_ID=$(./wp-cli.phar post list --post_type=page --post_title="Home" --field=ID --allow-root)
./wp-cli.phar option update show_on_front page --allow-root
./wp-cli.phar option update page_on_front $HOME_ID --allow-root

# Activate theme
./wp-cli.phar theme activate groundworksdev --allow-root

echo "Done! Your site is ready."
