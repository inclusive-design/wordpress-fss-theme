<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title ( '|', true,'right' ); ?></title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-reset-global.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-base-global.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-layout.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-text.css" />
 
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<?php
    /*
     *  Add this to support sites with sites with threaded comments enabled.
     */
   /* if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    wp_head();
 
    wp_get_archives('type=monthly&format=link'); */
?>
</head>

<body> 
<div id="idi-wrapper" class="fl-container-950">
	<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'content' ); ?>"><?php _e( 'Skip to content', 'content' ); ?></a></div>

	<header>
		<h1 id="site-title" class="fl-force-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/idi_logo.png" alt="IDI logo" /></a></h1>

		<nav id="main-nav" role="navigation" class="fl-force-right">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
		</nav>
    </header>  
	
	<div id="content" class="fl-push fl-clearfix">