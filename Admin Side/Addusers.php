<html>
<head>
	<title>Fun & Learn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" href="AdminSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <h1 align="left"> <p><u>Teacher Application:</u></p> </h1>
</head>

<body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='/index.php';">
			<p id="h1A">Add</p><p id="h1U">User</p>
      <button type="button" id="bkbtn" onclick="location.href='/index.php';">Back</button>
			<button type="button" id="pabtn" onclick="<?php require_once("btns.php"); $BTNobj2= new BTN();
      $action2 = $BTNobj2->navBTn(1); ?>">Previous Applicaton</button>
      <button type="button" id="nabtn" onclick="<?php require_once("btns.php"); $BTNobj2= new BTN();
      $action2 = $BTNobj2->navBTn(2); ?>">Next Applicaton</button>
    </header>
</header>
    <br>
	<div class = "Uappform">
		<form id="searchB" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
				 <input type="text" name="Search" id="boxes" placeholder="Search for names.." onkeyup="aftersearch.php" >
		</form>
		<form name="app" method="REQUEST" action="<?php $_SERVER["PHP_SELF"];?>">
      <?php
      require_once("db.php");
      require_once("MainClass.php");
			require_once("ChildClass.php");
			require_once("MainClass.php");
			require_once("AddressClass.php");
			require_once("MaritalClass.php");
			require_once("ContactinfoClass.php");
			require_once("EmergencyClass.php");
			require_once("WeekClass.php");

      $childOBJ1 =  new user();
      $row = $childOBJ1->select();
			$childOBJ2 = new main();
			$row1 = $childOBJ2->select();
			$EROBJ2 = new emergency();
			$row2 =  $EROBJ2->select();
			$addOBJ3 =  new Address();
			$row3 =  $addOBJ3->select();
			$marrOBJ4 = new marital();
			$row4 = $marrOBJ4->select();
			$ConOBJ5 = new contactinfo();
			$row5 = $ConOBJ5->select();
			$AttOBJ6 = new week();
			$row6 = $AttOBJ6->select();
      ?>
		    <br>
			Child's name: <?php echo $row1['fname'];?> <?php echo $row1['lname']; ?><br><br>
			Date of birth: <?php echo $row1['dob'];?><br><br>
			<!--Present age: <?php echo $row['age'];?><br><br-->
			Desired Date of entry: <?php echo $row['ddoe'];?><br>
			<hr>
			Father's name: <?php echo $row1['fname'];?> <?php echo $row1['lname']; ?><br><br>
			Mobile number: <?php echo $row5['cellphone'];?><br><br>
			<!--Facebook Account:<?php echo $row['ffbook'];?><br><br-->
			Occupation: <?php echo $row['foccupation'];?><br><br>
			<!--Office phone number:<?php echo $row5['fofficenum'];?><br><br-->
			<hr>
			Mother's name: <?php echo $row1['fname'];?> <?php echo $row1['lname']; ?><br><br>
			Mobile number: <?php echo $row5['cellphone'];?><br><br>
			Facebook Account: <?php echo $row['mfbook'];?><br><br>
			Occupation: <?php echo $row['moccupation'];?><br><br>
			<!--Office phone number: <?php echo $row5['mofficenum'];?><br><br-->
			<hr>
			Parents Are: <?php echo $row4['value'];?><br><br>
			Home Address: <?php echo $row3['name'];?><br><br>
			<!--Home Telephone number:<?php echo $row['homenum'];?><br><br-->
			Name of the person who will usually pick up the child:<?php echo $row['usualpickup'];?><br><br>
			<hr>
			<h1 align="center"> Requested for Attendance: </h1> <?php echo $row6['day'];?><br><br>
			<hr>
			<h1 align="center" id="h11"> Emergency contact </h1>
			Emergency Contact's Name:<?php echo $row2['ecname'];?><br><br>
			Emergency Contact's Address:<?php echo $row3['name'];?><br><br>

			Relationship: <?php echo $row2['relation'];?><br><br>

			Emergency Contact's Number:<?php echo $row2['ecnum'];?><br><br>

			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:
			<?php echo $row['extrainfo'];?><br><br>

			<form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
				<?php

				/*$BTNobj1= new BTN();
				$action1 = $BTNobj1->statusChange();*/
				 ?>
				<button type="submit" name="ACbtn" onclick="<?php require_once("btns.php");
				 $BTNobj= new BTN(); $action = $BTNobj->actionBTN(1);?>">Accept Applicant</button>
				<button type="submit" name="RFbtn" onclick="<?php require_once("btns.php");
				 $BTNobj= new BTN(); $action = $BTNobj->actionBTN(2);?>">Refuse Applicant</button>
				<button type="submit" name="PNbtn" onclick="<?php require_once("btns.php");
				 $BTNobj= new BTN(); $action = $BTNobj->actionBTN(3);?>">Set As Pending</button>

			</form>
		</form>
	</div>

</body>
</html>
