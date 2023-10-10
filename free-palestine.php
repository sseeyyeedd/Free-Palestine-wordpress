<?php
/**
 * Plugin Name: Free Palestine - Palestine Flag
 * Description:This extension adds the Palestinian flag with the text "FREE PALESTINE" to your website.
 * Version: 1.0
 * Author: SeyedAli Hoseini
 * Author URI: https://sseeyyeedd.ir
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


function free_palestine_css() {
    wp_enqueue_style( 'free-palestine', plugin_dir_url( __FILE__ ) . 'free-palestine.css' );
}
add_action( 'wp_enqueue_scripts', 'free_palestine_css' );
function free_palestine_fixed() {
?>

<div class="free-palestine-flag">
        <div class="free-palestine-stripe free-palestine-black-stripe"></div>
        <div class="free-palestine-stripe free-palestine-white-stripe">
        FREE <span style="color:#007A4D;">PALESTINE</span>
        </div>
        <div class="free-palestine-stripe free-palestine-green-stripe"></div>
        <div class="free-palestine-red-triangle"></div>
    </div>

<?php
}
add_action( 'wp_footer', 'free_palestine_fixed' );