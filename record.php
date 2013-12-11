<?php
include "lib.php";
include "db.php";

$db=new DB();
foreach($_REQUEST as $key=>$value){
  $db->record($key,$value);
}
$vars=$db->getValues();
echo t($vars);
?>
  
