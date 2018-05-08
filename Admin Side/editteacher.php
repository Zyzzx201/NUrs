<?php session_start();?>
<?php if(empty($_SESSION["username"])){
header('location:adminlogin.php');
}
else {
?>
<?php
  require_once("teacherController.php");
  require_once("MainController.php");
  require_once("AddressController.php");
  require_once("MaritalController.php");
  require_once("ContactinfoController.php");
  require_once("nationalityController.php");

  $teacherOBJ1 =  new teacherC();
  $Trow = $teacherOBJ1->TselectV();
  $teacherOBJ2 = new mainC();
  $Trow1 = $teacherOBJ2->MselectV();
  $addOBJ3 =  new addressC();
  $ADrow =  $addOBJ3->ADselectV();
  $marrOBJ4 = new maritalC();
  $MRrow = $marrOBJ4->MTselectV();
  $ConOBJ5 = new contactinfoC();
  $CIrow = $ConOBJ5->CIselectV();
  $NatOBJ6 = new nationalityC();
  $NTrow = $NatOBJ6->NAselectV();
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
    function checkD() {
      return confirm("Are you sure you want to delete this file? This action is unreveresable.");
    }
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
        <a href="\Admin Side\editchild.php" id="admAdr">Child Edit</a>
        <!-- <a href="\Admin Side\editteacher.php" id="admAdr">Teacher Edit</a> -->
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
<div>
    <form id="searchB" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
       <input type="text" max="100" min="2" name="Search"  placeholder="Search for names.." onkeyup="aftersearch.php" >
    </form>
    <form method="POST" action="afterSaveBtn.php"  id="EditTeacher">
      <h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
      First name: <input name="fname" type="text" min="2" value="<?php echo $Trow1['fname'];?>"><br><br>
      Last Name: <input name="lname" type="text" min="2" value="<?php echo $Trow1['lname'];?>"><br><br>
      SSN: <input name="ssn" type="text" max="14" min="14" value="<?php echo $Trow1['ssn'];?>"><br><br>
      Nationality: <input name="nat" type="text" max="100" min="2"  value="<?php echo $NTrow['name'];?>"><br><br>
      Home Address: <input name="address" type="text" max="300" min="50" value="<?php echo $ADrow['name'];?>"><br><br>
      Mobile number: <input name="cellphone" type="text" max="11" min="11" max="11" min="11" value="<?php echo $CIrow['cellphone']; ?>"><br><br>
      Marital Status: <input name="mstatus" type="text" max="25" min="2" max="100" min="2" value="<?php echo $MRrow['value'];?>"><br><br>
      <p>Academic Qualifications with Dates:<br><br></p>
      Qualification 1: <input name="acaqual1" type="text" max="100" min="2" value="<?php echo $Trow['acaqual1'];?>">
      <input name="date_acaqual1" type="date" value="<?php echo $Trow['date_acaqual1'];?>"><br><br>
      <b>Professional Qualifications with Dates:<br><br></b>
      Qualification 1: <input name="personal_qual1" type="text" max="100" min="2"  value="<?php echo $Trow['personal_qual1'];?>">
      <input name="date_ppersonalqual1" type="date" value="<?php echo $Trow['date_ppersonalqual1'];?>"><br>
      <br><hr>
      Present Employer's Name: <input name="pempname" type="text" max="100" min="2"  value="<?php echo $Trow['pempname'];?>"><br><br>
      Present Employer's Address: <input name="pempaddress_id" type="text" max="300" min="2"  value="<?php echo $ADrow['name'];?>">
      <br><br>
      Present Employer's phone number: <input name="pempnum" type="text" max="11" min="11"  value="<?php echo $Trow['pempnum'];?>"><br><br><hr>

      Current or Last Salary: <input name="corsalary" type="text" max="5" min="2"  value="<?php echo $Trow['corlsalary'];?>"><br><br>
      Reqqested Salary: <input name="reqsalary" type="text" max="5" min="2"  value="<?php echo $Trow['reqsalary'];?>"><br><br>

      Have you been interviewed recently at other nurseries? if yes, please mention names:<br><br>
      <input name="othernursery" type="text" max="500" min="20"  value="<?php echo $Trow['othernursery'];?>"><br><br>

      In your point of view, how do you see an ideal nursery regarding its academic side?<br><br>
      <input name="povnursery" type="text" max="500" min="20"  value="<?php echo $Trow['povnursery'];?>"></textarea><br>
      <br><br>
      <button type="submit" name="Updatebtn">Modify Form</button>
      <button type="reset" name="teacherDelete" onclick="checkD()">Delete Teacher</button>
    </form>
</div>
</body>
</html>
