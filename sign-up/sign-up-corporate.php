<?php
/* Template Name: Signup - Corporate */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container">
        <h1 class="text-large text-center">Corporate account signup</h1>
        <div class="text-center text-strong mt-20">
            Thanks for taking the time to apply for a corporate account.
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="account_form hswrap col flex-column d-flex justify-content-center">
                <div id="multistep-form" class="p-20"></div>
                <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
                <script>
                    hbspt.forms.create({
                        region: "eu1",
                        portalId: "25666200",
                        formId: "45301cbd-3be2-49a4-9ef4-699209ab6437",
                        css: " "
                    });
                </script>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>