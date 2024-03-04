    
<?php $current_language = wpml_get_current_language(); ?>

<div class="row align-items-center justify-content-center">
    <div class="col-md-5 h-100 align-items-center justify-content-center">
        <h2 class="text-medium text-secondary"><?php the_field('mobile_app_header', 'option'); ?></h2>
        <h1 class="text-large mb-30"><?php the_field('mobile_app_sub_header', 'option'); ?></h1>
        <p style="max-width: 450px;">
            <?php the_field('mobile_app_description', 'option'); ?>
        </p>
        <div class="d-flex mt-30">

            <a class="btn bp-btn btn-primary app-store" href="<?php the_field('apple_store_link', 'option'); ?>"
                target="_blank">
                App Store
            </a>

            <a class="btn bp-btn btn-primary play-store <?php echo $current_language === 'ar' ? 'mr-20' : 'ml-20' ?>" href="<?php the_field('google_play_link', 'option'); ?>"
                target="_blank">
                Google Play
            </a>

        </div>
    </div>
    <div class="col-md-5">
        <div class="mobile-app d-none d-xl-block"></div>
        <div class="mobile-app responsive-version d-block d-xl-none"></div>
    </div>
</div>