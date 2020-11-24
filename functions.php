<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/moshi.php',
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action( 'woocommerce_before_single_product', 'bbloomer_prev_next_product' );
 
// and if you also want them at the bottom...
add_action( 'woocommerce_after_single_product', 'bbloomer_prev_next_product' );
 
function bbloomer_prev_next_product(){
	echo '<div class="prev_next_buttons">';
		// 'product_cat' will make sure to return next/prev from current category
			$previous = next_post_link('%link', '&larr; PREVIOUS', TRUE, ' ', 'product_cat');
			$next = previous_post_link('%link', 'NEXT &rarr;', TRUE, ' ', 'product_cat');
		
		echo $previous;
		echo $next;
		
	echo '</div>'; 
}
