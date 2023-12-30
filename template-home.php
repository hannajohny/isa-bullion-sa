<?php
/* Template Name: Home */
?>

<?php 
    get_header(); 
    $current_language = wpml_get_current_language();
?>

<div class="page-banner hero position-relative mt-100">

    <div class="container h-100 p-0">
        <div class="row h-100">
            <div class="col-4 justify-content-center h-100 d-flex flex-column">
                <h1 class="mb-20 text-hero"><?php the_field('hero_title') ?></h1>
                <p><?php the_field('hero_description') ?></p>
                <div class="row mt-40">
                    <div class="col-4">
                        <button class="btn bp-btn btn-secondary">Open account</button>
                    </div>
                    <div class="col-4">
                        <?php 
                    if ($current_language !== 'ar') {
                        ?>
                        <button class="btn bp-btn bp-btn-arrow">Try a demo</button>
                        <?php
                    } else {
                        ?>
                        <button class="btn bp-btn bp-btn-arrow rtl">Try a demo</button>
                        <?php
                    }
                ?>
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

<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h3 class="text-center text-large">As featured on</h3>
        <div class="row mt-60 align-items-center justify-content-center">
            <div class="col align-items-center justify-content-center d-flex flex-column">
                <div class="icon"></div>
            </div>
            <div class="col align-items-center justify-content-center d-flex flex-column">
                <div class="icon"></div>
            </div>
            <div class="col align-items-center justify-content-center d-flex flex-column">
                <div class="icon"></div>
            </div>
            <div class="col align-items-center justify-content-center d-flex flex-column">
                <div class="icon"></div>
            </div>
            <div class="col align-items-center justify-content-center d-flex flex-column">
                <div class="icon"></div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-80 pb-80" style="max-width: 1200px">
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h3 class="text-secondary text-medium text-center">Key benefits</h3>
        <h1 class="text-large text-center">
            The ultimate<br>
            Bullion trading experience
        </h1>
        <p class="mt-20 text-center" style="max-width: 500px;">
            Lorem ipsum dolor sit amet consectetur. Tincidunt dictum vitae in volutpat nisl scelerisque. Et quis viverra
            tincidunt a rhoncus. Tortor est tincidunt in augue vitae elementum arcu vel dictumst.
        </p>
    </div>

    <div class="row mt-60">
        <?php 
    
        for ($i=0; $i <8; $i++) { 
            ?>
        <div class="col-md-3">
            <div class="bp-card bp-card-rounded bp-card-shadow bg-primary p-40 mb-20">
                <div class="flex-column d-flex align-items-center justify-content-center">
                    <div class="icon mb-20"></div>
                    <div class="mb-10 text-center text-white text-strong">Competitive pricing</div>
                    <div class="text-center text-white">Enjoy low fees of $2.5 /oz for Gold Trading and $0.05/Oz for
                        Silver</div>
                </div>
            </div>
        </div>
        <?php
        }
    ?>
    </div>
</div>

<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h1 class="text-large mb-40">Market news & resources</h1>

        <div class="row">
            <div class="col-lg-5">
                <div class="text-strong">Latest articles from our experts</div>
                <ul class="nav nav-underline bg-white mt-40">
                    <li class="nav-item">
                        <a class="bp-tab-nav-link dark active" id="home-tab" data-bs-toggle="tab" href="#tab-home"
                            role="tab" aria-controls="tab-home" aria-selected="true">Bullion
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="bp-tab-nav-link dark" id="profile-tab" data-bs-toggle="tab" href="#tab-profile"
                            role="tab" aria-controls="tab-profile" aria-selected="false">Forex
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="bp-tab-nav-link dark" id="contact-tab" data-bs-toggle="tab" href="#tab-contact"
                            role="tab" aria-controls="tab-contact" aria-selected="false">Market
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="bp-tab-nav-link dark" id="contact-tab" data-bs-toggle="tab" href="#tab-trading"
                            role="tab" aria-controls="tab-contact" aria-selected="false">Trading
                        </a>
                    </li>
                </ul>
                <div class="tab-content box-shadow" id="myTabContent">

                    <div class="tab-pane show active" id="tab-home">
                        <div class="article-card-image bg-medium" style="height:275px"></div>
                        <div class="bg-white p-30">
                            <div class="text-secondary text-small">20 December 2024</div>
                            <div class="text-medium text-strong mt-10 mb-20">Article Title</div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Sagittis ut nunc lectus aliquet interdum neque.
                                Est turpis phasellus commodo habitasse blandit bibendum urna egestas. Integer aenean
                                velit nunc tempus
                            </p>
                            <button class="btn bp-btn btn-primary mt-30">Read article</button>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-profile">
                    </div>
                    <div class="tab-pane" id="tab-contact"></div>
                    <div class="tab-pane" id="tab-trading">

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-strong">Live market news</div>
                <div class="bg-white mt-40 box-shadow">
                    <?php
                        for ($i=0; $i <3; $i++) { 
                            ?>
                    <div class="p-20">
                        <div class="d-flex">
                            <div class="bp-chip">Bullion</div>
                            <div class="bp-chip ml-10">Market</div>
                        </div>
                        <div class="text-strong mt-20">Bearish Long-term position</div>
                        <p class="mt-10 text-small">Lorem ipsum dolor sit amet consectetur. Vulputate pellentesque quam
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
            <div class="col-lg-3">
                <div class="text-strong">Market reports</div>
                <div class="bg-white mt-40 box-shadow">
                    <?php
                        for ($i=0; $i <3; $i++) { 
                            ?>
                    <div class="p-20">
                        <div class="icon"></div>
                        <div class="text-strong mt-10">Economic calendar</div>
                        <p class="mt-10 text-small">Upcoming financial-economic market events and news.</p>

                        <?php 
                            if ($current_language !== 'ar') {
                                ?>
                        <button class="btn bp-btn bp-btn-arrow mt-10">View calendar</button>
                        <?php
                            } else {
                                ?>
                        <button class="btn bp-btn bp-btn-arrow rtl mt-10">View calendar</button>
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
</div>

<div class="container pt-80">
    <h2 class="text-medium text-secondary">Hear from ISA Bullion’s esteemed clientele from around the world.</h2>
    <h1 class="text-large">We’re Spreading Smiles Worldwide</h1>
    <div class="trust-pilot-logo mt-20"></div>
</div>
<?php include('partials/testimonials.php') ?>
<div class="container">
    <button class="btn bp-btn btn-primary bp-btn-link mb-60">View all</button>
</div>

<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h2 class="text-medium text-secondary text-center">Exceptional on every level</h2>
        <h1 class="text-large text-center">Rates and costs</h1>

        <div class="row mt-60 justify-content-center">
            <div class="col-3">
                <div class="h-100 bp-card bp-card-rounded bp-card-shadow bg-white p-40 d-flex flex-column">
                    <div class="text-strong mb-40 text-medium">Free</div>
                    <div class="col">
                        <ul class="bp-custom-ul">
                            <li class="mb-20 bp-custom-li">Opening an Account</li>
                            <li class="mb-20 bp-custom-li">Depositing Funds</li>
                            <li class="mb-20 bp-custom-li">Insurance</li>
                            <li class="mb-20 bp-custom-li">Vaulting</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div
                    class="p-40 bp-card bp-card-rounded bp-card-shadow bg-secondary h-100 d-flex justify-content-between flex-column">
                    <div class="col">
                        <div class="text-strong mb-40 text-medium">Trading in gold</div>
                        <ul class="bp-custom-ul">
                            <li class="mb-20 bp-custom-li">Opening an Account</li>
                            <li class="mb-20 bp-custom-li">Depositing Funds</li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="btn bp-btn btn-primary box-shadow">Know more</button>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div
                    class="p-40 bp-card bp-card-rounded bp-card-shadow bg-primary h-100 d-flex justify-content-between flex-column">
                    <div class="col">
                        <div class="text-strong mb-40 text-medium text-white">Trading in silver</div>
                        <ul class="bp-custom-ul">
                            <li class=" text-white bp-custom-li">Opening an Account</li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="btn bp-btn btn-secondary box-shadow">Know more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container pt-80 pb-80">
    <div class="row align-items-center justify-content-center">
        <div class="col-5 h-100 align-items-center justify-content-center">
            <h2 class="text-medium text-secondary">Start trading now</h2>
            <h1 class="text-large mb-30">Download our app</h1>
            <p style="max-width: 450px;">
                Take control of your physical gold or silver bullion trades on the go. Download the ISA Bullion App to
                make trades, track profits, catch trends and view live spot charts for gold and silver prices worldwide.
                Make real-time purchases and set up custom market alerts to track the price of gold and silver to always
                trade at the right time.
            </p>
            <div class="row flex-row mt-30" >
                <div class="d-flex flex-column col-4 justify-content-start">
                    <button class="btn bp-btn btn-primary app-store">App Store</button>
                </div>
                <div class="d-flex flex-column col-4 justify-content-start">
                    <button class="btn bp-btn btn-primary play-store">Google Play</button>

                </div>
            </div>
        </div>
        <div class="col-5" >
            <div class="mobile-app"></div>
        </div>
    </div>
</div>

<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h1 class="text-large mb-60">Frequently asked questions</h1>

        <ul class="nav nav-underline bg-primary" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="bp-tab-nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab"
                    aria-controls="tab-home" aria-selected="true">Bullion
                </a>
            </li>
            <li class="nav-item">
                <a class="bp-tab-nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab"
                    aria-controls="tab-profile" aria-selected="false">Forex
                </a>
            </li>
            <li class="nav-item">
                <a class="bp-tab-nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab-contact" role="tab"
                    aria-controls="tab-contact" aria-selected="false">Market
                </a>
            </li>
            <li class="nav-item">
                <a class="bp-tab-nav-link" id="contact-tab" data-bs-toggle="tab" href="#tab-trading" role="tab"
                    aria-controls="tab-contact" aria-selected="false">Trading
                </a>
            </li>
        </ul>
        <div class="tab-content box-shadow" id="myTabContent">

            <div class="tab-pane show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is ISA Bullion?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                SA Bullion is a leading bullion trading platform based in Dubai.
                                <br><br>
                                Through our mobile app, we enable businesses and individuals to make limitless digital
                                trades in physical Gold and silver, on the go - without any geographical restrictions.
                                <br><br>
                                Alongside instant trading, we offer a wealth of options to secure your investments and
                                profits ranging from trade executions to vaulting, insurance services and more.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
                locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
                blog
                sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                photo
                booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
                nostrud organic.</div>
            <div class="tab-pane" id="tab-contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                lo-fi
                farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                locavore
                carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit
                cred
                pitchfork.</div>
            <div class="tab-pane" id="tab-trading" role="tabpanel">
                trading
            </div>
        </div>

        <div class="d-flex">
            <div class="btn bp-btn btn-primary mt-40">View all</div>
        </div>
    </div>
</div>

<?php get_footer(); ?>