<?php

  function getAllCategories() {
    $categories = array();
    foreach (scandir('avedon/images/sections') as $i => $folder) {
      if ($folder == '.' || $folder == '..' || $folder == '.DS_Store') {
        continue;
      }
      array_push($categories, $folder);
    }
    return $categories;
  }

  function populateMenu() {
    $categories = getAllCategories();
    foreach ($categories as $i=>$c) {
      $slug = strtolower($c);
      $title = str_replace('_', ' ', $c);
      if ($i > 0 && $i % 3 == 0) {
        echo "<p class='lCol desktop'></p>";
      }
      echo "<p class=\"album $slug\" data-category=\"$slug\">$title</p>";
    }
  }

  function printImagesFromFolder($path) {

    $di = new RecursiveDirectoryIterator($path);
    $file_array = array();

    foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
      if ($di == '.' || $di == '..') {
        continue;
      }
      $file_array[$filename] = $file;
    }
    krsort($file_array);
    $i = 0;
    foreach ($file_array as $f => $img) {
      $title = ltrim(basename($f), ' 0123456789_');
      $title = str_replace('__', '<br>', $title);
      $title = str_replace('_', ' ', $title);
      $title = str_replace('.jpg', '', $title);
      if ($i == 0) {
        echo "<img data-cycle-title='" . $title . "' src='" . $img . "' alt='' class='first'>";
      }
      else {
        echo "<img data-cycle-title='" . $title . "' src='" . $img . "' alt=''>";
      }
      $i++;
    }
  }

  function printAllImages($path) {
    $categories = getAllCategories($path);
    foreach ($categories as $c) {
      $slug = strtolower($c);
      $title = str_replace('_', ' ', $c);
      section($slug, $title, $c);
    }
  }

  function section($category, $title, $folder) {
    try { ?>
      <div id="<?php echo $category;?>" class='mainElement category'>
        <div id='cursorControls'>
          <div id='left' class='prev'></div>
          <div id='right' class='next'></div>
        </div>
        <div class='slidecontrols'>
        <div class='captions'>
        <p class="custom-caption-<?php echo $category;?>"></p>
        <p class='albumtitle'><span class='italic'><?php echo $title;?></span></p>
        <div class='PrevNext'>
        <p class='prev prevButton'>Prev /</p>
        <p class='next nextButton'>&nbsp;Next</p>
        </div>
        <p class='instructions'>&hArr; use arrow keys to navigate</p>
        </div>
        </div>
        <div class="<?php echo $category;?>Slides allSlides"
          data-cycle-speed='1200' data-cycle-log='false' 
          data-cycle-timeout='0' data-cycle-manual-fx='scrollHorz'
          data-cycle-easing='easeInOutSine' data-cycle-swipe='true'
          data-cycle-prev='.prev' data-cycle-next='.next'
          data-cycle-caption=".custom-caption-<?php echo $category;?>"
          data-cycle-caption-template="{{slideNum}} / {{slideCount}} <br> <br> {{cycleTitle}}"
          style="position: relative;">
        <?php printImagesFromFolder('avedon/images/sections/' . $folder); ?>
        </div></div>
      <?php } catch (UnexpectedValueException $e) {
        return;
      }
  }
?>