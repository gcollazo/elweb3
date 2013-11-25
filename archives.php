<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<?php query_posts(array('order' => 'DESC', 'orderby' => 'date', 'posts_per_page' => '-1')); ?>
    <div class="container top-container">
        <div class="row content-wrapper">
            <?php include_once('sidebar.php'); ?>

            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6 content">
                <div class="row post-header">
                    <h2 class="page-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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
