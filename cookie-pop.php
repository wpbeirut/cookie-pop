<?php
/**
 * Plugin Name: Cookie Pop
 * Plugin URI: https://www.wpbeirut.org
 * Description: A simple cookie law implementation from wordpress beirut with love.
 * Version: 1.0.0
 * Author: Wordpress Beirut Community
 * Author URI: https://www.wpbeirut.org
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /lang
 * Text Domain: cookie-pop
 */
function cookie_pop_scripts_and_styles() {
 
    wp_enqueue_script(
        'jquery-cookie',
        plugins_url( '/lib/jquery.cookie.js', __FILE__ ),
        array( 'jquery' ),
        '1.4.1',
        true
    );
 
    wp_register_script(
        'cookie-pop-script',
        plugins_url( '/js/cookie-pop.js', __FILE__ ),
        array( 'jquery', 'jquery-cookie' ),
        '1.0.0',
        true
    );
 
    wp_localize_script(
        'cookie-pop-script',
        'cookie_pop_text', array(
            'message' => __( 'By using the wpbeirut.org website, you agree to the use of cookies.', 'cookie-pop' ),
            'button'  => __( 'OK', 'cookie-pop' ),
            'link'    => __('https://www.wpbeirut.org/privacy-policy/', 'cookie-pop'),
            'more'    => __( 'Read More', 'cookie-pop' )
        )
    );
 
    wp_enqueue_script( 'cookie-pop-script' );
 
    wp_enqueue_style(
        'cookie-pop-style',
        plugins_url( '/css/cookie-pop.css', __FILE__ ),
        array(),
        '1.0.0'
    );
 
}
 
add_action( 'wp_enqueue_scripts', 'cookie_pop_scripts_and_styles' );