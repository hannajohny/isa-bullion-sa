<?php
/* Template Name: Videos */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container">
        <div class="row mb-80">

        <?php 
                $args = array(
                'post_type' => 'videos',
                'post_status' => 'publish',
                'orderby' => 'date',
                'posts_per_page' => '1',
                );
                $posts_loop = new WP_Query( $args );
                if ( $posts_loop->have_posts() ) :
                while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
            ?>

            <div class="col-md-4 justify-content-between d-flex flex-column">
                <div class="row">
                    <h1 class="text-large mt-20">Videos</h1>
                </div>
                <div class="row">
                    <div class="text-strong">Latest video</div>
                    <div class="text-small"><?php echo get_the_date( 'd F Y' ); ?></div>

                    <div class="text-large text-strong text-secondary mt-40 mb-20"> 
                        <?php echo mb_strimwidth(get_the_title(), 0, 100, '...');  ?>
                    </div>
                    <p style="max-width: 400px;">
                        <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
                    </p>
                    <div class="d-flex mt-20">
                        <a class="btn bp-btn bp-btn-arrow" href="<?php the_permalink(); ?>">Watch video</a>
                    </div>
                </div>
                <div class="row"></div>
            </div>
            <div class="col-md-8">
                <div class="video-wr rounded-corners mt-20">
                    <?php the_field('video_link'); ?>
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

<div class="bg-light pt-40 pb-80">
    <div class="container">
    <div class="row justify-content-center">
            <div class="d-flex flex-column align-items-center justify-content-center col-md-6">
                
                <form class="w-100" role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                    <div class="row align-items-center justify-content-center w-100">
                        <div class="col-md-9 col-sm-12">
                            <input type="text" class="search-input" name="s" placeholder="Search videos" required>
                        </div>
                        <div class="mb-20 d-md-none"></div>
                        <input type="hidden" name="post_type" value="videos" />
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
                    $categories = get_terms('videos-category');
                    $selectedCategory = $categories[0]->slug;
                    foreach( $categories as $category ):
                    ?>
                <li class="nav-item">
                    <a class="bp-tab-nav-link dark <?php if ($i === 0) echo 'active'; ?> cursor-pointer videos-category-button"
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
    <div class="container pt-60 pb-40">
        <div class="row justify-content-center videos-container">

        </div>
    </div>

    <div class="d-flex flex-row align-items-center justify-content-center">
            <button class="btn bp-btn btn-secondary" type="button" id="load-more-videos">Load More
            </button>
        </div>
</div>

<?php get_footer(); ?>