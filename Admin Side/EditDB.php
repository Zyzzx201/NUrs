<?php session_start();
if(empty($_SESSION["username"])){
header('location:adminlogin.php');
}
else {
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Control Panel</title>
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
        return confirm("Are you sure you want to delete this file? This action is irreversible.");
      }
    </script>
  </head>
  <body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='index(AS).php';">
      <h1 id="h1W">Welcome</h1>
      <p id="username"><?php echo "Hello ".$_SESSION["username"];} ?></p>
      <div class="micon" onclick="changeM(this)" id="Menicon">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
      </div>
      <div id="navMenu" >
        <div id="myTopnav" class="topnav">
            <a href="index(AS).php" id="admAdr">Home</a>
          <a href="acceptteacher(AS).php" id="admAdr">Teacher Acceptance</a>
            <a href="Addusers(AS).php" id="admAdr">Child Acceptance</a>
            <a href="editchild(AS).php" id="admAdr">Child Edit</a>
            <a href="editteacher(AS).php" id="admAdr">Teacher Edit</a>
          <div class="dropdown">
          <button class="dropbtn">More
              <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a id="admAdr" href="event(AS).php">Events</a>
            <a id="admAdr" href="Schedules(AS).php">Schedule</a>
            <a id="admADR" href="Payment(AS).php">Payments</a>
            <a href="logout.php" id="admAdr">Logout</a>
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
                   Write the name of address you want to add here: <br>
                   <input type="text" name="ADDadditional" value=" <?php $names['name']; ?>">
                   <button type="submit" name="saveAdd">Add</button> <br><br>
                 </div>
                 <div>
                   Write the number of address you want to delete here:
                   <input type="text" name="ADDid" value="<?php $names['id']; ?>" id="idBox">
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
                  Write the name of nationality you want to add here: <br>
                  <input type="text" name="NATadditional" value="<?php $names['name'];?>">
                  <button type="submit" name="saveNat">Add</button><br><br>
                </div>
                <div>
                  Write the number and name of nationality you want to modify here: <br>
                  <input type="text" name="NATUid" value="<?php $names['id']; ?>" id="idBox">
                  <input type="text" name="NATnew" value=" <?php $names['name']; ?>">
                  <button type="submit" name="updateNat">Modify</button><br><br>
                </div>
                <div>
                  Write the number of nationality you want to delete here:
                  <input type="text" name="NATid" value="<?php  $names['id']; ?>" id="idBox">
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
                  Write the name of relation you want to add here: <br>
                  <input type="text" name="RELadditional" value="<?php $names['relation'];?>">
                    <button type="submit" name="saveREL">Add</button> <br><br>
                </div>
                <div>
                  Write the number and name of relation you want to modify here: <br>
                  <input type="text" name="RELUid" value="<?php $names['id']; ?>" id="idBox">
                  <input type="text" name="RELnew" value=" <?php $names['relation']; ?>">
                    <button type="submit" name="updateREL">Modify</button> <br><br>
                </div>
                <div>
                  Write the number of relation you want to delete here:
                  <input type="text" name="RELid" value="<?php  $names['id']; ?>" id="idBox">
                  <button type="submit" name="deleteREL" onclick="checkD()">Delete</button> <br><br>
                </div>
            </fieldset>
            <fieldset>
              <legend id="Leg">Marital Status :</legend>
                <?php
                require_once("MaritalController.php");
                $MSOBJ1 = new maritalC();
                echo "<br>";
                $names = $MSOBJ1->MTselectALL();
                ?>
                <br>
                <div>
                  Write the name of marital status you want to add here: <br>
                  <input type="text" name="MSadditional" value="<?php $names['value'];?>">
                    <button type="submit" name="saveMS">Add</button><br><br>
                </div>
                <div>
                  Write the number and name of marital status you want to modify here: <br>
                  <input type="text" name="MSUid" value="<?php $names['id']; ?>" id="idBox">
                  <input type="text" name="MSnew" value=" <?php $names['value']; ?>">
                    <button type="submit" name="updateMS">Modify</button><br><br>
                </div>
                <div>
                  Write the number of marital status you want to delete here:
                  <input type="text" name="MSid" value="<?php  $names['id']; ?>" id="idBox">
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
                    Write the name of the child type you want to add here: <br>
                    <input type="text" name="CTadditional" value="<?php $names['type'];?>">
                      <button type="submit" name="saveCT">Add</button><br><br>
                  </div>
                </div>
                <div>
                  Write the number and name of the child type you want to modify here: <br>
                  <input type="text" name="CTUid" value="<?php $names['id']; ?>" id="idBox">
                  <input type="text" name="CTnew" value=" <?php $names['type']; ?>">
                    <button type="submit" name="updateCT">Modify</button><br><br>
                </div>
                <div>
                  Write the number of the child type you want to delete here:
                  <input type="text" name="CTid" value="<?php  $names['id']; ?>" id="idBox">
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
                  Write the name of the status you want to add here: <br>
                  <input type="text" name="STATadditional" value="<?php $names['name'];?>">
                    <button type="submit" name="saveSTAT">Add</button><br><br>
                </div>
                <div>
                  Write the number and name of the status you want to modify here: <br>
                  <input type="text" name="STATUid" value="<?php $names['id']; ?>" id="idBox">
                  <input type="text" name="STATnew" value=" <?php $names['name']; ?>">
                    <button type="submit" name="updateSTAT">Modify</button><br><br>
                </div>
                <div>
                  Write the number of the status you want to delete here:
                  <input type="text" name="STATid" value="<?php  $names['id']; ?>" id="idBox">
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
                    Write the info of the pages you want to add here: <br><br>
                    <input type="text" name="Padditional" placeholder="Name" value="<?php $names['friendlyname'];?>">
                    <input type="text" name="PaddLink" placeholder="Link" value="<?php $names['path'];?>"><br><br>
                    <textarea name="PaddHTML" placeholder="Page Content" rows="8" cols="50"
                     value="<?php $names['html'];?>"></textarea>
                      <button type="submit" name="saveP">Add</button> <br><br>
                  </div>
                </div>
                <div>
                  Write the number and info of the pages you want to modify here: <br><br>
                  <input type="text" name="PUid" value="<?php $names['id'];?>" id="idBox">
                  <input type="text" name="Pnew" placeholder="Name" value="<?php $names['friendlyname'];?>">
                  <input type="text" name="PnewLink" placeholder="Link" value="<?php $names['path'];?>"><br><br>
                  <textarea name="PnewHTML" placeholder="Page Content" rows="8" cols="50"
                   value="<?php $names['html'];?>"></textarea>
                    <button type="submit" name="updateP">Modify</button> <br><br>
                </div>
                <div>
                  Write the number of the page you want to delete here:
                  <input type="text" name="Pid" value="<?php  $names['id']; ?>" id="idBox">
                  <button type="submit" name="deleteP" onclick="checkD()">Delete</button> <br><br>
                </div>
            </fieldset>
            <fieldset>
              <legend id="Leg">Week days & Attendance :</legend>
                <?php
                require_once("WeekController.php");
                $AttendOBJ1 = new weekC();
                echo "<br>";
                $names = $AttendOBJ1->WselectAll();
                ?>
                <br>
                <div>
                  Write the name of the day you want to add here: <br>
                  <input type="text" name="Dayadditional" value="<?php $names['days'];?>">
                    <button type="submit" name="saveDay">Add</button><br><br>
                </div>
                <div>
                  Write the number and name of the day you want to modify here: <br>
                  <input type="text" name="DayUid" value="<?php $names['id']; ?>" id="idBox">
                  <input type="text" name="Daynew" value=" <?php $names['days']; ?>">
                    <button type="submit" name="updateDay">Modify</button><br><br>
                </div>
                <div>
                  Write the number of the day you want to delete here:
                  <input type="text" name="Dayid" value="<?php  $names['id']; ?>" id="idBox">
                  <button type="submit" name="deleteDay" onclick="checkD()">Delete</button> <br><br>
                </div>
            </fieldset>
            <fieldset>
              <legend id="Leg">User Types :</legend>
                <?php
                require_once("usertypeluController.php");
                $TypeOBJ1 = new usertypeluC();
                echo "<br>";
                $names = $TypeOBJ1->UTselectAll();
                ?>
                <br>
                <div>
                  Write the name of the user type you want to add here: <br>
                  <input type="text" name="UTLadditional" value="<?php $names['usertype'];?>">
                    <button type="submit" name="saveUTL">Add</button><br><br>
                </div>
                <div>
                  Write the number and name of the user type you want to modify here: <br>
                  <input type="text" name="UTLUid" value="<?php $names['id']; ?>" id="idBox">
                  <input type="text" name="UTLnew" value=" <?php $names['usertype']; ?>">
                    <button type="submit" name="updateUTL">Modify</button><br><br>
                </div>
                <div>
                  Write the number of the user type you want to delete here:
                  <input type="text" name="UTLid" value="<?php $names['id']; ?>" id="idBox">
                  <button type="submit" name="deleteUTL" onclick="checkD()">Delete</button> <br><br>
                </div>
            </fieldset>
            <fieldset>
              <legend id="Leg">User Pages :</legend>
                <?php
                require_once("utl_intController.php");
                $PageOBJ1 = new utl_intC();
                echo "<br>";
                $names = $PageOBJ1->UTIselectAll();
                ?>
                <br>
                <div class="hovertip">
                  <span class="hovertiptext"> Who can control/access which pages?
                  PS. for users' id check the User types above</span>
                  <div>
                    Write the name of the user pages you want to add here: <br>
                    <input type="text" name="UTLIUpageID" placeholder="page id" value="<?php $names['page_id'];?>">
                    <input type="text" name="UTLIutlID" placeholder="user id" value="<?php $names['utl_id'];?>">
                      <button type="submit" name="saveUTLI">Add</button><br><br>
                  </div>
                </div>
                <div>
                  Write the number of the user page you want to delete here:
                  <input type="text" name="UTLIid" value="<?php $names['id']; ?>" id="idBox">
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
                    Write the name of the attendance you want to add here: <br>
                    <input type="text" name="ATIchild_id" placeholder=" Child Number" value="<?php $names['child_id'];?>">
                    <input type="text" name="ATIweek_id" placeholder=" Attendance Type" value="<?php $names['week_id'];?>">
                      <button type="submit" name="saveATI">Add</button><br><br>
                  </div>
                </div>
                <div>
                  Write the number of the attendance you want to delete here:
                  <input type="text" name="ATIid" value="<?php $names['id']; ?>" id="idBox">
                  <button type="submit" name="deleteATI" onclick="checkD()">Delete</button> <br><br>
                </div>
            </fieldset>
            <fieldset>
                 <legend id="Leg">Qualification Types :</legend>
                 <?php
                 require_once("qualificationController.php");
                 $QuaOBJ1 = new qualificationC();
                 echo "<br>";
                 $names = $QuaOBJ1->QselectAll();
                 ?>
                 <br>
                 <div class="hovertip">
                     <span class="hovertiptext"> </span>
                     <div>
                         Write the name of the qualification you want to add here: <br>
                         <input type="text" name="Qualname" value="<?php $names['name'];?>">
                         <button type="submit" name="saveQual">Add</button><br><br>
                     </div>
                     <div>
                         Write the number and name of the qualification type you want to modify here: <br>
                         <input type="text" name="QualUid" value="<?php $names['id']; ?>" id="idBox">
                         <input type="text" name="newQual" value=" <?php $names['name']; ?>">
                         <button type="submit" name="updateQual">Modify</button><br><br>
                     </div>
                     <div>
                         Write the number of the qualification you want to delete here:
                         <input type="text" name="Qualid" value="<?php $names['id']; ?>" id="idBox">
                         <button type="submit" name="deleteQual" onclick="checkD()">Delete</button> <br><br>
                     </div>
                 </div>
            </fieldset>
            <fieldset>
                <legend id="Leg">Branches :</legend>
                 <?php
                 require_once("BranchController.php");
                 $BrOBJ1 = new branchC();
                 echo "<br>";
                 $names = $BrOBJ1->BrselectALL();
                 ?>
                 <br>
                 <div class="hovertip">
<!--                     <span class="hovertiptext"> </span>-->
                     <div>
                         Write the name of branch you want to add here: <br>
                         <input type="text" name="branchAdd" value="<?php $names['value'];?>">
                         <button type="submit" name="saveBranch">Add</button><br><br>
                     </div>
                     <div>
                         Write the number and name of the branch type you want to modify here: <br>
                         <input type="text" name="BranchUid" value="<?php $names['id']; ?>" id="idBox">
                         <input type="text" name="newBranch" value=" <?php $names['value']; ?>">
                         <button type="submit" name="updateBranch">Modify</button><br><br>
                     </div>
                     <div>
                         Write the number of branch you want to delete here:
                         <input type="text" name="Branchid" value="<?php $names['id']; ?>" id="idBox">
                         <button type="submit" name="deleteBranch" onclick="checkD()">Delete</button> <br><br>
                     </div>
                 </div>
            </fieldset>
          <fieldset>
              <legend id="Leg">Months :</legend>
              <?php
              require_once("MonthController.php");
              $MonOBJ1 = new monthC();
              echo "<br>";
              $names = $MonOBJ1->MonselectALL();
              ?>
              <br>
              <div class="hovertip">
                  <!-- <span class="hovertiptext"> </span>-->
                  <div>
                      Write the month you want to add here: <br>
                      <input type="text" name="MonthAdd" value="<?php $names['name'];?>">
                      <button type="submit" name="saveMonth">Add</button><br><br>
                  </div>
                  <div>
                      Write the number and name of the month you want to modify here: <br>
                      <input type="text" name=MonthUid" value="<?php $names['id']; ?>" id="idBox">
                      <input type="text" name="newMonth" value=" <?php $names['name']; ?>">
                      <button type="submit" name="updateMonth">Modify</button><br><br>
                  </div>
                  <div>
                      Write the number of month you want to delete here:
                      <input type="text" name="Monthid" value="<?php $names['id']; ?>" id="idBox">
                      <button type="submit" name="deleteMonth" onclick="checkD()">Delete</button> <br><br>
                  </div>
              </div>
          </fieldset>
      </div>
    </form>
  </body>
</html>
