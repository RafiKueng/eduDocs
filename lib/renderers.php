<?php
  require_once(realpath(dirname(__FILE__) . "/../config/config.php"));
  

  /**
   * renders a text file to html
   * assumes $f exists and is readable
   */
  function render($f) {
    global $config;
  
    $fn = realpath($config["paths"]["articles"] . '/' . $f . $config["paths"]["ext"]);
    #echo $fn;
    $file = file_get_contents($fn);
    foreach($file as $line){
      
    }
    echo $fh;

  }
  
?>