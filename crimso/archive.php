<?php
/*
Template Name: Archives
*/
get_header(); 
get_template_part('parts/preloader');
?>

<header>
  <?php get_template_part('parts/header'); ?>
</header>

<div id="container">
  <div id="content" role="main">

    <?php
    // Ensures this template is used for the current page
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content(); // Display page content if necessary
      }
    }
    ?>

    <h2>Archives by Month:</h2>
    <ul>
      <?php wp_get_archives(array('type' => 'monthly')); // List archives by month ?>
    </ul>

    <h2>Archives by Category:</h2>
    <ul>
      <?php wp_list_categories(array('title_li' => '')); // List categories without a title ?>
    </ul>

  </div><!-- #content -->
</div><!-- #container -->

<?php get_template_part('parts/sidebar'); ?>
<?php get_footer(); ?>
