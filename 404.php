<?php get_header(); ?>

<div class="page-banner"></div>
<div class="page-header-wrapper">
    <div class="page-header">
      <div class="text-block">Page Not Found</div>
    </div>
</div>

<div class="pgr-content-wrapper">
    <div class="pgr-container container-1000">
      <div class="space-40"></div>
      <div class="utility-page-wrapper">
            <img src="<?php echo get_template_directory_uri() . '/images/404.png' ?>" width="206" style="margin-bottom:30px" alt="">  
            <p class="modal-text">The page you are looking for doesn't exist or has been moved.</p>
            <a href="<?php echo get_home_url(); ?>" class="pgr-button modal-button w-button">go home</a>
      </div>
    </div>
</div>


<?php get_footer(); ?>