<?php get_header(); ?>

<div class="fl-centered fl-col-mixed-200 fl-site-wrapper">
	<div class="fl-col-fixed fl-force-right">
		<?php get_sidebar(); ?>
	</div>

    <div class="fl-col-flex-left">
        <?php if(have_posts()) : ?>
        	<?php while(have_posts()) : the_post(); ?>
		        <div class="post">
			        <div class="date"><?php the_time('F jS, Y') ?></div>        
		    	    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
		            <div class="entry">
		                <?php the_content("<div class='fl-site-read-more'>read more</div>"); ?>                
		            </div>
		        </div>
			<?php endwhile; ?> 
        <?php endif; ?>
    </div>

</div>
<?php get_footer(); ?>