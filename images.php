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
?>