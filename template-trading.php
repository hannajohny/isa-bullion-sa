<?php
/* Template Name: Trading */
?>

<?php 

get_header(); 
$current_language = wpml_get_current_language();

?>

<!-- Hero -->
<div class="page-banner hero position-relative mt-100">

    <div class="container h-100 p-0">
        <div class="row h-100">
            <div class="col-4 justify-content-center h-100 d-flex flex-column">
                <h1 class="mb-20 text-hero">
                    Your Pathway to Financial
                    Security
                </h1>
                <p>
                    For centuries, gold has remained a symbol of wealth and stability. Its allure as a coveted
                    possession drives people to see it as a prime investment option.

                    At ISA Bullion, we bring you a comprehensive trading platform for gold, complete with advanced
                    resources and guidance to navigate the intricate world of precious metal investments
                </p>
                <div class="row mt-40">
                    <div class="col-4">
                        <a class="btn bp-btn btn-secondary" href="#">Open account</a>
                    </div>
                    <div class="col-4">
                        <a class="btn bp-btn bp-btn-arrow" href="#">Try a demo</a>

                    </div>
                </div>
            </div>
            <div class="col-8">
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
            <div class="owl-carousel-featured-companies owl-carousel" dir="ltr">
                <?php
                if( have_rows('featured_on_companies') ):
                    while( have_rows('featured_on_companies') ) : the_row();
                ?>
                <div class="company-logo" style="background-image: url('<?php the_sub_field('company_logo'); ?>')">
                </div>
                <!-- <div class="col-lg-2 col-md-6 align-items-center justify-content-center d-flex flex-column mb-20">
                        </div> -->
                <?php
                endwhile;
            endif;
            ?>
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

<div class="bg-light pt-80 pb-80">
    <div class="container">
        <h1 class="text-large">Trade it, Own it</h1>
        <div class="row mt-60">
            <?php 
                for ($i=0; $i < 4; $i++) { 
                    ?>
            <div class="col-md-6 mb-40">
                <div class="icon bg-secondary mb-20"></div>
                <div class="text-medium text-strong mb-20">Own Your Gold</div>
                <div>Our user-friendly platform lets you buy and sell physical gold effortlessly<br> from any corner of
                    the world, whenever suits you best.
                </div>
            </div>
            <?php
                    }
                ?>
        </div>
    </div>
</div>

<div class="container pt-80 pb-80">
    <div class="text-medium text-secondary">Key Reasons to Consider</div>
    <h1 class="text-large">Why Gold Investment Matters</h1>
    <div class="row mt-60">
        <?php 
                for ($i=0; $i < 7; $i++) { 
                    ?>
        <div class="col-md-6 mb-40">
            <div class="icon bg-secondary mb-20"></div>
            <div class="text-medium text-strong mb-20">Store of value</div>
            <div>Gold is a dependable asset that remains stable, unlike currencies that are<br>susceptible to
                fluctuations. Its lasting value acts as a shield against inflation<br> and currency devaluation,
                safeguarding wealth for the long term.
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>

<div class="bg-primary pt-80 pb-80">
    <div class="container">
        <div class="col d-flex flex-column align-items-center">
            <div class="row">
                <div class="text-center text-white" style="max-width: 700px;">
                    At ISA Bullion, we firmly believe that gold trading goes beyond mere transactions; it's a means of
                    securing
                    your
                    financial future. Come be a part of the exhilarating world of gold trading and take the first step
                    towards
                    achieving greater financial stability and prosperity.
                    <br><br>
                    Let our expert guidance fuel your gold trading journey and witness the remarkable difference it can
                    make.
                </div>
            </div>
            <div class="row mt-40">
                    <div class="col">
                        <a class="btn bp-btn btn-secondary" href="#">Open account</a>
                    </div>
                    <div class="col">
                        <a class="btn bp-btn bp-btn-arrow text-white" href="#">Try a demo</a>
                    </div>
                </div>
        </div>
    </div>
</div>


<div class="bg-light pt-80 pb-80">
    <div class="container">
        <h1 class="text-large">Latest resources</h1>
    </div>
</div>


<!-- Download app -->
<div class="container pt-80 pb-80">
    <div class="row align-items-center justify-content-center">
        <div class="col-md-5 h-100 align-items-center justify-content-center">
            <h2 class="text-medium text-secondary"><?php the_field('download_app_title_one') ?></h2>
            <h1 class="text-large mb-30"><?php the_field('download_app_title_two') ?></h1>
            <p style="max-width: 450px;">
                <?php the_field('download_app_description') ?>
            </p>
            <div class="row flex-row mt-30">
                <div class="d-flex flex-column col-4 justify-content-start">
                    <?php 
                        $link = get_field('app_store_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                    <a class="btn bp-btn btn-primary app-store" href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>">
                        <?php echo $link_title; ?>
                    </a>
                    <?php endif; ?>
                </div>
                <div class="d-flex flex-column col-4 justify-content-start">
                    <?php 
                        $link = get_field('google_play_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                    <a class="btn bp-btn btn-primary play-store" href="<?php echo esc_url( $link_url ); ?>"
                        target="<?php echo esc_attr( $link_target ); ?>">
                        <?php echo $link_title; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="mobile-app"></div>
        </div>
    </div>
</div>

<!-- FAQs -->
<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h1 class="text-large mb-60"><?php the_field('faqs_section_title') ?></h1>

        <?php include('partials/faqs.php') ?>

        <div class="d-flex">
            <a class="btn bp-btn btn-primary mt-40"
                href="<?php the_field('faqs_button_link') ?>"><?php the_field('faqs_link_button_label') ?></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>