<?php

  function getAllCategories() {
    $categories = [];
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
    foreach ($file_array as $f => $img) {
      $title = ltrim(basename($f), ' 0123456789_');
      $title = str_replace('__', '<br>', $title);
      $title = str_replace('_', ' ', $title);
      $title = str_replace('.jpg', '', $title);
      echo "<img data-cycle-title='" . $title . "' src='" . $img . "' alt=''>";
    }
  }

  function getAllImages($path) {
    $categories = getAllCategories($path);
    foreach ($categories as $c) {
      $slug = strtolower($c);
      $title = str_replace('_', ' ', $c);
      section($slug, $title, $c);
    }
  }

  function section($category, $title, $folder) {
    try {
      echo "<div id=\"$category\" class='mainElement category'>
        <div id='cursorControls'>
        <p id='left' class='prev'></p>
        <p id='right' class='next'></p>
        </div>
        <div class='slidecontrols'>
        <div class='captions'>
        <p class=\"custom-caption-$category\"></p>
        <p class='albumtitle'><span class='italic'>$title</span></p>
        <div class='PrevNext'>
        <p class='prev prevButton'>Prev /</p>
        <p class='next nextButton'>&nbsp;Next</p>
        </div>
        <p class='instructions'>&hArr; use arrow keys to navigate</p>
        </div>
        </div>
        <div class=\"{$category}Slides allSlides\" data-cycle-speed='1200' data-cycle-timeout='0'
        data-cycle-manual-fx='scrollHorz' data-cycle-easing='easeInOutSine' data-cycle-swipe='true'
        data-cycle-prev='.prev' data-cycle-next='.next' data-cycle-caption=\".custom-caption-{$category}\"";
          printImagesFromFolder('avedon/images/sections/' . $folder);
        echo "</div></div>";
      } catch (UnexpectedValueException $e) {
        return;
      }
  }
?>