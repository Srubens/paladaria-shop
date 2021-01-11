<?php

function theme_ba_bakery_modify(){

    add_action('woocommerce_before_main_content','theme_ba_bakery_container_row', 5);
    function theme_ba_bakery_container_row(){
        echo  '<div class="container teste"><div class="row">';
    }

    add_action('woocommerce_after_main_content','theme_ba_bakery_container_row_close', 5);
    function theme_ba_bakery_container_row_close(){
        echo  '</div></div>';
    }

    if( is_shop() ){

        add_action('woocommerce_before_main_content','theme_ba_bakery_sidebar_tags', 6);
        add_action('woocommerce_before_main_content','woocommerce_get_sidebar', 7);
        function theme_ba_bakery_sidebar_tags(){
            echo '<div class="sidebar-shop col-md-4 col-lg-3 order-2 order-md-1">';
        }

        add_action('woocommerce_before_main_content','theme_ba_bakery_close_sidebar_tags', 8);
        function theme_ba_bakery_close_sidebar_tags(){
            echo '</div>';
        }

        add_action('woocommerce_after_shop_loop_item_title','the_excerpt', 1);

    }

    remove_action('woocommerce_sidebar','woocommerce_get_sidebar');
    
    add_action('woocommerce_before_main_content','theme_ba_bakery_shop_tags', 9);
    function theme_ba_bakery_shop_tags(){
        if( is_shop() ){
            echo '<div class="shop col-md-8 col-lg-9 order-1 order-md-2">';
        }else{
            echo '<div class="shop col">';
        }
    }

    add_action('woocommerce_before_main_content','theme_ba_bakery_shop_tags_close', 4);
    function theme_ba_bakery_shop_tags_close(){
        echo '</div>';
    }

    

}

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'theme_ba_bakery_woocommerce_header_add_to_cart_fragment' );

function theme_ba_bakery_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
	<span class="box_total_itens"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.box_total_itens'] = ob_get_clean();
	return $fragments;
}

add_action('wp','theme_ba_bakery_modify');
