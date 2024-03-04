<?php
/* Template Name: Trading */
?>

<?php 

get_header(); 
$current_language = wpml_get_current_language();

?>

<!-- Hero -->
<div class="page-banner hero position-relative mt-100">

    <div class="container h-100">
        <div class="row h-100">
            <div class="col-xl-4 col-lg-12 justify-content-center h-100 d-flex flex-column">
                <h1 class="mb-20 text-hero"><?php the_field('hero_header'); ?></h1>
                <p>
                    <?php the_field('hero_description'); ?>
                </p>
                <div class="d-flex mt-40">
                    <a class="btn bp-btn btn-secondary" href="<?php the_field('hero_button_one_link') ?>"><?php the_field('hero_button_one_label') ?></a>
                    <a class="btn bp-btn bp-btn-arrow ml-20" href="<?php the_field('hero_button_two_link') ?>" target="_blank"><?php the_field('hero_button_two_label') ?></a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-12">
                <?php 
                    if ($current_language !== 'ar') {
                        ?>
                <div class="hero-dashboard"></div>
                <?php
                    } else {
                        ?>
                <div class="hero-dashboard-ar"></div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Featured on -->
<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h3 class="text-center text-large"><?php the_field('featured_section_title'); ?></h3>
        <div class="row mt-60 align-items-center justify-content-center">
                <?php
                if( have_rows('featured_on_logos') ):
                    while( have_rows('featured_on_logos') ) : the_row();
                ?>
                     <div class="col d-flex flex-column align-items-center justify-content-center mb-20">
                        <div class="company-logo" style="background-image: url('<?php the_sub_field('featured_on_logo'); ?>')">
                        </div>
                    </div>
                
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<!-- testimonials -->
<div class="container pt-80">
    <h2 class="text-medium text-secondary"><?php the_field('testimonials_header') ?></h2>
    <h1 class="text-large"><?php the_field('testimonials_sub_header') ?></h1>
    <div class="trust-pilot-logo mt-20"></div>
</div>

<?php include('partials/testimonials.php') ?>

<div class="container">
    <?php 
        $link = get_field('testimonial_button_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <div class="col d-flex flex-column justify-content-start align-items-start">
        <a class="btn bp-btn btn-primary bp-btn-link mb-60" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php the_field('testimonial_button_label') ?></a>
    </div>
    <?php endif; ?>
</div>

<div class="bg-light pt-80 pb-80">
    <div class="container">
        <h1 class="text-large"><?php the_field('trade_section_title'); ?></h1>
        <div class="row mt-60">

            <?php 
                if( have_rows('trade_features') ):
                    while( have_rows('trade_features') ) : the_row();
                    ?>
            <div class="col-md-6 mb-40">
                <div class="icon mb-20" style="background-image: url('<?php the_sub_field('trade_feature_icon'); ?>')">
                </div>
                <div class="text-medium text-strong mb-20"><?php the_sub_field('trade_feature_title'); ?></div>
                <div style="max-width: 500px;"><?php the_sub_field('trade_feature_description'); ?>
                </div>
            </div>
            <?php
                    endwhile;
                endif;
            ?>

        </div>
    </div>
</div>

<div class="container pt-80 pb-80">
    <div class="text-medium text-secondary"><?php the_field('investment_header'); ?></div>
    <h1 class="text-large"><?php the_field('investment_sub_header'); ?></h1>
    <div class="row mt-60">
        <?php 
           if( have_rows('investment_features') ):
                while( have_rows('investment_features') ) : the_row();
                ?>
        <div class="col-md-6 mb-40">
            <div class="icon mb-20" style="background-image: url('<?php the_sub_field('investment_feature_icon'); ?>')">
            </div>
            <div class="text-medium text-strong mb-20"><?php the_sub_field('investment_feature_title'); ?></div>
            <div style="max-width: 500px;"><?php the_sub_field('investment_feature_description'); ?>
            </div>
        </div>
        <?php
                endwhile;
            endif;     
        ?>
    </div>
</div>

<div class="bg-primary pt-80 pb-80">
    <div class="container">
        <div class="col d-flex flex-column align-items-center">
            <div class="row">
                <div class="text-center text-white" style="max-width: 700px;">
                    <?php the_field('call_to_action_message'); ?>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col">
                    <a class="btn bp-btn btn-secondary" href="<?php the_field('call_to_action_button_one_link'); ?>">
                        <?php the_field('call_to_action_button_one_label'); ?>
                    </a>
                </div>
                <div class="col">
                    <a class="btn bp-btn bp-btn-arrow text-white" href="<?php the_field('call_to_action_button_two_link'); ?>" target="_blank">
                        <?php the_field('call_to_action_button_two_label'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-light pt-80 pb-40">
    <div class="container" dir="ltr">
        <h1 class="text-large mb-40"><?php the_field('latest_resources_title'); ?></h1>
        <div class="row mt-40">
            <div class="col-md-6 mb-40">
                <div class="text-strong mb-20">Latest articles from our experts</div>

                <div class="row">
                    <div class="col">
                        <ul class="nav nav-underline bg-white">
                            <?php
                            $i = 0;
                            $categories = get_terms('article-category');
                            $selectedCategory = $categories[0]->slug;
                            foreach( $categories as $category ):
                            ?>
                            <li class="nav-item">
                                <a class="bp-tab-nav-link dark <?php if ($i === 0) echo 'active'; ?> cursor-pointer featured-articles-category-button"
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
                        <div class="box-shadow featured-articles-container" >
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-40">
                <div class="text-strong mb-20">Latest educational video</div>
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
                    $post_id = get_the_ID();
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                ?>

                <div class="bg-white box-shadow">
                    <div class="card-image featured-video" style="background-image: url('<?php echo $image[0]; ?>')">
                        <div class="row p-30 h-100 align-items-end">
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
                    <div class="bg-white p-30">
                        <div class="text-small text-strong text-secondary"><?php echo get_the_date( 'd F Y' ); ?></div>
                        <div class="text-strong text-medium mt-10 mb-20" style="min-height: 45px;">
                            <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
                        </div>
                        <p style="min-height:45px;">
                            <?php echo mb_strimwidth(get_the_excerpt(), 0, 150, '...'); ?>
                        </p>

                        <div class="d-flex">
                            <a class="btn bp-btn btn-primary mt-20" href="<?php the_permalink(); ?>">Watch video</a>
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
</div>


<!-- Download app -->
<div class="container pt-80 pb-80">
    <?php include('partials/download-app.php') ?>
</div>

<!-- FAQs -->
<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h1 class="text-large mb-60"><?php the_field('faqs_section_title', 'option'); ?></h1>
        <?php include('partials/faqs.php') ?>

        <div class="tab-content box-shadow faqs-tab-container" data-posts='4'>
            <!-- Content goes in here using JS -->
        </div>

        <div class="d-flex">
            <a class="btn bp-btn btn-primary mt-40"
                href="<?php the_field('faqs_section_button_link', 'option') ?>"><?php the_field('faqs_section_button_label', 'option'); ?></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>