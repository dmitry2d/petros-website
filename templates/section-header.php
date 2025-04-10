<?php
/*
* Section Header
*/
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name=”format-detection” content=”telephone=no”>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php bloginfo('name'); ?>: <?php bloginfo('description'); ?></title>
        
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

        <!-- Styles-->
        <link rel="stylesheet" href='<?= get_template_directory_uri()?>/assets/css/index.css'>

        <!-- Slick Slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script
            type="text/javascript"
            src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
        </script>

        <?php wp_head(); ?>


    </head>

    <body>
    