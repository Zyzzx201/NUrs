<?php session_start();?>
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
</head>

<body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='userSide/index.php';">
      <p id="h1T">Teacher</p><p id="h1Ac">Acceptance</p>
      <button type="submit" id="bkbtn" onclick="location.href='userSide/index.php';">Back</button>
      <form class="" action="Afterbtns.php" method="post">
        <button type="submit" id="pabtn" name="previousAC">Previous Applicaton</button>
    		<button type="submit" id="nabtn" name="nextAC">Next Applicaton</button>
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

    <div id="EditTeacher">
      <form id="searchB" method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
           <input type="text" name="Search" id="boxes" placeholder="Search for names.." onkeyup="aftersearch.php" >
      </form>
      <h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
      <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
        <?php
          require_once("db.php");
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
        Full name: <?php echo $Trow1['fname'];?> <?php echo $Trow1['lname']; ?>
        <br><br>
        Nationality:  <?php echo $NTrow['name']; ?><br><br>
        Home Address:  <?php echo $ADrow['name']; ?><br><br>
        Mobile number: <?php echo $CIrow['cellphone']; ?><br><br>
        Marital Status:  <?php echo $MRrow['value']; ?><br><br>
        <b>Academic Qualifications with Dates:<br><br></b>
        Qualification 1:  <?php echo $Trow['acaqual1']; ?> <br><br>
        Date of Qualification: <?php echo $Trow['date_acaqual1']; ?><br><br>
        <b>Professional Qualifications with Dates:<br><br></b>
        Qualification 1:  <?php echo $Trow['personal_qual1']; ?> <br><br>
        Date of Qualification: <?php echo $Trow['date_ppersonalqual1']; ?><br>
        <br><hr>
        Present Employer's Name:  <?php echo $Trow['pempname']; ?><br><br>
        Present Employer's Address: <?php echo $ADrow['name']; ?><br>
        <br>
        Present Employer's phone number: <?php echo $Trow['pempnum']; ?><br><br><hr>

        Current or Last Salary: <?php echo $Trow['corlsalary']; ?><br><br>
        Required Salary: <?php echo $Trow['reqsalary']; ?><br><br>

        Have you been interviewed recently at other nurseries? if yes, please mention names:<br><br>
        <?php echo $Trow['othernursery']; ?><br><br>

        In your point of view, how do you see an ideal nursery regarding its academic side?<br><br>
        <?php echo $Trow['povnursery'];?></textarea><br>
        <br><br>
      </form>
      <form  action="Afterbtns.php" method="post" >
        <input type="hidden" name="accept" value="1">
        <input type="submit" name="Accept"  value="Accept Applicant" id="accBTN">
        <input type="hidden" name="refuse" value="2">
        <input type="submit" name="Refuse" value="Refuse Applicant" id="refBTN">
        <input type="hidden" name="pending" value="3">
        <input type="submit" name="Pending" value="Keep As Pending" id="penBTN">
      </form>
    </div>




</body>
</html>
