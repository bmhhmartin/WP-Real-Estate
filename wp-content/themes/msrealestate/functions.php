<?php
    function rs_theme_wrapping(){
        load_theme_textdomain('rs');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails' );

    }

    add_action('after_setup_theme', 'rs_theme_wrapping');

    function rs_assets(){
        wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/css/bootstrap.min.css', null, time());
        wp_enqueue_style('fontawesome_css', get_template_directory_uri().'/assets/css/fontawesome.css', null, time());
        wp_enqueue_style('main_css', get_template_directory_uri().'/assets/css/templatemo-574-mexant.css', null, time());
        wp_enqueue_style('owl_css', get_template_directory_uri().'/assets/css/owl.css', null, time());
        wp_enqueue_style('animate_css', get_template_directory_uri().'/assets/css/animate.css', null, time());
        wp_enqueue_style('swiper_css', 'https://unpkg.com/swiper@7/swiper-bundle.min.css', null, time());
        wp_enqueue_style('custom_css', get_template_directory_uri().'/assets/css/custom.css', null, time());

        wp_enqueue_script('jquery_js', get_template_directory_uri().'/assets/js/jquery.min.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('bootstrap_bundle_js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('isotope_js', get_template_directory_uri().'/assets/js/isotope.min.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('owl_carousel_js', get_template_directory_uri().'/assets/js/owl-carousel.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('tabs_js', get_template_directory_uri().'/assets/js/tabs.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('swiper_js', get_template_directory_uri().'/assets/js/swiper.js', array('jquery'), '1.0',time(),true);
        wp_enqueue_script('custom_js', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0',time(),true);
    }

    add_action('wp_enqueue_scripts', 'rs_assets');

    function rs_nav_menu() {
        register_nav_menus(
            array(
                'header_menu'=>'Header Menu',
                'footer_menu'=> 'Footer Menu',
            )
        );
    }
    add_action('init', 'rs_nav_menu' );


?>