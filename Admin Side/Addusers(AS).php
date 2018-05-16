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
require_once("attend_intController.php");
require_once("ParentController.php");
require_once("relationController.php");


$childOBJ1 = new mainC();
$CHrow1 = $childOBJ1->MselectChild(3);

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
	  }
  </script>
</head>

<body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='index(AS).php';">
			<p id="h1A">Accept</p><p id="h1U">Child</p>
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
          <!-- <a href="Addusers(AS).php" id="admAdr">Child Acceptance</a> -->
          <a href="editchild(AS).php" id="admAdr">Child Edit</a>
          <a href="editteacher(AS).php" id="admAdr">Teacher Edit</a>
          <a href="EditDB.php" id="admAdr">Control Panel</a>
          <a href="Schedules(AS).php" id="admAdr">Schedule</a>
          <div class="dropdown">
            <button class="dropbtn">More
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <!-- <a id="addr" href="" >Gallery</a> -->
                <a href="event(AS).php" id="admAdr">Events</a>
                <a href="Payment(AS).php" id="admAdr">Payments</a>
                <a href="logout.php" id="admAdr">Logout</a>
            </div>
          </div>
        </div>
      </div>

    </header>
    <br>
	<div class= "teacher2">
        <form  action="Addusers(AS).php" method="post">
            <select name="pendingnames">
                <option value="-1"></option>
                <?php
                    while($row=mysqli_fetch_assoc($CHrow1))
                        echo "<option value='".$row['id']."'>".$row['fname']." ".$row['lname']."</option>";
                ?>
            </select>
            <button type="submit" name="selectpending">View</button>
        </form>
        <?php
        if(isset($_POST['selectpending'])){
            $childOBJ2 = new mainC();
            $returnrow = $childOBJ2->MselectV($_POST['pendingnames']);
            $MArow = mysqli_fetch_assoc($returnrow);

            $ParOBJ7 = new parentsC();
            $PRrow =  $ParOBJ7->PselectV($_POST['pendingnames']);
            $PRrow=mysqli_fetch_assoc($PRrow);

            $motherOBJ2 = new mainC();
            $returnrow = $motherOBJ2->MselectV($PRrow['mother_id']);
            $motherRow = mysqli_fetch_assoc($returnrow);

            $fatherOBJ2 = new mainC();
            $returnrow = $fatherOBJ2->MselectV($PRrow['father_id']);
            $fatherRow = mysqli_fetch_assoc($returnrow);

            $childOBJ3 = new ChildC();
            $CHrow = $childOBJ3->CHselectV($_POST['pendingnames']);
            $CHrow = mysqli_fetch_assoc($CHrow);

            $EROBJ2 = new emergencyC();
            $ERrow = $EROBJ2->ERselectV($_POST['pendingnames']);
            $ERrow = mysqli_fetch_assoc($ERrow);

            $addOBJ3 = new addressC();
            $ADrow =  $addOBJ3->ADselectV($PRrow['address_id']);
            $ADrow=mysqli_fetch_assoc($ADrow);

            $marrOBJ4 = new maritalC();
            $MRrow= $marrOBJ4->MTselectV($PRrow['mstatus_id']);
            $MRrow=mysqli_fetch_assoc($MRrow);


            $ConOBJ5 = new contactinfoC();
            $motherCell = $ConOBJ5->CIselectV($PRrow['mother_id']);
            $motherCell=mysqli_fetch_assoc($motherCell);

            $ConOBJ5 = new contactinfoC();
            $fatherCell = $ConOBJ5->CIselectV($PRrow['father_id']);
            $fatherCell=mysqli_fetch_assoc($fatherCell);


            //$ATrow=mysqli_fetch_assoc($ATrow);

            $RelOBJ8 = new relationC();
            $Rrow = $RelOBJ8->RselectV($_POST['pendingnames']);
            $Rrow=mysqli_fetch_assoc($Rrow);
        ?>
		<form method="POST" action="Afterbtns.php"><br>
            <h1 align="left"><u>Children's Application:</u></h1>
			Child's First name: <?php echo $MArow['fname']; ?><br><br>
			Child's Last name: <?php echo $MArow['lname']; ?><br><br>
			Date of birth: <?php echo $MArow['dob'];?><br><br>
			Child's SSN: <?php echo $MArow['ssn']; ?> <br><br>
			<hr>
			Father's name: <?php echo $fatherRow['fname'];?> <?php echo $fatherRow['lname']; ?><br><br>
			Father's SSN: <?php echo $fatherRow['ssn']; ?> <br><br>
			Mobile number: <?php echo $fatherCell['cellphone'];?><br><br>
			Facebook Account:<?php echo $PRrow['ffbook'];?><br><br>
			Occupation: <?php echo $PRrow['foccupation'];?><br><br>
			<hr>
			Mother's name: <?php echo $motherRow['fname'];?> <?php echo $motherRow['lname']; ?><br><br>
			Mother's SSN: <?php echo $motherRow['ssn']; ?> <br><br>
			Mobile number: <?php echo $motherCell['cellphone'];?><br><br>
			Facebook Account: <?php echo $PRrow['mfbook'];?><br><br>
			Occupation: <?php echo $PRrow['moccupation'];?><br><br>
			<hr>
			Parents Are: <?php echo $MRrow['value'];?><br><br>
			Home Address: <?php echo $ADrow['name'];?><br><br>
			Name of the person who will usually pick up the child: <?php echo $PRrow['usualpickup'];?><br><br>
			<hr>
			Requested for Attendance:  <?php $AttOBJ6 = new Attend_intC();
            $ATrow = $AttOBJ6->ATselectV($CHrow['id']);?><br><br>
			<hr>
			<h1 align="center" id="oat"> Emergency contact </h1>
			Emergency Contact's Name: <?php echo $ERrow['ecname'];?><br><br>
			Emergency Contact's Address: <?php echo $ADrow['name'];?><br><br>

			Relationship: <?php echo $Rrow['relation'];?><br><br>

			Emergency Contact's Number: <?php echo $ERrow['ecnum'];?><br><br>

			Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
			intolerances, if yes please give more details in the text are below:
			<?php echo $ERrow['extrainfo'];?><br><br>
			<input type="hidden" name="accept" value="1">
			<input type="submit" name="AcceptC"  value="Accept Applicant" id="accBTN">
			<input type="hidden" name="refuse" value="2">
			<input type="submit" name="RefuseC" value="Refuse Applicant" id="refBTN">
			<input type="hidden" name="pending" value="3">
			<input type="submit" name="PendingC" value="Keep As Pending" id="penBTN">
			<button type="button" name="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;">Print</button>
		</form>
        <?php } ?>
	</div>

</body>
</html>