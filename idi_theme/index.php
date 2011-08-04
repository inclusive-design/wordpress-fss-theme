<?php get_header(); ?>

<div class="fl-col-mixed-150">
	<div class="fl-col-fixed fl-force-right">
		<?php get_sidebar(); ?>
		
		<div class="fl-site-side-blob">
		
		</div>
	</div>
    <div class="fl-col-flex-left">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
 
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