
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php 
        if(isset($title) && !empty($title)) { 
           echo $title; 
        } 
        else { 
           echo "Default title tag"; 
        } ?></title>
        <!--core meta data-->
<!--        <meta name="description" content="Andrew Mason founded Mason Media to create inspiring, risk-taking designs for web and print media.">-->
        <meta name="description" content="<?php

        if(isset($metaD) && !empty($metaD)) { 
           echo $metaD; 
        } 
        else { 
           echo "Andrew Mason founded Mason Media to create inspiring, risk-taking designs for web and print media."; 
        } ?>" />
        <meta name="keywords" content="Decentral,Jaxx Liberty,Blockchain,Cryptocurrency,Decentral Inc.,Anthony Di Iorio">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="manifest" href="site.webmanifest">
        <!--icons-->
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="shortcut icon" href="/mm-favicon-pink.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- Open Graph Meta Data -->
        <meta property="og:description" content="Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.">
        <meta property="og:image" content="https://www.jaxx.io/img/jaxx-banner-ss.jpg">
        <meta property="og:site_name" content="jaxx.io">
        <meta property="og:title" content="Jaxx Liberty: Your trusted all-in-one multi-asset digital wallet.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://jaxx.io">
        <!-- Twitter Card Meta Data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="https://jaxx.io">
        <meta name="twitter:creator" content="Decentral">
        <meta name="twitter:title" content="Jaxx Liberty: Your trusted all-in-one multi-asset digital wallet.">
        <meta name="twitter:description" content="Jaxx Liberty is a digital wallet that supports over 85 assets and is available on iOS, Android, Desktop, and for Google Chrome.">
        <meta name="twitter:image" content="https://www.jaxx.io/img/jaxx-banner-ss.jpg">
        <!-- Styles -->
        <!--<link rel="stylesheet" href="/assets/css/aos.css">-->
        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <!--cookies banner-->
        <link rel="stylesheet" href="/assets/css/cookieconsent.min.css">
        <script>            
            window.addEventListener("load", function(){
            window.cookieconsent.initialise({
              "palette": {
                "popup": {
                  "background": "#fff",
                  "text": "#000"
                },
                "button": {
                  "background": "transparent",
                  "text": "#000",
                  "border": "#000"
                }
              },
              "position": "bottom-left",
                "content": {
                "message": "Like most websites, we use analytics cookies to understand how this site is used — as long as your browser is set to accept them.",
                "dismiss": "Start exploring",
                "link": "Find out more.",
                "href": "https://jaxx.io/thirdparties-current.html"
              },
            })});
        </script>
  </head>
  <body>
    <div id="swup" class="transition-fade">
       <!--nav-->
        <nav id="menu" class="navbar fixed-top navbar-expand-lg down down-med">
            <a class="navbar-brand" href="/">
                mason<span class="font-weight-bold">media</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <div class="wrapper-menu">
                  <div class="line-menu half start"></div>
                  <div class="line-menu"></div>
                  <div class="line-menu half end"></div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/design.php">design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/development.php">development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/writing.php">writing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/work.php">work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact.php">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--end nav--> 
                