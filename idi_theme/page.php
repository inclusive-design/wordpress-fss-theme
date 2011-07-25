<?php if(have_posts()) : 
	the_post(); 
		
	if (!$post->post_parent) { // parent page so load first subpage		
		$children = get_pages("child_of=".$post->ID."&sort_column=menu_order");
		if ($children) {
			wp_redirect(get_permalink($children[0]->ID));	
		}
		
		/*$my_subpage = new WP_Query( array('post_type' => 'page', 'post_parent' => $post->ID, 'post_status' => 'publish', 'orderby' => 'menu_order', 'order' => 'ASC'));
		if($my_subpage->have_posts())
			$my_subpage->the_post();        			*/
	} else {
		$subpages = wp_list_pages('sort_column=menu_order&title_li=&child_of='.$post->post_parent.'&echo=0');				
	}
?>
<?php get_header(); ?>

<?php if ($subpages) { ?>
<div class="fl-col-mixed-150">
	<nav id="page-menu" class="fl-force-left fl-col-fixed">
		<?php echo '<ul>'.$subpages.'</ul>'; ?>
	</nav>
	<div class="fl-col-flex">
<?php } ?>

<div class="post">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>
 
<?php if ($subpages) { echo "</div></div>"; } ?>	
	
<?php endif; ?>
<?php get_footer(); ?>