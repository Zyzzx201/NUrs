<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit & Delete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="crudsCSS1.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
  	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript">
  		window.onload = function() {
  			document.getElementById('navMenu').style.display = 'none';
  		};
  		function changeM(x) {
  			x.classList.toggle("change");
  			document.getElementById('navMenu').style.display = 'block';
  			if (document.getElementById('Menicon').clicked){
  				document.getElementById('navMenu').style.display = 'none';
  			}
  		};
    </script>
  </head>
  <body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='/index.php';">
      <h1 id="h1W">Welcome</h1>
      <div class="micon" onclick="changeM(this)" id="Menicon">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
      </div>
      <div id="navMenu" >
        <div id="myTopnav" class="topnav">
          <a id="addr" href="/acceptteacher.php">Teacher Applications</a>
          <a id="addr" href="/Addusers.php">Children's Applications</a>
          <a id="addr" href="/editteacher.php">Edit Teachers</a>
          <a id="addr" href="/deleteuser.php">Review Children</a>
          <div class="dropdown">
            <button class="dropbtn">Other
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a id="admAdr" href="userSide/Onlineapplication.php">Online Application</a>
              <a id="admAdr" href="userSide/About us.php">About Us</a>
              <a id="admAdr" href="userSide/addteacher.php">Teacher Registration</a>
              <a id="admAdr" href="userSide/Schedules.php">Schedule</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <form class="addcruds" action="afterCruds.php" method="post">
      <div id="crudPage">
        <fieldset>
          <legend id="Leg">Addresses :</legend>
            <?php
            require_once("AddressController.php");
            $addOBJ1 = new addressC();
            echo "<br>";
            $names = $addOBJ1->ADselectAll();
             ?>
             <br>
             <div>
               Write the name of address you want to add here:
               <button type="submit" name="saveAdd">Add</button><br>
               <input type="text" name="ADDadditional" value=" <?php echo $names['name']; ?>"> <br><br>
             </div>
             <div>
               Write the number of address you want to delete here:
               <input type="text" name="ADDid" value="<?php  echo $names['id']; ?>" id="idBox">
               <button type="submit" name="deleteAdd">Delete</button> <br><br>
             </div>
        </fieldset>
        <br><br>
        <fieldset>
          <legend id="Leg">Nationalities :</legend>
            <?php
            require_once("nationalityController.php");
            $natOBJ1 = new nationalityC();
            echo "<br>";
            $names = $natOBJ1->NAselectALL();
            ?>
            <br>
            <div>
              Write the name of nationality you want to add here:
              <button type="submit" name="saveNat">Add</button> <br>
              <input type="text" name="NATadditional" value="<?php echo $names['name'];?>"> <br><br>
            </div>
            <div>
              Write the number and name of nationality you want to modify here:
              <button type="submit" name="updateNat">Modify</button> <br>
              <input type="text" name="NATid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="NATcurrent" value=" <?php echo $names['name']; ?>"> <br><br>
            </div>
            <div>
              Write the number of nationality you want to delete here:
              <input type="text" name="NATid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteNat">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Relations :</legend>
            <?php
            require_once("relationController.php");
            $relOBJ1 = new relationC();
            echo "<br>";
            $names = $relOBJ1->RselectALL();
            ?>
            <br>
            <div>
              Write the name of relation you want to add here:
              <button type="submit" name="saveREL">Add</button> <br>
              <input type="text" name="RELadditional" value="<?php echo $names['relation'];?>"> <br><br>
            </div>
            <div>
              Write the number and name of relation you want to modify here:
              <button type="submit" name="updateREL">Modify</button> <br>
              <input type="text" name="RELid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="RELcurrent" value=" <?php echo $names['relation']; ?>"> <br><br>
            </div>
            <div>
              Write the number of relation you want to delete here:
              <input type="text" name="RELid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteREL">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Teacher Marital Status :</legend>
            <?php
            require_once("MaritalController.php");
            $MSOBJ1 = new maritalC();
            echo "<br>";
            $names = $MSOBJ1->MTselectALL();
            ?>
            <br>
            <div>
              Write the name of marital status you want to add here:
              <button type="submit" name="saveMS">Add</button> <br>
              <input type="text" name="MSadditional" value="<?php echo $names['value'];?>"> <br><br>
            </div>
            <div>
              Write the number and name of marital status you want to modify here:
              <button type="submit" name="updateMS">Modify</button> <br>
              <input type="text" name="MSid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="MScurrent" value=" <?php echo $names['value']; ?>"> <br><br>
            </div>
            <div>
              Write the number of marital status you want to delete here:
              <input type="text" name="MSid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteMS">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Child Type :</legend>
            <?php
            require_once("ChildtypeController.php");
            $CTOBJ1 = new childtypeC();
            echo "<br>";
            $names = $CTOBJ1->CTselectAll();
            ?>
            <br>
            <div>
              Write the name of the child type you want to add here:
              <button type="submit" name="saveCT">Add</button> <br>
              <input type="text" name="CTadditional" value="<?php echo $names['type'];?>"> <br><br>
            </div>
            <div>
              Write the number and name of the child type you want to modify here:
              <button type="submit" name="updateCT">Modify</button> <br>
              <input type="text" name="CTid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="CTcurrent" value=" <?php echo $names['type']; ?>"> <br><br>
            </div>
            <div>
              Write the number of the child type you want to delete here:
              <input type="text" name="CTid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteCT">Delete</button> <br><br>
            </div>
        </fieldset>
      </div>
    </form>
  </body>
</html>
