<?php
  /* has always config included */
  require_once(LIB_PATH . "funcs.php");
  

  /**
   * renders a text file to html
   * assumes $f exists and is readable
   */
  function render_page($f) {
    global $config;
  
    $fn = realpath(PAGES_PATH . '/' . $f . '/' . $config["pagefile"]);
    #echo $fn;
    #echo PAGES_PATH . $f . '/' . $config["pagefile"];
    $file = file($fn);
    foreach($file as $line){
      
    }
    print_r($file);

  }
  
  
  function render_pagenotfound($p) {
    header("HTTP/1.0 404 Not Found");
    include_once("404.php");
    #header('HTTP/1.0 404 Not Found');
    #echo "<h1>404 Not Found</h1>";
    #echo "The page that you have requested ($p) could not be found.";
    exit();
  }
  
  
  
  function render_index() {
    print_r(get_list_of_articles());
  }
  
?>