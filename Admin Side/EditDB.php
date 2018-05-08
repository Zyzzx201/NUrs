<?php session_start();?>
<?php if(empty($_SESSION["username"])){
header('location:adminlogin.php');
}
else {
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit & Delete</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="crudsCSS1.css">
    <link rel="stylesheet" type="text/css" href="hovertips.css">
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
      function checkD() {
        return confirm("Are you sure you want to delete this file? This action is unreveresable.");
      }
    </script>
  </head>
  <body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='/index.php';">
      <h1 id="h1W">Welcome</h1>
      <p id="username"><?php echo "Hello ".$_SESSION["username"];} ?></p>
      <div class="micon" onclick="changeM(this)" id="Menicon">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
      </div>
      <div id="navMenu" >
        <div id="myTopnav" class="topnav">
          <a href="\Admin Side\acceptteacher.php" id="admAdr">Teacher Acceptance</a>
  				<a href="\Admin Side\Addusers.php" id="admAdr">Child Acceptance</a>
  				<a href="\Admin Side\deleteuser.php" id="admAdr">Child Edit</a>
  				<a href="\Admin Side\editteacher.php" id="admAdr">Teacher Edit</a>
          <div class="dropdown">
            <button class="dropbtn">More
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a id="admAdr" href="\Admin Side\userSide\Onlineapplication.php">Online Application</a>
              <a id="admAdr" href="\Admin Side\userSide\About us.php">About Us</a>
              <a id="admAdr" href="\Admin Side\userSide\addteacher.php">Teacher Registration</a>
              <a id="admAdr" href="\Admin Side\userSide\Schedules.php">Schedule</a>
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
               <input type="text" name="ADDid" value="<?php echo $names['id']; ?>" id="idBox">
               <button type="submit" name="deleteAdd" onclick="checkD()">Delete</button> <br><br>
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
              <input type="text" name="NATUid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="NATcurrent" value=" <?php echo $names['name']; ?>"> <br><br>
            </div>
            <div>
              Write the number of nationality you want to delete here:
              <input type="text" name="NATid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteNat" onclick="checkD()">Delete</button> <br><br>
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
              <input type="text" name="RELUid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="RELcurrent" value=" <?php echo $names['relation']; ?>"> <br><br>
            </div>
            <div>
              Write the number of relation you want to delete here:
              <input type="text" name="RELid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteREL" onclick="checkD()">Delete</button> <br><br>
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
              <input type="text" name="MSUid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="MScurrent" value=" <?php echo $names['value']; ?>"> <br><br>
            </div>
            <div>
              Write the number of marital status you want to delete here:
              <input type="text" name="MSid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteMS" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Child Type :</legend>
            <?php
            require_once("ChildtypeController.php");
            $CTOBJ1 = new childtypeC();
            echo "<br>";
            $names = $CTOBJ1->CTselectAll2();
            ?>
            <br>
            <div class="hovertip">
              <span class="hovertiptext"> A child type is thier year. </span>
              <div>
                Write the name of the child type you want to add here:
                <button type="submit" name="saveCT">Add</button> <br>
                <input type="text" name="CTadditional" value="<?php echo $names['type'];?>"> <br><br>
              </div>
            </div>
            <div>
              Write the number and name of the child type you want to modify here:
              <button type="submit" name="updateCT">Modify</button> <br>
              <input type="text" name="CTUid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="CTcurrent" value=" <?php echo $names['type']; ?>"> <br><br>
            </div>
            <div>
              Write the number of the child type you want to delete here:
              <input type="text" name="CTid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteCT" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Applications' Status :</legend>
            <?php
            require_once("StatusController.php");
            $CTOBJ1 = new statusC();
            echo "<br>";
            $names = $CTOBJ1->SselectAll();
            ?>
            <br>
            <div>
              Write the name of the status you want to add here:
              <button type="submit" name="saveSTAT">Add</button> <br>
              <input type="text" name="STATadditional" value="<?php echo $names['name'];?>"> <br><br>
            </div>
            <div>
              Write the number and name of the status you want to modify here:
              <button type="submit" name="updateSTAT">Modify</button> <br>
              <input type="text" name="STATUid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="STATcurrent" value=" <?php echo $names['name']; ?>"> <br><br>
            </div>
            <div>
              Write the number of the status you want to delete here:
              <input type="text" name="STATid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteSTAT" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Pages :</legend>
            <?php
            require_once("pageController.php");
            $POBJ1 = new pageC();
            echo "<br>";
            $names = $POBJ1->PAselectAll();
            ?>
            <br>
            <div class="hovertip">
              <span class="hovertiptext"> Add the html of the web page here. </span>
              <div>
                Write the info of the pages you want to add here:
                <button type="submit" name="saveP">Add</button> <br><br>
                <input type="text" name="Padditional" placeholder="Name" value="<?php echo $names['friendlyname'];?>">
                <input type="text" name="PaddLink" placeholder="Link" value="<?php echo $names['path'];?>"><br><br>
                <textarea name="PaddHTML" placeholder="Page Content" rows="8" cols="50"
                 value="<?php echo $names['html'];?>"></textarea><br><br>
              </div>
            </div>
            <div>
              Write the number and info of the pages you want to modify here:
              <button type="submit" name="updateP">Modify</button> <br><br>
              <input type="text" name="PUid" value="<?php echo $names['id'];?>" id="idBox">
              <input type="text" name="Pcurrent" placeholder="Name" value="<?php echo $names['friendlyname'];?>">
              <input type="text" name="PcurrentLink" placeholder="Link" value="<?php echo $names['path'];?>"><br><br>
              <textarea name="PcurrentHTML" placeholder="Page Content" rows="8" cols="50"
               value="<?php echo $names['html'];?>"></textarea><br><br>
            </div>
            <div>
              Write the number of the pages you want to delete here:
              <input type="text" name="Pid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteP" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Week days & Attendance :</legend>
            <?php
            require_once("WeekController.php");
            $DayOBJ1 = new weekC();
            echo "<br>";
            $names = $DayOBJ1->WselectAll();
            ?>
            <br>
            <div>
              Write the name of the day you want to add here:
              <button type="submit" name="saveDay">Add</button> <br>
              <input type="text" name="Dayadditional" value="<?php echo $names['days'];?>"> <br><br>
            </div>
            <div>
              Write the number and name of the day you want to modify here:
              <button type="submit" name="updateDay">Modify</button> <br>
              <input type="text" name="DayUid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="Daycurrent" value=" <?php echo $names['days']; ?>"> <br><br>
            </div>
            <div>
              Write the number of the day you want to delete here:
              <input type="text" name="Dayid" value="<?php  echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteDay" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">User Types :</legend>
            <?php
            require_once("usertypeluController.php");
            $DayOBJ1 = new usertypeluC();
            echo "<br>";
            $names = $DayOBJ1->UTselectAll();
            ?>
            <br>
            <div>
              Write the name of the user type you want to add here:
              <button type="submit" name="saveUTL">Add</button> <br>
              <input type="text" name="UTLadditional" value="<?php echo $names['usertype'];?>"> <br><br>
            </div>
            <div>
              Write the number and name of the user type you want to modify here:
              <button type="submit" name="updateUTL">Modify</button> <br>
              <input type="text" name="UTLUid" value="<?php echo $names['id']; ?>" id="idBox">
              <input type="text" name="UTLcurrent" value=" <?php echo $names['usertype']; ?>"> <br><br>
            </div>
            <div>
              Write the number of the user type you want to delete here:
              <input type="text" name="UTLid" value="<?php echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteUTL" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">User Pages :</legend>
            <?php
            require_once("utl_intController.php");
            $DayOBJ1 = new utl_intC();
            echo "<br>";
            $names = $DayOBJ1->UTIselectAll();
            ?>
            <br>
            <div class="hovertip">
              <span class="hovertiptext"> Who can control/access which pages? </span>
              <div>
                Write the name of the user pages you want to add here:
                <button type="submit" name="saveUTLI">Add</button> <br>
                <input type="text" name="UTLIUpageID" placeholder=" Page Number 2 or 4" value="<?php echo $names['page_id'];?>">
                <input type="text" name="UTLIutlID" placeholder=" User Number 1 or 2" value="<?php echo $names['utl_id'];?>"> <br><br>
              </div>
            </div>
            <div>
              Write the number of the user pages you want to delete here:
              <input type="text" name="UTLIid" value="<?php echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteUTLI" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
        <fieldset>
          <legend id="Leg">Attendance Type :</legend>
            <?php
            require_once("attend_intController.php");
            $DayOBJ1 = new Attend_intC();
            echo "<br>";
            $names = $DayOBJ1->ATselectAll();
            ?>
            <br>
            <div class="hovertip">
              <span class="hovertiptext"> What type of attendance the child is following? <br>
              You can check the attendance types in the Week & Attendance section. </span>
              <div>
                Write the name of the attendance you want to add here:
                <button type="submit" name="saveATI">Add</button> <br>
                <input type="text" name="ATIchild_id" placeholder=" Child Number" value="<?php echo $names['child_id'];?>">
                <input type="text" name="ATIweek_id" placeholder=" Attendance Type" value="<?php echo $names['week_id'];?>"> <br><br>
              </div>
            </div>
            <div>
              Write the number of the attendance you want to delete here:
              <input type="text" name="ATIid" value="<?php echo $names['id']; ?>" id="idBox">
              <button type="submit" name="deleteATI" onclick="checkD()">Delete</button> <br><br>
            </div>
        </fieldset>
      </div>
    </form>
  </body>
</html>
