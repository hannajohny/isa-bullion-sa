<?php
/* Template Name: About */
?>

<?php get_header(); ?>

<div class="top-section">

    <div class="container">
        <h1 class="text-large pt-40"><?php the_title(); ?></h1>
        <div class="row mt-40">
            <div class="col-md-6">
                <h2 class="text-medium text-strong mb-20">
                    <?php the_field('who_we_are_title'); ?>
                </h2>
                <p>
                    <?php the_field('who_we_are_description'); ?>
                </p>
            </div>
            <div class="col-md-6">
                <h2 class="text-medium text-strong mb-20"><?php the_field('what_we_do_title'); ?></h2>
                <p>
                    <?php the_field('what_we_do_description'); ?>
                </p>
            </div>
        </div>

        <div class="row justify-content-center mt-60 mb-60">
            <div class="col-md-6 mb-20">
                <div class="card bp-card bp-card-rounded bp-card-top-border-secondary box-shadow p-30 bg-white h-100">
                    <div class="col d-flex flex-column">
                        <div class="h-100">
                            <h2 class="text-medium text-strong mb-20"><?php the_field('mission_title'); ?></h2>
                            <p>
                                <?php the_field('mission_description'); ?>
                            </p>

                        </div>
                        <div class="d-flex mt-20">
                            <a class="btn bp-btn btn-secondary" href="<?php the_field('mission_button_one_link') ?>">
                                <?php the_field('mission_button_one_label'); ?>
                            </a>
                            <a class="btn bp-btn bp-btn-arrow ml-20" href="<?php the_field('mission_button_two_link'); ?>" target="_blank">
                                <?php the_field('mission_button_two_label'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-20">
                <div class="card bp-card bp-card-rounded bp-card-top-border-secondary box-shadow p-30 bg-primary h-100">

                    <div class="col d-flex flex-column">
                        <div class="h-100">
                            <div class="text-medium text-white text-strong mb-20"><?php the_field('story_title'); ?>
                            </div>
                            <p class="text-white">
                                <?php the_field('story_description'); ?>
                            </p>

                        </div>
                        <div class="d-flex mt-20">
                            <a class="btn bp-btn btn-white" href="<?php the_field('story_button_link'); ?>" target="_blank">
                                <?php the_field('story_button_label'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-primary pt-60 pb-20">
    <div class="container">
        <div class="row justify-content-center">

            <?php 
            if( have_rows('benefits') ):
                while( have_rows('benefits') ) : the_row();
                ?>
            <div class="col-md-6 d-flex flex-column mb-40">
                <div class="h-100">
                    <div class="icon mb-30" style="background-image: url('<?php the_sub_field('benefits_icon'); ?>')">
                    </div>
                    <div class="text-medium text-white mb-20" style="max-width: 300px;">
                        <?php the_sub_field('benefits_title'); ?>
                    </div>
                    <p class="text-white" style="max-width:600px">
                        <?php the_sub_field('benefits_description'); ?>
                    </p>
                </div>
                <div class="d-flex mt-20">
                    <a class="btn bp-btn btn-secondary" href="<?php the_sub_field('benefits_button_link'); ?>">
                        <?php the_sub_field('benefits_button_label'); ?>
                    </a>
                </div>
            </div>

            <?php
                endwhile;
            endif;
        ?>

        </div>
    </div>
</div>

<!-- Management team -->
<div class="bg-light pt-80 pb-60">
    <div class="container">
        <h1 class="text-large mb-40"><?php the_field('management_section_title'); ?></h1>
        <p style="max-width: 600px">
            <?php the_field('management_section_description'); ?>
        </p>
        <div class="row justify-content-center mt-40">

            <?php 
                if( have_rows('management_members') ):
                    while( have_rows('management_members') ) : the_row();
                ?>
            <div class="col-md-4 mb-20">
                <div class="bg-white bp-card bp-card-rounded box-shadow mb-20 h-100">
                    <div class="card-image card-image-profile position-relative"
                        style="background-image: url('<?php the_sub_field('member_photo'); ?>')">
                        <a href="<?php the_sub_field('linkedin_link'); ?>" target="_blank"
                            class="icon linkedin-profile bg-white position-absolute"></a>
                    </div>
                    <div class="p-30">
                        <div class="text-strong text-medium"><?php the_sub_field('member_name'); ?></div>
                        <div class="text-strong text-secondary mb-20"><?php the_sub_field('member_title'); ?></div>
                        <p class="m-0">
                            <?php the_sub_field('member_bio'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>

<!-- Trade license -->
<div class="container pt-80 pb-80">
    <h1 class="text-large mb-40"><?php the_field('trade_license_section_title'); ?></h1>
    <p style="max-width: 550px;"><?php the_field('trade_license_description'); ?></p>
    <div class="d-flex mt-40">
        <a class="btn bp-btn btn-secondary" type="button" data-bs-toggle="modal"
            data-bs-target="#view-trade-license">View trade license</a>
        <a class="btn bp-btn btn-primary ml-20" data-bs-toggle="modal" data-bs-target="#verify-trade-license">Verify
            us</a>
    </div>
</div>

<!-- Modal - View TL -->
<div class="modal fade" id="view-trade-license" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="trade-license"></div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn bp-btn btn-secondary" data-bs-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal - Verify TL -->
<div class="modal fade" id="verify-trade-license" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">



        <div class="modal-content">

            <div class="modal-header">
                <div class="text-medium text-strong">Verify our trade license</div>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div>Please follow these steps to verify our trade license</div>

                <div class="row mt-20 align-items-center">
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-2 d-flex flex-column align-items-center justify-content-center">
                                <div class="text-strong tl-steps-numbering">1</div>
                            </div>
                            <div class="col">
                                <div>Visit DMCC website</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-sm-8">
                        <div class="d-block d-lg-none mt-20"></div>
                        <a href="https://dmcc.ae/public-register" target="_blank"
                            class="btn bp-btn btn-primary bp-btn-link mr-20 justify-content-start">https://dmcc.ae/public-register</a>
                    </div>
                </div>

                <div class="row mt-10 align-items-center">
                
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-2 d-flex flex-column align-items-center justify-content-center">
                                <div class="text-strong tl-steps-numbering">2</div>
                            </div>
                            <div class="col">
                                <div>Enter our license number</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="d-block d-lg-none mt-10"></div>

                        <div class="d-flex align-items-center">
                            <div class="text-strong ml-10">DMCC-31227</div>
                            <div class="icon icon-copy-tl ml-20" id="copy-tl-number"></div>
                        </div>
                    </div>
                </div>

                <div class="row mt-15 align-items-center">

                            
                <div class="col-lg-6 col-md-12">
                        <div class="row align-items-center">
                            <div class="col-2 d-flex flex-column align-items-center justify-content-center">
                                <div class="text-strong tl-steps-numbering">3</div>
                            </div>
                            <div class="col">
                                <div>Click on the Search button</div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="verify-tl mt-30"></div>

            </div>
            <div class="modal-footer justify-content-center p-20">
                <a href="https://dmcc.ae/public-register" target="_blank"
                    class="btn bp-btn btn-secondary bp-btn-link">Verify us</a>
            </div>
        </div>
    </div>
</div>


<!-- Partners -->

<div class="bg-light pt-80 pb-60">
    <div class="container">
        <div class="col d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center text-large"><?php the_field('partners_header'); ?></h1>
            <div class="text-center text-secondary text-medium text-strong" style="max-width:600px;">
                <?php the_field('partners_sub_header'); ?>
            </div>
        </div>

        <div class="row mt-60">

            <?php
                if( have_rows('partners_logos') ):
                    while( have_rows('partners_logos') ) : the_row();
                ?>
            <div class="col d-flex flex-column align-items-center justify-content-center mb-20">
                <div class="icon partners" style="background-image: url('<?php the_sub_field('partner_logo'); ?>')">
                </div>
            </div>
            <?php
                    
            endwhile;
            else :
            endif;
        ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>