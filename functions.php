<?php 

function wiedza_theme_setup(){
add_theme_support('menus');
register_nav_menu( 'primary', 'primary nav' );
}
 
add_action('init', 'wiedza_theme_setup' );
 ?>