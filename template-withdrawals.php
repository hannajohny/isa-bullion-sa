<?php
/* Template Name: Withdrawals */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container p-0">
        <h1 class="text-large mb-40">Withdrawals</h1>
        <p style="max-width: 400px">Lorem ipsum dolor sit amet consectetur. Mauris lacus fermentum facilisis et.
            Venenatis faucibus auctor enim tristique lacus.</p>
        <div
            class="bp-card bp-card-rounded bp-card-top-border-secondary box-shadow bg-primary pl-40 pr-60 pt-30 pb-60 mb-80 mt-40">
            <div class="row mb-40">
                <div class="d-flex">
                    <div class="bp-chip large text-white">Free of charge</div>
                </div>
            </div>
            <div class="row">
                <?php 
                    for ($i=0; $i < 2; $i++) { 
                        ?>
                <div class="col d-flex flex-column">
                    <div class="icon bg-secondary"></div>
                    <div class="text-strong text-white mt-40 mb-20">Secure Deposits</div>
                    <div class="text-white" style="max-width: 300px">
                        Your funds are safeguarded in top-tier banks, ensuring an additional layer of security.
                    </div>
                </div>
                <?php
                        if ($i !== 1) {
                    ?>
                <div class="col-1 d-flex flex-column justify-content-center">
                    <div class="vertical-line"></div>
                </div>
                <?php
                    }
                        }
                    ?>
                <div class="col position-relative">
                    <div class="super-graphic withdrawals position-absolute"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light pt-80 pb-80">
    <div class="container">
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-large text-center">Withdrawal of Bullion</h1>
            <div class="text-medium text-secondary text-center">Collection from office</div>
        </div>
        <div class="row justify-content-center mt-40">
            <div class="col">
                <div class="rounded-corners bg-white p-40 box-shadow h-100 bp-card-top-border-secondary">
                    <div class="text-center text-medium text-strong">Gold</div>

                    <div class="row p-20">
                        <div class="col">
                            <div>Quantity</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="">Withdrawal Fee</div>
                        </div>
                    </div>

                    <div class="row bg-primary p-20 border-radius">
                        <div class="col">
                            <div class="text-white text-strong">Gold Kg (kilobar)</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">$100 + VAT</div>
                        </div>
                    </div>

                    <div class="row bg-primary p-20 border-radius mt-10">
                        <div class="col">
                            <div class="text-white text-strong">Gold Kg (kilobar)</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">$100 + VAT</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="rounded-corners bg-primary p-40 box-shadow h-100 bp-card-top-border-secondary">
                    <div class="text-center text-medium text-strong text-white">Silver</div>

                    <div class="row p-20">
                        <div class="col">
                            <div class="text-white">Quantity</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-white">Withdrawal Fee</div>
                        </div>
                    </div>

                    <div class="row bg-white p-20 border-radius">
                        <div class="col">
                            <div class="text-strong">Gold Kg (kilobar)</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">$100 + VAT</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white pt-80 pb-80">
    <div class="container">
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-large text-center">Physical delivery of Bullion</h1>
            <div class="text-medium text-secondary text-center">at your doorstep</div>
        </div>
        <div class="row justify-content-center mt-40">
            <div class="col">
                <div class="rounded-corners bg-white p-40 box-shadow h-100 bp-card-top-border-secondary">
                    <div class="text-center text-medium text-strong">Gold</div>

                    <div class="row p-20">
                        <div class="col">
                            <div>Quantity</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="">Withdrawal Fee</div>
                        </div>
                    </div>

                    <div class="row bg-primary p-20 border-radius">
                        <div class="col">
                            <div class="text-white text-strong">Gold Kg (kilobar)</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">$100 + VAT + Delivery Fee</div>
                        </div>
                    </div>

                    <div class="row bg-primary p-20 border-radius mt-10">
                        <div class="col">
                            <div class="text-white text-strong">Gold Kg (kilobar)</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">$100 + VAT + Delivery Fee</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="rounded-corners bg-primary p-40 box-shadow h-100 bp-card-top-border-secondary">
                    <div class="text-center text-medium text-strong text-white">Silver</div>

                    <div class="row p-20">
                        <div class="col">
                            <div class="text-white">Quantity</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-white">Withdrawal Fee</div>
                        </div>
                    </div>

                    <div class="row bg-white p-20 border-radius">
                        <div class="col">
                            <div class="text-strong">Gold Kg (kilobar)</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">$100 + VAT + Delivery Fee</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Help CTA -->
<div class="bg-light pt-80 pb-80">
    <div class="container">
        <h1 class="mb-60 text-large">Do you need any help?</h1>
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>


<?php get_footer(); ?>