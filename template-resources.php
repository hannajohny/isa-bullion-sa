<?php
/* Template Name: Resources */
?>

<?php get_header(); ?>

<div class="top-section bg-light">
    <div class="container pb-80">
        <div class="row">
            <div class="col-5">
                <div class="text-strong mt-40 mb-20 ml-20">Latest article from our experts</div>
            </div>
            <div class="col">
                <div class="text-strong mt-40 mb-20 ml-20">Live market news</div>
            </div>
            <div class="col">
                <div class="text-strong mt-40 mb-20 ml-20">Market reports</div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card bp-card bp-card-rounded bg-white box-shadow p-0 h-100">
                    <div class="card-image bg-dark" style="height: 200px">
                        <div class="p-20 h-100">
                            <div class="d-flex justify-content-start">
                                <div class="bp-chip bg-white">Bullion</div>
                                <div class="bp-chip bg-white ml-10">Market</div>
                            </div>
                        </div>
                    </div>
                    <div class="p-20">
                        <div class="text-small text-strong text-secondary mt-10">18 December 2023</div>
                        <div class="text-strong text-medium mt-20 mb-10">Article Title</div>
                        <p class="text-small">
                            Lorem ipsum dolor sit amet consectetur. Proin fames nec id morbi vel.
                            Lorem ipsum dolor sit
                            amet consectetur. Proin fames nec id morbi vel.
                        </p>
                        <button class="btn bp-btn bp-btn-arrow mt-10">Read article</button>
                       
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bg-white rounded-corners box-shadow h-100">
                    <div class="p-20">
                        <div class="d-flex">
                            <div class="bp-chip">Bullion</div>
                            <div class="bp-chip ml-10">Market</div>
                        </div>
                        <div class="text-strong mt-20">Bearish Long-term position</div>
                        <p class="mt-10 text-small">
                            Lorem ipsum dolor sit amet consectetur. Vulputate pellentesque quam
                            magna nibh diam tempor.
                        </p>
                        <button class="btn bp-btn bp-btn-arrow mt-10">Read article</button>
                    </div>


                    <div class="bp-line"></div>

                    <div class="p-20">
                        <div class="d-flex">
                            <div class="bp-chip">Bullion</div>
                            <div class="bp-chip ml-10">Market</div>
                        </div>
                        <div class="text-strong mt-20">Bearish Long-term position</div>
                        <p class="mt-10 text-small">
                            Lorem ipsum dolor sit amet consectetur. Vulputate pellentesque quam
                            magna nibh diam tempor.
                        </p>
                        <button class="btn bp-btn bp-btn-arrow mt-10">Read article</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bg-white rounded-corners box-shadow h-100">
                    <div class="p-20">
                        <div class="icon daily-report"></div>
                        <div class="text-strong mt-15">Latest daily report</div>
                        <p class="mt-10 text-small">
                            Lorem ipsum dolor sit amet consectetur. Vulputate pellentesque quam magna
                        </p>
                        <button class="btn bp-btn bp-btn-arrow mt-10">Read report</button>
                    </div>

                    <div class="bp-line"></div>

                    <div class="p-20">
                        <div class="icon reports"></div>
                        <div class="text-strong mt-15">Historical reports</div>
                        <p class="mt-10 text-small">
                            Lorem ipsum dolor sit amet consectetur. Vulputate pellentesque quam magna
                        </p>
                        <button class="btn bp-btn bp-btn-arrow mt-10">View reports</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="pt-40 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-column align-items-center justify-content-center col-md-6">
                <input type="text" class="search-input" placeholder="Search articles">
            </div>
        </div>
    </div>
    <div class="bg-white box-shadow">
        <div class="container">
            <ul class="nav nav-underline justify-content-center mt-40" role="tablist">

                <li class="nav-item">
                    <a class="bp-tab-nav-link dark active cursor-pointer faq-category-button">
                        Bullion
                    </a>
                </li>
                <li class="nav-item">
                    <a class="bp-tab-nav-link dark cursor-pointer faq-category-button">
                        Forex
                    </a>
                </li>
                <li class="nav-item">
                    <a class="bp-tab-nav-link dark cursor-pointer faq-category-button">
                        Market
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container pt-60 pb-80">
        <div class="row justify-content-center">
            <?php 
                    for ($i=0; $i < 6; $i++) { 
                        ?>
            <div class="col-md-4 mb-30">
                <div class="card bp-card actionable bp-card-rounded bg-white box-shadow h-100 p-0">
                    <div class="card-image bg-dark">
                        <div class="h-100 p-30">
                        <div class="d-flex justify-content-start">
                                <div class="bp-chip bg-white">Bullion</div>
                                <div class="bp-chip bg-white ml-10">Market</div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-30 pl-30 pr-30 pb-20">
                        <div class="text-small text-strong text-secondary">18 December 2023</div>
                        <div class="text-strong text-medium mt-10 mb-20">Article Title</div>
                        <p>Lorem ipsum dolor sit amet consectetur. Proin fames nec id morbi vel. Lorem ipsum dolor sit
                            amet consectetur. Proin fames nec id morbi vel.</p>
                        <div class="d-flex flex-column col align-items-end w-100">
                            <button class="btn bp-btn bp-btn-arrow">Read article</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                
                ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>