<?php get_header(); ?>

<div class="fl-col-mixed-200">
	<div class="fl-col-fixed fl-force-right">
		<?php get_sidebar(); ?>
		
	<?php 
	$sboptions = array(
     'order' => 'title-content-widgets', 
     'before_title' => '<h3>', 
     'after_title' => '</h3>', 
     'before_content' => '',  
     'after_content' => ''); 
     $sidebar = trim(coresidebar($sboptions));
     
	 if (!empty($sidebar)) {
	 	echo $sidebar;
	 } ?>		
	</div>
    <div class="fl-col-flex-left">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="date"><?php the_time('F jS, Y') ?></div>
 
            <div class="entry">
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?>                
            </div>
        </div>
		<?php endwhile; ?>
 
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>