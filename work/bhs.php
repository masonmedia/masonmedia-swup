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
            <img class="img-full absolute z-0 left-0 up up-med lazy" data-src="/assets/img/bhs-ss-laptop.jpg" alt="Andrew Mason Portfolio: Big Horn Sheep">
            <div class="col-lg-5 d-flex flex-column justify-content-center align-items-start text-left text-light p-5">
                <h1 class="h4 mt-3 ds-black">Big Horn Sheep</h1>
                <h2 class="site-title font-weight-bold ds-black">
                    <span class="d-table">Music</span>
                    <span class="d-table">made</span>
                    <span class="d-table">by</span>
                    <span class="d-table">humans.</span>
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
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left">
                    <h2 class="h4 text-primary">A band</h2>
                    <h3 class="section-title text-dark mb-0">Specializing in rehabilitation services for people with an acquired brain injury.</h3>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start text-left o-12">
                    <p class="p-big pt-3 m-0">Advance Therapy provides clients with customized support for activities of daily living, educational or vocational pursuits, and community reintegration activities. This project required a complete overhaul and redesign of the firm's previous site. Requirements included a simple, intuitive user interface, a low amount of scrolling while still presenting a large amount of content, a specific typeface, and the firm's previous logo.</p>
                </div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg">                
                    <img class="img-full min-700-lg absolute z-0 left-0 lazy" data-src="/assets/img/bhs-ss-multi-device.jpg" alt="Big Horn Sheep">
                </div>
            </div>
        </section>
       
        <!--solution-->
        
        <section>
            <div class="row d-flex min-500 text-secondary bg-white">
                <div class="offset-lg-2"></div>
                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5">
                    <h2 class="h4 text-primary">A sound</h2>
                    <h3 class="section-title text-dark mb-0">Design solution.</h3>
                    <p class="p-big pt-3 m-0">The design solution consisted of a one-page layout with animated dropdown sections that hide and reveal textual content. It features a side-canvas animated menu, smooth-scrolling navigation between sections, a reworked and expanded color palette, updated, modernized branding, and image sourcing based on industry-related themes.</p>
                </div>
                <div class="offset-lg-2"></div>
            </div>
        </section>
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg p-0">
                    <img class="img-full min-700-lg absolute z-0 left-0 lazy" data-src="/assets/img/bhs-3-iphones-black.jpg" alt="Andrew Mason Portfolio: Big Horn Sheep">
                </div>
            </div><!--end row-->
        </section>
        
        <!--specs-->
        
        <div class="row d-flex min-500 text-secondary bg-white">
            <div class="offset-lg-2"></div>
            <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center text-center p-5">
                <h2 class="h4 text-primary">A vision</h2>
                <h3 class="section-title text-dark mb-0">Frameworks, libraries, and specs.</h3>
                <p class="p-big pt-3 m-0">The site is built with HTML5, CSS3, Flexbox, Bootstrap 3, jQuery, and included UI/UX design, copywriting and editing, color palette development, photo sourcing, installation, as well as ongoing maintenance and tech support.</p>
                <a class="p-btn text-primary mt-3" href="http://bighornsheepband.com" target="_blank">Find out more</a>
            </div>
            <div class="offset-lg-2"></div>
        </div><!--end row-->
        
        <section>
            <div class="row d-flex bg-white relative">
                <div class="col-lg-12 min-700-lg d-flex flex-column justify-content-center align-items-start text-left p-0 o-12">
                    <img class="img-full absolute z-0 lazy" src="/assets/img/bhs-logo-green.jpg" alt="Andrew Mason Portfolio: Big Horn Sheep">
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