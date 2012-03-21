<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title ( '|', true,'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-reset-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-base-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-layout.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/infusion/framework/fss/css/fss-text.css" />
	 
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
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

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/css/FatPanelUIOptions.css" />	

	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/infusion/MyInfusion.js"></script>

	<!--[if lte IE 8]>	
		<script type="text/javascript">document.createElement("header")</script>	
		<script type="text/javascript">document.createElement("nav")</script>		
		<script type="text/javascript">document.createElement("footer")</script>		
	<![endif]-->	

<?php
	wp_head();
?>

</head>

<body> 

	<!-- begin markup for UI Options Fat Panel -->
	<div class="flc-uiOptions-fatPanel fl-uiOptions-fatPanel">        
		<div id="myUIOptions" class="flc-slidingPanel-panel flc-uiOptions-iframe"></div>     
		
		<div class="fl-panelBar">
			<button class="flc-slidingPanel-toggleButton fl-toggleButton">Show/Hide</button>
		</div>
	</div>
	<!-- end markup for UI Options Fat Panel -->

	<!-- Container for Table of Contents inserted at request of UI Options -->
	<div class="flc-toc-tocContainer toc"> </div>

	<script type="text/javascript">
		fluid.pageEnhancer({
			tocTemplate: "<?php bloginfo('template_url'); ?>/infusion/components/tableOfContents/html/TableOfContents.html"
		});
	
		fluid.uiOptions.fatPanel(".flc-uiOptions-fatPanel", {
			prefix: "<?php bloginfo('template_url'); ?>/infusion/components/uiOptions/html/"	,		
	
		  // Provide custom strings for slidingPanel button
			slidingPanel: {
				options: {
					strings: {
						//showText: "Display Settings <img src='<?php bloginfo('template_url'); ?>/images/triangle_down_white.png' alt='down arrow' />",
						showText: "Show Display Settings",
						hideText: "Hide Display Settings"
					}
				}
			}
		});          
	</script>

	<div class="fl-site-skipto">
		<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'content' ); ?>"><?php _e( 'Skip to content', 'content' ); ?></a>
	</div>

	<!-- The main container of all content -->
	<div class="fl-container fl-centered">

		<header class="fl-site-header fl-clearfix">
			<!-- Loads the file "banner.php". Feel free to override with your own banner, or with an empty file -->
			<?php get_template_part('banner') ?>

			<!-- Loads the file "topnav.php". Feel free to override with your own top navigation, or with an empty file -->
			<?php get_template_part('topnav') ?>
	    </header>  
		
	    <section id="content" class="fl-site-main-body">
