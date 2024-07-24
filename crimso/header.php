<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php
    if (is_front_page()) {
        echo 'Crimso - SEO & IT Agency HTML Template';
    } else {
        wp_title('|', true, 'right');
        bloginfo('name');
    }
    ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>