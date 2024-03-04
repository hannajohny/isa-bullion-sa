<?php
/* Template Name: Signup - Get Started*/
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container">
        
        <?php include('personal-account-header.php'); ?>

        <div class="row align-items-center justify-content-center">
            <div class="account_form hswrap col flex-column d-flex justify-content-center">
                <div id="multistep-form" class="p-20"></div>
                
                <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>

                <script src="<?php echo get_template_directory_uri() . '/dist/js/hubspot-personal-account-get-started.js'?>" type="text/javascript">
                </script>

            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>