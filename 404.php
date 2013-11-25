<?php get_header(); ?>
    <div class="container top-container">
        <div class="row content-wrapper">
            <?php include_once('sidebar.php'); ?>

            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-6 content">
                <div class="row">
                    <h2 class="page-title">Page not found.</h2>
                    <iframe width="100%" height="320" src="<?php echo $GLOBALS['_DEFAULT_404_YOUTUBE_VIDEO']; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div> <!-- .content -->

        </div> <!-- .content-wrapper -->
<?php get_footer(); ?>
