<?php
if(defined("db_php")) return;
define("db_php","xx");

// techo("start test:\n");

require "dbBase.php";
// $ss=new mydb();

class DB{
  var $db;
  function __construct($database){
    $this->db=new  mydb($database);
  }
  //remember to add slashes if ..
  function record($strKey,$strValue){
    $sql="insert into keyValue(strKey,strValue) values('{$strKey}','{$strValue}')";
    techo($sql."\n");
    if(!$this->db->query($sql)){
      $sql="update keyValue set strValue='{$strValue}' where strKey='{$strKey}'";
      techo($sql."\n");
      if(!$this->db->query($sql)) return false;
    }
    return true;
  }
  function errno(){
    return $this->db->errno();
  }
  function getValues(){
    $sql="select * from keyValue";
    techo($sql."\n");
    $this->db->query($sql);
    $tmp=$this->db->get_rows_array();
    foreach($tmp as $it=>$obj)
      $res[$obj[0]]=$obj[1];
    return $res;
  }
}
// echo "test a obj:\n";
// $sb=new DB();
// echo "test a obj:\n";
// $sb->record("hello","world");
// echo "test a obj:\n";
// $sb->record("hello","world");
// var_dump($sb->getValues());
// echo "...........................";
?>
