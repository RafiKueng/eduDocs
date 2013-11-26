<?php
  require_once(realpath(dirname(__FILE__) . "/../config/config.php"));
  require_once(realpath(dirname(__FILE__) . "/../lib/renderers.php"));

  #echo "redirect\n";

  if (isset($_GET["f"]) && file_exists("../docs/article/".$_GET["f"].'.txt')) {
    render($_GET['f']);
  }
  else {
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    exit();
  }

#  foreach ($_GET as $key => $value){
#    echo $key . ': '.$value. "\n";
#  }

?>