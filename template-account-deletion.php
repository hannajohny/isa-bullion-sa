<?php
/* Template Name: Account Deletion */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container pb-80 pt-20">
        <h1 class="text-center text-large mt-30"><?php the_title(); ?></h1>
        <div class="mt-40">
            <?php the_content(); ?>
        </div>

        <div style="max-width: 800px;" class="mt-40">
            <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
            <script>
                hbspt.forms.create({
                    region: "eu1",
                    portalId: "25666200",
                    formId: "bcbbe314-a1d7-47f9-a312-719e25ebe4fb"
                });
            </script>
        </div>

    </div>
</div>

<?php get_footer(); ?>