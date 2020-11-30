<?php
/**
 * Template Name: Template Home 
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="home-banner">
    <div class="home-banner-overlay"></div>
    <div class="container">
        <div class="home-banner-description-container">
            <div class="home-banner-column-description wow fadeInDown">
                <div class="home-banner-column-subtitle">
                    <p>
                        Enjoy the soothing experience!
                    </p>
                </div>
                <div class="home-banner-column-title">
                    <p>
                        Institute
                    </p>
                    <p>
                        <span style="color:#e77785">of Massage </span>
                    <p>
                    <p>
                        <span style="color:#e77785">& Esthetic</span>
                    </p>
                </div>
            
            </div>
            <div class="home-banner-column-buttons wow bounceInUp">
                <a class="btn btn-lg btn-primary show-now-button" href="<?php echo site_url('store/'); ?>" role="button">Shop now</a>
                <a class="btn btn-lg btn-primary find-more-button" href="<?php echo site_url('/category/classes/'); ?>" role="button">Find More</a>
            </div>
        </div>
    </div>  
</div>

<div class="jaime-banner">
    <div class="container">
        <div class="jaime-logo-container">
            <div class="logo-text"> 
                <p class="why-us-subtitle">
                    J'aime Natural Beauty
                </p>
                <p class="why-us-title"><span>Our Natural</span><br> Brand</p>
                <p class="why-us-text">
                This is how No Fuss came about, our natural skincare products brand which today is one of the most reliable and responsible on the market.  No Fuss organic skincare products are sourced where possible from organic sources. The products have been carefully selected to work effectively for both men and women of all skin types.
                </p>
            </div>
            <div class="logo"> 
                <img src="<?php echo bloginfo('template_url'); ?>/img/jaime_logo.png"/>
            </div>
        </div>
    </div>
</div>

<div class="home-call-to-action-banner">
    <div class="container">
       
        <div class="home-to-call-action-container" >
            <div class="home-call-to-action-text">
                <div class="card call-to-action-text">
                    <div class="card-body">
                        <span>BEAUTY / MASSAGES / SPA</span>
                        <h4 class="card-title">WHAT DO YOU NEED?</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>

                        <div class="call-to-action-button">
                            <button class="btn btn-lg btn-primary learn-more-button" type="submit">Learn More</button>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="home-call-to-action wow fadeInDown" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;">
                <div class="card call-to-action">
                    <div class="card-img-top">
                        <div class="image"></div>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><span>NAILS</span> CENTER</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                    </div>
                </div>
                <div class="card call-to-action second">
                    <div class="card-img-top">
                        <div class="image"></div>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><span>SPA</span> CENTER</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                    </div>
                </div>
                <div class="card call-to-action third">
                    <div class="card-img-top">
                        <div class="image"></div>
                    </div>
                    <div class="card-body">
                        <p class="card-title"><span>BEAUTY </span> CENTER</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="why-us-container">
            <div class="why-us-section"> 
                <p class="why-us-title"><span>Why Choose</span> our products</p>
                <p class="why-us-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                </p>
            </div>
            <div class="why-us-nature">
                <div class="icon">
                    <i class="fa fa-envira" aria-hidden="true"></i>
                </div>
                <div class="description">
                    <span>100% Natural </span><br>Products
                </div>
            </div>
            <div class="why-us-trophy">
                <div class="icon">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                </div>
                <div class="description">
                    <span>Professional</span> <br> Beauticians
                </div>
            </div>
            <div class="why-us-offer">
                <div class="icon">
                    <i class="fa fa-tag"></i>
                </div>
                <div class="description">
                    <span>Specials Offers </span><br> for you
                </div>
            </div>
        </div>
    </div>
</div>

<div class="products-banner">
    <div class="container">
        <div class="products-banner-container">
            <div class="products-text">
                <span>
                    Confort for every woman
                </span>
                <div class="title">
                    <p>
                        our special offers
                    </p>
                </div>
                <div class="description">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="product-offers">
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            // 'product_cat' => 'Name_of_category'
                            'orderby' => 'menu_order',
                            'order' => 'ASC',
                            'posts_per_page' => 3
                        );

                        $loop = new WP_Query( $args );

                        if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) : $loop->the_post();
                    ?>

                    <div class="col-sm-4">
                        <div class="product">
                            <div class="image-holder"
                                <?php  if( has_post_thumbnail() ) { 
                                    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
                                ?>
                                    style="background-image:url(<?php echo $image[0]; ?>)"
                                <?php } ?> >
                            </div>
                            <div class="body-holder">
                                <p class="product-title"><?php the_title(); ?></p>
                                <p class="product-price">from &nbsp; &nbsp; <span> $<?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?> </span></p>
                                <div class="product-details">
                                    <?php 
                                    
                                    $excerpt = get_the_excerpt();
                                    $excerpt = substr( $excerpt , 0, 180);
                                    echo $excerpt;
                                    
                                    ?>
                                </div>
                                <div class="product-link">
                                    <a class="btn btn-primary read-more-button" href="<?php echo the_permalink();?>" role="button">Read More</a>
                                </div>
                            </div>      
                        </div>
                    </div>

                    <?php
                            endwhile;
                        } else {
                            echo __( 'No products found' );
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="products-show-me-more">
                <div class="products-show-me-more-link">
`                    <a class="btn btn-primary show-me-more-button" href="<?php echo site_url('store/'); ?>" role="button">Show me more products</a>
`                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials-banner">
    <div class="container">
        <div class="testimonials-container">
            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial">
                            <div class="testimonial-image">
                                <img src="#" class="rounded" alt="">
                            </div>
                            <div class="testimonial-customer-name">
                                <P>Marcus Fields</P>
                                <span>Marketing Manager</span>    
                            </div>
                            <div class="testimonials-text">
                            <p>The blinding splendor of the diamond, the mighty power of the rocket!</p> 
                            </div>
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <div class="testimonial-image">
                                <img src="#" class="rounded" alt="">
                            </div>
                            <div class="testimonial-customer-name">
                                <p>Kike 2020</p>
                                <span>Marketing Manager</span>    
                            </div>
                            <div class="testimonials-text">
                                <p>The blinding splendor of the diamond, the mighty power of the rocket!</p> 
                            </div>
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <div class="testimonial-image">
                                <img src="#" class="rounded" alt="">
                            </div>
                            <div class="testimonial-customer-name">
                                <p>Joanna Joanna</p> 
                                <span>Marketing Manager</span>    
                            </div>
                            <div class="testimonials-text">
                                <p>The blinding splendor of the diamond, the mighty power of the rocket!</p> 
                            </div>
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

    
<div class="blog-banner">
    <div class="container">
        <div class="blogs-container">
            <div class="blogs-text">
                <span>
                    Because knowledge is power
                </span>
                <div class="title">
                    <p>
                        Our latest news and classes
                    </p>
                </div>
                <!-- <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div> -->
            </div>
            <div class="blogs">

                <?php 
                    query_posts(array(
                        'category__not_in' => array($headline),
                        'post__not_in' => $postnotin,
                        'paged' => $paged,
                        'posts_per_page' => 5
                    ));

                if ( have_posts() ) { 
                    $postCount = 0;     
                ?>

                <?php while ( have_posts() ) : the_post(); $postCount++;
                    if ($postCount < 5) {
                ?>
                        <div class="card">
                            <div class="card-img-top">
                                <img src="
                                    <?php   
                                        if( has_post_thumbnail() ) { 
                                            echo get_the_post_thumbnail_url();
                                        } else {
                                            echo bloginfo('template_url') . "/img/home-classes-placeholder.jpg";
                                        }
                                    ?>
                                    "/>
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <p> by
                                        <?php 
                                            the_author();
                                        ?>
                                    </p>  
                                </div>
                                <div class="blog-title">
                                    <p>
                                        <?php 
                                            the_title();
                                        ?>
                                    </p>
                                </div>
                                <div class="blog-details">
                                    <p>
                                        <?php the_post_summary(); ?>
                                    </p>
                                </div>
                                <div class="blog-link">
                                    <a class="btn btn-primary read-more-button" href="<?php echo the_permalink();?>" role="button">Read More</a>
                                </div>
                            </div>
                        </div>
                    
                    <?php } ?> 

                <?php endwhile; ?>

                <?php } ?>
            </div>
            <div class="blogs-show-me-more">
                <div class="blogs-show-me-more-link">
                    <a class="btn btn-primary show-me-more-button" href="<?php echo site_url('/category/classes/'); ?>" role="button">Show me more Classes</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
