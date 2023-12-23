<div class="container-fluid nav-bar bp-navbar d-none d-xl-block">
    <div class="container">
        <nav class="navbar-expand-lg mt-20">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <a href="<?php echo get_home_url();?>" class="logo"></a>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="bp-mobile-nav" id="bp-mobile-nav">
                        <ul
                            class="navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex align-items-center justify-content-center">
                            <li class="nav-item">
                                <a class="bp-nav-link nav-menu-link" href="<?php echo get_home_url();?>">Home</a>
                            </li>
                            <li class="menu__item have-menu cursor-pointer" data-sub="about">
                                <a class="bp-nav-link nav-menu-link">About</a>
                            </li>
                            <li class="menu__item have-menu cursor-pointer" data-sub="trading">
                                <a class="bp-nav-link nav-menu-link"
                                    href="<?php echo get_home_url() . '/about'; ?>">Trading</a>
                            </li>
                            <li class="menu__item have-menu cursor-pointer" data-sub="resources">
                                <a class="bp-nav-link nav-menu-link"
                                    href="<?php echo get_home_url() . '/views-and-news'; ?>">Resources</a>
                            </li>
                            <li class="menu__item have-menu cursor-pointer" data-sub="pricing">
                                <a class="bp-nav-link nav-menu-link">Pricing</a>
                            </li>
                            <li class="menu__item have-menu cursor-pointer" data-sub="platform">
                                <a class="bp-nav-link nav-menu-link">Platform</a>
                            </li>
                            <li class="nav-item">
                                <a class="bp-nav-link nav-menu-link"
                                    href="<?php echo get_home_url() . '/contact'; ?>">Contact</a>
                            </li>
                        </ul>
                        <div class="dropdown-holder">
                            <div class="dropdown__arrow"></div>
                            <div class="dropdown__bg">
                                <div class="dropdown__bg-bottom"></div>
                            </div>
                            <div class="dropdown__wrap">
                                <div class="bp-dropdown-menu" id="news" data-sub="news">
                                    <div class="bp-dropdown-menu__content">
                                        <div class="top-section">
                                            <div class=">Latest Views and News</div>
                                            <div class=" line mt-20 mb-20"></div>
                                            <div class="row w-100">
                                                <?php
                                                    $i = 0;
                                                        $args = array(
                                                            'post_type' => 'news',
                                                            'post_status' => 'publish',
                                                            'orderby' => 'date',
                                                            'order' => 'DESC',
                                                            'posts_per_page' => '2',
                                                        );
                                                        $posts_loop = new WP_Query( $args );
                                                        if ( $posts_loop->have_posts() ) :
                                                            while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
                                                            $i++;
                                                        ?>
                                                <div class="col-12">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="text-small mb-10">
                                                            <?php echo get_the_date( 'd F Y' ); ?>
                                                        </div>
                                                        <div class="text-primary mb-10">
                                                            <?php echo mb_strimwidth(get_the_title(), 0, 80, '...'); ?>
                                                        </div>
                                                        <div class="text-small">
                                                            <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
                                                        </div>
                                                        <div class="row d-flex justify-content-end mt-10">
                                                            <button class="btn bp-btn-more">Read More</button>
                                                        </div>
                                                    </a>
                                                </div>
                                                <?php 
                                                    if ($i !== 2) {
                                                        ?>
                                                <div class="line mt-20 mb-20"></div>
                                                <?php
                                                        }
                                                    ?>
                                                <?php
                                                    endwhile;
                                                        wp_reset_postdata();
                                                    endif;
                                                    ?>
                                            </div>
                                        </div>
                                        <div class="bottom-section bg-light">
                                            <div class="row">
                                                <div class="col-12 d-flex align-items-center">
                                                    <a class="menu-item-action w-100"
                                                        href="<?php echo get_home_url() . '/views-and-news'?>">
                                                        <div class=" text-primary">View All</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bp-dropdown-menu" id="about" data-sub="about">
                                    <div class="bp-dropdown-menu__content">
                                        <div class="top-section">
                                            <div class="col w-100">
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-30 mt-20"
                                                        href="<?php echo get_home_url() . '/about'; ?>">
                                                        <div class=text-primary">About Us</div>
                                                        <div>What we do is simple – COMMIT . CONNECT . CURE</div>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-30"
                                                        href="<?php echo get_home_url() . '/history'; ?>">
                                                        <div class=text-primary">Our History</div>
                                                        <div>A glimpse into our history</div>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-30"
                                                        href="<?php echo get_home_url() . '/message-from-founders'; ?>">
                                                        <div class=text-primary">Message From Our Founders
                                                        </div>
                                                        <div>Our founders vision</div>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-20"
                                                        href="<?php echo get_home_url() . '/mantra-and-values'; ?>">
                                                        <div class=text-primary">Mantra and Values</div>
                                                        <div>We operate at the highest standard to serve and to support
                                                            patients</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-section bg-primary">
                                            <div class="row">
                                                <div class="col d-flex align-items-center">
                                                    <p class=">
                                                        Need to know more?
                                                    </p>
                                                </div>
                                                <div class=" col d-flex justify-content-end">
                                                        <a class="btn bp-btn white"
                                                            href="<?php echo get_home_url() . '/contact'; ?>">Contact
                                                            Us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bp-dropdown-menu" id="trading" data-sub="trading">
                                    <div class="bp-dropdown-menu__content">
                                        <div class="top-section">
                                            <div class="col w-100">
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-30 mt-20"
                                                        href="<?php echo get_home_url() . '/therapeutic-areas'; ?>">
                                                        <div class=text-primary">Therapeutic Areas</div>
                                                        <div class="">We cover different therapeutic areas in our
                                                            portfolio</div>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-30"
                                                        href="<?php echo get_home_url() . '/capabilities-and-expertise'; ?>">
                                                        <div class=text-primary">Our Capabilities and
                                                            Expertise</div>
                                                        <div class="">Extensive experience within the MENAT Region</div>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-20"
                                                        href="<?php echo get_home_url() . '/partnerships'; ?>">
                                                        <div class=text-primary">Our Partnerships</div>
                                                        <div class="">We join forces with organizations and individuals
                                                            that share the same values</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-section p-0">

                                        </div>
                                    </div>
                                </div>

                                <div class="bp-dropdown-menu" id="people" data-sub="people">
                                    <div class="bp-dropdown-menu__content">
                                        <div class="top-section">
                                            <div class="col w-100">

                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-30 mt-20"
                                                        href="<?php echo get_home_url() . '/board'; ?>">
                                                        <div class=text-primary">Board of Directors</div>
                                                        <div>Meet our board of directors</div>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-30"
                                                        href="<?php echo get_home_url() . '/team'; ?>">
                                                        <div class=text-primary">Leadership Team</div>
                                                        <div>Meet our team of experts</div>
                                                    </a>
                                                </div>
                                                <div class="row">
                                                    <a class="menu-item-action pl-20 mb-20"
                                                        href="<?php echo get_home_url() . '/departments'; ?>">
                                                        <div class=text-primary">Our Departments</div>
                                                        <div>Our cross functional departments cater to every need</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-section p-0">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex">
                    <button class="btn bp-btn btn-primary bp-btn-link">Login</button>
                    <button class="btn bp-btn btn-primary ml-10 mr-10">Open account</button>
                    <div class="dropdown">
                        <?php 
                            $current_language = wpml_get_current_language();
                        ?>
                        <button class="btn bp-btn btn-secondary btn-lang-dd bp-dropdown-toggle" type="button"
                            data-bs-toggle="dropdown">
                            
                            <?php echo mb_convert_case($current_language, MB_CASE_TITLE, "UTF-8"); ?>
                        </button>
                        <ul class="dropdown-menu bp-dropdown-menu box-shadow">
                            <?php wpml_language_switcher(); ?>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</div>