<h1 class="mb-60 text-large"><?php the_field('cta_section_title', 'option') ?></h1>

<div class="row justify-content-start">

    <div class="col-lg-3 col-md-6 mb-20">

        <div class="card bp-card bp-card-rounded h-100 box-shadow p-30">
            <div class="h-100">
                <div class="icon icon-small mb-20"
                    style="background-image: url('<?php the_field('visit_us_card_icon', 'option'); ?>')"></div>
                <div class="text-strong text-medium mb-10"><?php the_field('visit_us_card_title', 'option'); ?></div>
                <p>
                    <?php the_field('visit_us_card_description', 'option'); ?>
                </p>
            </div>
            <div class="col-8">
                <a href="<?php the_field('visit_us_card_button_link', 'option'); ?>" target="_blank"
                    class="btn bp-btn btn-primary bp-btn-link mt-20 w-100"><?php the_field('visit_us_card_button_label', 'option'); ?></a>
            </div>
        </div>

    </div>

    <div class="col-lg-3 col-md-6 mb-20">
        <div class="card bp-card bp-card-rounded h-100 box-shadow p-30">
            <div class="h-100">
                <div class="icon icon-small mb-20"
                    style="background-image: url('<?php the_field('talk_to_us_card_icon', 'option'); ?>')"></div>
                <div class="text-strong text-medium mb-10"><?php the_field('talk_to_us_card_title', 'option'); ?></div>
                <p>
                    <?php the_field('talk_to_us_card_description', 'option'); ?>
                </p>
            </div>
            <div class="d-flex mt-20">
                <a href="tel:<?php the_field('talk_to_us_card_phone_number', 'option'); ?>"
                    class="btn bp-btn btn-primary w-100"><?php the_field('talk_to_us_card_button_label', 'option'); ?>
                </a>
                <a href="https://wa.me/<?php the_field('talk_to_us_card_whatsapp_number', 'option'); ?>" target="_blank"
                    class="btn bp-btn btn-primary w-100 ml-10"><?php the_field('talk_to_us_card_whatsapp_label', 'option'); ?>
                </a>
            </div>
        </div>
    </div>


    <div class="col-lg-3 col-md-6 mb-20">
        <div class="card bp-card bp-card-rounded h-100 box-shadow p-30">
            <div class="h-100">
                <div class="icon icon-small mb-20"
                    style="background-image: url('<?php the_field('email_us_card_icon', 'option'); ?>')"></div>
                <div class="text-strong text-medium mb-10"><?php the_field('email_us_card_title', 'option'); ?></div>
                <p>
                    <?php the_field('email_us_card_description', 'option'); ?>
                </p>
            </div>
            <div class="col-8">
                <a href="mailto:<?php the_field('email_us_card_email_address', 'option'); ?>"
                    class="btn bp-btn btn-primary mt-20 w-100"><?php the_field('email_us_card_button_label', 'option'); ?></a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-20">
        <div class="card bp-card bp-card-rounded h-100 box-shadow p-30">
            <div class="h-100">
                <div class="icon icon-small mb-20"
                    style="background-image: url('<?php the_field('meet_us_card_icon', 'option'); ?>')"></div>
                <div class="text-strong text-medium mb-10"><?php the_field('meet_us_card_title', 'option'); ?></div>
                <p>
                    <?php the_field('meet_us_card_description', 'option'); ?>
                </p>
            </div>
            <div class="col-8">
                <a href="<?php the_field('meet_us_card_button_link', 'option'); ?>" target="_blank"
                    class="btn bp-btn btn-primary mt-20 w-100"><?php the_field('meet_us_card_button_label', 'option'); ?></a>
            </div>
        </div>
    </div>

</div>