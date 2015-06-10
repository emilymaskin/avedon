(function() {
  $(document).ready(function() {
    var $siteContainer = $('#siteContainer');
    var $menu = $('#menu');
    var $screen = $('#screen');
    var $homeSlides = $('.homeSlides');
    var $introTitle = $('#introTitle');
    var $allSlides = $('.allSlides');
    var $menuToggle = $('#bottom div p');
    var $bioContainer = $('#bioContainer');
    var $contactCont = $('#contactCont');
    var $menuContainer = $('#menucontainer');

    //Fade intro screen in
    $introTitle.fadeIn(1400, 'easeInQuint', function() {
      $introTitle.find('div').addClass('show', 500);
    });

    //Fade intro screen out
    $introTitle.find('div').click(function() {
      $introTitle.fadeOut(1200, function() {
        $homeSlides.cycle();
        $siteContainer.fadeIn(1800, function() {
          $('#intro').hide();
          bindUpDown();
        });
      });
    });

    //Menu container show
    $menuToggle.click(function(){
      $(this).fadeOut('fast', function() {
        $menu.slideDown(400);
      });
      $screen.fadeIn('slow');
    });

    //Hide Menu Function
    jQuery.fn.extend({
      hidemenu: function () {
        $menu.slideUp(400, function() {
          $menuToggle.fadeIn('fast');
        });
        $screen.fadeOut('slow');
      }
    });

    //Menu container hide on mouseleave
    $menu.mouseleave(function() {
      $menu.hidemenu();
    });

    //Menu container hide on click
    $screen.click(function() {
      $menu.hidemenu();
    });

    //Click image for next slide
    $allSlides.find('img').click(function() {
      $allSlides.cycle('next');
    });

    //Show contact
    $menuContainer.find('p.contactLink').click(function() {
      $menu.hidemenu();
      $contactCont.animate({
        opacity: 1
      }, 900, function() {
        $contactCont.show();
        $siteContainer.fadeOut(900);
        $homeSlides.cycle('pause');
      });
    });

    //Hide contact
    $('#closeContact').click(function(){
      $contactCont.animate({
        opacity: 0
      }, 900, function(){
        $contactCont.hide();
        $siteContainer.fadeIn(900);
        $homeSlides.cycle('resume');
      });
    });

    //Show bio
    $menuContainer.find('p.bioLink').click(function() {
      $menu.hidemenu();
      $siteContainer.fadeOut(800, function() {
        $bioContainer.show();
        $bioContainer.animate({
          opacity:1
        }, 900, function(){
          $homeSlides.cycle('pause');
        });
      });
    });

    //Hide bio
    $('#closeBio').click(function() {
      $bioContainer.animate({
        opacity:0
      }, 900, function() {
        $bioContainer.hide();
      });
      $siteContainer.fadeIn(800);
      $homeSlides.cycle('resume');
    });

    //Keyboard controls
    Mousetrap.bind('right', function() {
      $allSlides.cycle('next');
    });

    Mousetrap.bind('left', function() {
      $allSlides.cycle('prev');
    });

    function bindUpDown() {
      Mousetrap.bind('up', function() {
        $menu.hidemenu();
      });
      Mousetrap.bind('down', function() {
        $menuToggle.fadeOut('fast', function() {
          $menu.slideDown(400);
        });
        $screen.fadeIn('slow');
      });
    }

    $menuContainer.find('p').on('click', function() {
      var $this = $(this);
      var category = $this.data('category');
      var $categoryEl = $('#' + category);
      var $current = $('.active');
      var $categorySlides = $('.' + category + 'Slides');

      $menu.hidemenu();
      $homeSlides.cycle('pause');
      $categorySlides.cycle();
      $categorySlides.cycle('goto', 0);
      $categoryEl.addClass('active');
      $current.fadeOut(1000, function() {
        $categoryEl.fadeIn(1200, function() {
          $menuToggle.fadeIn(600);
          $('.mainElement').removeClass('active');
          $menuContainer.find('p.album').removeClass('selected');
          $this.addClass('selected');
          $categorySlides.find('img.first').removeClass('first');
        });
      });
    });

    //Responsive Video handler
    $("#rvcaVideo").fitVids();

  });
})();