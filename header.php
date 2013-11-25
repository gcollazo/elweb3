<!DOCTYPE html>
<!--

                88                                  88
                88                                  88
                88                                  88
     ,adPPYba,  88  8b      db      d8   ,adPPYba,  88,dPPYba,
    a8P_____88  88  `8b    d88b    d8'  a8P_____88  88P'    "8a
    8PP"""""""  88   `8b  d8'`8b  d8'   8PP"""""""  88       d8
    "8b,   ,aa  88    `8bd8'  `8bd8'    "8b,   ,aa  88b,   ,a8"
     `"Ybbd8"'  88      YP      YP       `"Ybbd8"'  8Y"Ybbd8"'


-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('&mdash;', 1, 'right'); ?><?php bloginfo('name'); ?></title>

    <meta name="description" content="<?php if (have_posts() && !is_home()): while (have_posts()): the_post(); echo strip_tags(get_the_excerpt()); endwhile; else: echo $GLOBALS['_DEFAULT_BLOG_DESCRIPTION']; endif;?>" />

    <meta name="keywords" content="<?php echo $GLOBALS['_DEFAULT_BLOG_KEYWORDS']; ?>,<?php $tags=get_the_tags();foreach($tags as $tag){echo $tag->name . ",";}?>"/>

    <?php if($GLOBALS['_DEFAULT_PUBLISHER']): ?>
        <meta name="publisher" content="<?php echo $GLOBALS['_DEFAULT_PUBLISHER']; ?>">
    <?php endif; ?>

    <?php if($GLOBALS['_DEFAULT_YKEY']): ?>
        <meta name="y_key" content="<?php echo $GLOBALS['_DEFAULT_YKEY']; ?>" />
    <?php endif; ?>

    <?php if($GLOBALS['_DEFAULT_MSVALIDATE']): ?>
        <meta name="msvalidate.01" content="<?php echo $GLOBALS['_DEFAULT_MSVALIDATE']; ?>" />
    <?php endif; ?>

    <?php if($GLOBALS['_DEFAULT_MSVALIDATE']): ?>
        <meta name="readability-verification" content="<?php echo $GLOBALS['_DEFAULT_READABILITY']; ?>"/>
    <?php endif; ?>

    <meta name="title" content="<?php wp_title('&mdash;', 1, 'right'); ?><?php bloginfo('name'); ?>" />
    <meta name="viewport" content="width=device-width">

<?php if(is_home()):?>
    <meta property="og:title" content="<?php echo $GLOBALS['_DEFAULT_OG_TITLE']; ?>"/>
    <meta property="og:type" content="<?php echo $GLOBALS['_DEFAULT_OG_TYPE']; ?>"/>
    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="fb:admins" content="<?php echo $GLOBALS['_DEFAULT_OG_ADMINS']; ?>"/>
<? else: ?>
    <meta property="og:title" content="<?php wp_title('', 1, 'right'); ?>"/>
    <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
    <meta property="og:image" content="<?php echo catch_that_image(); ?>"/>
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
    <meta property="fb:admins" content="<?php echo $GLOBALS['_DEFAULT_OG_ADMINS']; ?>"/>
<? endif; ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png">
    <link rel="alternate" href="<?php echo $GLOBALS['_DEFAULT_RSSFEED_URL']; ?>" type="application/rss+xml" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <div class="container visible-xs mobile-nav-wrapper">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex6-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo@2x.png" alt="<?php bloginfo('name');?>" height="50" width="50"><span class="navbar-sitename"><?php bloginfo('name'); ?></span></a>
            </div> <!-- .navbar-header -->
            <div class="collapse navbar-collapse navbar-ex6-collapse">
                <ul class="nav navbar-nav">
                    <?php wp_nav_menu( array('theme_location' => 'MobileNavigation', 'items_wrap'=> '%3$s', 'container'=> '')); ?>
                </ul>
            </div><!-- .navbar-collapse -->
        </nav> <!-- .navbar-default -->
    </div> <!-- .mobile-nav-wrapper -->
