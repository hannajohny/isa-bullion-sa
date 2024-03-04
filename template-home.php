<?php
/* Template Name: Home */
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
                <h1 class="mb-20 text-hero"><?php the_field('hero_title') ?></h1>
                <p><?php the_field('hero_description') ?></p>
                <div class="d-flex mt-40">
                        <?php 
                        $link = get_field('button_one_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <a class="btn bp-btn btn-secondary" href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php the_field('button_one_label') ?></a>
                        <?php endif; ?>
                        <?php 
                            $class_to_add = $current_language == 'ar' ? 'rtl' : '';
                            $link = get_field('button_two_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                        <a class="ml-20 btn bp-btn bp-btn-arrow <?php echo $class_to_add; ?>"
                            href="<?php echo esc_url( $link_url ); ?>"
                            target="<?php echo esc_attr( $link_target ); ?>"><?php the_field('button_two_label') ?></a>
                        <?php endif; ?>
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
        <h3 class="text-center text-large"><?php the_field('featured_on_label'); ?></h3>
        <div class="row mt-60 align-items-center justify-content-center">
            <?php
                if( have_rows('featured_on_companies') ):
                    while( have_rows('featured_on_companies') ) : the_row();
                ?>
                <div class="col d-flex flex-column align-items-center justify-content-center mb-20">
                    <div class="company-logo" style="background-image: url('<?php the_sub_field('company_logo'); ?>')">
                    </div>
                </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<!-- Key benefits -->
<div class="container pt-80 pb-80" style="max-width: 1200px">
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h3 class="text-secondary text-medium text-center">
            <?php the_field('key_benefits_title_one') ?>
        </h3>
        <h1 class="text-large text-center">
            <?php the_field('key_benefits_title_two') ?>
        </h1>
        <p class="mt-20 text-center" style="max-width: 500px;">
            <?php the_field('key_benefits_description') ?>
        </p>
    </div>

    <div class="row mt-60 justify-content-center">

        <?php

        if( have_rows('key_benefit_cards') ):

            while( have_rows('key_benefit_cards') ) : the_row();
        ?>

        <div class="col-lg-3 col-md-6 mb-20">
            <div class="bp-card bp-card-rounded bp-card-shadow bg-primary p-30 h-100">
                <div class="flex-column d-flex align-items-center justify-content-center">
                    <div class="icon mb-20"
                        style="background-image: url('<?php the_sub_field('key_benefits_card_icon'); ?>')"></div>
                    <div class="mb-20 text-center text-white text-strong text-medium">
                        <?php the_sub_field('key_benefits_card_title') ?></div>
                    <div class="text-center text-white"><?php the_sub_field('key_benefits_card_description') ?></div>
                </div>
            </div>
        </div>
        <?php
            endwhile;
        endif;
        ?>

    </div>
</div>

<!-- Resources -->
<div class="bg-light">
    <div class="container pt-80 pb-80">

        <h1 class="text-large mb-20"><?php the_field('market_news_resources_title') ?></h1>

        <div class="row" dir="ltr">

            <div class="col-lg-5">
                <div class="text-strong mb-20 mt-20"><?php the_field('latest_articles_title') ?></div>
                <div class="row p-0">
                    <div class="col p-0">
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
                        <div class="box-shadow featured-articles-container">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="text-strong ml-20 mb-20 mt-20"><?php the_field('live_market_news_title') ?></div>
                <div class="row">
                    <div class="col">
                        <div class="bg-white box-shadow">
                            <?php
                        for ($i=0; $i <3; $i++) { 
                            ?>
                            <div class="p-20">
                                <div class="d-flex">
                                    <div class="bp-chip">Bullion</div>
                                    <div class="bp-chip ml-10">Market</div>
                                </div>
                                <div class="text-strong mt-15">Bearish Long-term position</div>
                                <p class="mt-10 text-small">Lorem ipsum dolor sit amet consectetur. Vulputate
                                    pellentesque quam
                                    magna nibh diam tempor.</p>

                                <?php 
                            if ($current_language !== 'ar') {
                                ?>
                                <button class="btn bp-btn bp-btn-arrow mt-10">Read article</button>
                                <?php
                            } else {
                                ?>
                                <button class="btn bp-btn bp-btn-arrow rtl mt-10">Read article</button>
                                <?php
                            }
                        ?>

                            </div>
                            <?php 
                                if ($i !== 2) {
                                    ?>
                            <div class="bp-line"></div>
                            <?php
                                        }
                                    ?>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="text-strong ml-10 mb-20 mt-20"><?php the_field('market_reports_title') ?></div>
                <div class="row">
                    <div class="col">
                        <div class="row bg-white box-shadow">

                            <div class="p-20">
                                <div class="icon icon-calendar-featured"></div>
                                <div class="text-strong mt-15">Economic calendar</div>
                                <p class="mt-10 text-small">Upcoming financial-economic market events and news.</p>
                                <div class="d-flex">
                                    <?php 
                                        if ($current_language !== 'ar') {
                                            ?>
                                    <a class="btn bp-btn bp-btn-arrow"
                                        href="<?php echo get_home_url() . '/live-economic-calendar'; ?>">
                                        View calendar
                                    </a>
                                    <?php
                                        } else {
                                            ?>
                                    <a class="btn bp-btn bp-btn-arrow rtl"
                                        href="<?php echo get_home_url() . '/live-economic-calendar'; ?>">
                                        View calendar
                                    </a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="bp-line"></div>

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
                                <div class="icon icon-featured daily-report"></div>
                                <div class="text-strong mt-15">Latest daily report</div>
                                <p class="mt-10 text-small">View latest insights and analysis of the current market.</p>
                                <div class="d-flex">
                                    <?php 
                                        if ($current_language !== 'ar') {
                                            ?>
                                    <a class="btn bp-btn bp-btn-arrow" href="<?php the_permalink(); ?>">
                                        View report
                                    </a>
                                    <?php
                                        } else {
                                            ?>
                                    <a class="btn bp-btn bp-btn-arrow rtl" href="<?php the_permalink(); ?>">
                                        View report
                                    </a>
                                    <?php
                                        }
                                    ?>
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
                                <p class="mt-10 text-small">Browse through our market reports in a calendar view.</p>
                                <div class="d-flex">
                                    <?php 
                                        if ($current_language !== 'ar') {
                                            ?>
                                    <a class="btn bp-btn bp-btn-arrow"
                                        href="<?php echo get_home_url() . '/reports'; ?>">
                                        View reports
                                    </a>
                                    <?php
                                        } else {
                                            ?>
                                    <a class="btn bp-btn bp-btn-arrow rtl"
                                        href="<?php echo get_home_url() . '/reports'; ?>">
                                        View reports
                                    </a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- testimonials -->
<div class="container pt-80">
    <h2 class="text-medium text-secondary"><?php the_field('testimonials_title_one') ?></h2>
    <h1 class="text-large"><?php the_field('testimonials_title_two') ?></h1>
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

<!-- Rates and costs -->
<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h2 class="text-medium text-secondary text-center"><?php the_field('rates_title_one')?></h2>
        <h1 class="text-large text-center"><?php the_field('rates_title_two')?></h1>

        <div class="row mt-60 justify-content-center">

            <?php
            if( have_rows('rates_cards') ):
                while( have_rows('rates_cards') ) : the_row();
                $card_color = get_sub_field('rates_card_color');
            ?>

            <div class="col-xl-3 col-lg-6 col-md-12 mb-30">
                <div
                    class="h-100 bp-card bp-card-rounded bp-card-shadow bg-<?php echo $card_color; ?> p-40 d-flex flex-column">
                    <div class="row">
                        <div class="col-2">
                            <div class="icon small"
                                style="background-image: url('<?php the_sub_field('rates_cards_icon'); ?>')"></div>
                        </div>
                        <div class="col">
                            <div
                                class="text-strong mb-40 text-medium <?php echo $card_color == 'primary' ? 'text-white' : '' ?>">
                                <?php the_sub_field('rates_card_title') ?></div>
                        </div>
                    </div>

                    <div class="row h-100 align-content-start">

                        <?php
                            if( have_rows('rates_card_rates') ):
                                while( have_rows('rates_card_rates') ) : the_row();
                            ?>
                        <div class="d-flex align-items-center mb-20">
                            <div
                                class="icon bullet-point 
                                <?php echo $card_color == 'secondary' ? 'primary' : ''; echo $current_language == 'ar' ? ' ml-15' : ' mr-15'; ?>">
                            </div>
                            <div class="<?php echo $card_color == 'primary' ? 'text-white' : '' ?>">
                                <?php the_sub_field('rates_card_rate') ?>
                            </div>
                        </div>
                        <?php
                                endwhile;
                                endif;
                            ?>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-30">
                        <?php 
                        $link = get_sub_field('rates_card_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>

                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"
                            class="btn bp-btn btn-<?php echo $card_color == 'primary' ? 'secondary' : 'primary' ?> box-shadow">
                            <?php the_sub_field('rates_card_button_label') ?>
                        </a>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <?php
                endwhile;
                endif;
            ?>

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
        <h1 class="text-large mb-60"><?php the_field('faqs_section_title') ?></h1>

        <?php include('partials/faqs.php') ?>

        <div class="tab-content box-shadow faqs-tab-container" data-posts='4'>
            <!-- Content goes in here using JS -->
        </div>

        <div class="d-flex">
            <a class="btn bp-btn btn-primary mt-40"
                href="<?php the_field('faqs_button_link') ?>"><?php the_field('faqs_link_button_label') ?></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>