<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php
	$post = get_post();
	setup_postdata($post);
?>

<div class="post-header"
	<?php  if( has_post_thumbnail() ) { ?>
		style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"
	<?php } ?> >

	<div class="container header-container">
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header>
	</div>
</div>

<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="post-header-metadata">
			<div class="row">
				<div class="item author">
					By <?php echo get_the_author() ?>
				</div>
				<span> | </span>
				<div class="item category">
					<?php echo get_the_category_list( esc_html__( ', ', 'understrap' )) ?>
				</div>
				<span> | </span>
				<div class="item date">
					<?php echo get_the_date() ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<main class="site-main" id="main">
					<?php
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/content', 'single' );
						}
					?>
				</main>
			</div>
			<div class="offset-lg-1 col-lg-4">
				<div class="right-sidebar-blog-categories">
					<h3>Blog Categories</h3>
					<ul>
						<li>First Category</li>
						<li>Second Category</li>
						<li>Third Category</li>
						<li>Fourth Category</li>
						<li>Fifth Category</li>
						<li>Sixth Category</li>

					</ul>
				</div>
			</div>
		</div>

		<div class="post-navigation-options">
			<?php understrap_post_nav(); ?>
		</div>
	</div>
</div>

<?php
get_footer();
