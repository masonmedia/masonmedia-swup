
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
           echo "Mason Media | Design. Develop. Create."; 
        } ?></title>
        <!--core meta data-->
        <meta name="description" content="<?php

        if(isset($metaD) && !empty($metaD)) { 
           echo $metaD; 
        } 
        else { 
           echo "Andrew Mason is a Toronto designer, coder, and writer who creates modern, risk-taking web experiences that blend form and function."; 
        } ?>" />
        <meta name="keywords" content="Andrew Mason Mason Media, Web Design, Websites, Web development, Toronto">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="manifest" href="site.webmanifest">
        <!--icons-->
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="shortcut icon" href="/mm-favicon-pink.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- Open Graph Meta Data -->
        <meta property="og:description" content="Andrew Mason is a Toronto designer, coder, and writer who creates modern, risk-taking web experiences that blend form and function.">
        <meta property="og:image" content="https://www.andrewmasonmedia.com/assets/img/blue-orange.jpeg">
        <meta property="og:site_name" content="andrewmasonmedia.com">
        <meta property="og:title" content="Andrew Mason is a Toronto designer, coder, and writer who creates modern, risk-taking web experiences that blend form and function.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://andrewmasonmedia.com">
        <!-- Twitter Card Meta Data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="https://andrewmasonmedia.com">
        <meta name="twitter:creator" content="Decentral">
        <meta name="twitter:title" content="Andrew Mason is a Toronto designer, coder, and writer who creates modern, risk-taking web experiences that blend form and function.">
        <meta name="twitter:description" content="Andrew Mason is a Toronto designer, coder, and writer who creates modern, risk-taking web experiences that blend form and function.">
        <meta name="twitter:image" content="https://www.andrewmasonmedia.com/assets/img/blue-orange.jpeg">
        <!-- Styles -->
        <!--<link rel="stylesheet" href="/assets/css/aos.css">-->
        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/main.css">
        <!--schema structural data-->
        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "Organization",
              "name": "Mason Media",
              "@id":"http://andrewmasonmedia.com",
              "knowsAbout": "Web design, Web Development, Graphic design, UX/UI design, Copywriting, Music",
              "url": "https://andrewmasonmedia.com",
              "sameAs": [
                "https://www.facebook.com/andrewmasonmedia/",
                "https://twitter.com/C_AndrewMason",
                "https://www.instagram.com/jaxx_io/",
                "http://copy.andrewmasonmedia.com/"
              ],
              "logo": "",
              "image": [
                "https://andrewmasonmedia.com/assets/img/mason-bass.jpeg",
                "https://andrewmasonmedia.com/assets/img/mason-media-lens.jpg",
                "https://andrewmasonmedia.com/assets/img/writing-123-lets-go.jpeg",
                "https://andrewmasonmedia.com/assets/img/mm-bg-work.jpeg"
               ],
              "address":{
                "@type": "PostalAddress",
                "addressLocality": "Toronto",
                "addressRegion": "ON",
                "addressCountry": "CA"
              },
              "founder": "Andrew Mason",
              "brand": "Mason Media",
              "email": "andrewmasonmedia@gmail.com"
              }
        </script>
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
                "message": "This site uses analytics cookies to improve performance and understand how the site is used.",
                "dismiss": "Start exploring",
                "link": "Find out more.",
                "href": "https://en.wikipedia.org/wiki/HTTP_cookie"
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
                        <a class="nav-link" href="/">home</a>
                    </li>
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
                        <a class="nav-link" href="/work/home.php">work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing.php">pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:andrewmasonmedia@gmail.com">contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--end nav--> 
                