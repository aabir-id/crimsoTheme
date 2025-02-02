<?php /*
Template Name: Error 404
*/
get_header();
?>


 <!-- Start Error Area -->
 <section class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error-content">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/404.png" alt="error">
        
                            <h3>Page Not Found</h3>
                            <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
        
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="default-btn-one">
                                Go to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Error Area -->

