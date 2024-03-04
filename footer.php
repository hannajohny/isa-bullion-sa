<div class="fluid-container bg-primary footer-container">
    <footer>
        <div class="container footer-container p-0">
            <div class="row m-0">
                <div class="col-md-12">
                    <div class="row">
                        <div class="accordion p-0 w-100 d-lg-flex" id="accordion">
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-none d-lg-block">
                                    <div class="logo secondary"> </div>
                                </div>
                            </div>

                            <?php
                            $args = array(
                                'post_type' => 'footer-menu',
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
                                    $counter++;
                                    ?>
                            <div class="d-flex flex-column flex-grow-1">
                                <div class="d-block d-lg-none d-xl-none">
                                    <button class="accordion-button footer-menu-title collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#fm-<?php echo $counter; ?>">
                                        <?php echo $item_label; ?>
                                    </button>
                                </div>

                                <div
                                    class="footer-menu-title d-none d-lg-block d-xl-block mb-20 fw-bold text-secondary">
                                    <?php echo $item_label; ?>
                                </div>

                                <div class="collapse d-lg-flex footer-menu-nav" id="fm-<?php echo $counter; ?>"
                                    data-bs-parent="#accordion">
                                    <div class="col footer-menu-body">
                                        <ul class="list-unstyled p-0">
                                            <?php
                                                while( have_rows('sub_menus') ) : the_row();
                                                $sub_menu_label = get_sub_field('sub_menu_label');
                                                $sub_menu_link = get_sub_field('sub_menu_link');
                                            ?>
                                            <li class="mb-10">
                                                <a class="footer-link"
                                                    href="<?php echo $sub_menu_link; ?>"><?php echo $sub_menu_label; ?>
                                                </a>
                                            </li>
                                            <?php 
                                                endwhile;
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <?php
                                ?>
                            <?php
                                    endwhile;
                                endif;

                                endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>

                            <div class="">
                                <div class="d-block d-lg-none d-xl-none">
                                    <button class="accordion-button footer-menu-title collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#address-fm">
                                         <?php the_field('address_label', 'option') ?>  
                                    </button>
                                </div>

                                <div
                                    class="footer-menu-title d-none d-lg-block d-xl-block mb-20 fw-bold text-secondary">
                                     <?php the_field('address_label', 'option') ?>  
                                </div>

                                <div class="collapse d-lg-flex footer-menu-nav" id="address-fm"
                                    data-bs-parent="#accordion">
                                    <div class="col">
                                        <div class="footer-menu-body">
                                            <?php the_field('address', 'option') ?>    
                                        </div>
                                        <a class="btn bp-btn btn-secondary btn-phone  mt-20 mb-20" dir="ltr" href="tel:<?php the_field('phone_number', 'option'); ?>">
                                            <?php the_field('phone_number', 'option') ?> 
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-40 pb-40 d-none d-xl-block">
            <div class="row align-items-center justify-content-between">

                <div class="col p-0">
                    <div class="text-white"><?php the_field('copyrights_label', 'option'); ?></div>
                </div>
                <div class="col d-flex justify-content-end p-0">
                    <div class="row d-flex w-100 align-items-center justify-content-end">
                        <div class="col-3">
                            <div class="text-white"><?php the_field('follow_us_label', 'option'); ?></div>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="#" target="_blank" class="social-icon facebook">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="#" target="_blank" class="social-icon x">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="#" target="_blank" class="social-icon linkedin">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="#" target="_blank" class="social-icon instagram">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="#" target="_blank" class="social-icon youtube">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-40 pb-40 d-block d-lg-none">
            <div class="col flex-column d-flex align-items-center justify-content-center">
                <div class="row mb-40 justify-content-between align-items-center w-100">
                    <div class="col">
                        <div class="logo secondary"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="text-white text-center"><?php the_field('copyrights_label', 'option'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="text-white text-center mt-20"><p><?php the_field('follow_us_label', 'option'); ?></p></div>
                </div>
                <div class="row mt-20 align-items-center justify-content-center">
                    <div class="col d-flex flex-column align-items-center">
                        <a href="#" target="_blank" class="social-icon facebook"></a>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <a href="#" target="_blank" class="social-icon x"></a>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <a href="#" target="_blank" class="social-icon linkedin"></a>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <a href="#" target="_blank" class="social-icon instagram"></a>
                    </div>
                    <div class="col d-flex flex-column align-items-center">
                        <a href="#" target="_blank" class="social-icon youtube"></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>

</div>

<script type="text/javascript">
    const ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
    const templateUri = "<?php echo get_template_directory_uri(); ?>";
    const homeUrl = "<?php echo get_home_url(); ?>";
</script>


<script src="<?php echo get_template_directory_uri() . '/dist/js/nav-menu.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/owl.carousel.min.js'?>" type="text/javascript">
</script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/app.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/faqs.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/articles.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/featured-articles.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/videos.js'?>" type="text/javascript"></script>

<script src="<?php echo get_template_directory_uri() . '/dist/js/cal-core.min.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/calendar.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/map-box.js'?>" type="module"></script>

<?php wp_footer(); ?>

</body>

</html>