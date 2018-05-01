<?php session_start();?>
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
  <link rel="stylesheet" type="text/css" href="StyleSheet3.css">
  <link rel="stylesheet" type="text/css" href="AdminSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
</head>

<body>
  <header>
      <img src="logo.png" id="logo" onclick="location.href='userSide/index.php';">
      <p id="h1A">Edit</p><p id="h1Te">Teacher</p>
      <button type="button" id="bkbtn" onclick="location.href='userSide/index.php';">Back</button>
      <form class="" action="Afterbtns.php" method="post">
        <button type="submit" id="pabtn" name="previousET">Previous Applicaton</button>
    		<button type="submit" id="nabtn" name="nextET">Next Applicaton</button>
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

<div>
    <form id="searchB" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
       <input type="text" name="Search" id="boxes" placeholder="Search for names.." onkeyup="aftersearch.php" >
    </form>
    <form method="POST" action="afterSaveBtn.php"  id="EditTeacher">
      First name: <input name="fname" type="text" id="boxes" value="<?php echo $Trow1['fname'];?>"><br><br>
      Last Name: <input name="lname" type="text" id="boxes" value="<?php echo $Trow1['lname'];?>"><br><br>
      SSN: <input name="ssn" type="text" id="boxes" value="<?php echo $Trow1['ssn'];?>"><br><br>
      Nationality: <input name="nat" type="text" id="boxes" value="<?php echo $NTrow['name'];?>"><br><br>
      Home Address: <input name="address" type="text" id="boxes" value="<?php echo $ADrow['name'];?>"><br><br>
      Mobile number: <input name="cellphone" type="text" id="boxes" value="<?php echo $CIrow['cellphone']; ?>"><br><br>
      Marital Status: <input name="mstatus" type="text" id="boxes" value="<?php echo $MRrow['value'];?>"><br><br>
      <p>Academic Qualifications with Dates:<br><br></p>
      Qualification 1: <input name="acaqual1" type="text" id="boxes" value="<?php echo $Trow['acaqual1'];?>">
      <input name="date_acaqual1" type="text" id="boxes" value="<?php echo $Trow['date_acaqual1'];?>"><br><br>
      <b>Professional Qualifications with Dates:<br><br></b>
      Qualification 1: <input name="personal_qual1" type="text" id="boxes" value="<?php echo $Trow['personal_qual1'];?>">
      <input name="date_ppersonalqual1" type="text" id="boxes" value="<?php echo $Trow['date_ppersonalqual1'];?>"><br>
      <br><hr>
      Present Employer's Name: <input name="pempname" type="text" id="boxes" value="<?php echo $Trow['pempname'];?>"><br><br>
      Present Employer's Address: <input name="pempaddress_id" type="text" id="boxes" value="<?php echo $ADrow['name'];?>">
      <br><br>
      Present Employer's phone number: <input name="pempnum" type="text" id="boxes" value="<?php echo $Trow['pempnum'];?>"><br><br><hr>

      Current or Last Salary: <input name="corsalary" type="text" id="boxes" value="<?php echo $Trow['corlsalary'];?>"><br><br>
      Reqqested Salary: <input name="reqsalary" type="text" id="boxes" value="<?php echo $Trow['reqsalary'];?>"><br><br>

      Have you been interviewed recently at other nurseries? if yes, please mention names:<br><br>
      <input name="othernursery" type="text" id="boxes" value="<?php echo $Trow['othernursery'];?>"><br><br>

      In your point of view, how do you see an ideal nursery regarding its academic side?<br><br>
      <input name="povnursery" type="text" id="boxes" value="<?php echo $Trow['povnursery'];?>"></textarea><br>
      <br><br>
      <input type="submit" name="Updatebtn" value="Submit Form" id="Sbtn">
    </form>
</div>
</body>
</html>
