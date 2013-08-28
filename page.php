<?php get_header(); ?>
    <div class="container top-container">
        <div class="row content-wrapper">
            <?php include_once('sidebar.php'); ?>

            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6 content">
                <div class="row post-header">
                    <h2 class="page-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                </div> <!-- .post-header -->

                <div class="row page-content">
                    <?php the_content(); ?>
                </div> <!-- .post-content -->

                <?php include_once('social.php') ?>

            </div> <!-- .content -->

        </div> <!-- .content-wrapper -->

<?php get_footer(); ?>
