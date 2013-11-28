<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if (isset($vars["title"])){echo $vars["title"];}?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php echo BASEPATH ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo BASEPATH ?>/css/main.css">
        <script src="<?php echo BASEPATH ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
        <style>
<?php
if (isset($vars["style"])){
  foreach ($vars["style"] as $line) {echo "            " . $line;}
}
?>
        </style>
        <script>
<?php
if (isset($vars["script"])){
  foreach ($vars["script"] as $line) {echo "            " . $line;}
}
?>
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
