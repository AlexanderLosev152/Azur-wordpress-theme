<?php
add_action( 'wp_enqueue_scripts', function (){
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/style.css');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script.js');
});
?>
