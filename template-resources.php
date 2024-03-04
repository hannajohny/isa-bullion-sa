<?php
/* Template Name: Resources */
?>

<?php get_header(); ?>

<div class="top-section bg-light">
    <div class="container pb-80">
        <div class="row">

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="text-strong mt-40 mb-20 ml-20">Latest article from our experts</div>
                <div class="row">
                    <div class="col">

                        <?php
                            $args = array(
                                'post_type' => 'articles',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'posts_per_page' => '1',
                            );
                            $posts_loop = new WP_Query( $args );
                            if ( $posts_loop->have_posts() ) :
                                while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
                                $post_id = get_the_ID();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                                $latest_post_id = get_the_ID();

                            ?>
                        <div class="card bp-card bp-card-rounded bg-white box-shadow p-0 h-100">
                            <div class="card-image card-image-featured"
                                style="background-image: url('<?php echo $image[0]; ?>')">
                                <div class="p-20 h-100">
                                    <div class="d-flex justify-content-start">
                                        <?php 
                                        $terms = get_the_terms( $post_id , 'article-category' );
                                        foreach ( $terms as $term ) {
                                            $category_name = $term->name;
                                        ?>
                                        <div class="bp-chip bg-white mr-10"><?php echo $category_name; ?></div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="p-20">
                                <div class="text-small text-strong text-secondary" style="margin-bottom: 5px;">
                                    <?php echo get_the_date('d F Y') ?></div>
                                <div class="text-strong text-medium mb-10"><?php the_title(); ?></div>
                                <p class="text-small">
                                    <?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...'); ?>
                                </p>

                                <div class="col-2">
                                    <a class="btn bp-btn bp-btn-arrow mt-10" href="<?php echo the_permalink(); ?>">Read
                                        article</a>
                                </div>
                            </div>
                        </div>
                        <?php
                                endwhile;
                            wp_reset_postdata();
                            endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="text-strong mt-40 mb-20 ml-20">Live market news</div>
                <div class="row">
                    <div class="col">
                        <div class="bg-white rounded-corners box-shadow h-100">
                            <div class="p-20">
                                <div class="d-flex">
                                    <div class="bp-chip">Bullion</div>
                                    <div class="bp-chip ml-10">Market</div>
                                </div>
                                <div class="text-strong mt-20">Bearish Long-term position</div>
                                <p class="mt-10 text-small">
                                    Lorem ipsum dolor sit amet consectetur. Vulputate pellentesque quam
                                    magna nibh diam tempor.
                                </p>
                                <button class="btn bp-btn bp-btn-arrow mt-10">Read article</button>
                            </div>

                            <div class="bp-line"></div>

                            <div class="p-20">
                                <div class="d-flex">
                                    <div class="bp-chip">Bullion</div>
                                    <div class="bp-chip ml-10">Market</div>
                                </div>
                                <div class="text-strong mt-20">Bearish Long-term position</div>
                                <p class="mt-10 text-small">
                                    Lorem ipsum dolor sit amet consectetur. Vulputate pellentesque quam
                                    magna nibh diam tempor.
                                </p>
                                <button class="btn bp-btn bp-btn-arrow mt-10">Read article</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-12">
                <div class="text-strong mt-40 mb-20 ml-20">Market reports</div>

                <div class="row">
                    <div class="col">

                        <div class="bg-white rounded-corners box-shadow h-100">

                        <?php 
                                $args = array(
                                'post_type' => 'reports',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'posts_per_page' => '1',
                                );
                                $posts_loop = new WP_Query( $args );
                                if ( $posts_loop->have_posts() ) :
                                while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
                                $post_id = get_the_ID();
                            ?>

                            <div class="p-20">
                                <div class="icon daily-report"></div>
                                <div class="text-strong mt-15">Latest daily report</div>
                                <p class="mt-10 text-small">
                                    View latest insights and analysis of<br> the current market.
                                </p>
                                <div class="d-flex">
                                <a class="btn bp-btn bp-btn-arrow" href="<?php the_permalink(); ?>">
                                    View report
                                </a>
                                </div>
                            </div>

                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>

                            <div class="bp-line"></div>

                            <div class="p-20">
                                <div class="icon icon-featured reports"></div>
                                <div class="text-strong mt-15">Historical reports</div>
                                <p class="mt-10 text-small">
                                    Browse through our market reports<br>in a calendar view.
                                </p>
                                <div class="d-flex">
                                    <a class="btn bp-btn bp-btn-arrow mt-10" href="<?php echo get_home_url() . '/reports'; ?>">View reports</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="pt-40 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-column align-items-center justify-content-center col-md-6">
                
                <form class="w-100" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                    <div class="row align-items-center justify-content-center w-100">
                        <div class="col-md-9 col-sm-12">
                                <input type="text" class="search-input" name="s" placeholder="Search articles" required>
                        </div>
                        <div class="mb-20 d-md-none"></div>
                        <input type="hidden" name="post_type" value="articles" />
                        <div class="col-md-3 col-sm-12 align-items-center justify-content-center d-flex">
                            <input type="submit" alt="Search" value="Search" class="btn btn-primary bp-btn"  />
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="bg-white box-shadow">
        <div class="container">
            <ul class="nav nav-underline justify-content-center mt-40" role="tablist">
                <?php
                    $i = 0;
                    $categories = get_terms('article-category');
                    $selectedCategory = $categories[0]->slug;
                    foreach( $categories as $category ):
                    ?>
                <li class="nav-item">
                    <a class="bp-tab-nav-link dark <?php if ($i === 0) echo 'active'; ?> cursor-pointer articles-category-button"
                        id="pills-<?php echo $category->slug;?>-tab" data-bs-toggle="pill"
                        data-slug="<?php echo $category->slug; ?>">
                        <?php echo $category->name;?>
                    </a>
                </li>
                <?php
                    $i++;
                    endforeach; 
                ?>
            </ul>
        </div>
    </div>
    <div class="container pt-60">

        <div class="row justify-content-center articles-container">
            <!-- Articles loaded in here1 -->
        </div>

        <div class="d-flex flex-row align-items-center justify-content-center">
            <button class="btn bp-btn btn-secondary mt-40" type="button" id="load-more-articles">Load More
            </button>
        </div>

    </div>
</div>

<?php get_footer(); ?>