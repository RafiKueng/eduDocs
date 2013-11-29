<?php
  /* has always config included */
  require_once(realpath(dirname(__FILE__) . "/../config.php"));
  require_once(LIB_PATH . "funcs.php");
  

  /**
   * renders a text file to html
   * assumes $f exists and is readable
   */
  function render_page($f) {
    global $config;
  
    #$fn = realpath(PAGES_PATH . '/' . $f . '/' . $config["pagefile"]);
    #echo $fn;
    #echo PAGES_PATH . $f . '/' . $config["pagefile"];
    #$file = file($fn);
    #foreach($file as $line){}
    #print_r($file);
    
    require_once(PAGES_PATH . '/' . $f . '/' . $config["pagedata"]);
    
    require_once(TEMPL_PATH . "header.php");
    
    if (isset($data["title"])){echo "<h1>".$data["title"]."</h1>";}
    echo '<div class="about">';
    if (isset($data["author"])){echo ' Author: '.$data["author"];}
    if (isset($data["date"])){echo ' Date: '.$data["date"];}
    echo '</div>';
    
    require_once(PAGES_PATH . '/' . $f . '/' . $config["pagefile"]);
    require_once(TEMPL_PATH . "footer.php");

  }
  
  
  function render_pagenotfound($p) {
    header("HTTP/1.0 404 Not Found");
    require_once("404.php");
    #header('HTTP/1.0 404 Not Found');
    #echo "<h1>404 Not Found</h1>";
    #echo "The page that you have requested ($p) could not be found.";
    exit();
  }
  
  
  
  function render_index() {
    $list = get_list_of_articles();
    #print_r($list);
    require_once(TEMPL_PATH . "index.php");
  }
  
  #render_index();
  #render_page('gitlatex');
?>