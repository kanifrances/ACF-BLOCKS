<?php

/*
Plugin Name: Advanced Custom Fields for passports: 
Plugin URI: PLUGIN_URL
Description: A plugin for ACF block 
Version: 1.0.0
Author: Fay
License: GPLv2 or later
License URI: 
*/


defined( 'ABSPATH') or die('No authorised access');



add_action('acf/init', 'pass_acf_block');
function pass_acf_block() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'passblock',
            'title'             => __('Advanced Custom Fields for passports'),
            'description'       => __('A plugin for ACF that allows you to select any district from a list.'),
            'render_template'   => plugin_dir_path(__FILE__).'template-parts/blocks/passport_template.php',  
            'category'          => 'Text',
            'icon'              => 'format-gallery',
            'keywords'          => array('country','district'),
            'enqueue_assets'    => function(){
                wp_enqueue_style('testimonial-block', plugin_dir_url(__FILE__) . 'template-parts/assets/css/testimonial.css');
            }

           
        ) );
    }
}



  

	
?>