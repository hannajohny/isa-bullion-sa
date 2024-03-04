<?php
/* Template Name: Default */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container pb-80 pt-20">
        <h1 class="text-center text-large mt-30"><?php the_title(); ?></h1>
        <div class="mt-40">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>