<?php
/* Template Name: FAQs */
?>

<?php get_header(); ?>

<div class="container pb-80">
    <div class="top-section">
        <h1 class="text-large text-center mb-20 mt-40"><?php the_field('page_title') ?></h1>
        <div class="d-flex align-items-center justify-content-center">
            <div class="text-center mb-60" style="max-width: 600px;"><?php the_content(); ?></div>
        </div>
    </div>
    <?php include('partials/faqs.php') ?>

    <div class="tab-content box-shadow faqs-tab-container" data-posts='-1'>
        <!-- Content goes in here using JS -->
    </div>
</div>

<div class="bg-light pt-80 pb-80">
    <div class="container">
        <?php include('partials/cta-cards.php') ?>


    </div>
</div>

<?php get_footer(); ?>