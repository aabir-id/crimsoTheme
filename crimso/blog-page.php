<?php /*
Template Name: Blog Page
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
                            <h2>Blog</h2>
                            <ul>
                                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Page Area -->
        <section class="blog-page-area ptb-100">
    <div class="container">
        <div class="row">
            <?php
            $query = new WP_Query(array('post_type' => 'post'));
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="blog-item">
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="blog-image">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full', ['alt' => get_the_title()]); ?>
                        </a>
                    </div>
                    <?php endif; ?>

                    <div class="single-blog-item">
                        <ul class="date">
                            <li><?php echo get_the_date('d'); ?></li>
                            <li><?php echo get_the_date('F'); ?></li>
                        </ul>

                        <ul class="blog-list">
                            <li>
                                <a href="#"><i class="fa fa-user-alt"></i> By <?php the_author(); ?></a>
                            </li>
                            <li>
                                <i class="far fa-comments"></i> <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?>
                            </li>
                        </ul>

                        <div class="blog-content">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p><?php the_excerpt(); ?></p>
                        </div>

                        <div class="blog-btn">
                            <a href="<?php the_permalink(); ?>" class="blog-btn-one">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php
            endif;
            ?>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="pagination-area">
                <?php
                the_posts_pagination(array(
                    'prev_text' => '<i class="fas fa-angle-double-left"></i>',
                    'next_text' => '<i class="fas fa-angle-double-right"></i>',
                ));
                ?>
            </div>
        </div>
    </div>
</section>
        <?php 
get_template_part('parts/sidebar');
get_footer(); 
?>
