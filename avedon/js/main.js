$(document).ready(function(){
  
  //Fade intro screen in
  $('div#introTitle').fadeIn(1400, 'easeInQuint', function(){
      $('div#introTitle div').addClass('show', 500);
  });
  
  //Fade intro screen out
  $('div#introTitle div').click(function(){
    $('div#introTitle').fadeOut(1200, function(){
    $('.homeSlides').cycle();
    $('div#siteContainer').fadeIn(1800, function() {  
      $('div#intro').hide();
    });
    });
  });
  
  //Menu container show
  $('div#bottom div p').click(function(){
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
  
  //Click Portraits
  $('div#menucontainer p.portraits').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.portraitsSlides').cycle();
    $('.portraitsSlides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#portraits').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#portraits').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.portraits').addClass('selected');
        $('.portraitsSlides img.first').removeClass('first');
      });
    });
  });
  
  //Click Figure
  $('div#menucontainer p.figure').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.figureSlides').cycle();
    $('.figureSlides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#figure').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#figure').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.figure').addClass('selected');
        $('.figureSlides img.first').removeClass('first');
      });
    });
  });
  
  //Click Elizabeth
  $('div#menucontainer p.liz').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.lizSlides').cycle();
    $('.lizSlides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#liz').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#liz').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.liz').addClass('selected');
        $('.lizSlides img.first').removeClass('first');
      });
    });
  });
  
  //Click Miscelaneous
  $('div#menucontainer p.misc').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.miscSlides').cycle();
    $('.miscSlides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#misc').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#misc').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.misc').addClass('selected');
        $('.miscSlides img.first').removeClass('first');
      });
    });
  });
  
  //Click Backstage
  $('div#menucontainer p.backstage').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.backstageSlides').cycle();
    $('.backstageSlides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#backstage').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#backstage').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.backstage').addClass('selected');
        $('.backstageSlides img.first').removeClass('first');
      });
    });
  });
  
  //Click Editorial 2
  $('div#menucontainer p.editorial2').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.editorial2Slides').cycle();
    $('.editorial2Slides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#editorial2').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#editorial2').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.editorial2').addClass('selected');
        $('.editorial2Slides img.first').removeClass('first');
      });
    });
  });
  
  //Click Editorial
  $('div#menucontainer p.editorial').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.editorialSlides').cycle();
    $('.editorialSlides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#editorial').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#editorial').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.editorial').addClass('selected');
        $('.editorialSlides img.first').removeClass('first');
      });
    });
  });
  
  //Click Artists
  $('div#menucontainer p.artists').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('.artistsSlides').cycle();
    $('.artistsSlides').cycle('goto', 0);
    $('div.active').fadeOut(1000, function(){
      $('div#artists').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#artists').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.artists').addClass('selected');
        $('.artistsSlides img.first').removeClass('first');
      });
    });
  });
  
  //Click RVCA
  $('div#menucontainer p.rvca').click(function(){
    $('div.homeSlides').cycle('pause');
    $('div#menu').hidemenu();
    $('div.active').fadeOut(1000, function(){
      $('div#rvca').fadeIn(1200, function(){
        $('div#bottom div p').fadeIn(600);
        $('div.mainElement').removeClass('active');
        $('div#rvca').addClass('active');
        $('div#menucontainer p.album').removeClass('selected');
        $('div#menucontainer p.rvca').addClass('selected');
      });
    });
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
  
  Mousetrap.bind('up', function() { 
    $('div#menu').hidemenu();
  });
  
  Mousetrap.bind('down', function() {   
    $('div#bottom div p').fadeOut('fast', function(){
      $('div#menu').slideDown(400);
    });
    $('div#screen').fadeIn('slow');
  });
  
  //Responsive Video handler
  $("#rvcaVideo").fitVids();

});