(function() {
  $(document).ready(function(){

    //Fade intro screen in
    $('div#introTitle').fadeIn(1400, 'easeInQuint', function(){
        $('div#introTitle div').addClass('show', 500);
    });

    //Fade intro screen out
    $('#introTitle div').click(function(){
      $('#introTitle').fadeOut(1200, function(){
        $('.homeSlides').cycle();
        $('#siteContainer').fadeIn(1800, function() {
          $('#intro').hide();
          bindUpDown();
        });
      });
    });

    //Menu container show
    $('#bottom div p').click(function(){
      $(this).fadeOut('fast', function(){
        $('div#menu').slideDown(400);
      });
      $('div#screen').fadeIn('slow');
    });

    //Hide Menu Function
    jQuery.fn.extend({
      hidemenu: function () {
          $('div#menu').slideUp(400, function(){
        $('div#bottom div p').fadeIn('fast');
      });
      $('div#screen').fadeOut('slow');
      }
    });

    //Menu container hide on mouseleave
    $('div#menu').mouseleave(function(){
      $('div#menu').hidemenu();
    });

    //Menu container hide on click
    $('div#screen').click(function(){
      $('div#menu').hidemenu();
    });

    //Click image for next slide
    $('div.allSlides img').click(function(){
      $('div.allSlides').cycle('next');
    });

    //Show contact
    $('#menucontainer p.contactLink').click(function(){
      $('div#menu').hidemenu();
      $('div#siteContainer').fadeOut(800, function(){
        $('div#contactCont').show();
        $('div#contactCont').animate({
          opacity:1
        }, 900, function(){
        $('.homeSlides').cycle('pause');
        });
      });
    });

    //Hide contact
    $('div#closeContact').click(function(){
      $('div#contactCont').animate({
        opacity:0
      }, 900, function(){
        $('div#contactCont').hide();
      });
      $('div#siteContainer').fadeIn(800);
      $('.homeSlides').cycle('resume');
    });

    //Show bio
    $('#menucontainer p.bioLink').click(function(){
      $('div#menu').hidemenu();
      $('div#siteContainer').fadeOut(800, function(){
        $('div#bioContainer').show();
        $('div#bioContainer').animate({
          opacity:1
        }, 900, function(){
        $('.homeSlides').cycle('pause');
        });
      });
    });

    //Hide bio
    $('div#closeBio').click(function(){
      $('div#bioContainer').animate({
        opacity:0
      }, 900, function(){
        $('div#bioContainer').hide();
      });
      $('div#siteContainer').fadeIn(800);
      $('.homeSlides').cycle('resume');
    });

    //Keyboard controls
    Mousetrap.bind('right', function() {
      $('.allSlides').cycle('next');
      });

    Mousetrap.bind('left', function() {
      $('.allSlides').cycle('prev');
      });

    function bindUpDown() {
      Mousetrap.bind('up', function() {
        $('div#menu').hidemenu();
      });
      Mousetrap.bind('down', function() {
        $('#bottom div p').fadeOut('fast', function(){
          $('#menu').slideDown(400);
        });
        $('#screen').fadeIn('slow');
      });
    }

    $('#menucontainer p').on('click', function(){
      var category = $(this).data('category');
      $('div.homeSlides').cycle('pause');
      $('#menu').hidemenu();
      $('.' + category + 'Slides').cycle();
      $('.' + category + 'Slides').cycle('goto', 0);
      $('div.active').fadeOut(1000, function(){
        $('#' + category).fadeIn(1200, function(){
          $('#bottom div p').fadeIn(600);
          $('div.mainElement').removeClass('active');
          $('#' + category).addClass('active');
          $('#menucontainer p.album').removeClass('selected');
          $('#menucontainer p.' + category).addClass('selected');
          $('.' + category + 'Slides img.first').removeClass('first');
        });
      });
    });

    //Responsive Video handler
    $("#rvcaVideo").fitVids();

  });
})();