<?php
     
get_header(); ?>

<div class="top-section">
    <div class="container">
        <h3 class="text-center mb-40">Search Result for : <?php echo htmlentities($s, ENT_QUOTES, 'UTF-8'); ?>
        </h3>
        <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                $post_id = get_the_ID();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                ?>
                <div class="col-xl-4 col-md-6 col-sm-12 mb-30">
                    <a href="<?php echo the_permalink(); ?>" class="w-100">
                        <div class="card bp-card actionable bp-card-rounded bg-white box-shadow h-100 p-0">
                            <div class="card-image" style="background-image: url('<?php echo $image[0]; ?>')">
                                <div class="h-100 p-30">
                                    <div class="d-flex justify-content-start">
                                        <?php 
                                            $terms = get_the_terms( $post_id , 'videos-category' );
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
                            <div class="pt-30 pl-30 pr-30 pb-20">
                                <div class="text-small text-strong text-secondary"><?php echo get_the_date( 'd F Y' ); ?>
                                </div>
                                <div class="text-strong text-medium mt-10 mb-20" style="min-height: 58px">
                                    <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
                                </div>
                                <p>
                                    <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
                                </p>
                                <div class="d-flex flex-column col align-items-end w-100">
                                    <button class="btn bp-btn bp-btn-arrow">Watch video</button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <?php 
            endwhile;
            else:
                ?>
        </div>
        <h3 class="text-center">No Results Found</h3>
        <div class="row">
            <div class="d-flex col flex-column  align-items-center justify-content-center">
                <a href="<?php echo get_home_url() . '/videos'?>" class="btn btn-primary bp-btn mt-10 mb-60">All
                    videos</a>
            </div>
        </div>
        <?php
        endif;
    ?>
    </div>
</div>

<?php get_footer(); ?>