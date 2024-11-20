<?php
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style('hello-elementor-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('hello-elementor-child-style', get_stylesheet_directory_uri() . '/style.css', array('hello-elementor-style'));
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles');



// mon hook filter nav
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
   

        if (is_user_logged_in() && $args->menu=="principal" ) 
    {
        $menu=explode("<li",$items);
        $items="<li".$menu[1].'<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-13 current_page_item parent hfe-creative-menu"><a class="hfe-menu-item" href="'. admin_url() .'">Admin</a></li>';
        $items.="<li".$menu[2];
    }
    


    return $items;
}




