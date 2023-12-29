

<div class="owl-carousel-testimonials owl-carousel" dir="ltr">

    <?php 
        for ($i=0; $i < 10; $i++) { 
            ?>
            <div class="card bp-card bp-card-rounded box-shadow p-30 mr-30 mt-40 mb-40 user-select-none">
                <div class="d-flex">

                    <?php 
                for ($j=0; $j < 5; $j++) { 
                    ?>
                        <div class="trust-pilot-star mr-5"></div>
                        <?php
                }
                ?>
                </div>
                <div class="text-strong mt-10 mb-10">John Doe</div>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Sagittis ut nunc lectus aliquet interdum neque. Est turpis phasellus
                    commodo habitasse blandit bibendum urna egestas. Integer aenean velit nunc tempus
                </p>
            </div>
            <?php
        }
        ?>
</div>