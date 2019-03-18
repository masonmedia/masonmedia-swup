<?php 
    $title = "Mason Media | Decentral Inc.";
    $metaD = "Andrew Mason founded Mason Media to create inspiring, risk-taking designs for web and print media.";
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/header.php";
    include_once($path);
?>

    <!--jumbotron-->
    
    <div role="banner" class="container-fluid bg-black p-0">
        <div class="row d-flex min-700-lg relative py-5">
            <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/jaxx-iphone-X-4-gallery-mobile.jpg" alt="Andrew Mason Portfolio: Decentral inc.">
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-start text-left p-5">
                <h1 class="h4 mt-3">Decentral Inc.</h1>
                <h2 class="site-title font-weight-bold knockout-rainbow">
                    <span class="d-table">Canada's</span>
                    <span class="d-table">leading</span>
                    <span class="d-table">blockchain</span>
                    <span class="d-table">company.</span>
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
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center o-12">
                    <h2 class="h4 text-primary">Decentral</h2>
                    <h3 class="section-title text-dark mb-0">Approach.</h3>
                    <p class="p-big pt-3 m-0">Decentral was founded in 2014 by blockchain and crypto pioneer Anthony Di Iorio. One of Toronto's earliest blockchain startups, Decentral is the maker of two successful digital wallet apps that are changing the way people think about the exchange of value. In my role as Decentral's lead web designer and developer, I was tasked to redesign, maintain, and manage all the company's web properties, in addition to creating visual assets for these sites, as well as the company social media properties. In this process I have revitalized Decentral's branding and web presence over multiple languages and platforms.</p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg">                
                    <img class="img-full min-700-lg absolute z-0 left-0 lazy" data-src="/assets/img/jaxx-iphone-here-look.jpg" alt="DJ Mycorrhiza">
                </div>
            </div>
        </section>
       
        <!--solution-->
        
        <section>
            <div class="row d-flex min-500 text-secondary bg-white">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5">
                    <h2 class="h4 text-primary">Decentral</h2>
                    <h3 class="section-title text-dark mb-0">Design solution.</h3>
                    <p class="p-big pt-3 m-0">In redesigning the company's previous static HTML, Wordpress, and front-end JS framework websites, I had to bring together numerous elements from multiple stakeholders including: design aesthetic(s), branding, UX, copywriting & message, typography, custom images and photography. I coded the main company and product sites from scratch using PHP to create reusable templates/modules, HTML5, CSS3, a jQuery/AJAX plugin called SWUP to create SPA-style, animated page transitions that do not require reload, and the GSAP animation library.</p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-light relative">
                <div class="col-lg-12 min-700-lg p-0">
                    <img class="w-100 up up-med lazy" data-src="/assets/img/jaxx-ipad-iphone-X-closeup.jpg" alt="Andrew Mason Portfolio: Decentral Inc.">
                </div>
            </div><!--end row-->
        </section>
        
        <!--specs-->
        
        <div class="row d-flex min-500 text-secondary bg-white">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5">
                <h2 class="h4 text-primary">Decentral</h2>
                <h3 class="section-title text-dark mb-0">Tech Specs.</h3>
                <p class="p-big pt-3 m-0">Decentral's multiple web properties are built with a range of languages: decentral.ca and jaxx.io (HTML5, CSS3, PHP, JS, jQuery, GSAP, SWUP/Ajax, Zendesk help plugin, Cookie Consent plugin by Insites), support.decentral.ca (handlebars.js and curlybars.js, HTML5, CSS3, JS), blog.jaxx.io (Wordpress). All sites include custom images created with photoshop, google gtags for analytics, as well as JSON-LD schema/google structured data for improved SEO and rich-media search results.</p>
                <!--button container-->
                <div class="container-fluid pt-3">
                    <div class="row d-flex justify-content-center align-items-center text-center mt-3">
                        <div class="col-xs-6 pr-3 zoom zoom-slow">
                            <button class="bg-trans border-0 p-0 down down-slow" data-toggle="modal" data-target="#modal"><p class="p-btn slide-down">See more <i class="fa fa-angle-right fa-btn p-0 pl-2"></i></p></button>
                        </div>
                        <div class="col-xs-6 zoom zoom-slow">
                            <a href="/"><p class="p-btn border-0 p-0">Next project <i class="fa fa-angle-right fa-btn p-0 pl-2"></i></p></a> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-2"></div>
        </div><!--end row-->
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg d-flex flex-column justify-content-center align-items-start text-left p-0 o-12">
                    <img class="img-full absolute z-0 lazy" src="/assets/img/jaxx-iphone-flying-2-screens.jpg" alt="Andrew Mason Portfolio: Decentral Inc.">
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
                    <h5 class="modal-title" id="at-modal">Decentral Inc.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img ds mb-5 opacity" src="/assets/img/djm-ss-fullscreen-min.jpg" alt="Dj Mycorrhiza full website">
                    <a href="http:s//decentral.inc" target="_blank">
                        <h2 class="border-top pt-3 font-weight-bold text-right">decentral.ca</h2>
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