<?php
/**
 * Plugin Name: Fractional review 
 * Author: Rupom
 * Description: plugin description
 * Version: 1.0
 *
 */
function callback_for_fractional_review($arrtibute){
    // $default = array(
    //     'review'=> '4.7',
    // );
    // $frac_review = shortcode_atts($default, $arrtibute);
    $data = <<<EOD
        <div class="container">
                <p><span class="stars">{$arrtibute['review']}</span></p>
        </div>
    EOD;
  
   return $data;
}
add_shortcode( 'fractional_review', 'callback_for_fractional_review' );
function fraction_css_js(){
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'fractional_css', plugin_dir_url( __FILE__ )."/asset/css/style.css" );
    wp_enqueue_script( "fractional_js", plugin_dir_url( __FILE__ )."/asset/js/script.js", array('jquery'), time(), true );
}

add_action( 'wp_enqueue_scripts', 'fraction_css_js' );
?>