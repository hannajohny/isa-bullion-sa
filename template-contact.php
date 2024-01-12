<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

<div class="bg-light">
    <div class="container pb-80">
        <div class="top-section">
            <h1 class="text-large text-center mb-20 mt-40">Contact us</h1>
            <div class="d-flex align-items-center justify-content-center">
                <p class="text-center mb-60" style="max-width: 600px;">
                    Got any questions? Seeking personalized assistance
                    with any of our services? Help us understand in the form or contact us directly at the details
                    provided
                    below so we can help you right away.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="pt-80 pb-80">
    <div class="container">
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>

<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h1 class="text-large mb-60">Frequently asked questions</h1>

        <?php include('partials/faqs.php') ?>

        <div class="d-flex">
            <a class="btn bp-btn btn-primary mt-40" href="<?php the_field('faqs_button_link') ?>">View all</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>