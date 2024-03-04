<?php get_header(); ?>

<div class="top-section">
    <div class="container pb-80 articles-videos-wr">
        <div class="text-small text-grey text-strong mb-10"><?php echo get_the_date('d F Y') ?></div>

        <h1 class="text-large m-0"><?php the_title(); ?></h1>
        <div class="d-flex justify-content-start mt-20">
            <?php 
                $terms = get_the_terms( $post->ID , 'videos-category' );
                foreach ( $terms as $term ) {
                    $category_name = $term->name;
                    ?>
            <div class="bp-chip mr-10"><?php echo $category_name; ?></div>
            <?php
                }
            ?>
        </div>

        <div class="bp-line mt-30 mb-20"></div>
        <div class="text-strong">Share</div>
        <div class="row mt-20 mb-20">
            <a class="social-icon facebook-share cursor-pointer ml-10 mr-10" id="facebook-share"></a>
            <a class="social-icon linkedin-share cursor-pointer mr-10" id="linkedin-share"></a>
            <a class="social-icon email-share cursor-pointer" id="email-share"></a>
        </div>

        <div class="video-wr mb-40">
            <?php the_field('video_link'); ?>
        </div>
        <?php the_content(); ?>
    </div>
</div>


<div class="bg-light pt-60 pb-60">
<div class="container">
    <div class="text-strong text-medium">Latest videos</div>

    <div class="row mt-40 justify-content-start">
        <?php 
                $args = array(
                'post_type' => 'videos',
                'post_status' => 'publish',
                'orderby' => 'date',
                'posts_per_page' => '3',
                'post__not_in' => array($post->ID)
                );
                $posts_loop = new WP_Query( $args );
                if ( $posts_loop->have_posts() ) :
                while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            ?>
        <div class="col-md-4 mb-30">
            <a href="<?php echo the_permalink(); ?>" class="w-100">
                <div class="card bp-card actionable bp-card-rounded bg-white box-shadow h-100 p-0">
                    <div class="card-image" style="background-image: url('<?php echo $image[0]; ?>')">
                        <div class="h-100 p-30">
                            <div class="d-flex justify-content-start">
                                <?php
                                    $cat_name = 'videos-category';
                                    $postID = get_the_ID();
                                    $categories = get_the_terms($postID, $cat_name);
                                ?>
                                <?php 
                                    if ($categories && !is_wp_error($categories)) {
                                        foreach ($categories as $category) {
                                    ?>
                                <div class="bp-chip bg-white mr-10"><?php echo esc_html($category->name);  ?></div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="pt-30 pl-30 pr-30 pb-20">
                        <div class="text-small text-strong text-secondary"><?php echo get_the_date( 'd F Y' ); ?>
                        </div>
                        <div class="text-strong mt-10 mb-10" style="min-height: 45px">
                            <?php echo mb_strimwidth(get_the_title(), 0, 100, '...');  ?>
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
                    wp_reset_postdata();
                endif;
                ?>
    </div>
</div>
</div>

<?php get_footer(); ?>