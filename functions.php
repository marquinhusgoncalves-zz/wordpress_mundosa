<?php 
//Barra superior ADM
    add_filter('show_admin_bar', '__return_false');

//Adiciona menu no adm
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

//Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'mobile' => __( 'Mobile Menu' ),
));

//Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

?>