<?php session_start();?>
<?php if(empty($_SESSION["username"])){
header('location:adminlogin.php');
}
else {
?>
<?php
require_once("MainController.php");
require_once("ChildController.php");
require_once("AddressController.php");
require_once("MaritalController.php");
require_once("ContactinfoController.php");
require_once("EmergencyController.php");
require_once("WeekController.php");
require_once("ParentController.php");
require_once("relationController.php");
$childOBJ2 = new mainC();
$MArow = $childOBJ2->MselectV();
$childOBJ1 =  new childC();
$CHrow = $childOBJ1->CHselectV();
$EROBJ2 = new emergencyC();
$ERrow =  $EROBJ2->ERselectV();
$addOBJ3 =  new addressC();
$ADrow =  $addOBJ3->ADselectV();
$marrOBJ4 = new maritalC();
$MRrow = $marrOBJ4->MTselectV();
$ConOBJ5 = new contactinfoC();
$CIrow = $ConOBJ5->CIselectV();
$AttOBJ6 = new weekC();
$ATrow = $AttOBJ6->WselectV();
$ParOBJ7 = new parentsC();
$PRrow =  $ParOBJ7->PselectV();
$RelOBJ8 = new relationC();
$Rrow = $RelOBJ8->RselectV();
?>
<html>

	<title>Fun & Learn</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" type="text/css" href="StyleSheet2.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet3.css">
  <link rel="stylesheet" type="text/css" href="AdminSS.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
      $('.search-bar input[type="text"]').on("keyup input", function(){
          var inputVal = $(this).val();
          var resultDropdown = $(this).siblings(".result");
          $.get("aftersearch.php", {term: inputVal}).done(function(data){
              resultDropdown.html(data);
          });
      });
  });
  </script>
	<script type="text/javascript">
    function checkD() {
      return confirm("Are you sure you want to delete this file? This action can not be undone.");
    }
  </script>
	<script type="text/javascript">
  window.onload = function() {
    document.getElementById('navMenu').style.display = 'none';
  };
  function changeM(x) {
    x.classList.toggle("change");
    document.getElementById('navMenu').style.display = 'block';
    if (document.getElementById('Menicon').clicked){
      document.getElementById('navMenu').display = 'none';
    }
  };
  </script>
	<header>
		<img src="logo.png" id="logo" onclick="location.href='userSide/index.php';">
		<p id="h1D">Edit</p><p id="h1U">Child</p>
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
        <!-- <a href="\Admin Side\editchild.php" id="admAdr">Child Edit</a> -->
        <a href="\Admin Side\editteacher.php" id="admAdr">Teacher Edit</a>
        <a href="\Admin Side\EditDB.php" id="admAdr">Control Panel</a>
        <div class="dropdown">
          <button class="dropbtn">More
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a id="addr" href="\Onlineapplication.php">Online Application</a>
            <a id="addr" href="\addteacher.php">Teacher Registration</a>
            <a id="addr" href="\Schedules.php">Schedule</a>
            <!-- <a id="addr" href="" >Gallery</a>
            <a id="addr" href="" >Events</a> -->
          </div>
        </div>
      </div>
    </div>
	</header>
</head>

<body>
	<div class = "teacher2">
		<form id="searchB" method="POST" action="aftersearch.php">
			<input type="text" name="Search" placeholder="Search for names..">
		</form>
		<form name="app" method="POST" action="afterSaveBtn.php"><br>
			Applicaton number: <input type="text" name="id" max="11" min="1" value="<?php echo $MArow['id']; ?>" required>  <br><br>
			Child's First name: <input type="text" name="cfname" max="100" min="2" value="<?php echo $MArow['fname']; ?>" required><br><br>
			Child's Last name: <input type="text" name="clname" max="100" min="2" value="<?php echo $MArow['lname']; ?>" required> <br><br>
			Date of birth: <input type="date" name="dob" value="<?php echo $MArow['dob'];?>" required><br><br>
			Child's Social number:
			<input type="text" name="cssn" max="14" min="14" value="<?php echo $MArow['ssn'];?>" required> <br><br>
			Desired Date of entry: <input type="date" name="ddoe" value="<?php echo $CHrow['ddoe'];?>" required><br>
			<hr>
			Father's name:
			<input type="text" name="ffname" max="100" min="2" value=" <?php echo $MArow['fname'];?>" required>
			<input type="text" name="flname" max="100" min="2" value=" <?php echo $MArow['lname'];?>" required><br><br>
			Mobile number: <input type="text" name="cellphone" max="12" min="11" value=" <?php echo $CIrow['cellphone'];?>" required><br><br>
			Facebook Account: <input type="text" max="200" min="2" name="ffbook" value=" <?php echo $PRrow['ffbook'];?>" required><br><br>
			Occupation: <input type="text" name="foccupation" max="100" min="2" value=" <?php echo $PRrow['foccupation'];?>" required><br><br>
			<hr>
			Mother's name:
			<input type="text" name="mfname" max="100" min="2" value=" <?php echo $MArow['fname'];?>" required>
			<input type="text" name="mlname" max="100" min="2" value=" <?php echo $MArow['lname'];?>" required><br><br>
			Mobile number: <input type="text" name="cellphone" max="112" min="11" value=" <?php echo $CIrow['cellphone'];?>" required><br><br>
			Facebook Account: <input type="text" name="mfbook" max="200" min="2" value=" <?php echo $PRrow['mfbook'];?>" required><br><br>
			Occupation: <input type="text" name="moccupation" max="100" min="2" value=" <?php echo $PRrow['moccupation'];?>" required><br><br>
			<hr>
			Parents Are: <input type="text" name="mstatus" max="25" min="2" value=" <?php echo $MRrow['value'];?>" required><br><br>
			Home Address: <input type="text" name="address" max="300" min="50" value=" <?php echo $ADrow['name'];?>" required><br><br>
			Name of the person who will usually pick up the child:
			<input type="text" name="usualpickup" max="100" min="2" value=" <?php echo $PRrow['usualpickup'];?>" required><br><br>
			<hr>
			<h1> Requested for Attendance: </h1>
			<input type="text" name="attendance" value=" <?php echo $ATrow['days'];?>" required><br><br>
			<hr>
			<h1 align="center" id="h11"> Emergency contact </h1>
			Emergency Contact's Name:
			<input type="text" name="ecname" max="100" min="2" value="<?php echo $ERrow['ecname'];?>" required><br><br>
			Emergency Contact's Address:
			<input type="text" name="ecaddress" max="300" min="2" value="<?php echo $ADrow['name'];?>:"><br><br>
			Relationship: <input type="text" name="relation" max="100" min="2" value="<?php echo $Rrow['relation'];?>" required><br><br>
			Emergency Contact's Number:
			<input type="text" name="ecnum" max="11" min="11" value="<?php echo $ERrow['ecnum'];?>" required><br><br>

			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:<br><br>
			<textarea name="extrainfo" rows="4" cols="50" max="500" min="50" value="<?php echo $ERrow['extrainfo'];?>" required></textarea>
			<br><br>
			<button type="submit" name="childSave">Modify Form</button>
      <button type="reset" name="childDelete" onclick="checkD()">Delete Child</button>
		</form>
	</div>

</body>
</html>
