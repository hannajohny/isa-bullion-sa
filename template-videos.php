<?php
/* Template Name: Videos */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container">
        <div class="row mb-80">
            <div class="col-4 justify-content-between d-flex flex-column">
                <div class="row">
                    <h1 class="text-large mt-20">Videos</h1>
                </div>
                <div class="row">
                    <div class="text-strong">Latest video</div>
                    <div class="text-small">Published on 04 January 2024</div>
                    <div class="text-large text-strong text-secondary mt-60 mb-20">How to place a Limit order (LMT)?
                    </div>
                    <p style="max-width: 400px;">
                        The Easiest Way to Buy and Sell Physical Bullion Instantly, Worldwide.
                    </p>
                    <div class="d-flex mt-20">
                        <a class="btn bp-btn bp-btn-arrow">Watch video</a>
                    </div>
                </div>
                <div class="row"></div>
            </div>
            <div class="col">
                <div class="featured-video-wr">
                    <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/ITXEupGQiQ0?si=JT8uScQOl819Ev38" frameborder="0"
                        allowfullscreen class="rounded-corners">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light pt-40 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-column align-items-center justify-content-center col-md-6">
                <input type="text" class="search-input" placeholder="Search videos">
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
                    <div class="card-image video bg-dark">
                        <div class="row p-30 h-100 align-items-end">
                            <div class="d-flex justify-content-start">
                                <div class="bp-chip bg-white">Bullion</div>
                                <div class="bp-chip bg-white ml-10">Market</div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-30 pl-30 pr-30 pb-20">
                        <div class="text-small text-strong">18 December 2023</div>
                        <div class="text-strong text-medium text-secondary mt-10 mb-20">How to place a Market
                            order (MKT)?</div>
                        <p>The Easiest Way to Buy and Sell Physical Bullion Instantly, Worldwide.</p>
                        <div class="d-flex flex-column col align-items-end w-100">
                            <button class="btn bp-btn bp-btn-arrow">Watch video</button>
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