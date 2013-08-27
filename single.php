<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container top-container">
        <div class="row content-wrapper">
            <?php include_once('sidebar.php'); ?>

            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6 content">
                <div class="row post-header">
                    <h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2> <!-- .post-title -->
                    <span class="post-metadata">Posted by <a href="<?php echo get_the_author_meta( 'user_url' ); ?>"><?php the_author(); ?></a> on <?php the_time('M jS, Y'); ?></span>
                </div> <!-- .post-header -->

                <div class="row post-content">
                    <?php the_content(); ?>
                </div> <!-- .post-content -->

                <?php include_once('social.php') ?>

                <?php include_once('pagination.php'); ?>

                <div class="row post-comments-wrapper">
                    <?php comments_template(); ?>
                </div> <!-- .post-comments-wrapper -->

            </div> <!-- .content -->

        </div> <!-- .content-wrapper -->

<?php endwhile; endif; ?>
<?php get_footer(); ?>
