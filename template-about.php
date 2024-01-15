<?php
/* Template Name: About */
?>

<?php get_header(); ?>

<div class="top-section">

    <div class="container p-0">
        <h1 class="text-large">About ISA Bullion</h1>
        <div class="row mt-40">
            <div class="col">
                <h2 class="text-medium text-strong mb-20">Who we are</h2>
                <p>
                    Leaders in the bullion industry for 14 years, the Zunaid Moti Family is dedicated to providing a
                    platform that allows everyone, from anywhere and at any time, to trade in physical gold and silver
                    with trust and reliability, ISA Bullion is at the forefront of the industry.
                    <br><br>
                    As a forward-thinking company, ISA Bullion empowers you to safeguard your wealth with our accessible
                    and user-friendly technologies that incorporate innovative features, catering to both experienced
                    investors and newcomers, ensuring convenience for all.
                </p>
            </div>
            <div class="col">
                <h2 class="text-medium text-strong mb-20">What we do</h2>
                <p>
                    Today, ISA Bullion expertly helps clients worldwide gain access to, trade and independently store
                    physical gold and silver on the go. With our trading App, you can make lucrative trades in precious
                    metals via a number of trading options and styles.
                    <br><br>
                    In addition, we provide an array of services related to your valuable assets such as trading,
                    instant execution, guaranteed two-way pricing, vaulting and insurance of actual physical bullions no
                    matter where you are on the globe.
                </p>
            </div>
        </div>

        <div class="row justify-content-center mt-60 mb-80">
            <div class="col">
                <div class="card bp-card bp-card-rounded bp-card-top-border-secondary box-shadow p-30 bg-white h-100">
                    <div class="col d-flex flex-column">
                        <div class="h-100">
                            <div class="text-medium text-strong mb-20">Our mission and values</div>
                            <p>
                                We are driven by our customer-centric approach to simplify the process of physical gold
                                trading
                                with the purpose of empowering individuals worldwide by offering a trusted platform to
                                safeguard
                                wealth and embrace financial freedom.
                                <br><br>
                                With our ISA Bullion platform, you can easily trade in gold and silver with lower fees,
                                for more
                                profit.
                            </p>

                        </div>
                        <div class="d-flex mt-20">
                            <button class="btn bp-btn btn-secondary">Open account</button>
                            <button class="btn bp-btn bp-btn-arrow ml-20">Try a demo</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card bp-card bp-card-rounded bp-card-top-border-secondary box-shadow p-30 bg-primary h-100">

                    <div class="col d-flex flex-column">
                        <div class="h-100">
                            <div class="text-medium text-white text-strong mb-20">Our Story</div>
                            <p class="text-white">
                                We thought, “what is the one thing we can provide that brings prosperity to everyone who
                                possesses it? Inquiring in the city of Gold, the obvious answer was staring right back
                                at us.
                                Gold. An infinitely sought after asset since time immemorial, whose purity and value are
                                proof
                                of actual wealth. Thus, we began striving with a vision to make Gold accessible to
                                everyone in
                                the world. And the result?
                                <br><br>
                                ISA Bullion – A tech-driven bullion provider based in the thriving metropolis of Dubai.
                            </p>

                        </div>
                        <div class="d-flex mt-20">
                            <button class="btn bp-btn btn-white">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-primary pt-60 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col d-flex flex-column">
                <div class="h-100">
                    <div class="icon bg-secondary mb-30"></div>
                    <div class="text-medium text-white mb-20">Guaranteed right to<br>withdraw physical Bullion anytime
                    </div>
                    <p class="text-white">
                        Our platform offers you the facility of guaranteed two way pricing which means the right to
                        withdraw
                        physical bullion any time you want in UAE.
                        <br><br>
                        We strictly abide by international trading standards to ensure swift demand and supply of
                        bullion.
                    </p>
                </div>
                <div class="d-flex mt-20">
                    <button class="btn bp-btn btn-secondary">Open account</button>
                </div>
            </div>
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <div class="vertical-line"></div>
            </div>
            <div class="col d-flex flex-column">
                <div class="h-100">
                    <div class="icon bg-secondary mb-30"></div>
                    <div class="text-medium text-white mb-20">We can buy back your<br> Bullion instantly</div>
                    <p class="text-white">
                        You can directly sell your purchased precious metals instantly from your bullion account.
                        <br><br>
                        We guarantee to buy back the asset any time you wish to sell.
                    </p>
                </div>
                <div class="d-flex mt-20">
                    <button class="btn bp-btn btn-white">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Management team -->
<div class="bg-light pt-80 pb-80">
    <div class="container">
        <h1 class="text-large mb-40">Our management team</h1>
        <p style="max-width: 600px">
            Explore the profiles of our key executives who bring a wealth of experience and commitment to every facet of
            ISA Bullion.
            <br><br>
            Their expertise ensures that ISA Bullion remains at the forefront of the bullion market.
        </p>
        <div class="row justify-content-center mt-40">
            <?php 
                for ($i=0; $i < 3 ; $i++) { 
                    ?>
            <div class="col">
                <div class="bg-white bp-card bp-card-rounded box-shadow mb-20 h-100">
                    <div class="card-image card-image-profile bg-primary position-relative">
                        <div class="icon linkedin-profile bg-white position-absolute"></div>
                    </div>
                    <div class="p-30">
                        <div class="text-strong text-medium">Zunaid Aziz Moti</div>
                        <div class="text-strong text-secondary mb-20">Chief Executive Office</div>
                        <p class="m-0">
                            Lorem ipsum dolor sit amet consectetur. Aliquet condimentum praesent aliquet arcu. Lorem
                            ipsum
                            dolor sit amet consectetur.
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>

<!-- Trade license -->
<div class="container pt-80 pb-80">
    <h1 class="text-large mb-40">Trade license</h1>
    <p>We are a registered and regulated trading company under the rules of the DMCC Dubai Authority.</p>
    <p>Our license number is <span class="text-strong">DMCC-31227</span></p>
    <div class="d-flex mt-40">
        <button class="btn bp-btn btn-secondary">View trade license</button>
        <button class="btn bp-btn btn-primary bp-btn-link ml-20">Verify us</button>
    </div>
</div>

<!-- Partners -->
<div class="bg-light">
    <div class="container pt-80 pb-80">
        <h3 class="text-center text-large">Our partners</h3>
        <div class="text-center text-secondary text-medium text-strong">Trust in our commitment to transparency and, security</div>
    </div>
</div>

<?php get_footer(); ?>