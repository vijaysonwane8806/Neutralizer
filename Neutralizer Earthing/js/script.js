


     new WOW().init();


    // client owlCarousel
    var owl = $(".owl-carousel");
            owl.owlCarousel({
	            items: 3,
                loop:true,
                autoplay:true,
                navBy: 1,
                autoplayTimeout: 4500,
                autoplayHoverPause: true,
                smartSpeed: 1500,
                margin:10,
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    767:{
                        items:1
                    },
                    768:{
                        items:2
                    },
                    991:{
                        items:3
                    },
                    1000:{
                        items:3
                    }
                }
            });

        // Custom Navigation Events
          $(".right-owl").click(function(){
            owl.trigger('next.owl.carousel');
          });
          $(".left-owl").click(function(){
            owl.trigger('prev.owl.carousel');
          });

    
        // services owlCarousel
            $('.carousel').carousel({
              interval: 3000
            })



/*----------------------------------------------------*/
    /*    Navigtion Menu Scroll
/*----------------------------------------------------*/   

$(window).on('scroll', function() {
        
        "use strict";
                                
        var b = $(window).scrollTop();
        
        if( b > 72 ){        
            $(".navbar").addClass("scroll");
        } else {
            $(".navbar").removeClass("scroll");
        }                

    });

   
/* ----------------------------------------------------------------
                    [ Navbar ( scrollIt ) ]
    -----------------------------------------------------------------*/
	 // close navbar-collapse when a  clicked
    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });
	
    $.scrollIt({
        upKey: 38,                // key code to navigate to the next section
        downKey: 40,              // key code to navigate to the previous section
        easing: 'swing',          // the easing function for animation
        scrollTime: 600,          // how long (in ms) the animation takes
        activeClass: 'active',    // class given to the active nav element
        onPageChange: null,       // function(pageIndex) that is called when page is changed
        topOffset: -70            // offste (in px) for fixed top navigation
    });
	

// === window When Loading === //

$(window).on("load", function () {

    var wind = $(window);

    /* ----------------------------------------------------------------
                    [ Preloader ]
    -----------------------------------------------------------------*/

    $(".loading").fadeOut(500);	

});

/* ----------------------------------------------------------------
                    [ Send contact form ]
    -----------------------------------------------------------------*/

   $("#submit").click(function(event){
        
          event.preventDefault();
          var name = $("#name").val();
          var email = $("#email").val();
          var phone = $("#phone").val();

          if(name =='' && email =='' && phone==''){
              $(".errormessage").css('display','block');
              return false;

          }
          
        jQuery.ajax({
            url: "sendcontact.php",
            data:'name='+$("#name").val()+'&email='+
            $("#email").val()+'&phone='+
            $("#phone").val()+'&message='+
            $("#message").val(),
            type: "POST",
            success:function(data){
                $("#form-messages").html(data);
            },
            error:function (){}
        });
    });