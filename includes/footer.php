 <!--footer-->
        <footer>
            <div class="container-fluid p-0">
                <div class="row d-flex d-flex justify-content-center align-items-start text-secondary bg-light text-secondary px-3 pt-5">
                   <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold">Company</li>
                            <hr class="hr-big border-0 bg-secondary">
                            <li><a href="/design.php">Design</a></li>
                            <li><a href="/development.php">Development</a></li>
                            <li><a href="/writing.php">Writing</a></li>
                            <li><a href="/work/home.php">Work</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold">Work</li>
                            <hr class="hr-big border-0 bg-secondary">
                            <li><a href="/work/decentral.php">Decentral Inc.</a></li>
                            <li><a href="/work/n2.php">N2 Speech Therapy</a></li>
                            <li><a href="/work/bhs.php">Big Horn Sheep</a></li>
                            <li><a href="/work/djm.php">DJ Mycorrhiza</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold">More</li>
                            <hr class="hr-big border-0 bg-secondary">
                            <li><a href="https://github.com/masonmedia/" target="_blank">Github</a></li>
                            <li><a href="https://bitbucket.org/masonmedia/" target="_blank">Bitbucket</a></li>
                            <li><a href="http://copy.andrewmasonmedia.com" target="_blank">Copywriting</a></li>
                            <li><a href="/pricing.php">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 px-4 py-3 skew">
                        <ul class="list-unstyled w-100">
                            <li class="h4 font-weight-bold">Connect</li>
                            <hr class="hr-big border-0 bg-secondary">
                            <li><a href="https://www.facebook.com/andrewmasonmedia/" target="_blank">Facebook</a></li>
                            <li><a href="https://twitter.com/C_AndrewMason" target="_blank">Twitter</a></li>
                            <li><a href="https://www.instagram.com/andrewmasonmedia/" target="_blank">Instagram</a></li>
                            <li><a href="mailto:andrewmasonmedia@gmail.com">Email</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-sm-12 d-flex justify-content-center text-center py-4 navy">
                        <p class="font-weight-light m-0"><a href="/">&copy; Mason Media <?php echo date("Y"); ?></a> | Made in Canada</p>
                    </div>
                </div><!--end row-->
            </div><!--end container-->
        </footer>
        </div><!--end main page-->

    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/swup.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <!--aos js-->
    <script src="/assets/js/aos.js"></script>
    <script type="text/javascript" src="/assets/js/TweenMax.min.js"></script>
    <script type="text/javascript" src="/assets/js/TimelineMax.min.js"></script>
    <!-- smooth scroll -->
    <script src="/assets/js/jquery.malihu.PageScroll2id.min.js"></script>
    <!-- recliner lazy load js-->
    <script src="/assets/js/recliner.js"></script>
    <!--js tilt 404-->
    <script src="/assets/js/tilt.jquery.min.js"></script>
    <script src="/assets/js/cookieconsent.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <!-- Global site tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85893600-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-85893600-1');

    </script>
    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-85893600-1', 'auto');
        ga('send', 'pageview');

        function googleAnalyticsTrigger(category, label) {
            ga('send', {
                hitType: 'event',
                eventCategory: category,
                eventAction: 'download',
                eventLabel: label
            });
        }

    </script>
  </body>
</html>