<?php 

//import storefront css

add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue' );
function storefront_child_enqueue() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
    wp_register_style ( 'glyphicons', get_stylesheet_directory_uri() . '/glyphicons.css' );
    wp_enqueue_style( 'glyphicons' );
    
}

// hapus credit dari woothemes

add_action ( 'init', 'custom_remove_footer_credit', 10);
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20);
    add_action( 'storefront_footer', 'custom_storefront_credit', 20);
}
function custom_storefront_credit () {
    ?>
    <div class="site-info">
    Made with <span class="glyphicon glyphicon-heart"></span> from Bandung
    <br>&copy; <?php echo get_bloginfo( 'name' ) . ' ' . date ( 'Y' ); ?>
    </div>
    <?php
}

?>