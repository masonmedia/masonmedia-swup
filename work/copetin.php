<?php 
    $title = "Mason Media | Copetín";
    $metaD = "Andrew Mason founded Mason Media to create inspiring, risk-taking designs for web and print media.";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/header.php";
    include_once($path);
?>

    <!--jumbotron-->
    
    <div role="banner" class="container-fluid bg-black p-0">
        <div class="row d-flex min-700-lg relative py-5">
            <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/copetin-macbook-black.jpg" alt="Andrew Mason Portfolio: Copetin">
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-start text-left text-light p-5">
                <h1 class="h4 mt-3">Copetín</h1>
                <h2 class="site-title font-weight-bold knockout-rainbow">
                    <span class="knockout-rainbow">Inventive,</span><br>
                    <span class="knockout-rainbow">elevated</span><br>
                    <span class="knockout-rainbow">Canadian</span><br>
                    <span class="knockout-rainbow">cuisine.</span>
                </h2>
                <a href="#sec-1"><i class="fa fa-angle-down p-0"></i></a>
            </div>
            <div class="offset-lg-7"></div>
        </div>
    </div>
    
    <div class="container-fluid p-0 relative">

        <!--intro-->
       
        <section>
            <div id="sec-1" class="row d-flex p-5 min-500 text-secondary bg-white">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 banner-center py-3">
                    <h2 class="h4 text-primary">Copetín</h2>
                    <h3 class="section-title text-dark mb-0">Approach.</h3>
                    <p class="p-big pt-3 m-0">A design mockup for Toronto restaurant Copetín, this project fully revamped their existing minimal website. It aimed to give the restaurant a modern layout to match their haute cuisine, present their content in a more easily digestible format, make their menu items cleaner and easier to navigate, develop and extend their typeface, color scheme, and branding, and give the site a more complex, elegant design more fitting of chef Claudio Aprile.</p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg down down-med">                
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/copetin-laptop.jpg" alt="Andrew Mason Portfolio: Copetin">
                </div>
            </div>
        </section>
       
        <!--solution-->
        
        <section>
            <div class="row d-flex min-500 p-5 text-secondary bg-white">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 banner-center py-3">
                    <h2 class="h4 text-primary">Copetín</h2>
                    <h3 class="section-title text-dark mb-0">Design solutions.</h3>
                    <p class="p-big pt-3 m-0">The design solution consisted of a one-page layout with image carousel, full screen background images, complete menu presentation (without having to load secondary pages), Open Table reservation button, social media integration, hours, and contact information. Branding and colour themes were used creatively and extended throughout the site.</p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg p-0 down down-med">
                    <img class="img-full absolute z-0 left-0 lazy" data-src="/assets/img/copetin-ipad.jpg" alt="Andrew Mason Portfolio: Copetin">
                </div>
            </div><!--end row-->
        </section>
        
        <!--specs-->
        
        <div class="row d-flex min-500 p-5 text-secondary bg-white down">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 banner-center py-3">
                <h2 class="h4 text-primary">Decentral</h2>
                <h3 class="section-title text-dark mb-0">Tech Specs.</h3>
                <p class="p-big pt-3 m-0">The site is built with HTML5, CSS3, Bootstrap 3, Flexbox, and Javascript for smooth anchor scrolling. It included the Open Table reservation API and a button for guest booking, and required photo sourcing, graphic design, custom typography, and extended the restaurant's existing color and branding themes. While the project didn't move forward, it was a huge improvement on their existing site, and instructive in designing for the restaurant industry.</p>
                <!--button container-->
                <div class="container-fluid pt-3 pl-0">
                    <div class="row d-flex justify-content-center align-items-center text-center mt-3">
                        <div class="col-xs-12 pr-3 zoom zoom-slow">
                            <button class="bg-trans border-0 p-0 down down-slow" data-toggle="modal" data-target="#modal"><p class="p-btn slide-down">See more <i class="fa fa-angle-right fa-btn p-0 pl-2"></i></p></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-2"></div>
        </div><!--end row-->
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg p-0 down down-med">
                    <img class="img-full absolute left-0 z-0 lazy" data-src="/assets/img/copetin-carousel-bar.jpg" alt="Andrew Mason Portfolio: Copetin">
                </div>
            </div>
        </section>
        
    </div>
    <!--end container-->   

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="advanceTherapyModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="at-modal">Copetín</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img ds mb-5 opacity" src="/assets/img/copetin-ss-fullscreen-min.jpg" alt="Copetin full website mockup">
                    <a href="http:s//decentral.inc" target="_blank">
                        <h5 class="border-top pt-3 font-weight-bold text-right">copetin.andrewmasonmedia.com</h5>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
            </div>
        </div><!--end modal-->
    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include_once($path);
?>