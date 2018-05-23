<?php 
function theme_styles() {

	wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/bootstrap-theme.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js',get_template_directory_uri() .'/js/bootstrap.js');
	wp_enqueue_script( 'bootstrap_min_js',get_template_directory_uri() .'/js/bootstrap.min.js');

}

add_action( 'wp_enqueue_scripts', 'theme_js');

//menu 
function twbs_register_menus(){
    register_nav_menu('primary-nav',__('Primary navigation at top of page.'));
}
add_action('init','twbs_register_menus' );


//code pour fonctionnement du mail 
$to = $_POST['mail']; 
$sujet = $_POST['titre'];
$message = $_POST['message']; 

wp_mail($to, $sujet, $message); 

?>