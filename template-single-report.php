<?php get_header(); ?>

<div class="top-section pb-80">
    <div class="container" style="overflow:hidden">
        <h1 class="text-large text-center mt-30"><?php the_title(); ?></h1>
        <div class="d-flex align-items-center justify-content-end mt-30">
            <div class="icon calendar mr-10"></div>
            <div class="text-strong"><?php echo get_the_date( 'd F Y' ); ?></div>
        </div>


        <div style="width: 100%; overflow-x: auto">
        
            <div class="d-flex p-15 bg-primary border-radius mt-10" style="min-width: 800px">
                <div class="col">
                    <div class="text-strong text-white">OTC Market Data</div>
                </div>
                <div class="col">
                    <div class="text-strong text-white">High</div>
                </div>
                <div class="col">
                    <div class="text-strong text-white">Low</div>
                </div>
                <div class="col">
                    <div class="text-strong text-white">Close</div>
                </div>
                <div class="col">
                    <div class="text-strong text-white">Previous</div>
                </div>
                <div class="col">
                    <div class="text-strong text-white">Change USD</div>
                </div>
                <div class="col">
                    <div class="text-strong text-white">Change %</div>
                </div>
            </div>

            <div class="border-radius bg-light mt-10" style="min-width: 800px">

            <?php
                if( have_rows('report_header_table') ):
                    $reportCount = count(get_field('report_header_table'));
                    $i = 0;
                    while( have_rows('report_header_table') ) : the_row();
                    $i++;
                        ?>
                        <div class="d-flex p-15">
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('otc_market_data'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('market_data_high_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('market_data_low_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('market_data_close_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('market_data_previous_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('market_data_change_usd_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('market_data_change_percentage_value'); ?></div>
                            </div>
                        </div>
                            <?php 
                                if ($i < $reportCount) {
                                    ?>
                                        <div class="bp-line bg-medium"></div>
                                    <?php
                            }
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>

    <?php 
        if( have_rows('report_body_sections') ):
            while( have_rows('report_body_sections') ) : the_row();
            ?>
            <div class="container pt-20">
                <div>
                    <?php the_sub_field('report_body_description'); ?>
                </div>

                <div style="width: 100%; overflow-x: auto">
                    <div class="d-flex p-15 bg-primary border-radius mt-10" style="min-width: 800px">
                        <div class="col">
                            <div class="text-strong text-white">Support 3</div>
                        </div>
                        <div class="col">
                            <div class="text-strong text-white">Support 2</div>
                        </div>
                        <div class="col">
                            <div class="text-strong text-white">Support 1</div>
                        </div>
                        <div class="col-2">
                            <div class="text-strong text-white">Current Market Price</div>
                        </div>
                        <div class="col">
                            <div class="text-strong text-white">Resistance 1</div>
                        </div>
                        <div class="col">
                            <div class="text-strong text-white">Resistance 2</div>
                        </div>
                        <div class="col">
                            <div class="text-strong text-white">Resistance 3</div>
                        </div>
                    </div>

                    <?php 
                        if( have_rows('report_body_table') ):
                            while( have_rows('report_body_table') ) : the_row();
                                ?>
                                <div class="d-flex p-15 bg-light border-radius" style="min-width: 800px">
                                    <div class="col">
                                        <div class="text-strong"><?php the_sub_field('support_3_value'); ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="text-strong"><?php the_sub_field('support_2_value'); ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="text-strong"><?php the_sub_field('support_1_value'); ?></div>
                                    </div>
                                    <div class="col-2">
                                        <div class="text-strong"><?php the_sub_field('current_market_price_value'); ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="text-strong"><?php the_sub_field('resistance_1_value'); ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="text-strong"><?php the_sub_field('resistance_2_value'); ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="text-strong"><?php the_sub_field('resistance_3_value'); ?></div>
                                    </div>
                                </div>
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
        

    <div class="container pt-20">
        <div class="pb-20">
            <?php the_field('report_footer_description'); ?>
        </div>
    </div>
 
    <div class="container" style="width: 100%; overflow-x: auto">
        <div class="d-flex p-15 bg-primary border-radius" style="min-width: 800px">
            <div class="col-4">
                <div class="text-strong text-white">Key US Economic Reports & Events</div>
            </div>
            <div class="col">
                <div class="text-strong text-white">When</div>
            </div>
            <div class="col">
                <div class="text-strong text-white">Actual</div>
            </div>
            <div class="col">
                <div class="text-strong text-white">Expected</div>
            </div>
            <div class="col">
                <div class="text-strong text-white">Previous</div>
            </div>
        </div>

        <div class="border-radius bg-light mt-10" style="min-width: 800px">

        <?php 
            if( have_rows('report_footer_table') ):
                $count = count(get_field('report_footer_table'));
                $i = 0;
                while( have_rows('report_footer_table') ) : the_row();
                $i++;
                    ?>
                        <div class="d-flex p-15">
                            <div class="col-4">
                                <div class="text-strong"><?php the_sub_field('key_us_economic_reports_&_events'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('report_footer_when_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('report_footer_actual_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('report_footer_expected_value'); ?></div>
                            </div>
                            <div class="col">
                                <div class="text-strong"><?php the_sub_field('report_footer_previous_value'); ?></div>
                            </div>
                        </div>
                            <?php 
                                if ($i < $count) {
                                    ?>
                                        <div class="bp-line"></div>
                                    <?php
                            }
                endwhile;
            endif;
            ?>
      
    </div>
    </div>

    <div class="container pt-20">

    <div class="pb-20">
            <?php the_field('conclusion_body'); ?>
        </div>
    <div class="text-small">
            <?php the_field('report_footer_disclaimer'); ?>
        </div>
    </div>

</div>


<?php get_footer(); ?>