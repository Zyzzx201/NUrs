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
          require_once("teacherCLass.php");
          require_once("MainClass.php");
          require_once("AddressClass.php");
          require_once("MaritalClass.php");
          require_once("ContactinfoClass.php");
          require_once("nationalityClass.php");

          $teacherOBJ1 =  new teacher();
          $row = $teacherOBJ1->select();
          $childOBJ2 = new main();
          $row1 = $childOBJ2->select();
          $addOBJ3 =  new Address();
          $row3 =  $addOBJ3->select();
          $marrOBJ4 = new marital();
          $row4 = $marrOBJ4->select();
          $ConOBJ5 = new contactinfo();
          $row5 = $ConOBJ5->select();
          $NatOBJ6 = new nationality();
          $row6 = $NatOBJ6->select();
        ?>
        Full name:  <?php echo $row1['fname'];?> <?php echo $row1['lname']; ?>
        <br><br>
        Nationality:  <?php echo $row6['name']; ?><br><br>
        Home Address:  <?php echo $row3['name']; ?><br><br>
        Mobile number 1: <?php echo $row5['cellphone']; ?><br><br>
        Marital Status:  <?php echo $row4['value']; ?><br><br>
        Academic Qualifications with Dates:<br><br>
        Qualification 1:  <?php echo $row['acaqual1']; ?>
         <?php echo $row['date_acaqual1']; ?><br><br>
        Professional Qualifications with Dates:<br><br>
        Qualification 1:  <?php echo $row['personal_qual1']; ?>
         <?php echo $row['date_ppersonalqual1']; ?><br>
        <br><hr>
        Present Employer's Name:  <?php echo $row['pempname']; ?><br><br>
        Present Employer's Address: <?php echo $row3['name']; ?><br>
        <br>
        Present Employer's phone number: <?php echo $row['pempnum']; ?><br><br><hr>

        Current or Last Salary: <?php echo $row['corlsalary']; ?><br><br>
        Required Salary: <?php echo $row['reqsalary']; ?><br><br>

        Have you been interviewed recently at other nurseries? if yes, please mention names:<br><br>
        <?php echo $row['othernursery']; ?><br><br>

        In your point of view, how do you see an ideal nursery regarding its academic side?<br><br>
        <?php echo $row['povnursery'];?></textarea><br>
        <br><br>
        <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
          <?php
          require_once("btns.php");
          /*$BTNobj1= new BTN();
          $action1 = $BTNobj1->statusChange();*/
           ?>
          <button type="submit" onclick="<?php $BTNobj2= new BTN(); $action2 = $BTNobj2->actionBTN(1);?>">Accept Applicant</button>
          <button type="submit" onclick="<?php $BTNobj3= new BTN(); $action3 = $BTNobj3->actionBTN(2);?>">Refuse Applicant</button>
          <button type="submit" onclick="<?php $BTNobj4= new BTN(); $action4 = $BTNobj4->actionBTN(3);?>">Set As Pending</button>
<!-- name="ACbtn"name="RFbtn"name="PNbtn"-->
        </form>

      </form>
    </div>

</body>
</html>
