<?php 
// load css js
function load_css_js(){
    // load css
    /*
    <!-- Bootstrap Css -->
   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome Css -->
   <link href="assets/css/font-awesome.min.css" rel="stylesheet">
   <!-- Magnific Popup Css -->
   <link href="assets/css/magnific-popup.css" rel="stylesheet">
   <!-- Owl Carousel Css -->
   <link href="assets/css/owl.carousel.css" rel="stylesheet">
   <!-- Main Css -->
   <link href="assets/css/style.css" rel="stylesheet">
   <!-- Responsive Css -->
   <link href="assets/css/responsive.css" rel="stylesheet">

   <!-- Main JS -->
   <script src="assets/js/jquery.min.js"></script>
   <!-- Popper JS -->
   <script src="assets/js/popper.min.js"></script>
   <!-- Bootstrap JS -->
   <script src="assets/js/bootstrap.min.js"></script>
   <!-- Owl Carousel JS -->
   <script src="assets/js/owl.carousel.min.js"></script>
   <!-- Manific Popup JS -->
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <!-- Isotope JS -->
   <script src="assets/js/isotope.min.js"></script>
   <!-- Imageload JS -->
   <script src="assets/js/imageloaded.min.js"></script>
   <!-- Counter JS -->
   <script src="assets/js/jquery.counterup.min.js"></script>
   <!-- Waypoint JS -->
   <script src="assets/js/waypoint.min.js"></script>
   <!-- Main JS -->
   <script src="assets/js/main.js"></script>
    */ 


    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array() , "4.5", "all");
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array() , "4.5", "all");
    wp_enqueue_style('magnific', get_template_directory_uri().'/assets/css/magnific-popup.css', array() , "4.5", "all");
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array() , "4.5", "all");
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array() , "4.5", "all");
    wp_enqueue_style(get_stylesheet_uri());

    // load js
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/jquery.min.js', array() , "4.5", true);
    wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', array() , "4.5", true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js', array() , "4.5", true);
    wp_enqueue_script('owl-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array() , "4.5", true);
    wp_enqueue_script('magnific-js', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array() , "4.5", true);
    wp_enqueue_script('isotope-js', get_template_directory_uri().'/assets/js/isotope.min.js', array() , "4.5", true);
    wp_enqueue_script('imageLoad-js', get_template_directory_uri().'/assets/js/imageloaded.min.js', array() , "4.5", true);
    wp_enqueue_script('counter-js', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array() , "4.5", true);
    wp_enqueue_script('wayPoint-js', get_template_directory_uri().'/assets/js/waypoint.min.js', array() , "4.5", true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array() , "4.5", true);

}

add_action('wp_enqueue_script', 'load_css_js');


?>