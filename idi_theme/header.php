<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title ( '|', true,'right' ); ?><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-reset-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-base-global.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-layout.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-text.css" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-site.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-theme-idi-site.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fss/css/fss-theme-idi.css" />
	 
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/css/fss/fss-theme-hc-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/css/fss/fss-theme-hci-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/css/fss/fss-theme-blackYellow-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/css/fss/fss-theme-yellowBlack-uio.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/lib/jquery/ui/css/fl-theme-hc/hc.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/lib/jquery/ui/css/fl-theme-hci/hci.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/lib/jquery/ui/css/fl-theme-blackYellow/blackYellow.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/lib/jquery/ui/css/fl-theme-yellowBlack/yellowBlack.css" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/css/FatPanelUIOptions.css" />	
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/lib/jquery/core/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/lib/jquery/ui/js/jquery.ui.core.js"></script>    
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/lib/json/js/json2.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/core/js/FluidDocument.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/core/js/jquery.keyboard-a11y.js"></script>        
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/core/js/Fluid.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/core/js/FluidRequests.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/core/js/FluidDOMUtilities.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/core/js/DataBinding.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/core/js/FluidIoC.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/lib/fastXmlPull/js/fastXmlPull.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/renderer/js/fluidParser.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/renderer/js/fluidRenderer.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/framework/renderer/js/RendererUtilities.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/js/Store.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/js/UIEnhancer.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/js/FatPanelUIOptions.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/components/uiOptions/js/SlidingPanel.js"></script>
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/webapp/components/tableOfContents/js/TableOfContents.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/idi.js"></script>

</head>

<body class="fl-theme-idi"> 

<div class="flc-uiOptions-fatPanel fl-uiOptions-fatPanel">        
	<div id="myUIOptions" class="flc-slidingPanel-panel flc-uiOptions-iframe"></div>     
	
	<div class="fl-panelBar">
		<button class="flc-slidingPanel-toggleButton fl-toggleButton">Show/Hide</button>
	</div>
</div>
<div class="fl-site-wrapper fl-container-950">
	<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'content' ); ?>"><?php _e( 'Skip to content', 'content' ); ?></a></div>

	<header class="fl-site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><h1 class="fl-site-logo fl-force-left"><span class="fl-hidden-accessible"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></span></h1></a>

		<nav role="navigation" class="fl-site-nav-main fl-force-right fl-font-size-110">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
		</nav>
    </header>  
	
	<div id="content" class="fl-push fl-clearfix">