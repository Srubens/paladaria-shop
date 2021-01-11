<?php

require_once get_template_directory() . "/class-wp-bootstrap-navwalker.php";

function theme_ba_bakery(){
    wp_enqueue_style('styleba', get_template_directory_uri() . '/assets/css/styleba.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array("jquery"), false, true);
    wp_enqueue_script('font', 'https://kit.fontawesome.com/25a46afdd2.js');
}

function theme_ba_bakery_setup(){
    
    //ADICIONANDO SUPORTE PARA O MENU
    add_theme_support('menus');

    //SUPORTE PARA TITLE DO TEMA
	add_theme_support('title-tag');

    //SUPORTE AO WOOCOMERCE
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 255,
        'single_image_width' => 255,
        'product_grid' => array(
            'default_rows' => 10,
            'min_rows' => 5,
            'max_rows' => 10,
            'default_columns' => 1,
            'min_columns' => 1,
            'max_columns' => 1,
        )
    ));

    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    if( !isset($content_width) ){
        $content_width = 600;
    }

    //AJUSTANDO OS TIPOS DE POSTS
	add_theme_support('post-formats', array('video', 'audio', 'gallery'));

    register_nav_menu('menu_ba', ("Menu Topo Ba Bakery"));


}

function  theme_ba_bakery_widgets(){

	$SidebarLateral = [
		'name' => 'Sidebar Lateral',
		'id' => 'rs_sidebar',
		'description' => 'Sidebar Lateral',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	];

	$SidebarRodape = [
		'name' => 'Sidebar Rodape',
		'id' => 'rs_rodape',
		'description' => 'Sidebar Rodape',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	];

	register_sidebar($SidebarLateral);
	register_sidebar($SidebarRodape);

}

add_action('after_setup_theme', 'theme_ba_bakery_setup', 0);
add_action('widigets_init', 'theme_ba_bakery_widgets');
add_action('wp_enqueue_scripts', 'theme_ba_bakery');

if( class_exists('WooCommerce') ){
    require get_template_directory() . '/include/wc-modification.php';
}






