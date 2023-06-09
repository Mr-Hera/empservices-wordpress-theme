<?php

    function empservices_theme_support() {
        // Adds dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnail');
    }

    add_action('after_setup_theme', 'empservices_theme_support');

    function empservices_menus() {
        $locations = array(
            'primary' => "Desktop Primary Navbar",
            'footer' => "Primary Footer",
        );

        register_nav_menus($locations);
    }

    add_action('init', 'empservices_menus');

    function empservices_register_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('empservices-style', get_stylesheet_directory_uri(). "/style.css", array('empservices-bootstrap'), $version, 'all');
        wp_enqueue_style('empservices-bootstrap', get_stylesheet_directory_uri(). "/assets/css/bootstrap/css/bootstrap.min.css", array(), '1.0', 'all');
        wp_enqueue_style('empservices-bootstrap-icon', get_stylesheet_directory_uri(). "/assets/css/bootstrap-icons/bootstrap-icons.css", array(), '1.0', 'all');
        wp_enqueue_style('empservices-aos', get_stylesheet_directory_uri(). "/assets/css/aos/aos.css", array(), '1.0', 'all');
        wp_enqueue_style('empservices-remixicon', get_stylesheet_directory_uri(). "/assets/css/remixicon/remixicon.css", array(), '1.0', 'all');
        wp_enqueue_style('empservices-swiper', get_stylesheet_directory_uri(). "/assets/css/swiper/swiper-bundle.min.css", array(), '1.0', 'all');
        wp_enqueue_style('empservices-glightbox', get_stylesheet_directory_uri(). "/assets/css/glightbox/css/glightbox.min.css", array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'empservices_register_styles');

    function empservices_register_scripts() {
        wp_enqueue_script('empservices-bootstrap-js', get_template_directory_uri(). "/assets/js/bootstrap/js/bootstrap.bundle.js", array(), '1.0', true);
        wp_enqueue_script('empservices-aos-js', get_template_directory_uri(). "/assets/js/aos/aos.js", array(), '1.0', true);
        wp_enqueue_script('empservices-php-email-form-js', get_template_directory_uri(). "/assets/js/php-email-form/validate.js", array(), '1.0', true);
        wp_enqueue_script('empservices-swiper-js', get_template_directory_uri(). "/assets/js/swiper/swiper-bundle.min.js", array(), '1.0', true);
        wp_enqueue_script('empservices-purecounter-js', get_template_directory_uri(). "/assets/js/purecounter/purecounter.js", array(), '1.0', true);
        wp_enqueue_script('empservices-isotope-layout-js', get_template_directory_uri(). "/assets/js/isotope-layout/isotope.pkgd.min.js", array(), '1.0', true);
        wp_enqueue_script('empservices-glightbox-js', get_template_directory_uri(). "/assets/js/glightbox/js/glightbox.min.js", array(), '1.0', true);
        wp_enqueue_script('empservices-main-js', get_template_directory_uri(). "/assets/js/main/main.js", array(), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'empservices_register_scripts');
?>