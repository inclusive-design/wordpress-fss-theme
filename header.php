<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title ( '|', true,'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-reset-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-base-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-layout.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-text.css" />
	 
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/FatPanelUIOptions.css" />        
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-bw-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-wb-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-by-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-theme-yb-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/fss/fss-text-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-bw/bw.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-wb/wb.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-by/by.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/lib/jquery/ui/css/fl-theme-yb/yb.css" />	

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ltie9.css" />
	<![endif]-->
	<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ltie8.css" />
	<![endif]-->
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ltie7.css" />
	<![endif]-->

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion/MyInfusion.js"></script>

	<!--[if lte IE 8]>	
		<script type="text/javascript">document.createElement("header")</script>	
		<script type="text/javascript">document.createElement("nav")</script>		
		<script type="text/javascript">document.createElement("footer")</script>
		<script type="text/javascript">document.createElement("section")</script>
		<script type="text/javascript">document.createElement("aside")</script>
	<![endif]-->	

<?php
	wp_head();
?>

</head>

<body> 

	<?php get_template_part('uio-markup') ?>

	<script type="text/javascript">
		// If a plugin is present that will be creating an enhanced version of UIO, defer to that
		// Only instantiate the basic UIO if there is no such plugin
		// TODO: need a better test than the mere existance of the function!!
		if (!fluid.uiOptions.fatPanel.withMediaPanel) {
			fluid.pageEnhancer({
				tocTemplate: "<?php bloginfo('template_url'); ?>/infusion/components/tableOfContents/html/TableOfContents.html"
			});

			var uiOptions = fluid.uiOptions.fatPanel(".flc-uiOptions-fatPanel", {
				prefix: "<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/html/",

	          // Provide custom strings for slidingPanel button
	            slidingPanel: {
					options: {
						strings: {
							//showText: "Display Settings <img src='<?php bloginfo('template_url'); ?>/images/triangle_down_white.png' alt='down arrow' />",
							<?php global $uio_strings, $uio_strings_custom;
								// To override the default strings, define $uio_strings_custom
								//in the child theme's functions.php file
								if ($uio_strings_custom) {
									echo $uio_strings_custom;
								} else {
									echo $uio_strings;
								}?>
						}
					}
				}
	        });
		}
	</script>

	<div class="fl-site-skipto fl-hidden-accessible">
		<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'content' ); ?>"><?php _e( 'Skip to content', 'content' ); ?></a>
	</div>

	<!-- The main container of all content -->
	<div class="fl-container fl-centered">

		<header class="fl-site-header">
			<!-- Loads the file "banner.php". Feel free to override with your own banner, or with an empty file -->
			<?php get_template_part('banner') ?>

			<!-- Loads the file "topnav.php". Feel free to override with your own top navigation, or with an empty file -->
			<?php get_template_part('topnav') ?>
	    </header>  
		
	    <section id="content" class="fl-site-main-body">
			<!-- Container for Table of Contents inserted at request of UI Options -->
			<div class="flc-toc-tocContainer toc"> </div>

