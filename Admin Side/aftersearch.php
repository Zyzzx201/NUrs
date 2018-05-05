<?php
  require_once("db.php");
  //echo "!";
  $db_obj= new DB();
  $db_obj->connect();

  $name= $_REQUEST['Search'];

  if(!empty($name)){
    $sql = "SELECT * FROM main WHERE fname Like '%".$name."%' OR lname Like '%".$name."%'";
  }
  if ($result = $db_obj->execute($sql)){
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
        echo $row['fname'];
        echo $row['lname'];
        echo $row['dob'];
        echo $row['ssn'];
      }
    }
  }
  header('location:acceptteacher.php');
  $db_obj->disconnect();
?>
