<?php
  require_once("db.php");
  //echo "!";
  $db_obj= new DB();
  $db_obj->connect();

  $name= $_REQUEST['Search'];

  if(!empty($name)){
    $sql = "SELECT * FROM main WHERE fname Like ".$name." OR lname Like ".$name;
  }
  $result = $db_obj->execute($sql);


  header('location:editchild.php');
  $db_obj->disconnect();
  return $result;
?>
