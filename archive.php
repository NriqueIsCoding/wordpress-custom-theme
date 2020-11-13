<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="post-archive-header-holder"
	<?php  if( has_post_thumbnail() ) { ?>
		style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"
	<?php } ?> >

	<div class="container header-container">
		<header class="entry-header">
			<div class="entry-subtitle">
				Enjoy the soothing experience!
			</div>
			<h1 class="entry-title">
				<?php single_term_title(); ?> 
			</h1>
		</header>
	</div>
</div>



<div class="wrapper" id="archive-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		
		<div class="classes-section">
			<div class="classes-section-text">
				<span>
					Because knowledge is power
				</span>
				<div class="title">
					<p>
						affordable classes for you
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<main class="site-main" id="archive-main">
					<?php if ( have_posts() ) { ?>
							<div class="row">
								<?php while ( have_posts() ) { ?>
										<div class="col-lg-6">
											<?php
												the_post();
												get_template_part( 'loop-templates/content', get_post_format() );

											?>
										</div>
								<?php } ?>
					<?php } else {
							get_template_part( 'loop-templates/content', 'none' );
						}
						?>
						</div>
				</main><!-- #main -->
			</div>

			<!-- <div class="col-lg-4">
				<div class="right-sidebar-blog-categories">
					<h3>Blog Categories</h3>
					<ul>
						<?#php
							// $categories = get_categories();

							// foreach($categories as $category) {
							// 	echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
							// }
						?>
					</ul>
				</div>
			</div> -->
		</div><!-- .row -->

		<div class="post-navigation-options">
			<?php
				// Display the pagination component.
				understrap_pagination();
			?>
		</div>
	</div><!-- #content -->
</div><!-- #archive-wrapper -->

<?php
get_footer();
