<?php
get_header();
?>
	
	<script type="text/javascript">	
		function submitForm() {
			var listForm = $('#myForm');		
			var listEmail = $('#listEmail').val();
			
			//validate for non-html5 browsers
			var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		    if(reg.test(listEmail) == false) {						
				alert("Invalid email");			//switch to accessible html?
			} else {	
				$.ajax({
					url: listForm.attr('action'),					
					type: listForm.attr('method'),
					data: {email: listEmail},
					success: function(email) {
						$("#listForm").html("<p>Success! " + email + " has been added to the mailing list. You should receive a confirmation email shortly</p>"); 	
					}
				}); 
				
			}			
			return false;
		}
	</script>
 	<div id="carousel">
		<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>		
		<p><a href="research/" class="check-out">Check out our research</a></p>
 	</div>
 	
 	<div id="list-wiki" class="fl-col-flex2">
 		<div class="fl-col">
 			<h2>Join the <acronym title="Inclusive Design Institute">IDI</acronym> mailing list</h2>
 			<div id="listForm">
				<form id="myForm" method="post" action="<?php bloginfo('template_url'); ?>/mailinglist.php" onsubmit="return submitForm()">
					<input type="email" name="listEmail" id="listEmail" value="Your email address" /> 
					<input type="submit" value="Submit" />
				</form>			
 			</div>
 		</div>
 		<div class="fl-col">
 			<h2>Visit our wiki space</h2>
			<p class="fl-font-size-150"><a href="http://wiki.inclusivedesign.ca">wiki.inclusivedesign.ca</a></p>
 		</div>
 	</div>
 	
  	<div id="research-clusters" class="fl-clearfix">
		<h2>Research Clusters</h2>
		<nav role="navigation">
		<ul id="menu-research-clusters" class="nav">
			<li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33">
				<a href="research#design">Design and Development</a>
			</li>
			<li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31">
				<a href="http://dev.inclusivedesign.ca/wordpress/implementation-and-information-practices/">Implementation and Information Practices</a>
			</li>
			<li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32">
				<a href="http://dev.inclusivedesign.ca/wordpress/business-case-policies-standards-and-legislation/">Business Case, Policies, Standards and Legislation</a>
			</li>
			<li id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-30">
				<a href="http://dev.inclusivedesign.ca/wordpress/mobile-and-pervasive-computing/">Mobile and Pervasive Computing</a>
			</li>
		</ul>				
			<?php /*wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'research-menu' ) ); */ ?>
		</nav>
 	</div>
 	
	<div class="fl-col-flex3 front-cols">
		<?php 

		$the_query = new WP_Query( array('posts_per_page'=>2) ); 
		while ($the_query->have_posts()): 
			$the_query->the_post(); 		
			global $more; 
			$more = 0; 
		?>
 		<div class="fl-col post"> 						
			<?php		
			echo '<h2 class="fl-font-size-130">';
			the_title();
			echo '</h2>';			
			echo '<div class="date">';
			the_time('F jS, Y');
			echo '</div>';
			the_content("<div class='fl-site-read-more'>More</div>");
			?>
 		</div>
 		<?php endwhile; ?>

 		<div class="fl-col"> 	
 			<?php get_sidebar('sidebar-1'); ?>
 		</div>
 	</div> 	
 	
<?php get_footer(); ?>