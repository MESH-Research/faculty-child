<?php
add_action( 'wp_enqueue_scripts', 'enqueue_faculty_child' );
function enqueue_faculty_child() {
	wp_enqueue_style('faculty-css', './faculty/style.css' );
	wp_enqueue_style('faculty-child-css', './faculty-child/style.css');
	wp_enqueue_script('faculty-child-js', './faculty-child/js/script.js', array( 'jquery' ), '1.0', true );
}