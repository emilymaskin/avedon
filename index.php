<!doctype html>
<html>
<head>
<title>MICHAEL AVEDON PHOTOGRAPHY</title>
<meta charset="UTF-8">
<meta name="keywords" content="Michael Avedon, Mike Avedon, Michael Avedon Photography" />
<meta name="description" content="MICHAEL AVEDON PHOTOGRAPHY" />
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/>
<meta name="author"	 content="Alex Hollender (http://alexhollender.info)" />
<meta http-equiv="X-UA-Compatible" content="IE=8">
<link rel="stylesheet" type="text/css" href="avedon/css/avedon.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53231437-1', 'auto');
  ga('send', 'pageview');

</script>
<?php include('images.php'); ?>

<!--

SITE DESIGNED + BUILT BY

 ______   ___                    
/\  _  \ /\_ \                   
\ \ \L\ \\//\ \      __   __  _  
 \ \  __ \ \ \ \   /'__`\/\ \/'\ 
  \ \ \/\ \ \_\ \_/\  __/\/>  </ 
   \ \_\ \_\/\____\ \____\/\_/\_\
    \/_/\/_/\/____/\/____/\//\/_/
                                 
                                 
 __  __          ___    ___                      __                  
/\ \/\ \        /\_ \  /\_ \                    /\ \                 
\ \ \_\ \    ___\//\ \ \//\ \      __    ___    \_\ \     __   _ __  
 \ \  _  \  / __`\\ \ \  \ \ \   /'__`\/' _ `\  /'_` \  /'__`\/\`'__\
  \ \ \ \ \/\ \L\ \\_\ \_ \_\ \_/\  __//\ \/\ \/\ \L\ \/\  __/\ \ \/ 
   \ \_\ \_\ \____//\____\/\____\ \____\ \_\ \_\ \___,_\ \____\\ \_\ 
    \/_/\/_/\/___/ \/____/\/____/\/____/\/_/\/_/\/__,_ /\/____/ \/_/ 
    

    
http://alexhollender.info

to the wonder

Plugins Used:
jQuery
Swipe.js
Mousetrap.js
Fitvid.js
-->

<style type="text/css">

</style>

</head>



<body>
<div id="screen"></div>

<div id="intro">
  <div id="introTitle">
    <p><span>MICHAEL</span> AVEDON</p>
    <div>ENTER</div>
  </div>
</div>

<div id="siteContainer">

  <div id="top">
    <div>
      <p><span>MICHAEL</span> AVEDON</p>
    </div>
  </div>
    
  <div id="middle">
    <div id="middleContainer">
      <div id="homepage" class="active mainElement">
        <div id="homeslides" class="homeSlides" data-cycle-speed="3000" data-cycle-timeout="3600">
          <img src="avedon/images/editorial2/editorial2_2.jpg">
          <img src="avedon/images/figure/figure_25.jpg">
          <img src="avedon/images/liz/Liz_23.jpg">
          <img src="avedon/images/editorial2/editorial2_17.jpg">
          <img src="avedon/images/artists/_Artists_14.jpg">
          <img src="avedon/images/figure/figure_26.jpg">
          <img src="avedon/images/portraits/portraits_24.jpg">
          <img src="avedon/images/backstage/backstage_2.jpg">
          <img src="avedon/images/editorial/editorial_15.jpg">
          <img src="avedon/images/figure/figure_22.jpg">
          <img src="avedon/images/portraits/portraits_12.jpg">
          <img src="avedon/images/figure/figure_14.jpg">
          <img src="avedon/images/liz/Liz_6.jpg">
          <img src="avedon/images/portraits/portraits_30.jpg">
        </div>
      </div>
      
      <!-- PORTRAITS -->
      <div id="portraits" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-portraits"></p>
            <p class="albumtitle"><span class="italic">Portraits</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="portraitsSlides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-portraits"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          <?php printImagesFromFolder('avedon/images/portraits'); ?>
        </div>
      </div>
        
      <!-- FIGURE -->
      <div id="figure" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-figure"></p>
            <p class="albumtitle"><span class="italic">Figure</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="figureSlides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-figure"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          <?php printImagesFromFolder('avedon/images/figure'); ?>
        </div>
      </div>
      
      <!-- LIZ -->
      <div id="liz" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-liz"></p>
            <p class="albumtitle"><span class="italic">Elizabeth</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="lizSlides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-liz"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          <?php printImagesFromFolder('avedon/images/liz'); ?>
        </div>
      </div>
      
      <!-- BACKSTAGE -->
      <div id="backstage" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-backstage"></p>
            <p class="albumtitle"><span class="italic">Backstage</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="backstageSlides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-backstage"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          <?php printImagesFromFolder('avedon/images/backstage'); ?>
        </div>
      </div>
      
      <!-- EDITORIAL 2 -->
      <div id="editorial2" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-editorial2"></p>
            <p class="albumtitle"><span class="italic">Editorial I</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="editorial2Slides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-editorial2"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          <?php printImagesFromFolder('avedon/images/editorial2'); ?>
        </div>
      </div>
      
      <!-- EDITORIAL -->
      <div id="editorial" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-editorial"></p>
            <p class="albumtitle"><span class="italic">Editorial II</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="editorialSlides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-editorial"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          <?php printImagesFromFolder('avedon/images/editorial'); ?>
        </div>
      </div>
      
      <!-- ARTISTS -->
      <div id="artists" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-artists"></p>
            <p class="albumtitle"><span class="italic">Artists</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="artistsSlides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-artists"
          data-cycle-caption-template="&lt;span class=&quot;slidecount&quot;&gt;{{slideNum}} / {{slideCount}}&lt;/span&gt; &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          <?php printImagesFromFolder('avedon/images/artists'); ?>
        </div>
      </div>
      
      <!-- RVCA -->
      <!--<div id="rvca" class="mainElement">
        <div class="slidecontrols">
          <div class="captions">
            <p class="">North Shore of Oahu <br> 2010</p>
            <p class="albumtitle"><span class="italic">RVCA Video</span></p>
          </div>
        </div>
        <div id="rvcaVideo" class="allSlides">
          <iframe src="http://player.vimeo.com/video/17935951?title=0&amp;byline=0&amp;portrait=0&amp;color=999999&amp" width="795" height="447" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </div>-->
      
      <!-- MISC -->
      <!--<div id="misc" class="mainElement">
        <div id="cursorControls">
          <p id="left" class="prev"></p>
          <p id="right" class="next"></p>
        </div>
        <div class="slidecontrols">
          <div class="captions">
            <p class="custom-caption-misc"></p>
            <p class="albumtitle"><span class="italic">Miscellaneous</span></p>
            <div class="PrevNext">
              <p class="prev prevButton">Prev /</p> 
              <p class="next nextButton">&nbsp;Next</p>
            </div>
            <p class="instructions">&hArr; use arrow keys to navigate</p>
          </div>
        </div>
        <div class="miscSlides allSlides" 
          data-cycle-speed="1200"
          data-cycle-timeout="0"
          data-cycle-manual-fx="scrollHorz"
          data-cycle-easing="easeInOutSine"
          data-cycle-swipe="true"
          data-cycle-prev=".prev"
          data-cycle-next=".next"
          data-cycle-caption=".custom-caption-misc"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}"
        >
          
          <?php printImagesFromFolder('avedon/images/misc'); ?>
        </div>
      </div>-->
        
    </div>
  </div>
    
  <div id="bottom">
    <div>
      <p>MENU</p>
    </div>
  </div>

</div>

<div id="menu">
  <p class="mobile divider"></p>
  <div id="menucontainer">
    <p class="lCol header desktop">Work</p>
    <p class="album liz">Elizabeth</p>
    <p class="album editorial2">Editorial I</p>
    <p class="album figure">Figure</p>
    
    <p class="lCol desktop"></p>
    <p class="album portraits">Portraits</p>
    <p class="album editorial">Editorial II</p>
    <p class="album artists">Artists</p>
    
    <p class="lCol desktop"></p>
    <p class="album backstage">Backstage</p>
    <p style="cursor:default;"></p>
    <p class="desktop" style="cursor:default;"></p>
    
    <p class="mobile" style="cursor:default;"></p>
    <p class="lCol bRow header desktop">Info</p>
    <p class="contactLink bRow desktop">Contact</p>
    <p class="bioLink bRow desktop">Biography</p>
 
    <p class="mobile" style="cursor:default;"></p>
    <p class="contactLink mobile">Contact</p>
    <p class="bioLink mobile">Biography</p>
  </div>
</div>

<div id="bioContainer">
  <p class="infoText">Michael Avedon, a graduate of the International Center of 
  Photography, has begun to develop his photographic 
  perspective over the past four years in New York City. 
  Working primarily with black & white 35mm and medium 
  format film, his portfolio thus far depicts portraits of 
  artists, creators, politicians, and relatives. A determination 
  to expound his visual understanding of everything from 
  performance to the natural world has allowed him to 
  move forward with an exploratory approach,
  informed by the photographic legacy of his grandfather
  Richard Avedon.
  </p>
  <div id="closeBio"><span>close</span></div>
</div>

<div id="contactCont">
  <div id="contactBox">
    <p class="infoText"><a href="mailto:info@michaelavedon.com">info@michaelavedon.com</a></p>
  </div>
  <div id="closeContact"><span>close</span></div>
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src='avedon/js/jquery.cycle2.min.js'></script>
<script type="text/javascript" src='avedon/js/jquery.cycle2.swipe.min.js'></script>
<script type="text/javascript" src='avedon/js/mousetrap.min.js'></script>
<script type="text/javascript" src='avedon/js/swipe.js'></script>
<script type="text/javascript" src='avedon/js/jquery.touchSwipe.min.js'></script>
<script type="text/javascript" src='avedon/js/jquery.fitvids.js'></script>
<script type="text/javascript">

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


</script>

</body>
</html>
