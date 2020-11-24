<?php

// Disable Gutternberg
add_filter('use_block_editor_for_post', '__return_false', 10);

function the_post_summary($length = 250, $string = ""){
	if($string){
		$content = $string;
	} else {
		$content = wp_strip_all_tags( get_the_content() );
	}
	if (strlen($content) > $length) {
		$content = substr($content, 0, $length) . '...';
	}
	echo $content;
}

function moshi_enqueue_scripts() {
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.js', array(), '', true);
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '', true);
	wp_enqueue_style( 'animate-css', get_stylesheet_directory_uri() . '/css/animate.css' );
}

add_action( 'wp_enqueue_scripts', 'moshi_enqueue_scripts' );

add_filter('next_post_link', 'post_link_attributes');
add_filter('previous_post_link', 'post_link_attributes');

function post_link_attributes($output) {
    $code = 'class="btn btn-primary read-more-button"';
    return str_replace('<a href=', '<a '.$code.' href=', $output);
}
