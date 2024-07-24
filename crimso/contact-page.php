<?php /*
Template Name: Contact Page
*/
get_header();
get_template_part('parts/preloader');
?>

<header>
<?php get_template_part('parts/header'); ?>
</header>

        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            
                            <div class="content">
                                <h4>Phone / Fax</h4>
                                <p><a href="#">(+021) 245522455</a></p>
                                <p><a href="#">(+000) 245522455</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            
                            <div class="content">
                                <h4>E-mail</h4>
                                <p><a href="#">hello@crimso.com </a></p>
                                <p><a href="#">support@crimso.com</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-box">
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            
                            <div class="content">
                                <h4>Location</h4>
                                <p>2750 Quadra Street , Park Area, <span>Victoria, Canada.</span></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <div class="contact-text">
                            <h3>Get in Touch</h3>
                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam tempus magna vel turpis pharetra dictum.</p>
                            <p>Sed blandit tempus purus, sed sodales leo rutrum vel. Nam vulputate ipsum ac est congue, eget commodo magna lobortis.</p>

                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-6">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control textarea-hight" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
    
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="send-btn-one">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Contact Area -->

        <!-- Start Subscribe Section -->
        <section class="subscribe-section">
            <div class="container-fluid">
                <div class="subscribe-area-content">
                    <div class="subscribe-content">
                        <span class="sub-title">Get Started Instantly!</span>
                        <h2>Get the only new update from this newsletter</h2>

                        <form class="newsletter-form" data-toggle="validator">
                            <input type="email" class="form-control" placeholder="Your Email" name="EMAIL" required autocomplete="off">

                            <button class="default-btn" type="submit">
                                Subscribe
                            </button>

                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Section -->

<?php 
get_template_part('parts/sidebar');
get_footer(); 
?>
