<?php session_start();?>
<html>
<?php
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

	<title>Fun & Learn</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" type="text/css" href="StyleSheet2.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet3.css">
  <link rel="stylesheet" type="text/css" href="AdminSS.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>

</head>

<body>
	<header>
		<img src="logo.png" id="logo" onclick="location.href='userSide/index.php';">
		<p id="h1D">Delete</p><p id="h1U">User</p>
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
		<form name="app" method="REQUEST" action="<?php $_SERVER["PHP_SELF"];?>"><br>
			Child's First name: <?php echo $MArow['fname']; ?><br><br>
			Child's Last name: <?php echo $MArow['lname']; ?><br><br>
			Date of birth: <?php echo $MArow['dob'];?><br><br>
			<!--Present age: <?php echo $CHrow['age'];?><br><br-->
			Desired Date of entry: <?php echo $CHrow['ddoe'];?><br>
			<hr>
			Father's name: <?php echo $MArow['fname'];?> <?php echo $MArow['lname']; ?><br><br>
			Mobile number: <?php echo $CIrow['cellphone'];?><br><br>
			Facebook Account:<?php echo $PRrow['ffbook'];?><br><br>
			Occupation: <?php echo $PRrow['foccupation'];?><br><br>
			<!--Office phone number:<?php echo $PRrow['fofficenum'];?><br><br-->
			<hr>
			Mother's name: <?php echo $MArow['fname'];?> <?php echo $MArow['lname']; ?><br><br>
			Mobile number: <?php echo $CIrow['cellphone'];?><br><br>
			Facebook Account: <?php echo $PRrow['mfbook'];?><br><br>
			Occupation: <?php echo $PRrow['moccupation'];?><br><br>
			<!--Office phone number: <?php echo $PRrow['mofficenum'];?><br><br-->
			<hr>
			Parents Are: <?php echo $MRrow['value'];?><br><br>
			Home Address: <?php echo $ADrow['name'];?><br><br>
			<!--Home Telephone number:<?php echo $PRrow['homenum'];?><br><br-->
			Name of the person who will usually pick up the child: <?php echo $PRrow['usualpickup'];?><br><br>
			<hr>
			<h1 align="center"> Requested for Attendance: </h1> <?php echo $ATrow['day'];?><br><br>
			<hr>
			<h1 align="center" id="h11"> Emergency contact </h1>
			Emergency Contact's Name: <?php echo $ERrow['ecname'];?><br><br>
			Emergency Contact's Address: <?php echo $ADrow['name'];?><br><br>

			Relationship: <?php echo $Rrow['value'];?><br><br>

			Emergency Contact's Number: <?php echo $ERrow['ecnum'];?><br><br>

			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:
			<?php echo $ERrow['extrainfo'];?><br><br>

			<form method="POST" action="Afterbtns.php">
				<input type="submit" name="DeleteBtn" value="Delete Applicaton">
			</form>
		</form>
	</div>

</body>
</html>
