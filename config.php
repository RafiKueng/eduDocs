<?php  
  
/* 
    The important thing to realize is that the config file should be included in every 
    page of your project, or at least any page you want access to these settings. 
    This allows you to confidently use these settings throughout a project because 
    if something changes such as your database credentials, or a path to a specific resource, 
    you'll only need to update it here. 
*/  

#echo "config.php called<br>";


$config = array(
  "pagefile"  => "html.php",
  "pageconf" => "conf.php",
  "pagecss" => "css.php"
/*
    "db" => array(  
        "db1" => array(  
            "dbname" => "database1",  
            "username" => "dbUser",  
            "password" => "pa$$",  
            "host" => "localhost"  
        ),  
        "db2" => array(  
            "dbname" => "database2",  
            "username" => "dbUser",  
            "password" => "pa$$",  
            "host" => "localhost"  
        )  
    ),  
    "urls" => array(  
        "baseUrl" => "http://example.com"  
    ),  
    "paths" => array(  
        "resources" => "/path/to/resources",  
        "images" => array(  
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",  
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"  
        )  
    )  
*/
);

  
/* 
    I will usually place the following in a bootstrap file or some type of environment 
    setup file (code that is run at the start of every page request), but they work  
    just as well in your config file if it's in php (some alternatives to php are xml or ini files). 
*/  
  
/* 
    Creating constants for heavily used paths makes things a lot easier. 
    ex. require_once(LIBRARY_PATH . "Paginator.php") 
*/  

defined("LIB_PATH")  
    or define("LIB_PATH", realpath(dirname(__FILE__) . '/_lib' ) . '/');  
      
defined("PAGES_PATH")  
    or define("PAGES_PATH", realpath(dirname(__FILE__) . '/_pages') . '/');  


  
/* 
    Error reporting. 
*/  
ini_set("error_reporting", "true");  
error_reporting(E_ALL|E_STRCT);

#var_dump($config);
#echo "<br>end of config.php<br>"

?>  