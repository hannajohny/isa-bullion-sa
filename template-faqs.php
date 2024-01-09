<?php
/* Template Name: FAQs */
?>

<?php get_header(); ?>

<div class="container pb-80">
    <div class="top-section">
        <h1 class="text-large text-center mb-20">Frequently asked questions</h1>
        <div class="d-flex align-items-center justify-content-center">
            <p class="text-center mb-60" style="max-width: 600px;">Lorem ipsum dolor sit amet consectetur. Aliquam
                fermentum nunc dignissim commodo aliquam pellentesque faucibus. Ipsum quam lectus magna erat
                consectetur.</p>
        </div>
    </div>

    <?php include('partials/faqs.php') ?>
</div>

<div class="bg-light pt-80 pb-80">
<div class="container">
    <h1 class="mb-60 text-large">Can't find what you are looking for?</h1>
    <?php include('partials/cta-cards.php') ?>
</div>
</div>




<?php get_footer(); ?>