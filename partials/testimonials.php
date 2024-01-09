<div class="owl-carousel-testimonials owl-carousel" dir="ltr">
    <?php 
    	$args = array(
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );
        $posts_loop = new WP_Query( $args );
        if ( $posts_loop->have_posts() ) :
            while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
            $testimonial = get_field( 'testimonial');
            ?>
    <div class="card bp-card bp-card-rounded box-shadow p-30 mr-30 mt-40 mb-40 user-select-none" style="height:230px">
        <div class="d-flex">
            <?php 
                for ($j=0; $j < 5; $j++) { 
                    ?>
                <div class="trust-pilot-star mr-5"></div>
            <?php
                }
            ?>
        </div>
        <div class="text-strong mt-20 mb-10"><?php the_field('author') ?></div>
        <div><?php echo mb_strimwidth($testimonial, 0, 160, '...') ?></div>
    </div>
    <?php

    endwhile;
    wp_reset_postdata();
    endif;
    ?>
</div>