<!DOCTYPE html>
<html>
<head>
  <title>Fun & Learn</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
  <link rel="stylesheet" href="AdminSS.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <header>
      <img src="logo.png" id="logo" onclick="location.href='/index.php';">
      <p id="h1T">Teacher</p><p id="h1Ac">Acceptance</p>
      <button type="submit" id="bkbtn" onclick="location.href='/index.php';">Back</button>
      <button type="button" id="pabtn" onclick="<?php require_once("btns.php"); $BTNobj2= new BTN();
      $action2 = $BTNobj2->navBTn(1); ?>">Previous Applicaton</button>
      <button type="button" id="nabtn" onclick="<?php require_once("btns.php"); $BTNobj2= new BTN();
      $action2 = $BTNobj2->navBTn(2); ?>">Next Applicaton</button>

    </header>

    <div class = "teacher2">
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
        <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
          <?php
          require_once("btns.php");
          $BTNobj2= new BTN();
          /*$BTNobj1= new BTN();
          $action1 = $BTNobj1->statusChange();*/
           ?>
          <button type="submit" onclick="<?php $BTNobj2->actionBTN(1);?>">Accept Applicant</button>
          <button type="submit" onclick="<?php $BTNobj3= new BTN(); $action3 = $BTNobj3->actionBTN(2);?>">Refuse Applicant</button>
          <button type="submit" onclick="<?php $BTNobj4= new BTN(); $action4 = $BTNobj4->actionBTN(3);?>">Set As Pending</button>
<!-- name="ACbtn"name="RFbtn"name="PNbtn"-->
        </form>

      </form>
    </div>

</body>
</html>
