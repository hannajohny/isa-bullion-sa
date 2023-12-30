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

                                <div class="dropdown mt-40">
                                    <?php 
                                        $current_language = wpml_get_current_language();
                                    ?>
                                    <button class="btn bp-btn btn-secondary btn-lang-dd bp-dropdown-toggle"
                                        type="button" data-bs-toggle="dropdown">

                                        <?php echo mb_convert_case($current_language, MB_CASE_TITLE, "UTF-8"); ?>
                                    </button>
                                    <ul class="dropdown-menu bp-btn-dropdown-menu box-shadow">
                                        <?php wpml_language_switcher(); ?>
                                    </ul>
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
                                        Address
                                    </button>
                                </div>

                                <div
                                    class="footer-menu-title d-none d-lg-block d-xl-block mb-20 fw-bold text-secondary">
                                    Address
                                </div>

                                <div class="collapse d-lg-flex footer-menu-nav" id="address-fm" data-bs-parent="#accordion">
                                    <div class="col">
                                    <div class="footer-menu-body">
                                        Almas Tower<br>
                                        Jumeirah Lake Towers<br>
                                        Dubai, United Arab Emirates.
                                    </div>
                                    <button class="btn bp-btn btn-secondary mt-20 mb-20"  dir="ltr">+971 4 399 9219</button>
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
                    <div class="text-white">©<?php echo Date('Y')?> ISA Bullion DMCC. All Rights Reserved.</div>

                </div>
                <div class="col d-flex justify-content-end p-0">
                    <div class="row d-flex w-100 align-items-center justify-content-end">
                        <div class="col-3">
                            <div class="text-white">Follow us on</div>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="https://facebook.com" target="_blank" class="social-icon facebook">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="https://x.com" target="_blank" class="social-icon x">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="https://www.linkedin.com/" target="_blank" class="social-icon linkedin">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="https://www.instagram.com/" target="_blank" class="social-icon instagram">
                            </a>
                        </div>
                        <div class="col-1 d-flex justify-content-end">
                            <a href="https://www.youtube.com" target="_blank" class="social-icon youtube">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container pt-40 d-block d-xl-none">
            <div class="col align-items-center justify-content-center">
                <div class="row">
                    <div class="text-white text-center">©<?php echo Date('Y')?> ISA Bullion DMCC. All Rights Reserved.
                    </div>
                </div>
                <div class="row">
                    <div class="text-white text-center mt-40">Follow us on</div>
                </div>
                <div class="row mt-40 align-items-center justify-content-center">
                    <div class="col-2 d-flex flex-column align-items-center">
                        <a href="https://twitter.com/genpharmmena" target="_blank" class="social-icon twitter">
                        </a>
                    </div>
                    <div class="col-2 d-flex flex-column align-items-center">
                        <a href="https://www.linkedin.com/company/genpharm-services/" target="_blank"
                            class="social-icon linkedin">
                        </a>
                    </div>
                    <div class="col-2 d-flex flex-column align-items-center">
                        <a href="https://www.instagram.com/genpharmmena/" target="_blank" class="social-icon instagram">
                        </a>
                    </div>
                    <div class="col-2 d-flex flex-column align-items-center">
                        <a href="https://www.youtube.com/@genpharm474" target="_blank" class="social-icon youtube">
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </footer>

</div>

<script src="<?php echo get_template_directory_uri() . '/dist/js/nav-menu.js'?>" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/owl.carousel.min.js'?>" type="text/javascript">
</script>
<script src="<?php echo get_template_directory_uri() . '/dist/js/app.js'?>" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>

</html>