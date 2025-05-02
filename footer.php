<footer class="site-footer">
    <div class="wrap">
        <!--
        <h3 class="follow-on-me">
            Follow on me
        </h3>
        <ul>
            <li>
                <a href="">
                    <img class="social-icon" src="<?php echo get_template_directory_uri() ?>/imgs/x_icon.svg" alt="">
                </a>
            </li>
            <li>
                <a href="">facebook</a>
            </li>
        </ul>   -->
        <div class="footer-nav">
            <?php
            wp_nav_menu(array(
                'menu_class' => 'footer-menu'
            ));
            ?>
            <a href="#top" id="back-to-top">Back to top</a>
        </div>
        <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('title') ?>. All rights reserved. </p>
    </div>
</footer>
</main>
<?php wp_footer(); ?>
</body>

</html>