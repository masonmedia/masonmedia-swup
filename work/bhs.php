<?php 
    $title = "Mason Media | Big Horn Sheep";
    $metaD = "Andrew Mason founded Mason Media to create inspiring, risk-taking designs for web and print media.";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/header.php";
    include_once($path);
?>

    <!--jumbotron-->
    
    <div role="banner" class="container-fluid bg-black p-0">
        <div class="row d-flex min-700-lg relative py-5">
            <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/bhs-macbook-3D-angle.jpg" alt="Andrew Mason Portfolio: Big Horn Sheep">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-start text-left text-light p-5">
                <h1 class="h4 mt-3 ds-black">Big Horn Sheep</h1>
                <h2 class="site-title font-weight-bold ds-black">
                    <span class="d-block knockout-rainbow">Music</span> 
                    <span class="d-block knockout-rainbow">made</span>
                    <span class="d-block knockout-rainbow">by</span>
                    <span class="d-block knockout-rainbow">humans.</span>
                </h2>
                <a href="#sec-1"><i class="fa fa-angle-down p-0"></i></a>
            </div>
            <div class="offset-lg-8"></div>
        </div>
    </div>
    
    <div class="container-fluid p-0 relative">

        <!--intro-->
       
        <section>
            <div id="sec-1" class="row d-flex p-5 min-500 text-secondary bg-white">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 banner-center py-3">
                    <h2 class="h4 text-primary">Big Horn Sheep</h2>
                    <h3 class="section-title text-dark mb-0">Approach.</h3>
                    <p class="p-big pt-3 m-0">A website for Toronto instrumental trio Big Horn Sheep, this project required bold imagery and graphic design, unique typography, showcasing of band audio tracks and images, as well as performance dates and contact information.</p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg p-0 down down-med">                
                    <img class="img-full min-700-lg absolute z-0 left-0 lazy" data-src="/assets/img/bhs-ss-multi-device.jpg" alt="Big Horn Sheep">
                </div>
            </div>
        </section>
       
        <!--solution-->
        
        <section>
            <div class="row d-flex min-500 p-5 text-secondary bg-white">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 banner-center py-3">
                    <h2 class="h4 text-primary">Big Horn Sheep</h2>
                    <h3 class="section-title text-dark mb-0">Design solution.</h3>
                    <p class="p-big pt-3 m-0">The design solution consisted of a Single Page Application (SPA) approach using AngularJS and Bootstrap 4. It features animated page transitions, embedded soundcloud audio tracks, a pinterest-style image lightbox gallery, Bootstrap modals to showcase performance dates and band posters (also Mason Media design), with unique banner images and branding. The site was also an exercise in Atomic CSS, with an effort to limit styles to native Bootstrap 4 classes.</p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg p-0 down down-med">
                    <img class="img-full min-700-lg absolute z-0 left-0 lazy" data-src="/assets/img/bhs-3-iphones-black.jpg" alt="Andrew Mason Portfolio: Big Horn Sheep">
                </div>
            </div><!--end row-->
        </section>
        
        <!--specs-->
        
        <div class="row d-flex min-500 p-5 text-secondary bg-white down">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 banner-center py-3">
                <h2 class="h4 text-primary">Big Horn Sheep</h2>
                <h3 class="section-title text-dark mb-0">Tech Specs.</h3>
                <p class="p-big pt-3 m-0">The site is built with HTML5, CSS3, Bootstrap 4, and AngularJS. It also required UX/UI design, copywriting, graphic design, color palette development, image/logo creation, and a Facebook band page design.</p>
                <!--button container-->
                <div class="container-fluid pt-3">
                    <div class="row banner-center-row">
                        <div class="col-xs-6 pr-3 zoom zoom-slow">
                            <a class="p-btn text-primary mt-3" href="http://bighornsheepband.com" target="_blank">See more <i class="fa fa-angle-right fa-btn p-0 pl-2"></i></a>
                        </div>
                        <div class="col-xs-6 zoom zoom-slow">
                            <a href="/work/djm.php"><p class="p-btn mt-3 border-0 p-0">Next project <i class="fa fa-angle-right fa-btn p-0 pl-2"></i></p></a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-2"></div>
        </div><!--end row-->
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg p-0 down down-med">
                    <img class="img-full absolute left-0 z-0 lazy" data-src="/assets/img/bhs-logo-green.jpg" alt="Andrew Mason Portfolio: Big Horn Sheep">
                </div>
            </div>
        </section>
        
    </div>
    <!--end container-->   
    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include_once($path);
?>