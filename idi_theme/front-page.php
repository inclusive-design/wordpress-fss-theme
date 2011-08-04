<?php get_header(); ?>
 	<div id="carousel">
		<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		
		<p><a href="research/" class="check-out">Check out our research</a></p>
 	</div>
 	
 	<div id="list-wiki" class="fl-col-flex2">
 		<div class="fl-col">
 			<h2>Join the IDI mailing list</h2>
			<p><input type="text" /> <input type="submit" value="Submit" /></p>
 		</div>
 		<div class="fl-col">
 			<h2>Visit our wiki space</h2>
			<p class="fl-font-size-150"><a href="http://wiki.inclusivedesign.ca">wiki.inclusivedesign.ca</a></p>
 		</div>
 	</div>
 	
  	<div id="research-clusters" class="fl-clearfix">
		<h3>Research Clusters</h3>
		<nav role="navigation">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'research-menu' ) ); ?>
		</nav>
 	</div>
 	
	<div class="fl-col-flex3">
		<?php 

		$the_query = new WP_Query( array('posts_per_page'=>2) ); 
		while ($the_query->have_posts()): 
			$the_query->the_post(); 		
			global $more; 
			$more = 0; 
		?>
 		<div class="fl-col"> 						
			<?php		
			echo '<h3 class="fl-font-size-130">';
			the_title();
			echo '</h3>';			
			the_content("<div class='fl-site-read-more'>More</div>");
			?>
 		</div>
 		<?php endwhile; ?>

 		<div class="fl-col"> 	
 			<?php get_sidebar('sidebar-1'); ?>
 		</div>
 	</div> 	
 	
<?php get_footer(); ?>