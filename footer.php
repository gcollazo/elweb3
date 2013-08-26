            <div class="row footer-row">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-8 col-sm-offset-1 col-md-offset-1 col-lg-offset-2 footer-wrapper">
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
                        <a href="<?php bloginfo('url'); ?>/"><img src="//placehold.it/35x36" alt="<?php bloginfo('name'); ?>"></a>
                        <h3 class="site-name-footer">
                            <a href="<?php bloginfo('url'); ?>/" class="site-name-footer-link"><?php bloginfo('name'); ?></a>
                        </h3>
                    </div> <!-- .footer-logo-wrapper -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hidden-xs footer-links-wrapper">
                        <ul class="footer-links-list">
                            <?php wp_nav_menu( array('theme_location' => 'BottomNavigation', 'items_wrap'=> '%3$s', 'container'=> '')); ?>
                        </ul>
                    </div> <!-- .footer-links-wrapper -->
                    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 footer-creative-commons-wrapper">
                        <a href="http://creativecommons.org/licenses/by/3.0/" class="footer-link footer-creative-commons-link">Some rigth reserved</a>
                    </div> <!-- .footer-creative-commons -->
                </div> <!-- .footer-wrapper -->
            </div> <!-- .footer-row -->
        </div> <!-- .top-container -->

        <?php wp_footer(); ?>

        <script src="<?php bloginfo('template_directory'); ?>/js/vendor.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
        <script>require('elweb');</script>
    </body>
</html>
