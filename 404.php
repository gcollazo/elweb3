<?php get_header(); ?>
    <div class="container top-container">
        <div class="row content-wrapper">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-sm-offset-1 col-md-offset-1 col-lg-offset-2 hidden-xs sidebar">
                <div class="row logo-wrapper">
                    <a href="<?php bloginfo('url'); ?>"><img src="//placehold.it/70x70" alt="<?php bloginfo('name'); ?>"></a>
                    <h1 class="site-name">
                        <a href="<?php bloginfo('url'); ?>" class="site-name-link"><?php bloginfo('name'); ?></a>
                    </h1> <!-- .site-name -->
                </div> <!-- .logo-wrapper -->
                <div class="row links-wrapper">
                    <span class="site-author">By <?php echo $GLOBALS['_DEFAULT_AUTHOR_NAME']; ?></span> <!-- .site-author -->
                    <ul class="sidebar-links-list">
                        <?php wp_nav_menu( array('theme_location' => 'SidebarNavigation', 'items_wrap'=> '%3$s', 'container'=> '')); ?>
                    </ul> <!-- .sidebar-links-list -->
                </div> <!-- .links-wrapper -->
                <?php include_once('sponsor.php'); ?>
            </div> <!-- .sidebar -->

            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6 content">
                <div class="row">
                    <h2>Page not found.</h2><br><br>
                    <iframe width="100%" height="320" src="<?php echo $GLOBALS['_DEFAULT_404_YOUTUBE_VIDEO']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div> <!-- .content -->

        </div> <!-- .content-wrapper -->
<?php get_footer(); ?>
