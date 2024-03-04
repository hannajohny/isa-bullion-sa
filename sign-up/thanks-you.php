<?php
/* Template Name: Signup - Thank you */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container pt-20">
        <div class="row align-items-center justify-content-center">
            <h1 class="text-center text-large mb-40">Congratulations!</h1>
            <div class="text-center" style="max-width: 600px;">
                <?php the_content(); ?>
            </div>
        </div>

    </div>
</div>

<div class="pt-80 pb-80">
    <div class="container">
        <?php include(__DIR__ . '/../partials/cta-cards.php') ?>
    </div>
</div>

<?php get_footer(); ?>