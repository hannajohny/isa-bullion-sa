<?php
/* Template Name: About */
?>

<?php get_header(); ?>

<div class="page-banner"></div>

<div class="container">
    <h1><?php  the_title(); ?></h1>
    <p><?php the_field('test_field') ?></p>
</div>

<?php get_footer(); ?>