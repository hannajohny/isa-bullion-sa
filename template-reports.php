<?php
/* Template Name: Reports */
?>

<?php get_header(); ?>

<div class="container">
    <div class="top-section">
        <h1 class="text-large text-center mb-20 mt-40"><?php the_title(); ?></h1>
        <div class="d-flex align-items-center justify-content-center">
            <div class="text-center mb-60" style="max-width: 600px;">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<div class="container pb-80">
    <div class="bp-card bp-card-rounded box-shadow calendar-card">
        <div id="calendar" class="calendar-wr"></div>
    </div>
</div>

<?php get_footer(); ?>