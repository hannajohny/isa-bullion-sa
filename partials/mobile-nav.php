<div class="container-fluid nav-bar bp-navbar fixed-top d-block d-xl-none">
    <div class="row align-items-center">
        <div class="col">
            <a class="logo ml-10" href="<?php echo get_home_url(); ?>"> </a>
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
                            <li class="nav-item pl-20">
                                <a class="bp-nav-link text-uppercase" style="display: block;" href="<?php echo get_home_url() . '/'?>">Home</a>
                            </li>

                            <div class="accordion w-100" id="accordion-menu">

                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed text-uppercase" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            About
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordion-menu">
                                        <div class="accordion-body">
                                         
                                            <div class="list-group list-group-light">
                                                <a href="<?php echo get_home_url() . '/about'?>">
                                                    <div class="text-primary text-strong"> About Us</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>

                                                <a href="<?php echo get_home_url() . '/history'?>">
                                                    <div class="text-primary text-strong">Our History</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>

                                                <a href="<?php echo get_home_url() . '/message-from-founders'?>">
                                                    <div class="text-primary text-strong">Message From Our Founders</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>
                                                <a href="<?php echo get_home_url() . '/mantra-and-values'?>">
                                                    <div class="text-primary text-strong">Mantra and Values</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed text-uppercase" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Company
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordion-menu">
                                        <div class="accordion-body">
                                            <div class="list-group list-group-light">
                                                <a href="<?php echo get_home_url() . '/therapeutic-areas'; ?>">
                                                    <div class="text-primary text-strong">Therapeutic Areas</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>

                                                <a href="<?php echo get_home_url() . '/capabilities-and-expertise'; ?>">
                                                    <div class="text-primary text-strong">Our Capabilities and Expertise</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>

                                                <a href="<?php echo get_home_url() . '/partnerships'; ?>">
                                                    <div class="text-primary text-strong">Our Partnerships</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed text-uppercase" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">
                                            Views and News
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordion-menu">
                                        <div class="accordion-body">
                                            <div class="list-group list-group-light">
                                                <?php
                                            $args = array(
                                                'post_type' => 'news',
                                                'post_status' => 'publish',
                                                'orderby' => 'date',
                                                'order' => 'DESC',
                                                'posts_per_page' => '4',
                                            );
                                            $posts_loop = new WP_Query( $args );
                                            if ( $posts_loop->have_posts() ) :
                                                while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
                                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                                            ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="text-primary text-strong"><?php the_title(); ?></div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>
                                                <?php
                                                endwhile;
                                                    wp_reset_postdata();
                                                endif;
                                                ?>
                                                <a class="btn bp-btn btn-primary text-white"
                                                    href="<?php echo get_home_url() . '/views-and-news'?>">View All</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed text-uppercase" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            People
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordion-menu">
                                        <div class="accordion-body">
                                            <div class="list-group list-group-light">
                                                <a href="<?php echo get_home_url() . '/board'?>">
                                                    <div class="text-primary text-strong">Board of Executive</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>

                                                <a href="<?php echo get_home_url() . '/team'?>">
                                                    <div class="text-primary text-strong">Meet Our Leadership Team</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>

                                                <a href="<?php echo get_home_url() . '/departments'?>">
                                                    <div class="text-primary text-strong">Our Departments</div>
                                                </a>
                                                <div class="line mt-15 mb-15"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <li class="nav-item pl-20">
                                <a class="bp-nav-link text-uppercase" style="display: block;" href="<?php echo get_home_url() . '/contact'?>">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>