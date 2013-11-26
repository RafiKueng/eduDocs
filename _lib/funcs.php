<?php


function get_list_of_articles(){
  global $config;

  #echo 'getlist';

  $path = PAGES_PATH;
  $dir = opendir($path);
  $list = array();

  while($file = readdir($dir)){
    #echo "<p>$file</p>";
    #print_r($file != '.');print_r( $file != '..'); print_r(is_dir($file));
    if ($file != '.' and $file != '..' and is_dir($path.$file)){
      #echo 'blablabla';
      #$ctime = filectime($path . $file); // . ',' . $file;
      
      $list[$file] = array(
        "name" => $file,
        "title" => " BLA".$file        
      );
    }
  }
  closedir($dir);
  krsort($list);
  return $list;
}




?>