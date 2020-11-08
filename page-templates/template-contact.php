<?php
/**
 * Template Name: template contact page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<header class="page-header entry-header"
	<?php  if( has_post_thumbnail() ) { ?>
		style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)"
	<?php } ?> >

	<div class="container">
		<div class="entry-subtitle">
			Enjoy the soothing experience!
		</div>
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</div>
</header>

<div class="contact-us-section">
    <div class="container">
        
        <div class="contact-us-call-to-action -call-to-action wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
            <div class="card call-to-action">
                <div class="card-img-top">
                    <div class="image">
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-title">We are here</p>
                    <p class="card-text">
                        908 New Hampshire Avenue <br>
                        Northwest #100, Washington, <br>
                        DC 20037, United States
                    </p>
                </div>
            </div>
            <div class="card call-to-action second">
                <div class="card-img-top">
                    <div class="image">
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-title">call us</p>
                    <p class="card-text">
                        Phone: +1 916-875-2235 <br>
                        Mobile: +1 916-875-2235 <br>
                        Fax: +1 916-875-2235
                    </p>
                </div>
            </div>
            <div class="card call-to-action third">
                <div class="card-img-top">
                    <div class="image">
                        <span class="fa-stack">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                        </span> 
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-title">working hours</p>
                    <p class="card-text">
                        Monday-Friday: 9:00 – 22:00 <br>
                        Saturday: 11:00 – 20:00 <br>
                        Sunday: 11:00 – 17:00
                    </p>
                </div>
            </div>
        </div>
           
    </div>
</div>

<div class="send-message-section">
    <div class="container">
        <div class="send-message-container">
            <div class="send-message-text">
                <span>
                    have any questions?
                </span>
                <div class="title">
                    <p>
                        send a message
                    </p>
                </div>
            </div>

            <div class="send-message-holder">
                <?php echo do_shortcode('[contact-form-7 id="150" title="Contact Us Form"]') ?>
            </div>
        </div>
    </div>
</div>

<div class="wrapper template-contact-us" id="full-width-page-wrapper">
    <div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<?php
                        while ( have_posts() ) {
                            the_post();
                            get_template_part( 'loop-templates/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            }
                        }
					?>
				</main><!-- #main -->
            </div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
