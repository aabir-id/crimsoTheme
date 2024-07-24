
        <div class="navbar-area navbar-two">
            <div class="crimso-responsive-nav">
                <div class="container">
                    <div class="crimso-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png"
                                    class="black-logo" alt="image">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-2.png"
                                    class="white-logo" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="crimso-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png"
                                class="black-logo" alt="image">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-2.png"
                                class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="" class="nav-link active">Home
                                        <i class="fa fa-plus"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">Home One</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home Two</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link active">Home Three</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ); ?>" class="nav-link">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Services
                                        <i class="fa fa-plus"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">Services</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-services.html" class="nav-link">Services Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Projects
                                        <i class="fa fa-plus"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="projects.html" class="nav-link">Projects</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="projects-two.html" class="nav-link">Projects Two</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-projects.html" class="nav-link">Projects Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="nav-link">Blog
                                        <i class="fa fa-plus"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'blog' ) ) ); ?>" class="nav-link">Blog</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-blog.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Pages
                                        <i class="fa fa-plus"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="features.html" class="nav-link">Features</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">Pricing</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Shop</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="shop.html" class="nav-link">Shop</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="single-product.html" class="nav-link">Single Products</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="cart.html" class="nav-link">Cart</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="checkout.html" class="nav-link">Checkout</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'error-404' ) ) ); ?>" class="nav-link">404 Error</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-options">
                                <div class="option-item"><i class="search-btn fa fa-search"></i>
                                    <i class="close-btn fa fa-times"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search"
                                                    type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="burger-menu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>