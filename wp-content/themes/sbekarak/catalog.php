<?php
/*
Template Name: Catalog
*/
get_header(); ?>

<div id="content">

	<div id="contentleft">
	    
        <div class="postarea">
    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <?php the_content(__('Read more'));?><div style="clear:both;"></div><?php edit_post_link('(Edit)', '', ''); ?>
            
            <?php endwhile; else: ?>
            
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
            
        </div>
		
	</div>

</div>

<?php get_footer(); ?>