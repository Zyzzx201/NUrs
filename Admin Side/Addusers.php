<?php session_start();?>
<?php if(empty($_SESSION["username"])){
header('location:adminlogin.php');
}
else {
?>
<?php
require_once("db.php");
require_once("ChildController.php");
require_once("MainController.php");
require_once("AddressController.php");
require_once("MaritalController.php");
require_once("ContactinfoController.php");
require_once("EmergencyController.php");
require_once("WeekController.php");
require_once("ParentController.php");
require_once("relationController.php");

$childOBJ1 =  new childC();
$CHrow = $childOBJ1->CHselectV();
$childOBJ2 = new mainC();
$MArow = $childOBJ2->MselectV();
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
<head>
	<title>Fun & Learn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" type="text/css" href="StyleSheet2.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet3.css">
  <link rel="stylesheet" type="text/css" href="AdminSS.css">
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
	      document.getElementById('navMenu').display = 'none';
	    }
	  };
  </script>
  <h1 align="left"> <p><u>Teacher Application:</u></p> </h1>
</head>

<body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='userSide/index.php';">
			<p id="h1A">Accept</p><p id="h1U">Child</p>
			<p id="username"><?php echo "Hello ".$_SESSION["username"];} ?></p>
      <div class="micon" onclick="changeM(this)" id="Menicon">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
      </div>
      <div id="navMenu" >
        <div id="myTopnav" class="topnav">
          <a href="\Admin Side\acceptteacher.php" id="admAdr">Teacher Acceptance</a>
          <!-- <a href="\Admin Side\Addusers.php" id="admAdr">Child Acceptance</a> -->
          <a href="\Admin Side\deleteuser.php" id="admAdr">Child Edit</a>
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
      <!-- <button type="button" id="bkbtn" onclick="location.href='userSide/index.php';">Back</button>
			<form class="" action="Afterbtns.php" method="post">
        <button type="submit" id="pabtn" name="previousAU">Previous Applicaton</button>
    		<button type="submit" id="nabtn" name="nextAU">Next Applicaton</button>
      </form> -->
    </header>
	</head>
    <br>
	<div class = "teacher2">
		<form id="searchB" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
				 <input type="text" name="Search" id="boxes" placeholder="Search for names.." onkeyup="aftersearch.php" >
		</form>
		<form method="POST" action="Afterbtns.php"><br>
			Child's First name: <?php echo $MArow['fname']; ?><br><br>
			Child's Last name: <?php echo $MArow['lname']; ?><br><br>
			Date of birth: <?php echo $MArow['dob'];?><br><br>
			Child's SSN: <?php echo $MArow['ssn']; ?>
			Desired Date of entry: <?php echo $CHrow['ddoe'];?><br>
			<hr>
			Father's name: <?php echo $MArow['fname'];?> <?php echo $MArow['lname']; ?><br><br>
			Father's SSN: <?php echo $MArow['ssn']; ?>
			Mobile number: <?php echo $CIrow['cellphone'];?><br><br>
			Facebook Account:<?php echo $PRrow['ffbook'];?><br><br>
			Occupation: <?php echo $PRrow['foccupation'];?><br><br>
			<hr>
			Mother's name: <?php echo $MArow['fname'];?> <?php echo $MArow['lname']; ?><br><br>
			Mother's SSN: <?php echo $MArow['ssn']; ?>
			Mobile number: <?php echo $CIrow['cellphone'];?><br><br>
			Facebook Account: <?php echo $PRrow['mfbook'];?><br><br>
			Occupation: <?php echo $PRrow['moccupation'];?><br><br>
			<hr>
			Parents Are: <?php echo $MRrow['value'];?><br><br>
			Home Address: <?php echo $ADrow['name'];?><br><br>
			Name of the person who will usually pick up the child: <?php echo $PRrow['usualpickup'];?><br><br>
			<hr>
			<h1> Requested for Attendance: </h1> <?php echo $ATrow['day'];?><br><br>
			<hr>
			<h1 align="center" id="h11"> Emergency contact </h1>
			Emergency Contact's Name: <?php echo $ERrow['ecname'];?><br><br>
			Emergency Contact's Address: <?php echo $ADrow['name'];?><br><br>

			Relationship: <?php echo $Rrow['relation'];?><br><br>

			Emergency Contact's Number: <?php echo $ERrow['ecnum'];?><br><br>

			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:
			<?php echo $ERrow['extrainfo'];?><br><br>
			<hr>
			<input type="hidden" name="accept" value="1">
			<input type="submit" name="Accept"  value="Accept Applicant" id="accBTN">
			<input type="hidden" name="refuse" value="2">
			<input type="submit" name="Refuse" value="Refuse Applicant" id="refBTN">
			<input type="hidden" name="pending" value="3">
			<input type="submit" name="Pending" value="Keep As Pending" id="penBTN">
			<button type="button" name="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;">Print</button>
		</form>
	</div>

</body>
</html>
