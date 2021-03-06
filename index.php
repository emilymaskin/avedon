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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src='avedon/js/libs/jquery.cycle2.min.js'></script>
<script type="text/javascript" src='avedon/js/libs/jquery.cycle2.swipe.min.js'></script>
<script type="text/javascript" src='avedon/js/libs/mousetrap.min.js'></script>
<script type="text/javascript" src='avedon/js/libs/swipe.js'></script>
<script type="text/javascript" src='avedon/js/libs/jquery.touchSwipe.min.js'></script>
<script type="text/javascript" src='avedon/js/libs/jquery.fitvids.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js'></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.2.3/backbone-min.js'></script>
<script type="text/javascript" src='avedon/js/main.js'></script>
<script type="text/javascript" src='avedon/js/Intro.js'></script>
<script type="text/javascript" src='avedon/js/SiteContainer.js'></script>
<script type="text/javascript" src='avedon/js/Menu.js'></script>
<script type="text/javascript" src='avedon/js/InfoScreen.js'></script>
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

</head>

<body>
<div id="screen"></div>
<div id="intro">
  <div id="introTitle">
    <p><span>MICHAEL</span> AVEDON</p>
    <div class="enter">ENTER</div>
  </div>
</div>
<div id="siteContainer">
  <div id="top">
    <p><span>MICHAEL</span> AVEDON</p>
  </div>
  <div id="middle">
    <div id="middleContainer">
      <div id="homepage" class="active mainElement">
        <div id="homeslides" class="homeSlides" data-cycle-log="false" data-cycle-speed="3000" data-cycle-timeout="3600">
          <?php printImagesFromFolder('avedon/images/home'); ?>
        </div>
      </div>
      <?php printAllImages(); ?>
    </div>
  </div>
  <div id="bottom">
    <div>
      <p id="menuToggle">MENU</p>
    </div>
  </div>
</div>

<div id="menu">
  <p class="mobile divider"></p>
  <div id="menucontainer">
    <div class="section">
      <p class="lCol header desktop">Work</p>
      <?php populateMenu(); ?>
    </div>
    <div class="section">
      <p class="lCol bRow header desktop">Info</p>
      <p class="infoLink bRow desktop" data-category="contact">Contact</p>
      <p class="infoLink bRow desktop" data-category="bio">Biography</p>

      <p class="infoLink mobile" data-category="contact">Contact</p>
      <p class="infoLink mobile" data-category="bio">Biography</p>
    </div>
  </div>
</div>

<div id="bioContainer">
  <p class="infoText">Michael Avedon, a graduate of the International Center of
  Photography, has begun to develop his photographic
  perspective over the past four years in New York City.
  Working primarily with black &amp; white 35mm and medium
  format film, his portfolio thus far depicts portraits of
  artists, creators, politicians, and relatives. A determination
  to expound his visual understanding of everything from
  performance to the natural world has allowed him to
  move forward with an exploratory approach,
  informed by the photographic legacy of his grandfather
  Richard Avedon.
  </p>
  <div id="closeBio" class="closeScreen"><span>close</span></div>
</div>

<div id="contactContainer">
  <div id="contactBox">
    <p class="infoText"><a href="mailto:info@michaelavedon.com">info@michaelavedon.com</a></p>
  </div>
  <div id="closeContact" class="closeScreen"><span>close</span></div>
</div>
</body>
</html>