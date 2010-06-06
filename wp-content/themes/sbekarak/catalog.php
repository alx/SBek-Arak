<?php
/*
Template Name: Catalog
*/
get_header(); ?>

<div id="content">

	<div id="contentleft">
	    
	    <div class='wpsc_categories wpsc_category_grid'>
			<?php echo wpsc_display_products_page(array('category_url_name'=>'au-quotidien')); ?>
			<?php echo wpsc_display_products_page(array('category_url_name'=>'soiree')); ?>
			<?php echo wpsc_display_products_page(array('category_url_name'=>'mini')); ?>
		</div>
		
	</div>

</div>

<?php get_footer(); ?>