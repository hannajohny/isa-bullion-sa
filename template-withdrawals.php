<?php
/* Template Name: Withdrawals */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container">
        <h1 class="text-large mb-40 pt-40"><?php the_title(); ?></h1>
        <div style="max-width: 600px"><?php the_content(); ?></div>
        <div
            class="bp-card bp-card-rounded bp-card-top-border-secondary box-shadow bg-primary pl-40 pr-60 pt-30 pb-20 mb-80 mt-40">
            <div class="row mb-40">
                <div class="d-flex">
                    <div class="bp-chip large text-white"><?php the_field('free_of_charge_title'); ?></div>
                </div>
            </div>
            <div class="row">

                <?php 
                    if( have_rows('free_of_charge_options') ):
                        $i = 0;
                        while( have_rows('free_of_charge_options') ) : the_row();
                        $i++;
                    ?>
                <div class="col-md-4 d-flex flex-column mb-40">
                    <div class="icon"
                        style="background-image: url('<?php the_sub_field('free_of_charge_option_icon'); ?>')"></div>
                    <div class="text-strong text-white mt-40 mb-20">
                        <?php the_sub_field('free_of_charge_option_title'); ?></div>
                    <div class="text-white" style="max-width: 300px">
                        <?php the_sub_field('free_of_charge_option_description'); ?>
                    </div>
                </div>
                <?php
                    if ($i === 1) {
                    ?>
                <div class="col-1 d-flex flex-column justify-content-center">
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
                <div class="col position-relative">
                    <div class="super-graphic withdrawals position-absolute"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    if( have_rows('withdrawals_options') ):
        $i = 0;
        while( have_rows('withdrawals_options') ) : the_row();
        $i++;
    ?>
    <div class="<?php echo ($i % 2 !== 0) ? "bg-light" : "bg-white"; ?> pt-80 pb-40">
        <div class="container">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-large text-center"><?php the_sub_field('withdrawal_option_title'); ?></h1>
                <div class="text-medium text-secondary text-center"><?php the_sub_field('withdrawal_option_sub_title'); ?></div>
            </div>
            <div class="row justify-content-center mt-40">
                <?php 
                    if( have_rows('withdrawal_option_cards') ):
                        while( have_rows('withdrawal_option_cards') ) : the_row();
                        $card_color = get_sub_field('withdrawal_option_card_color');
                ?>
                    <div class="col-md-6 mb-40">
                        <div class="rounded-corners <?php echo ($card_color == 'White') ? "bg-white" : "bg-primary"; ?> p-40 box-shadow h-100 bp-card-top-border-secondary">
                            <div class="text-center text-medium text-strong <?php echo ($card_color == 'White') ? "" : "text-white"; ?>">
                                <?php the_sub_field('withdrawal_option_card_title'); ?>
                            </div>

                            <div class="row p-20">
                                <div class="col">
                                    <div class="text-strong <?php echo ($card_color == 'White') ? "" : "text-white"; ?>">
                                        <?php the_sub_field('withdrawal_option_card_quantity_title'); ?>
                                    </div>
                                </div>
                                <div class="col d-flex flex-column align-items-end">
                                    <div class="text-strong <?php echo ($card_color == 'White') ? "" : "text-white"; ?>">
                                        <?php the_sub_field('withdrawal_option_card_fee_title'); ?>
                                    </div>
                                </div>
                            </div>

                                <?php 
                                    if( have_rows('withdrawal_option_card_fees') ):
                                    while( have_rows('withdrawal_option_card_fees') ) : the_row();
                                ?>
                                    <div class="row <?php echo ($card_color == 'White') ? "bg-primary" : "bg-white"; ?> p-20 border-radius mb-20">
                                        <div class="col">
                                            <div class="<?php echo ($card_color == 'White') ? "text-white" : ""; ?> text-strong"><?php the_sub_field('withdrawal_option_card_fee_quantity'); ?></div>
                                        </div>
                                        <div class="col d-flex flex-column align-items-end">
                                            <div class="text-secondary text-strong"><?php the_sub_field('withdrawal_option_card_fee_price'); ?></div>
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
    </div>
<?php
    endwhile;
    else :
    endif;

?>

<!-- Help CTA -->
<div class="bg-light pt-80 pb-80">
    <div class="container">
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>

<?php get_footer(); ?>