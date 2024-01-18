<?php
/* Template Name: Economic Calendar */
?>

<?php get_header(); ?>

<div class="top-section">
    <div class="container pb-80">
        <h1 class="text-large text-center">Live Economic Calendar</h1>
        <div class="row align-items-center justify-content-center">
            <div class="text-center" style="max-width: 650px;">
                <?php 
                the_content();
            ?>
            </div>
        </div>

    <div class="row align-items-center justify-content-center mt-40">
              <!-- TradingView Widget BEGIN -->
              <!-- <div class="tradingview-widget-container"> -->
            <!-- <div class="tradingview-widget-container__widget"></div> -->
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js"
                async>
                {
                    "colorTheme": "light",
                    "isTransparent": false,
                    "width": "1160",
                    "height": "600",
                    "locale": "en",
                    "importanceFilter": "-1,0,1"
                }
            </script>
        <!-- </div> -->
        <!-- TradingView Widget END -->

    </div>
    </div>
</div>

<?php get_footer(); ?>