<?php
/* Template Name: Deposits */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container p-0">
        <h1 class="text-large mb-40">Deposits</h1>
        <p>Trade online with absolute confidence in the security of your funds.</p>
        <p class="text-strong">We ensure ironclad transactions.</p>

        <div
            class="bp-card bp-card-rounded bp-card-top-border-secondary box-shadow bg-primary pl-40 pr-40 pt-60 pb-60 mb-80 mt-40">
            <div class="row">
                <?php 
                    for ($i=0; $i < 3; $i++) { 
                        ?>
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="icon bg-secondary"></div>
                    <div class="text-strong text-white mt-40 mb-20">Secure Deposits</div>
                    <div class="text-white text-center" style="max-width: 250px">
                        Your funds are safeguarded in top-tier banks, ensuring an additional layer of security.
                    </div>
                </div>

                <?php
                    if ($i !== 2) {
                ?>
                <div class="col-1 d-flex flex-column align-items-center justify-content-center">
                    <div class="vertical-line"></div>
                </div>
                <?php
                }
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container pb-80">
    <div class="row">
        <div class="col">
            <h1 class="text-large mb-40">Bank transfer</h1>
            <p>
                Opt for the trusted bank transfer method to fund your account. Enjoy the convenience of direct fund
                transfers from your bank for a seamless financial transaction.
            </p>
            <div class="text-strong mt-40">
                Local or international bank transfer via
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col">
            <div class="row bg-primary p-20 border-radius">
                <div class="col">
                    <div class="text-white text-strong">Accepted currencies</div>
                </div>
                <div class="col d-flex flex-column align-items-end">
                    <div class="text-secondary text-strong">AED and USD</div>
                </div>
            </div>

            <div class="row bg-primary p-20 border-radius mt-20">
                <div class="col">
                    <div class="text-white text-strong mb-20">Transaction Fee</div>
                    <div class="row bg-white p-20 border-radius mb-10">
                        <div class="col">
                            <div class="text-strong">Deposits</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">Free</div>
                        </div>
                    </div>
                    <div class="row bg-white p-20 border-radius mb-10">
                        <div class="col">
                            <div class="text-strong">Withdrawals within UAE</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">Free</div>
                        </div>
                    </div>
                    <div class="row bg-white p-20 border-radius">
                        <div class="col">
                            <div class="text-strong">Withdrawals outside UAE</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">Variable</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row bg-primary p-20 border-radius mt-20">
                <div class="col">
                    <div class="text-white text-strong mb-20">Processing duration</div>
                    <div class="row bg-white p-20 border-radius mb-10">
                        <div class="col">
                            <div class="text-strong">Deposits</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">1-5 working days</div>
                        </div>
                    </div>
                    <div class="row bg-white p-20 border-radius mb-10">
                        <div class="col">
                            <div class="text-strong">Withdrawals</div>
                        </div>
                        <div class="col d-flex flex-column align-items-end">
                            <div class="text-secondary text-strong">1-5 working days</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="row mt-60">

        <div class="col">
            <div class="row bg-primary p-20 border-radius mb-10">
                <div class="col">
                    <div class="text-white text-strong">Accepted currencies</div>
                </div>
                <div class="col d-flex flex-column align-items-end">
                    <div class="text-secondary text-strong">AED and USD</div>
                </div>
            </div>

            <div class="row bg-primary p-20 border-radius mb-10">
                <div class="col">
                    <div class="text-white text-strong">Transaction Fee</div>
                </div>
                <div class="col d-flex flex-column align-items-end">
                    <div class="text-secondary text-strong">3%</div>
                </div>
            </div>

            <div class="row bg-primary p-20 border-radius">
                <div class="col">
                    <div class="text-white text-strong">Processing duration</div>
                </div>
                <div class="col d-flex flex-column align-items-end">
                    <div class="text-secondary text-strong">Immediate</div>
                </div>
            </div>
        </div>

        <div class="col-2"></div>

        <div class="col">
            <h1 class="text-large mb-40">Pay by card</h1>
            <p>
                Experience the ease of funding your account with a simple click using your credit or debit card for a
                smooth and hassle-free transaction.
            </p>
            <div class="text-strong mt-40">
                Accepted Cards
            </div>
        </div>

    </div>
</div>

<div class="bg-primary pt-80 pb-80">

    <div class="container">
        <div class="col d-flex flex-column align-items-center justify-content-center">
            <p class="text-white text-center" style="max-width: 400px;">
                Choose between these two secure methods.
                For transaction updates, reach out to your dedicated success manager or email us.
            </p>
            <button class="mt-20 btn bp-btn btn-secondary">Contact us</button>
        </div>
    </div>
</div>

<div class="bg-light pt-80 pb-80">
    <div class="container">
        <h1 class="mb-60 text-large">Do you need any help?</h1>
        <?php include('partials/cta-cards.php') ?>
    </div>
</div>

<?php get_footer(); ?>