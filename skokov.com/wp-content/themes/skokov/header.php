<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skokov</title>
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url')?>/css/lib/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/lib/menu/pushy.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/lib/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/lib/slick-theme.css"/>
    <link href="<?php bloginfo('stylesheet_url')?>" media="screen, projection" rel="stylesheet" type="text/css"/>
    <script src="<?php bloginfo('template_url')?>/js/lib/jquery-3.1.1.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/lib/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/js/lib/slick.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/lib/menu/pushy.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/js/main.js"></script>

</head>
<body>

<!-- Pushy Menu -->
<nav class="pushy pushy-left">
    <ul>
        <!-- Submenu -->
        <li class="pushy-link"><a href="#">Home</a></li>
        <li class="pushy-link"><a href="#">Portfolio</a></li>
        <li class="pushy-link"><a href="#">Blog</a></li>
        <li class="pushy-link"><a href="#">About us</a></li>
        <li class="pushy-link"><a href="#">Contact</a></li>
    </ul>
</nav>

<!-- Site Overlay -->
<div class="site-overlay"></div>

<!--  Content -->
<div id="container">

    <!---------------------HEADER--------------------------->
    <header class="main-header">
        <div class="container">
            <div class="flex-header">
                <a href="#" class="logo">
                    <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="">
                    <h1>Skokov</h1>
                </a>

                <nav class="main-nav">
                <?php wp_nav_menu(array('theme_location'=>'menu', 'menu_class'=>'menu-list'));?>
<!--                    <ul class="menu-list">-->
<!--                        <li><a class="padding-btn hover-yellow" href="#">Home</a></li>-->
<!--                        <li><a class="padding-btn hover-yellow" href="#">Portfolio</a></li>-->
<!--                        <li><a class="padding-btn hover-yellow" href="#">Blog</a></li>-->
<!--                        <li><a class="padding-btn hover-yellow" href="#">About us</a></li>-->
<!--                        <li><a class="padding-btn hover-yellow" href="#">Contact</a></li>-->
<!--                    </ul>-->
                    <button class="menu menu-btn">menu</button>
                </nav>
            </div>
        </div>
    </header>