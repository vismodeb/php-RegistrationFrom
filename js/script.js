$(document).ready(function(){
    // Mobile Menu Icon
    $('#toggleNav-icon').click(function(){
        $(this).toggleClass('open');
        $('.menu').slideToggle();
    });

   //  image gallery 
   $(".option").click(function(){
      $(".option").removeClass("active");
      $(this).addClass("active");
   });

   // barfiler progress bar start
    $('#bar1').barfiller();
    $('#bar2').barfiller();
    $('#bar3').barfiller();
    $('#bar4').barfiller();
    $('#bar5').barfiller();
    $('#bar6').barfiller();
    $('#bar7').barfiller();
    $('#bar8').barfiller();
    $('#bar9').barfiller();
    $('#bar10').barfiller();
    $('#bar11').barfiller();
    $('#bar12').barfiller();
    $('#bar13').barfiller();
    $('#bar14').barfiller();
    $('#bar15').barfiller();
   // barfiler progress bar end

    // redial progress bar start
    $("#single-redil-progress").radialProgress("init", {
        'size': 100,
        'fill': 10
    })
    .radialProgress("to", {
        'perc': 95, 
        'time': 5000
    });
    $("#single-redil-progress-one").radialProgress("init", {
        'size': 100,
        'fill': 10
    })
    .radialProgress("to", {
        'perc': 90, 
        'time': 8000
    });
    $("#single-redil-progress-two").radialProgress("init", {
        'size': 100,
        'fill': 10
    })
    .radialProgress("to", {
        'perc': 80, 
        'time': 10000
    });
    $("#single-redil-progress-three").radialProgress("init", {
        'size': 100,
        'fill': 10
    })
    .radialProgress("to", {
        'perc': 78, 
        'time': 10000
    });
    // redial progress bar end

   // Owl carousel
   $('.main-testimonial-header ').owlCarousel({
        loop:true,
        nav:false,
        margin: 20,
        center:true,
        // autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    });
    AOS.init({
        duration: 1200,
    })

});

