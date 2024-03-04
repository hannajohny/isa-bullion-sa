<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css' rel='stylesheet' />
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
    <!-- <link href="<?php echo get_template_directory_uri() . '/dist/assets/images/fav-32.png'; ?>" rel="shortcut icon"
        type="image/x-icon">
    <link href="<?php echo get_template_directory_uri() . '/dist/assets/images/fav-256.png'; ?>" rel="apple-touch-icon"> -->
</head>

<body class="body">
<?php include 'partials/desktop-nav.php' ?>
<?php include 'partials/mobile-nav.php' ?>
