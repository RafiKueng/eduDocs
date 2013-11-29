<?php  
  
$config = array(
  "pagefile"  => "html.php",
  "pagedata" => "data.php",
  "pagecss" => "css.php"
);

  
defined("LIB_PATH")  
    or define("LIB_PATH", realpath(dirname(__FILE__) . '/_lib' ) . '/');  
      
defined("PAGES_PATH")  
    or define("PAGES_PATH", realpath(dirname(__FILE__) . '/_pages') . '/');  

defined("TEMPL_PATH")  
    or define("TEMPL_PATH", realpath(dirname(__FILE__) . '/_templates') . '/');  

defined("BASEPATH")  
    or define("BASEPATH", '/~rafik/docs');  

  
/* 
    Error reporting. 
*/  
ini_set("error_reporting", "true");  
error_reporting(E_ALL|E_STRCT);
?>  
