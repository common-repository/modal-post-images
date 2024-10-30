<?php 
/* Plugin Name: Modal Post Images
Description: Thiis plugin will provide modal behaviour to every image of your wordpress posts.
Plugin URI: http://wppluginwiki.com/ 
Version: 2.0 
Author: Wp Plugin Wiki 
Author URI: http://wppluginwiki.com/ 
License: GPL2 
*/
if ( ! defined( 'ABSPATH' ) ){
	exit; // Exit if accessed this file directly
} 
function wppw_adding_main_modal_scripts() {
wp_register_script('modal_main_js', plugins_url('inc/main-modal-funtion.js', __FILE__), array('jquery'),'1.1', true);
wp_enqueue_script('modal_main_js');
}
add_action( 'wp_enqueue_scripts', 'wppw_adding_main_modal_scripts' );

function wppw_adding_main_modal_stylesheet() {
    wp_register_style(
        'newstyle',
        plugins_url( '/inc/style.css', __FILE__ )
    );
    wp_enqueue_style( 'newstyle' );
}
add_action( 'wp_enqueue_scripts', 'wppw_adding_main_modal_stylesheet' );

?>