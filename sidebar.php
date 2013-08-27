<?php

if (!defined('ABSPATH')) exit;

?>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2 col-sm-offset-1 col-md-offset-1 col-lg-offset-2 hidden-xs sidebar">
    <?php include_once('logo.php'); ?>
    <div class="row links-wrapper">
        <span class="site-author">By <?php echo $GLOBALS['_DEFAULT_AUTHOR_NAME']; ?></span> <!-- .site-author -->
        <ul class="sidebar-links-list">
            <?php wp_nav_menu( array('theme_location' => 'SidebarNavigation', 'items_wrap'=> '%3$s', 'container'=> '')); ?>
        </ul> <!-- .sidebar-links-list -->
    </div> <!-- .links-wrapper -->
    <?php include_once('sponsor.php'); ?>
</div> <!-- .sidebar -->
