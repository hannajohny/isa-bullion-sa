<?php
/* Template Name: Pricing */
?>

<?php 
    get_header(); 
    $current_language = wpml_get_current_language();
?>

<div class="top-section">

    <div class="container pl-30 pr-30 pb-80" style="width: 100%; overflow-x: auto">
        <h1 class="text-large mb-20 pt-40"><?php the_field('page_title') ?></h1>
        <div><?php the_content(); ?></div>

        <!-- Table Header -->
        <div class="d-flex p-15 bg-primary border-radius mt-40" style="min-width: 800px">
            <?php 
                if( have_rows('buying_choices_table_header') ):
                    while( have_rows('buying_choices_table_header') ) : the_row();
                    ?>
            <div class="col">
                <div class="text-white text-strong"><?php the_sub_field('buying_choices_row_metal_label'); ?></div>
            </div>
            <div class="col">
                <div class="text-white text-strong"><?php the_sub_field('buying_choices_row_unit_label'); ?></div>
            </div>
            <div class="col">
                <div class="text-white text-strong"><?php the_sub_field('buying_choices_row_multiples_label'); ?></div>
            </div>
            <div class="col">
                <div class="text-white text-strong"><?php the_sub_field('buying_choices_row_choices_label'); ?></div>
            </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
        
        <!-- Table rows -->
        <div class="border-radius box-shadow bg-white mt-20" style="min-width: 800px">
            <?php 

            if( have_rows('buying_choices_table_rows') ):
            while( have_rows('buying_choices_table_rows') ) : the_row();
            ?>
            <div class="d-flex p-15">
                <div class="col">
                    <div class="text-strong"><?php the_sub_field('buying_choices_table_metal'); ?></div>
                </div>
                <div class="col">
                    <div class="text-strong"><?php the_sub_field('buying_choices_table_unit'); ?></div>
                </div>
                <div class="col">
                    <div class="text-strong"><?php the_sub_field('buying_choices_table_multiples'); ?></div>
                </div>
                <div class="col">
                    <div class="text-strong"><?php the_sub_field('buying_choices_table_choices'); ?></div>
                </div>
            </div>
            <div class="bp-line"></div>
            <?php
                endwhile;
                endif;
            ?>
        </div>
    </div>

</div>


<div class="bg-light pt-40 pb-80">

    <?php 
    if( have_rows('commodities') ):
        while( have_rows('commodities') ) : the_row();
            $section_title = get_sub_field('commodities_section_title');
            ?>
            <div class="container mt-40" style="width: 100%; overflow-x: auto">

                <?php 
                    if ($section_title) {
                        ?>
                            <h1 class="text-large mb-40"><?php the_sub_field('commodities_section_title'); ?></h1>
                        <?php
                    }
                ?>

                <h2><?php the_sub_field('commodity_title'); ?></h2>


                
                <div class="icon icon-extra-large mt-20" style="background-image: url('<?php the_sub_field('commodity_icon'); ?>')"></div>
                <p><?php the_sub_field('commodity_description'); ?></p>

                 <!-- Table Header -->
                <div class="d-flex p-15 bg-primary border-radius mt-40" style="min-width: 800px">
                    <?php 
                        if( have_rows('commodities_actions_table_header') ):
                            while( have_rows('commodities_actions_table_header') ) : the_row();
                            ?>
                    <div class="col">
                        <div class="text-white text-strong"><?php the_sub_field('commodities_actions_row_action_label'); ?></div>
                    </div>
                    <div class="col">
                        <div class="text-white text-strong"><?php the_sub_field('commodities_actions_row_spot_price_label'); ?></div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col">
                        <div class="text-white text-strong"><?php the_sub_field('commodities_actions_row_markup_label'); ?></div>
                    </div>
                    <div class="col">
                        <div class="text-white text-strong"><?php the_sub_field('commodities_actions_row_outcome_label'); ?></div>
                    </div>
                    <div class="col">
                        <div class="text-white text-strong"><?php the_sub_field('commodities_actions_row_amount_label'); ?></div>
                    </div>
                    <?php
                            endwhile;
                        endif;
                    ?>
                </div>


        <!-- Table rows -->
        <div class="border-radius strong bg-white mt-20" style="min-width: 800px">
            <?php 

            if( have_rows('commodity_actions') ):
            while( have_rows('commodity_actions') ) : the_row();
            $action_type = get_sub_field('commodity_action_type');

            ?>
            <div class="d-flex p-15">

                <?php 
                    if ($current_language === 'ar' && $action_type === 'Buying') {
                        ?>
                     <div class="col">
                        <div>شراء</div>
                    </div>

                <?php
                    } elseif ($current_language === 'ar' && $action_type === 'Selling') {
                        ?>
                     <div class="col">
                        <div>بيع</div>
                    </div>
                <?php
                    } else {
                        ?>
                            <div class="col">
                                <div><?php the_sub_field('commodity_action_type'); ?></div>
                            </div>
                        <?php
                    }
                ?>
                
           

                <div class="col">
                    <div><?php the_sub_field('commodity_action_spot_price'); ?></div>
                </div>

                <div class="col-1">
                    <?php 
                        if ($action_type === 'Buying') {
                            ?>
                                <div class="text-medium text-strong">+</div>
                            <?php
                        } else {
                            ?>
                                <div class="text-medium text-strong">-</div>
                            <?php
                        }
                    ?>             
                </div>           
                
                <div class="col">
                    <div><?php the_sub_field('commodity_action_markup'); ?></div>
                </div>
                <div class="col">
                    <div><?php the_sub_field('commodity_action_outcome'); ?></div>
                </div>
                <div class="col">
                    <div class="text-strong"><?php the_sub_field('commodity_action_amount'); ?></div>
                </div>
            </div>
            <div class="bp-line"></div>
            <?php
                endwhile;
                endif;
            ?>
        </div>


    

            </div>
    <?php
        endwhile;
    endif;
?>

</div>



<div class="pt-80 pb-80">
    <div class="container">
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>


<?php get_footer(); ?>