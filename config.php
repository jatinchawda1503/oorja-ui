<?php


function url(){
  return sprintf(
    "%s://%s:8000",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}


  
$base  =  url();
?>