<?php
/* Template Name: Contact */
?>

<?php get_header(); ?>

<div class="modal fade" id="contact-us-success-modal" tabindex="-1" aria-hidden="true" dir="ltr">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title">Thank you!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mt-20">
                    We have received your message. One of our representatives will get in touch soon.
                </div>
            </div>
            <div class="d-flex flex-row p-20 align-items-center justify-content-center">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary bp-btn" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container pb-60">
        <div class="top-section">
            <h1 class="text-large text-center mb-20 mt-40"><?php the_title(); ?></h1>
            <div class="d-flex align-items-center justify-content-center">
                <div class="text-center" style="max-width: 600px;">
                   <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-40">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-6 d-flex flex-column">
            <?php echo do_shortcode('[contact-form-7 id="59e979d" title="Contact us"]'); ?>
        </div>
    </div>
</div>




<div class="pt-80">
    <div class="container">
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>

<div id='map'></div>

<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h1 class="text-large mb-60"><?php the_field('faqs_section_title', 'option'); ?></h1>

        <?php include('partials/faqs.php') ?>

        <div class="tab-content box-shadow faqs-tab-container" data-posts='4'>
            <!-- Content goes in here using JS -->
        </div>

        <div class="d-flex">
            <a class="btn bp-btn btn-primary mt-40" href="<?php the_field('faqs_section_button_link', 'option') ?>"><?php the_field('faqs_section_button_label', 'option'); ?></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>