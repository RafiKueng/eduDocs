<?php
  require_once(realpath(dirname(__FILE__) . "/_lib/config.php"));
  require_once(LIB_PATH . "renderer.php");

  if (isset($_GET["a"])) {
    if (is_dir(PAGES_PATH . $_GET["f"])) {
      render_page($_GET['a']);
    }
    else if (is_file(PAGES_PATH . $_GET["f"])) {
    }
    else {
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