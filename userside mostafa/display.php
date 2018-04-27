<?php
require 'db.php';
$mysqli=new mysqli('localhost','root','','swe');
if(mysqli_connect_errno())
{
 print_f("Connection Failed: %s\n",mysqli_connect_error());
}

class page
{
  $pageDis;
  $db_obj = new DB();
  $db_obj->connect();
  if ($sql = "SELECT page.html FROM page WHERE page.id=1";) {
    echo "yup";
  }
  else {
    echo "NO";
  }

  $result = $db_ob->executesql($sql);
  $row = $result->mysqli_fetch_array();
  $this->pageDis= $row['html'];
}
?>
  <head>
    <title>Display</title>
  </head>
  <body>
    <div>
      <?php echo $row['html']; ?>
    </div>
  </body>
