<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<?php query_posts(array('order' => 'DESC', 'orderby' => 'date', 'posts_per_page' => '-1')); ?>
    <div class="container top-container">
        <div class="row content-wrapper">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-sm-offset-1 col-md-offset-1 col-lg-offset-2 hidden-xs sidebar">
                <div class="row logo-wrapper">
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo@2x.png" alt="<?php bloginfo('name');?>" height="70" width="70"></a>
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
                <div class="row post-header">
                    <h2 class="page-title"><?php the_title(); ?></h2> <!-- .post-title -->
                </div> <!-- .post-header -->

                <div class="row archive-search-wrapper">
                    <form method="get" action="http://google.com/search">
                        <input type="hidden" name="q" value="site:<?php echo $GLOBALS['_DEFAULT_GOOGLE_SEARCH_DOMAIN']; ?>">
                        <input type="text" name="q" placeholder="Search <?php bloginfo('name'); ?>" class="search-field" />
                    </form>
                </div> <!-- .row archive-search-wrapper -->

                <?php while(have_posts()): the_post(); ?>
                    <div class="row post-header arhive-post-header">
                        <span class="post-metadata arhive-post-meta"><?php the_time('M jS, Y'); ?></span>
                        <h2 class="post-title archive-post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> <!-- .post-title -->
                    </div> <!-- .post-header -->
                <?php endwhile; ?>

            </div> <!-- .content -->

        </div> <!-- .content-wrapper -->

<?php get_footer(); ?>
