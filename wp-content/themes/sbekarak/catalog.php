<?php
/*
Template Name: Catalog
*/
get_header(); ?>

<div id="content">

	<div id="contentleft">
	    
	    <div class='wpsc_categories wpsc_category_grid'>
			<?php wpsc_start_category_query(array('category_group'=> "1", 'show_thumbnails'=> 1, 'image_size' => array('width'=>170, 'height' => 170))); ?>
				<a href="<?php wpsc_print_category_url();?>" class="wpsc_category_grid_item" title='<?php wpsc_print_category_name();?>'>
					<?php wpsc_print_category_image(170, 170); ?>
				</a>
			<?php wpsc_end_category_query(); ?>
			<div class='clear_category_group'></div>
		</div>
		
	</div>

</div>

<?php get_footer(); ?>