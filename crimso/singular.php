<?php
get_header();
get_template_part('parts/preloader');
?>

<div class="singular">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php get_template_part('parts/header'); ?>
                </header>

                <div class="entry-content">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    the_content();
                    ?>
                </div>

            </article>

            <div class="container">
                <?php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>
            </div>
            <?php
        }
    } else {
        get_template_part('parts/content', 'none'); 
    }
    ?>
</div>

<?php
get_footer();
get_template_part('parts/sidebar');
?>