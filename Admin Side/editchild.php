<?php session_start();?>
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
	<script type="text/javascript">
    function checkD() {
      return confirm("Are you sure you want to delete this file? This action can not be undone.");
    }
  </script>
</head>

<body>
	<header>
		<img src="logo.png" id="logo" onclick="location.href='userSide/index.php';">
		<p id="h1D">Edit</p><p id="h1U">Child</p>
		<button type="button" id="bkbtn" onclick="location.href='userSide/index.php';">Back</button>
		<form class="" action="Afterbtns.php" method="post">
			<button type="submit" id="pabtn" name="previousDU">Previous Applicaton</button>
			<button type="submit" id="nabtn" name="nextDU">Next Applicaton</button>
		</form>
		<?php
			if(!empty($_SESSION["username"])){
			?>
			<a href=""><?php echo $_SESSION["username"]; ?></a>
		<?php  } ?>
		<?php if(empty($_SESSION["username"])){ ?>
			<a href="adminlogin.php">Login</a>
			<a href="">Sign up</a>
		<?php } ?>
	</header>
</header>
    <br>
	<div class = "teacher2">
		<form id="searchB" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
				 <input type="text" name="Search" id="boxes" placeholder="Search for names.." onkeyup="aftersearch.php" >
		</form>
		<form name="app" method="POST" action="afterSaveBtn.php"><br>
			Applicaton number: <input type="text" name="id" value="<?php echo $MArow['id']; ?>">  <br><br>
			Child's First name: <input type="text" name="cfname" value="<?php echo $MArow['fname']; ?>"><br><br>
			Child's Last name: <input type="text" name="clname" value="<?php echo $MArow['lname']; ?>"> <br><br>
			Date of birth: <input type="date" name="dob" value="<?php echo $MArow['dob'];?>"><br><br>
			Child's Social number:
			<input type="text" name="cssn" value="<?php echo $MArow['ssn'];?>"> <br><br>
			<!--Present age: <?php echo $CHrow['age'];?><br><br-->
			Desired Date of entry: <input type="date" name="ddoe" value="<?php echo $CHrow['ddoe'];?>"><br>
			<hr>
			Father's name:
			<input type="text" name="ffname" value=" <?php echo $MArow['fname'];?>">
			<input type="text" name="flname" value=" <?php echo $MArow['lname'];?>"><br><br>
			Mobile number: <input type="text" name="cellphone" value=" <?php echo $CIrow['cellphone'];?>"><br><br>
			Facebook Account: <input type="text" name="ffbook" value=" <?php echo $PRrow['ffbook'];?>"><br><br>
			Occupation: <input type="text" name="foccupation" value=" <?php echo $PRrow['foccupation'];?>"><br><br>
			<hr>
			Mother's name:
			<input type="text" name="mfname" value=" <?php echo $MArow['fname'];?>">
			<input type="text" name="mlname" value=" <?php echo $MArow['lname'];?>"><br><br>
			Mobile number: <input type="text" name="cellphone" value=" <?php echo $CIrow['cellphone'];?>"><br><br>
			Facebook Account: <input type="text" name="mfbook" value=" <?php echo $PRrow['mfbook'];?>"><br><br>
			Occupation: <input type="text" name="moccupation" value=" <?php echo $PRrow['moccupation'];?>"><br><br>
			<hr>
			Parents Are: <input type="text" name="mstatus" value=" <?php echo $MRrow['value'];?>"><br><br>
			Home Address: <input type="text" name="address" value=" <?php echo $ADrow['name'];?>"><br><br>
			Name of the person who will usually pick up the child:
			<input type="text" name="usualpickup" value=" <?php echo $PRrow['usualpickup'];?>"><br><br>
			<hr>
			<h1> Requested for Attendance: </h1>
			<input type="text" name="attendance" value=" <?php echo $ATrow['days'];?>"><br><br>
			<hr>
			<h1 align="center" id="h11"> Emergency contact </h1>
			Emergency Contact's Name:
			<input type="text" name="ecname" value="<?php echo $ERrow['ecname'];?>"><br><br>
			Emergency Contact's Address:
			<input type="text" name="ecaddress" value="<?php echo $ADrow['name'];?>:"><br><br>
			Relationship: <input type="text" name="relation" value="<?php echo $Rrow['relation'];?>"><br><br>
			Emergency Contact's Number:
			<input type="text" name="ecnum" value="<?php echo $ERrow['ecnum'];?>"><br><br>

			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:<br><br>
			<textarea name="extrainfo" rows="4" cols="50" value="<?php echo $ERrow['extrainfo'];?>"></textarea>
			<br><br>
			<button type="submit" name="childSave">Modify Form</button>
      <button type="reset" name="childDelete" onclick="checkD()">Delete Child</button>
		</form>
	</div>

</body>
</html>
