<?php get_header(); ?>
 	<div id="carousel">
 		<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
		<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		
		<p><a href="" class="check-out">Check out our research</a></p>
 	</div>
 	
 	<div id="list-wiki" class="fl-col-flex2">
 		<div class="fl-col">
 			<h2>Join the IDI mailing list</h2>
			<p>Get in on the conversation for research, new sources of funding, upcoming conferences and events, new equipment and space bookings, and more.</p>
 		</div>
 		<div class="fl-col">
 			<h2>Visit our wiki space</h2>
			wiki.inclusivedesign.ca
			<p>Learn about ongoing research and projects, collaborate with follow inclusively-minded researchers, and more.</p>
 		</div>
 	</div>
 	
  	<div id="research-clusters" class="fl-clearfix">
		<h3>Research Clusters</h3>
		<nav role="navigation">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'research-menu' ) ); ?>
		</nav>
 	</div>
 	
	<div class="fl-col-flex3">
	<?php $the_query = new WP_Query( array('posts_per_page'=>2) ); ?>
 		<div class="fl-col"> 						
			<?php		
			$the_query->the_post();
			echo '<h3>';
			the_title();
			echo '</h3>';			
			the_excerpt();
			
			post_permalink();
			?>
 		</div>

 		<div class="fl-col"> 			
			<?php		
			$the_query->the_post();
			echo '<h3>';
			the_title();
			echo '</h3>';			
			the_excerpt();
			?> 		
 		</div>
 		<?php wp_reset_postdata(); ?>

 		<div class="fl-col"> 	
 			<?php get_sidebar('sidebar-1'); ?>
 		</div>
 	</div> 	
 	
<?php get_footer(); ?>