<?php
/* Template Name: Pricing */
?>

<?php get_header(); ?>

<div class="top-section">

    <div class="container pb-80">
        <h1 class="text-large mb-20">Gold and Silver Pricing</h1>
        <p class="text-medium">We offer highly affordable buying and selling rates for physical Gold with minimal cost.
        </p>
        <p class="text-strong text-medium">Minimal mark up and mark downs include storage & insurance of Your assets.
        </p>


        <div class="d-flex p-15 bg-primary border-radius mt-40">
            <div class="col">
                <div class="text-white text-strong">Metal</div>
            </div>
            <div class="col">
                <div class="text-white text-strong">Unit</div>
            </div>
            <div class="col">
                <div class="text-white text-strong">Multiples</div>
            </div>
            <div class="col">
                <div class="text-white text-strong">Choices</div>
            </div>
        </div>
        <div class="border-radius box-shadow strong bg-white mt-20">
            <?php 
                for ($i=0; $i <3 ; $i++) { 
                    ?>
            <div class="d-flex p-15">
                <div class="col">
                    <div class="text-strong">Gold</div>
                </div>
                <div class="col">
                    <div class="text-strong">1 OZ</div>
                </div>
                <div class="col">
                    <div class="text-strong">Buy/ Sell in increments of 1 Oz</div>
                </div>
                <div class="col">
                    <div class="text-strong">1 oz, 2 oz, 10 oz, etc</div>
                </div>
            </div>
            <div class="bp-line"></div>
            <?php
                }
            ?>
        </div>
    </div>

</div>


<div class="bg-light pt-80 pb-80">
    <div class="container">
        <h1 class="text-large">Gold</h1>
        <div class="icon bg-primary mt-20 mb-20"></div>
        <p>If you are buying and selling in Ounces <strong>$2.5/OZ</strong>(per side)</p>

        <div class="d-flex p-15 bg-primary border-radius mt-40">
            <div class="col">
                <div class="text-white text-strong">Action</div>
            </div>
            <div class="col">
                <div class="text-white text-strong">Spot price</div>
            </div>
            <div class="col-1"></div>
            <div class="col">
                <div class="text-white text-strong">Markup</div>
            </div>
            <div class="col">
                <div class="text-white text-strong">Outcome</div>
            </div>
            <div class="col">
                <div class="text-white text-strong">Amount</div>
            </div>
        </div>

        <div class="border-radius box-shadow strong bg-white mt-20">
            <?php 
                for ($i=0; $i <2 ; $i++) { 
                    ?>
            <div class="d-flex p-15">
                <div class="col">
                    <div>Buying</div>
                </div>
                <div class="col">
                    <div>$1900</div>
                </div>
                <div class="col-1">
                    <div class="text-medium text-strong">+</div>
                </div>
                <div class="col">
                    <div>$2.5/OZ</div>
                </div>
                <div class="col">
                    <div>You will pay</div>
                </div>
                <div class="col">
                    <div class="text-strong">$1902.5 / OZ</div>
                </div>
            </div>
            <div class="bp-line"></div>
            <?php
                }
            ?>
        </div>

    </div>
</div>



<div class="pt-80 pb-80">
    <div class="container">
        <h1 class="mb-60 text-large">Do you need any help?</h1>
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>


<?php get_footer(); ?>