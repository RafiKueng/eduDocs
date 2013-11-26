<?php
  require_once(realpath(dirname(__FILE__) . "/../config/config.php"));
  require_once(realpath(dirname(__FILE__) . "/../lib/templates.php"));

  function getDayOfWeek() {
    return date('l');
  }
  
echo getHeader('myTitle');

echo getFooter();
?>

