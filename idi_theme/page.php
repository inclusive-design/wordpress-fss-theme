<?php if(have_posts()) : 
	the_post(); 
		
	if (!$post->post_parent) { // parent page so load first subpage		
		$children = get_pages("child_of=".$post->ID."&sort_column=menu_order");
		if ($children) {
			wp_redirect(get_permalink($children[0]->ID));	
		}
	} else {
		$submenu = wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->post_parent.'&echo=0');				
	}
	
	/* Right info sidebar options */
	$sboptions = array(
     'order' => 'title-content-widgets', 
     'before_title' => '<h3>', 
     'after_title' => '</h3>', 
     'before_content' => '',  
     'after_content' => ''); 
     $sidebar = trim(coresidebar($sboptions));
     
     /* Behaviour of middle div */
   	$middle_classes = "";
	if (!empty($submenu)) { 
     	$middle_classes = "fl-col-flex";
	} 
	if (!empty($sidebar)) {      	
     	$middle_classes .= " fl-col-flex-left";
	}
     	
?>
<?php get_header(); ?>

<div class="fl-col-mixed-200">
	<?php if (!empty($submenu)) { ?>
		<nav class="fl-site-nav-sub fl-col-fixed fl-force-left">
			<?php echo '<ul class="fl-list-menu">'.$submenu.'</ul>'; ?>
		</nav>
	<?php } ?>
	
	<?php if (!empty($sidebar)) { ?>		
		<div class="fl-site-sidebar fl-col-fixed fl-force-right">
			<?php echo $sidebar; ?>
		</div>
	<?php } ?>
		
	<div class="fl-site-content <?php echo $middle_classes; ?>">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>	 
	</div>
</div>

<?php endif; ?>
<?php get_footer(); ?>