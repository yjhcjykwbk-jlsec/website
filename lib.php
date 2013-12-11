<?php
function t($var){
  return print_r($var,true);
}
function techo($var){
  global $debug;
  if(isset($debug)&&$debug) echo $var;
}
?>
