<div class="container-fluid nav-bar bp-navbar fixed-top d-block d-xl-none bg-primary">
    <div class="row align-items-center h-100">
        <div class="col">
            <a class="logo secondary ml-10" href="<?php echo get_home_url(); ?>"> </a>
        </div>
        <div class="col d-flex justify-content-end">
            <button type="button" class="btn menu-trigger" data-bs-toggle="modal" data-bs-target="#mobile-menu-modal">
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="mobile-menu-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content h-100">
            <div class="modal-header border-bottom-0">
                <div class="d-flex col justify-content-start">
                    <div class="logo"></div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="d-flex col align-items-center justify-content-center">
                    <div class="bg-white w-100 h-100">
                        <ul
                            class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex align-items-center justify-content-center">

                            <?php
                            $args = array(
                                'post_type' => 'nav-menu',
                                'post_status' => 'publish',
                                'posts_per_page' => '1',
                            );
                            $posts_loop = new WP_Query( $args );
                            $counter = 0;
                            if ( $posts_loop->have_posts() ) :
                                while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
                                if( have_rows('menu_items') ):
                                    while( have_rows('menu_items') ) : the_row();
                                        $item_label = get_sub_field('item_label');
                                        $item_link = get_sub_field('item_link'); 
                                        $have_sub_menu = get_sub_field('have_sub_menu');     
                                        if ($have_sub_menu) {
                                            $counter++;
                                        ?>

                                        <div class="accordion w-100" id="accordion-menu-<?php echo $counter; ?>">

                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header p-0" id="heading-<?php echo $counter; ?>">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $counter; ?>"
                                                        aria-expanded="false" aria-controls="collapse-<?php echo $counter; ?>">
                                                        <?php echo $item_label; ?>
                                                    </button>
                                                </h2>
                                                <div id="collapse-<?php echo $counter; ?>" class="accordion-collapse collapse"
                                                    aria-labelledby="heading-<?php echo $counter; ?>"
                                                    data-bs-parent="#accordion-menu-<?php echo $counter; ?>">
                                                    <div class="accordion-body">
                                                        <div class="list-group list-group-light">

                                                            <?php

                                                                    if( have_rows('sub_menus') ){
                                                                        while( have_rows('sub_menus') ) : the_row();
                                                                        $sub_menu_label = get_sub_field('sub_menu_label');
                                                                        $sub_menu_link = get_sub_field('sub_menu_link');
                                                                    ?>

                                                            <a href="<?php echo $sub_menu_link; ?>">
                                                                <div class="text-primary text-strong mt-10 mb-10"
                                                                    style="font-size:14px;"><?php echo $sub_menu_label; ?></div>
                                                            </a>

                                                            <?php 
                                                                                endwhile;
                                                                            }
                                                                        ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <?php
                                            }  else {
                                        ?>
                                         <li class="nav-item pl-20">
                                                <a class="bp-nav-link" style="display: block;" href="<?php echo $item_link; ?>">
                                                    <?php echo $item_label; ?>
                                                </a>
                                            </li>

                                        <?php
                                            }                
                                        ?>
                                        <?php
                                    endwhile;
                                endif;

                                endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>

                        </ul>

                        <div class="d-flex align-items-center justify-content-center mt-20">
                            <a href="https://trade.isabullion.com/" target="_blank"
                                class="btn bp-btn btn-primary bp-btn-link">Login</a>
                            <a href="<?php echo get_home_url() . '/signup/lets-get-started'; ?>"
                                class="btn bp-btn btn-primary ml-10 mr-10">Open account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>