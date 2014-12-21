<?php
  function printImagesFromFolder($path) {
    $di = new RecursiveDirectoryIterator($path);
    foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
      if ($di == '.' || $di == '..') {
        continue;
      }
      echo "<img data-cycle-title='" . $di . "' src='" . $filename . "' alt=''>";
    }
  }

  function section($category) {
    echo "<div id='" . $category . "' class='mainElement'>"
      . "<div id='cursorControls'>"
      . "<p id='left' class='prev'></p>"
      . "<p id='right' class='next'></p>"
      . "</div>"
      . "<div class='slidecontrols'>"
      . "<div class='captions'>"
      . "<p class='custom-caption-" . $category . "'></p>"
      . "<p class='albumtitle'><span class='italic'>" . $category . "</span></p>"
      . "<div class='PrevNext'>"
      . "<p class='prev prevButton'>Prev /</p>"
      . "<p class='next nextButton'>&nbsp;Next</p>"
      . "</div>"
      . "<p class='instructions'>&hArr; use arrow keys to navigate</p>"
      . "</div>"
      . "</div>"
      . "<div class='" . $category . "Slides allSlides' data-cycle-speed='1200' data-cycle-timeout='0'"
      . "data-cycle-manual-fx='scrollHorz' data-cycle-easing='easeInOutSine' data-cycle-swipe='true'"
      . "data-cycle-prev='.prev' data-cycle-next='.next' data-cycle-caption='.custom-caption-" . $category . "'"
      . "data-cycle-caption-template='{{slideNum}} / {{slideCount}} &lt;br&gt; &lt;br&gt; {{cycleTitle}}'>";
        printImagesFromFolder('avedon/images/' . $category);
      echo "</div></div>";
  }
?>