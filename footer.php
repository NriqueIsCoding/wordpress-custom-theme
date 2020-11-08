<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="contact-us-banner">
		<div class="contact-us-container">`
			<div class="container">
				<div class="contact-us-title">
					<p>Contact Us</p>
				</div>
				<div class="contact-us-subtitle">
					Have a question?
				</div>
				<div class="contact-us-description">
					<div class="address"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;
						Address: <br> Bentonville, Arkansas
					</div>
					<div class="phone"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
						Phone: <a href="tel:+1 561-768-2538">+1 561-768-2538</a>
						
					</div>
					<div class="email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; 
						Email: <a href="mailto:joannaalexis26@gmail.com">joannaalexis26@gmail.com</a>
						
					</div>
					<div class="website"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
						Website:  <a href="http://www.ilovenaturalbeauty">www.ilovenaturalbeauty.com</a>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="map-container">
			<div class="iframe-holder">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102807.24959019267!2d-94.30886462323588!3d36.36740190995753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c910004ed64949%3A0xda808cc82425bf02!2sBentonville%2C%20AR!5e0!3m2!1sen!2sus!4v1604285729393!5m2!1sen!2sus" 
					width="100%" height="100%" frameborder="0" style="border:0;" marginheight="0" marginwidth="0" allowfullscreen="" aria-hidden="false" tabindex="0">
				</iframe>
			</div>
		</div>
	</div>

	<div class="follow-us-container">
		<div class="container">
			<div class="follow-us-text">
				<span>
					VISIT US ON SOCIAL NETWORKS
				</span>
				<p>
					FOLLOW US
				</p>
			</div>
			<div class="icons">
				<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/jaimenaturalbeauty/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://www.linkedin.com/in/joanna-alexis-mba-333a63a4/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
				<a href="https://www.instagram.com/invites/contact/?i=1qo3tk0yfgetx&utm_content=49mge"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
		</div>          
	</div>

	<div class="copyright-container">
		<div class="container">
			<div class="details">
				<p>© Copyright 2020 <span>NriquesCoding</span></p>
			</div>
		</div>
	</div>
</div>

</div><!-- #page we need this extra closing tag here -->


</body>

<?php wp_footer(); ?>

</html>

