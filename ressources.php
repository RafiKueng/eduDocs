<?php
  require_once(realpath(dirname(__FILE__) . "/config.php"));
  require_once(LIB_PATH . "renderer.php");

  #print_r($_GET);
  
  $fn = PAGES_PATH . $_GET["page"] . "/" . $_GET["type"] . "/" . $_GET["name"];
  $fn2 = $_GET["page"] . "/" . $_GET["type"] . "/" . $_GET["name"];
  #echo $fn;
  
  
  if (file_exists($fn)) {
    header("Location: ../../_pages/$fn2");
    die(); 
  }
?>
