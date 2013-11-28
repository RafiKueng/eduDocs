<?php
  require_once(realpath(dirname(__FILE__) . "/config.php"));
  require_once(LIB_PATH . "renderer.php");
  
  #var_dump($_GET);
  
  if (isset($_GET["e"])) {
    echo 'dont hack me';
    die();
  }
  
  if (isset($_GET["a"])) {
    if (is_dir(PAGES_PATH . $_GET["a"])) {
      render_page($_GET['a']);
    }
    else if (is_file(PAGES_PATH . $_GET["a"])) {
    }
    else {
      echo 'page not found in index.php';
      render_pagenotfound($_GET["a"]);
    }
  }
  else {
    render_index();
  /*
    header('HTTP/1.0 404 Not Found');
    echo "<h1>404 Not Found</h1>";
    echo "The page that you have requested could not be found.";
    exit();
  */
  }

#  foreach ($_GET as $key => $value){
#    echo $key . ': '.$value. "\n";
#  }

?>