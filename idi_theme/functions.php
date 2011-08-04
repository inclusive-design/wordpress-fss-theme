<?php

//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );
 
//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
    register_nav_menu( 'research-menu', __( 'Research Cluster Menu' ) );
}

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

//Some simple code for our widget-enabled sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'idi_theme' ),
		'id' => 'sidebar-1',
		'before_widget' => "<div class='sidebar-tweets'>",
 		'after_widget' => "</div>"
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Area One', 'idi_theme' ),
		'id' => 'sidebar-3',
		'description' => __( 'An optional widget area for your site footer', 'idi_theme' )
	) );

	register_sidebar( array(
		'name' => __( 'Footer Area Two', 'idi_theme' ),
		'id' => 'sidebar-4',
		'description' => __( 'An optional widget area for your site footer', 'idi_theme' )
	) );    
}
?>