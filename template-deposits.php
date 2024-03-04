<?php
/* Template Name: Deposits */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container pt-40">
        <h1 class="text-large mb-40"><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <div
            class="bp-card bp-card-rounded bp-card-top-border-secondary box-shadow bg-primary pl-40 pr-40 pt-60 pb-20 mb-80 mt-40">
            <div class="row">

                <?php
                if( have_rows('hero_features') ):
                    $i = 0;
                    while( have_rows('hero_features') ) : the_row();
                    $i++;
            ?>
                <div class="col-md-3 d-flex flex-column align-items-center justify-content-center mb-40">
                    <div class="icon" style="background-image: url('<?php the_sub_field('hero_feature_icon'); ?>')"></div>
                    <div class="text-strong text-white mt-40 mb-20"><?php the_sub_field('hero_feature_title'); ?></div>
                    <div class="text-white text-center" style="max-width: 250px">
                    <?php the_sub_field('hero_feature_description'); ?>
                    </div>
                </div>
                <?php
                    if ($i !== 3) {
                    ?>
                    <div class="col-1 d-flex flex-column align-items-center justify-content-center">
                        <div class="vertical-line"></div>
                    </div>
                    <?php
                    }
                ?>
                <?php
                    
                endwhile;
                else :
                endif;
            ?>

            </div>
        </div>
    </div>
</div>


<div class="container pb-80">
    <div class="row">

        <div class="col-md-6 mb-40">

            <h1 class="text-large mb-20"><?php the_field('bank_transfer_title'); ?></h1>
            <p style="max-width: 500px;"><?php the_field('bank_transfer_description'); ?></p>

            <div class="text-strong mt-40 mb-20"><?php the_field('payment_methods_title'); ?></div>

            <?php
                if( have_rows('payment_methods') ):
                    $i = 0;
                    while( have_rows('payment_methods') ) : the_row();
                    $i++;
            ?>
                <div><?php the_sub_field('payment_method_description');  ?></div>
                <div class="icon partners" style="background-image: url('<?php the_sub_field('payment_method_logo'); ?>')"></div>
            <?php       
                endwhile;
                else :
                endif;
            ?>
            
        </div>

        <div class="col-md-6">
            <div class="row bg-primary p-20 border-radius">
                <div class="col">
                    <div class="text-white text-strong"><?php the_field('bank_transfer_accepted_currencies_title'); ?></div>
                </div>
                <div class="col d-flex flex-column align-items-end">
                    <div class="text-secondary text-strong"><?php the_field('bank_transfer_accepted_currencies'); ?></div>
                </div>
            </div>


            <?php
                if( have_rows('bank_transfer_services') ):
                    $i = 0;
                    while( have_rows('bank_transfer_services') ) : the_row();
                    $i++;
            ?>
             <div class="row bg-primary p-20 border-radius mt-20">
                <div class="col">
                    <div class="text-white text-strong mb-20"><?php the_sub_field('service_title'); ?></div>

                    <?php
                        if( have_rows('service_rows') ):
                            $i = 0;
                            while( have_rows('service_rows') ) : the_row();
                            $i++;
                    ?>
                        <div class="row bg-white p-20 border-radius mb-10">
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('service_row_title'); ?></div>
                            </div>
                            <div class="col d-flex flex-column align-items-end">
                                <div class="text-secondary text-strong"><?php the_sub_field('service_row_description'); ?></div>
                            </div>
                        </div>
                    <?php       
                        endwhile;
                        else :
                        endif;
                    ?>

                </div>
            </div>
                
            <?php       
                endwhile;
                else :
                endif;
            ?>

        </div>

    </div>

    <div class="row mt-60">

        <div class="col-md-6 mb-40">

        <?php
                if( have_rows('pay_by_card_services') ):
                    $i = 0;
                    while( have_rows('pay_by_card_services') ) : the_row();
                    $i++;
            ?>
                <div class="row bg-primary p-20 border-radius mb-10">
                    <div class="col">
                        <div class="text-white text-strong"><?php the_sub_field('pay_by_card_service_title') ?></div>
                    </div>
                    <div class="col d-flex flex-column align-items-end">
                        <div class="text-secondary text-strong"><?php the_sub_field('pay_by_card_service_description') ?></div>
                    </div>
                </div>
            <?php       
                endwhile;
                else :
                endif;
            ?>

        </div>

        <div class="col-md-1"></div>

        <div class="col-md-5">
            <h1 class="text-large mb-20"><?php the_field('pay_by_card_title'); ?></h1>
            <p><?php the_field('pay_by_card_description'); ?></p>
            <div class="text-strong mt-40 mb-20">
                <?php the_field('accepted_cards_title'); ?>
            </div>
            <div class="d-flex">

            <?php
                if( have_rows('accepted_cards') ):
                    $i = 0;
                    while( have_rows('accepted_cards') ) : the_row();
                    $i++;
            ?>
                <div class="icon mr-20" style="background-image: url('<?php the_sub_field('accepted_card_logo'); ?>')"></div>
            <?php       
                endwhile;
                else :
                endif;
            ?>
            </div>
        </div>

    </div>
</div>

<div class="bg-primary pt-80 pb-80">

    <div class="container">
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <p class="text-white text-center" style="max-width: 400px;">
                <?php the_field('call_to_action_message'); ?>
            </p>
                <a class="mt-20 btn bp-btn btn-secondary" href="<?php the_field('call_to_action_button_link'); ?>">
                    <?php the_field('call_to_action_button_label'); ?>
                </a>
        </div>
    </div>
</div>

<!-- Help CTA -->
<div class="bg-light pt-80 pb-80">
    <div class="container">
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>

<?php get_footer(); ?>