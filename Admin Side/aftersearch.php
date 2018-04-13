<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
  	<link rel="stylesheet" href="AdminSS.css">
  </head>
  <body>
    <form id="searchB" method="POST" action = "aftersearch.php">
    <input type="text" name="Search" >
    <input type = "submit" value = "Search">
    </form>
    <!--<button type="button" name="button" id="searchBTN">Search</button>-->
    
    <?php
      require_once("db.php");
  
    echo "!";
    $db_obj= new DB();
    $db_obj->connect();

      $name= $_POST['Search'];
      $sql = "SELECT * FROM main WHERE fname Like '%".$name."%' OR lname Like '%".$name."%'";
      $result = $db_obj->execute($sql);
      $row = mysqli_fetch_array($result);
      $db_obj->disconnect();
      echo $row['fname'];
      echo $row['lname'];

         ?>
  

  </body>
</html>
