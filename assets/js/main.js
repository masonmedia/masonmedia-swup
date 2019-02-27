//onload fade in
TweenMax.to($("html, body"), 1.3, {autoAlpha:1, ease: Power3.easeInOut});


//swup init
$(document).ready(function() {
    
    const swup = new Swup({
        doScrollingRightAway: false,
        animateScroll: false,
        scrollFriction: .3,
        scrollAcceleration: .04
    //    scrollAcceleration: 0
    });
    
    //GSAP menu timeline
    
    TweenMax.staggerFrom($(".navbar-brand, .nav-item"), 1, {autoAlpha:0, x: -50, ease: Back.easeInOut.config(1.7)}, 0.1);

    //init BS carousel and pass speed option

    $('.carousel').carousel({
      interval: 2000
    });


////mobile menu animation

//    var wrapperMenu = document.querySelector('.wrapper-menu');
//        wrapperMenu.addEventListener('click', function(){
//        wrapperMenu.classList.toggle('open');  
//        });

//close mobile nav on click

    $('.nav-link, body').on('click',function() {
      $('.navbar-collapse').collapse('hide');
    });
    
     //toggle mobile menu animation
       $('.navbar-toggler, .nav-item').on('click',function() {
           $('.wrapper-menu').toggleClass('open');
        });


//smooth scroll https://www.taniarascia.com/smooth-scroll-to-id-with-jquery/

    $('a[href*="#"]').on('click', function (e) {
	   e.preventDefault();

	   $('html, body').animate({
		  scrollTop: $($(this).attr('href')).offset().top
	   }, 500, 'linear');
    });

//lazy load

    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
    });
    
     //GSAP + Scroll Magic
    // init
    var controller = new ScrollMagic.Controller();
    
    // assign trigger class
    $(".stagger-up").each(function() {

      var stagger = TweenMax.staggerFrom($(this).find(".slide-up"), 1, {
          opacity:0,    
          delay:0,
          y: 50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeUp = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse:true
            })
            .setTween(stagger)
            .addTo(controller);
    }); 
    
    $(".stagger-right").each(function() {

      var stagger2 = TweenMax.staggerFrom($(this).find(".slide-right"), 1, {
          opacity:0,    
          delay:0,
          x: -50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeRight = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse: true
            })
            .setTween(stagger2)
            .addTo(controller);
    }); 
    
    $(".stagger-down").each(function() {

      var stagger3 = TweenMax.staggerFrom($(this).find(".slide-down"), 1, {
          opacity:0,    
          delay:0,
          y: -50,
          ease: Back.easeInOut.config(1.7)
      },
      0.1);

        var fadeDown = new ScrollMagic.Scene({
                triggerElement: this,
                triggerHook: 'onEnter',
                reverse: true
            })
            .setTween(stagger3)
            .addTo(controller);
    }); 
    
    
    
});//end main js


//swup reinit plugins

document.addEventListener('swup:contentReplaced', function () {
    
    //gsap
    TweenMax.staggerFrom($(".navbar-brand, .nav-item"), 1, {autoAlpha:0, x: -50, ease: Back.easeInOut.config(1.7)}, 0.1);

    //lazyload reinit
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
    });
    //init BS carousel and pass speed option

    $('.carousel').carousel({
      interval: 2000
    });

    //mobile menu animation

//    var wrapperMenu = document.querySelector('.wrapper-menu, .nav-item');
//        wrapperMenu.addEventListener('click', function(){
//        wrapperMenu.classList.toggle('open');  
//        })
    
        //toggle mobile menu animation
       $('.navbar-toggler, .nav-item').on('click',function() {
           $('.wrapper-menu').toggleClass('open');
        }); 

    //close mobile nav on click
    $('.nav-link, body').on('click',function() {
      $('.navbar-collapse').collapse('hide');
    });

//smooth scroll https://www.taniarascia.com/smooth-scroll-to-id-with-jquery/

    $('a[href*="#"]').on('click', function (e) {
	   e.preventDefault();

	   $('html, body').animate({
		  scrollTop: $($(this).attr('href')).offset().top
	   }, 500, 'linear');
    });

//lazy load
    $(".lazy").recliner({
        attrib: "data-src", // selector for attribute containing the media src
        throttle: 0,      // millisecond interval at which to process events
        threshold: 5,     // scroll distance from element before its loaded
        printable: true    // be printer friendly and show all elements on document print
    //    live: true          // auto bind lazy loading to ajax loaded elements
    });

    
        
});
//end swup reinit
// API js display jaxx blog --> https://www.youtube.com/watch?v=rGObWtjxGBc
