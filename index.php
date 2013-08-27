<?php get_header(); ?>
<?php query_posts('posts_per_page=1'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
                    <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> <!-- .post-title -->
                    <span class="post-metadata">Posted by <a href="<?php echo get_the_author_meta( 'user_url' ); ?>"><?php the_author(); ?></a> on <?php the_time('M jS, Y'); ?></span>
                </div> <!-- .post-header -->

                <div class="row post-content">
                    <?php the_content(); ?>
                </div> <!-- .post-content -->

                <div class="row post-pagination">
                    <?php
                        $prev = get_previous_post();
                        if($prev) {
                            $p_link = get_permalink( $prev->ID );
                        }

                        $next = get_next_post();
                        if($next) {
                            $n_link =get_permalink( $next->ID );
                        }
                    ?>
                    <?php if($prev): ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 post-navigation-older-wrapper">
                            <a href="<?php echo $p_link; ?>" class="post-navigation-link older-link">&larr; Older</a>
                        </div> <!-- .post-navigation-older-wrapper -->
                    <?php endif; ?>

                    <?php if($next): ?>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 post-navigation-newer-wrapper">
                            <a href="<?php echo $n_link; ?>" class="post-navigation-link newer-link">Newer &rarr;</a>
                        </div> <!-- .post-navigation-newer-wrapper -->
                    <?php endif; ?>
                </div> <!-- .post-pagination -->

            </div> <!-- .content -->

        </div> <!-- .content-wrapper -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
