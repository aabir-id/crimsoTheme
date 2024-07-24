<?php
get_header();
get_template_part('parts/preloader');
?>

<header>
    <?php get_template_part('parts/header'); ?>
</header>

<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <?php while (have_posts()):
                        the_post(); ?>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><span>Posted On:</span> <a href="#"><?php echo get_the_date(); ?></a></li>
                                    <li><span>Posted By:</span> <a href="#"><?php the_author(); ?></a></li>
                                </ul>
                            </div>

                            <h3><?php the_title(); ?></h3>

                            <?php the_content(); ?>

                            <!-- Add other elements as needed -->
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="fas fa-bookmark"></i></span>
                                <?php the_tags('', ', ', ''); ?>
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-navigation">
                            <div class="navigation-links">
                                <div class="nav-previous">
                                    <?php previous_post_link('%link', '<i class="fa fa-arrow-left"></i> Prev Post'); ?>
                                </div>

                                <div class="nav-next">
                                    <?php next_post_link('%link', 'Next Post <i class="fa fa-arrow-right"></i>'); ?>
                                </div>
                            </div>
                        </div>

                        <!-- Include comments template here -->
                        <div class="comments-area">
                            <?php comments_template(); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
</section>

<?php
get_template_part('parts/sidebar');
get_footer(); 
?>