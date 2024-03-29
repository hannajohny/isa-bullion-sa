<div class="d-none d-xl-block fixed-top bg-white box-shadow">
    <?php include 'trading-view-top-bar.php' ?>

    <div class="container">
        <nav class="navbar-expand-lg">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <a href="<?php echo get_home_url();?>" class="logo"></a>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="bp-mobile-nav" id="bp-mobile-nav">
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
                            <li class="menu__item have-menu cursor-pointer" data-sub="<?php echo $counter; ?>">
                                <a href="<?php echo $item_link; ?>" class="bp-nav-link nav-menu-link text-strong"> <?php echo $item_label; ?></a>
                            </li>
                            <?php
                                        }   else {
                                    ?>
                            <li class="nav-item">
                                <a class="bp-nav-link nav-menu-link" href="<?php echo $item_link; ?>">
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
                        <div class="dropdown-holder">
                            <div class="dropdown__arrow"></div>
                            <div class="dropdown__bg">
                                <div class="dropdown__bg-bottom"></div>
                            </div>
                            <div class="dropdown__wrap">
                                <?php
                            $args = array(
                                'post_type' => 'nav-menu',
                                'post_status' => 'publish',
                                'posts_per_page' => '1',
                            );
                            $posts_loop = new WP_Query( $args );
                            $counter_menu = 0;
                            if ( $posts_loop->have_posts() ) :
                                while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
                                if( have_rows('menu_items') ):
                                    while( have_rows('menu_items') ) : the_row();
                                    $item_label = get_sub_field('item_label');
                                    $item_link = get_sub_field('item_link'); 
                                    $have_sub_menu = get_sub_field('have_sub_menu');     
                                    $have_sub_menu_call_to_action = get_sub_field('have_sub_menu_call_to_action');     
                                    if ($have_sub_menu) {
                                    $counter_menu++;
                                ?>
                                <div class="bp-dropdown-menu" id="<?php echo $counter_menu; ?>"
                                    data-sub="<?php echo $counter_menu; ?>">
                                    <div class="bp-dropdown-menu__content">
                                        <div class="top-section">
                                            <div class="col w-100">

                                                <?php
                                                    if( have_rows('sub_menus') ){
                                                        while( have_rows('sub_menus') ) : the_row();
                                                        $sub_menu_label = get_sub_field('sub_menu_label');
                                                        $sub_menu_description = get_sub_field('sub_menu_description');
                                                        $sub_menu_link = get_sub_field('sub_menu_link');
                                                    ?>
                                                <div class="row">
                                                    <a class="menu-item-action" href="<?php echo $sub_menu_link; ?>">
                                                        <div class="text-strong"><?php echo $sub_menu_label; ?></div>
                                                        <div class="text-small text-grey text-strong">
                                                            <?php echo $sub_menu_description; ?></div>
                                                    </a>
                                                </div>
                                                <?php 
                                            endwhile;
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="bottom-section bg-light">
                                        <?php 
                                            if ($have_sub_menu_call_to_action):
                                        ?>
                                            <div class="row p-20">
                                                <div class="col d-flex align-items-center">
                                                    <p class="text-strong p-0 m-0">
                                                        <?php the_sub_field('sub_menu_call_to_action_text'); ?>
                                                    </p>
                                                </div>
                                                <div class="col d-flex justify-content-end">
                                                    <a class="btn bp-btn btn-primary"
                                                        href="<?php the_sub_field('sub_menu_call_to_action_link'); ?>">
                                                        <?php the_sub_field('sub_menu_call_to_action_button_label'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php 
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                </div>
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

                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex">
                    <a href="https://trade.isabullion.com/" target="_blank" class="btn bp-btn btn-primary bp-btn-link">Login</a>
                    <a href="<?php echo get_home_url() . '/signup/lets-get-started'; ?>" class="btn bp-btn btn-primary ml-10 mr-10">Open account</a>
    
                </div>

            </div>
        </nav>
    </div>
</div>