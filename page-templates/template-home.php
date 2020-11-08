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
                <button class="btn cpgreen btn-lg btn-primary show-now-button" type="submit">Shop Now</button>
                <button class="btn cpgreen btn-lg btn-primary find-more-button" type="submit">Find More</button>
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
                <div class="card">
                    <div class="card-body">
                        <p class="product-icon"></p>
                        <p class="product-title">hair cutting</p>
                        <p class="product-price">from <span> $47 </span></p>
                        <div class="product-details">
                        <ul>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Amet, consectetur</li>
                            <li>Adipisicing elit, sed do</li>
                            <li>Eiusmod tempor labore</li>
                        </ul> 
                        </div>
                        <div class="product-link">
                            <button class="btn cpgreen btn-lg btn-primary learn-more-button" type="submit">buy now</button>
                        </div>
                    </div>
                </div>
                <div class="card second">
                    
                    <div class="card-body">
                        <p class="product-icon"></p>
                        <p class="product-title">oil massage</p>
                        <p class="product-price">from <span> $47 </span></p>
                        <div class="product-details">
                        <ul>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Amet, consectetur</li>
                            <li>Adipisicing elit, sed do</li>
                            <li>Eiusmod tempor labore</li>
                        </ul> 
                        </div>
                        <div class="product-link">
                            <button class="btn cpgreen btn-lg btn-primary learn-more-button" type="submit">buy now</button>
                        </div>
                    </div>
                </div>
                <div class="card third">
                    
                    <div class="card-body">
                        <p class="product-icon"></p>
                        <p class="product-title">make up</p>
                        <p class="product-price">from <span> $47 </span></p>
                        <div class="product-details">
                        <ul>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Amet, consectetur</li>
                            <li>Adipisicing elit, sed do</li>
                            <li>Eiusmod tempor labore</li>
                        </ul> 
                        </div>
                        <div class="product-link">
                            <button class="btn cpgreen btn-lg btn-primary learn-more-button" type="submit">buy now</button>
                        </div>
                    </div>
                </div>
                <div class="card fourth">
                    
                    <div class="card-body">
                        <p class="product-icon"></p>
                        <p class="product-title">aroma therapy</p>
                        <p class="product-price">from <span> $47 </span></p>
                        <div class="product-details">
                        <ul>
                            <li>Lorem ipsum dolor sit</li>
                            <li>Amet, consectetur</li>
                            <li>Adipisicing elit, sed do</li>
                            <li>Eiusmod tempor labore</li>
                        </ul> 
                        </div>
                        <div class="product-link">
                            <button class="btn cpgreen btn-lg btn-primary learn-more-button" type="submit">buy now</button>
                        </div>
                    </div>
                </div>
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
                    latest events & news
                </span>
                <div class="title">
                    <p>
                        From the Blog
                    </p>
                </div>
                <div class="description">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            <div class="blogs">
                <div class="card">
                    <div class="card-img-top">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/post-sample-1.jpg"/>
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <p>By Lisa Emerson</p>  
                        </div>
                        <div class="blog-title">
                            <p>Beauty Post</p>
                        </div>
                        <div class="blog-details">
                            <p>
                                Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.
                            </p>
                        </div>
                        <div class="blog-link">
                            <button class="btn cpgreen btn-lg btn-primary read-more-button" type="submit">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="card second">
                    <div class="card-img-top">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/post-sample-2.jpg"/>
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <p>By Lisa Emerson</p>  
                        </div>
                        <div class="blog-title">
                            <p>Beauty Post</p>
                        </div>
                        <div class="blog-details">
                            <p>
                                Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.
                            </p>
                        </div>
                        <div class="blog-link">
                            <button class="btn cpgreen btn-lg btn-primary read-more-button" type="submit">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="card third">
                    <div class="card-img-top">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/post-sample-3.jpg"/>
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <p>By Lisa Emerson</p>  
                        </div>
                        <div class="blog-title">
                            <p>Beauty Post</p>
                        </div>
                        <div class="blog-details">
                            <p>
                                Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.
                            </p>
                        </div>
                        <div class="blog-link">
                            <button class="btn cpgreen btn-lg btn-primary read-more-button" type="submit">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="card fourth">
                    <div class="card-img-top">
                    <img src="<?php echo bloginfo('template_url'); ?>/img/post-sample-4.jpg"/>
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <p>By Lisa Emerson</p>  
                        </div>
                        <div class="blog-title">
                            <p>Beauty Post</p>
                        </div>
                        <div class="blog-details">
                            <p>
                                Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.
                            </p>
                        </div>
                        <div class="blog-link">
                            <button class="btn cpgreen btn-lg btn-primary read-more-button" type="submit">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
