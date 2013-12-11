<?Php
if(defined("vars_php")) return;
define("vars_php","xx");

include "../db.php";
include "../lib.php";

$db=new DB("web");
$TITLE="欢迎来到悦来客栈";
$HOTELNAME="客栈名字";
$HOTELLOCATION="26.875945,100.244411";
$BOOKPHONE="888888";
$db->record("TITLE",$TITLE);
$db->record("HOTELNAME",$HOTELNAME);
$db->record("HOTELLOCATION",$HOTELLOCATION);
$db->record("BOOKPHONE",$BOOKPHONE);
$vars=$db->getValues();
echo t($vars);
foreach($vars as $key=>$value)
  $$key=$value;
// techo("vars:".t($vars));
// techo("geted value\n");

?>
