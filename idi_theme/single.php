<?php get_header(); ?>
 
    <div id="blog">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
        <div class="post">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="entry">
                <?php the_post_thumbnail(); ?>
                <?php the_content(); ?> 
            </div>

    </div>
 
<?php endwhile; ?>
 
    <div class="navigation">
        <?php previous_post_link('< %link') ?> <?php next_post_link(' %link >') ?>
    </div>
 
<?php endif; ?>
</div>
 
<?php get_footer(); ?>