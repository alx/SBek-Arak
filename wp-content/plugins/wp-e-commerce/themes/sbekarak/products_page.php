<?php
global $wpsc_query, $wpdb;
//$wpsc_query = new WPSC_query("category_id=10");
?>
<div id='products_page_container' class="wrap wpsc_container">

    <?php do_action('wpsc_top_of_products_page'); // Plugin hook for adding things to the top of the products page, like the live search ?>

    <?php if(wpsc_display_products()): ?>
        <?php if(wpsc_has_pages() && ((get_option('wpsc_page_number_position') == 1 ) || (get_option('wpsc_page_number_position') == 3)))  : ?>
            <div class='wpsc_page_numbers'>
                Pages:
                <?php while (wpsc_have_pages()) : wpsc_the_page(); ?>
                    <?php if(wpsc_page_is_selected()) :?> 	   
                        <a href='<?php echo htmlentities(wpsc_page_url(),ENT_QUOTES); ?>' class='selected'><?php echo wpsc_page_number(); ?></a>
                    <?php else: ?> 
                        <a href='<?php echo htmlentities(wpsc_page_url(),ENT_QUOTES); ?>'><?php echo wpsc_page_number(); ?></a>
                    <?php endif; ?> 
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php /** start the product loop here */?>
        <?php while (wpsc_have_products()) :  wpsc_the_product(); ?>
            <div class="productdisplay default_product_display product_view_<?php echo wpsc_the_product_id(); ?> <?php echo wpsc_category_class(); ?>">
                <?php if(get_option('show_thumbnails')) :?>
                    <div class="imagecol">
                        <?php if(wpsc_the_product_thumbnail()) :?>
                            <a rel="<?php echo str_replace(array(" ", '"',"'", '&quot;','&#039;'), array("_", "", "", "",''), wpsc_the_product_title()); ?>" class="thickbox preview_link" href="#TB_inline?height=155&width=300&modal=true&inlineId=thickbox_<?php echo wpsc_the_product_id(); ?>">
                                <img class="product_image" id="product_image_<?php echo wpsc_the_product_id(); ?>" alt="<?php echo wpsc_the_product_title(); ?>" title="<?php echo wpsc_the_product_title(); ?>" src="<?php echo wpsc_the_product_thumbnail(); ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div id="thickbox_<?php echo wpsc_the_product_id(); ?>" style="display:none">
                    just a test
                </div>
            </div>
        <?php endwhile; ?>
    <?php /** end the product loop here */?>

    <?php

    if(function_exists('fancy_notifications')) {
        echo fancy_notifications();
    }
    ?>

    <?php if(wpsc_has_pages() &&  ((get_option('wpsc_page_number_position') == 2) || (get_option('wpsc_page_number_position') == 3))) : ?>
        <div class='wpsc_page_numbers'>
            Pages:
            <?php while ($wpsc_query->have_pages()) : $wpsc_query->the_page(); ?>
                <?php if(wpsc_page_is_selected()) :?> 	   
                    <a href='<?php echo htmlentities(wpsc_page_url(),ENT_QUOTES); ?>' class='selected'><?php echo wpsc_page_number(); ?></a>
                <?php else: ?> 
                    <a href='<?php echo htmlentities(wpsc_page_url(),ENT_QUOTES); ?>'><?php echo wpsc_page_number(); ?></a>
                <?php endif; ?> 
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
</div>