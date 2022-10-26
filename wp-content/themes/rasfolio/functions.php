<!-- All wp funtions will define here -->
<?php
    // language transalation setup 
    load_theme_textdomain('rasfolio', get_template_directory().'/languages');

    // dynamic site/page title
    function rasfolio_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails', array('post'));

    }
    // hocks for title and others
    add_action('after_setup_theme','rasfolio_setup');

    // adding style and js
    function rasfolio_assets() {
        /* 
        *CSS and Other Style Assects
        */
        //  Favicons
        wp_enqueue_style('favicon', get_template_directory_uri().'/assets/img/favicon.png', array(), '1.0.0', 'all');
        wp_enqueue_style('apple-touch-icon', get_template_directory_uri().'/assets/img/apple-touch-icon.png', array(), '1.0.0', 'all');

        // Google Fonts
        wp_enqueue_style('googleapis', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i', array(), '1.0.0', 'all');
        // Vendor CSS Files
        wp_enqueue_style('stylesheet_aos', get_template_directory_uri().'/assets/vendor/aos/aos.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap-icons', get_template_directory_uri().'/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), '1.0.0', 'all');
        wp_enqueue_style('boxicons', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('glightbox', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('swiper-bundle', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css', array(), '1.0.0', 'all');
        // Template Main CSS File
        wp_enqueue_style('stylesshet', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
        // theme Main Css
        wp_enqueue_style( 'main', get_stylesheet_uri() );

        /* 
        *Javascript and jQuery
        */
        // Vendor JS Files
        wp_enqueue_script( 'purecounter_vanilla', get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'aos', get_template_directory_uri().'/assets/vendor/aos/aos.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'glightbox', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'swiper', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'typed', get_template_directory_uri().'/assets/vendor/typed.js/typed.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/vendor/waypoints/noframework.waypoints.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'validate', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js', array('jquery'), '1.0.0', true);
        // Template Main JS File
        wp_enqueue_script( 'mainJs', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts' ,'rasfolio_assets');