<?php
get_template_part('parts/preloader');
get_header();
?>
<header>
<?php get_template_part('parts/header'); ?>
</header>

<main id="main" class="site-main">
    <div id="primary" class="content-area">
        <?php get_template_part('parts/content'); ?>
    </div>
    <?php get_template_part('parts/sidebar'); ?>
    </main>
<footer>
<?php get_footer(); ?>