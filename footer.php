</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <?php
            // First, try to display widgets if the area is active
            if (is_active_sidebar('footer-area')) {
                dynamic_sidebar('footer-area');
            }
            ?>
            <!-- ALWAYS display the copyright and tagline -->
            <p>© <?php echo date('Y'); ?> GroundWorks Development. All rights reserved.</p>
            <p>Websites and Automation for Small Business</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>