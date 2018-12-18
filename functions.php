<?php
function theme_set_creative(){
load_theme_textdomain( 'creative');
add_theme_support('custom-background');
register_nav_menu('top_menuid',__('Top Menu','creative'));
add_theme_support( 'post-thumbnails');
add_theme_support( 'title-tag');
}
add_action('after_setup_theme','theme_set_creative');

function creative_assets(){
   
	           // wp_enqueue_style('style',get_stylesheet_uri());
                wp_enqueue_style( 'Creative-bootstrapmin', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '2.1.2' );

          
                wp_enqueue_style( 'Creative-font-awesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css', array(), '4.6.1' );

                wp_enqueue_style("Creative-google-Fonts","https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'");

                wp_enqueue_style("Creative-google-Font","https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic");

                 wp_enqueue_style( 'Creative-magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/magnific-popup.css', array(), NULL );

                  wp_enqueue_style( 'Creative-min-css', get_template_directory_uri() . '/css/creative.min.css', array(), NULL );

                    wp_enqueue_script( 'Creative-bootstrap-bundle', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), NULL, TRUE );

                    wp_enqueue_script( 'Creative-jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array( 'jquery' ), NULL, TRUE );

                     wp_enqueue_script( 'Creative-scrollreveal', get_template_directory_uri() . '/vendor/scrollreveal/scrollreveal.min.js', array( 'jquery' ), NULL, TRUE );
                     wp_enqueue_script( 'Creative-magnific-popup', get_template_directory_uri() . '/vendor/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ), NULL, TRUE );
                      wp_enqueue_script( 'Creative-custom-js', get_template_directory_uri() . '/js/creative.min.js', array(), NULL, TRUE );

                }
add_action('wp_enqueue_scripts','creative_assets');



?>