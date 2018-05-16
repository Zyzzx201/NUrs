<?php session_start();
if(empty($_SESSION["username"])){
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
  require_once("qualvaluesController.php");

  $teacherOBJ3 = new mainC();
  $Trow3 = $teacherOBJ3->MselectTeacher(3);
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
      <p id="h1T">Teacher</p><p id="h1Ac">Acceptance</p>
      <p id="username"><?php echo "Hello ".$_SESSION["username"];} ?></p>
      <div class="micon" onclick="changeM(this)" id="Menicon">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
      </div>
      <div id="navMenu" >
        <div id="myTopnav" class="topnav">
            <a href="index(AS).php" id="admAdr">Home</a>
            <!-- <a href="acceptteacher(AS).php" id="admAdr">Teacher Acceptance</a> -->
            <a href="Addusers(AS).php" id="admAdr">Child Acceptance</a>
            <a href="editchild(AS).php" id="admAdr">Child Edit</a>
            <a href="editteacher(AS).php" id="admAdr">Teacher Edit</a>
            <a href="EditDB.php" id="admAdr">Control Panel</a>
            <a id="addr" href="Schedules(AS).php">Schedule</a>
            <div class="dropdown">
                <button class="dropbtn">More
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <!-- <a id="addr" href="" >Gallery</a> -->
                    <a id="admAdr" href="event(AS).php">Events</a>
                    <a id="admADR" href="Payment(AS).php">Payments</a>
                    <a href="logout.php" id="admAdr">Logout</a>
                </div>
            </div>
        </div>
      </div>
    </header>

    <div id="EditTeacher">
      <form  action="acceptteacher(AS).php" method="post">
        <select name="pendingnames">
          <option value="-1"></option>
          <?php
          while($row=mysqli_fetch_assoc($Trow3))
           echo "<option value='".$row['id']."'>".$row['fname']." ".$row['lname']."</option>";
           ?>
        </select>
        <button type="submit" name="selectpending">View</button>
      </form>
      <?php
      if(isset($_POST['selectpending'])){
        $mainOBJ2 = new mainC();
        $returnrow = $mainOBJ2->MselectV($_POST['pendingnames']);
        $mrow1 = mysqli_fetch_assoc($returnrow);

        $teacherOBJ1 = new teacherC();
        $Trow1 = $teacherOBJ1->TselectV($_POST['pendingnames']);
        $Trow=mysqli_fetch_assoc($Trow1);

        $addOBJ3 =  new addressC();
        $ADrow1 =  $addOBJ3->ADselectV($Trow['address_id']);
        $ADrow=mysqli_fetch_assoc($ADrow1);

        $marrOBJ4 = new maritalC();
        $MRrow1= $marrOBJ4->MTselectV($Trow['mstatus_id']);
        $MRrow=mysqli_fetch_assoc($MRrow1);

        $ConOBJ5 = new contactinfoC();
        $CIrow1 = $ConOBJ5->CIselectV($_POST['pendingnames']);
        $CIrow=mysqli_fetch_assoc($CIrow1);

        $NatOBJ6 = new nationalityC();
        $NTrow1 = $NatOBJ6->NAselectV($Trow['nationality']);
        $NTrow=mysqli_fetch_assoc($NTrow1);

        $QualOBJ6 = new qualvaluesC();
        $Qualrow1 = $QualOBJ6->QVselectV($Trow['id']);
        $Qualrow1 = mysqli_fetch_assoc($Qualrow1);

       ?>
         <div>
          <h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
          <form method="POST" action="Afterbtns.php">
            Full name: <?php echo $mrow1['fname'];?> <?php echo $mrow1['lname']; ?><br><br>
            Nationality:  <?php echo $NTrow['name']; ?><br><br>
            Home Address:  <?php echo $ADrow['name']; ?><br><br>
            Mobile number: <?php echo $CIrow['cellphone']; ?><br><br>
            Marital Status:  <?php echo $MRrow['value']; ?><br><br>
            <b>Qualifications with Dates:<br><br></b>
            Qualification 1:  <?php echo $Qualrow1['value']; ?> <br><br>
            Date of Qualification: <?php echo $Qualrow1['date']; ?><br><br>
            Qualification 2:  <?php echo $Qualrow1['value']; ?> <br><br>
            Date of Qualification: <?php echo $Qualrow1['date']; ?><br>
            Qualification 3:  <?php echo $Qualrow1['value']; ?> <br><br>
            Date of Qualification: <?php echo $Qualrow1['date']; ?><br>
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
            <?php echo $Trow['povnursery'];?><br>
            <br><br><br>
            <input type="hidden" name="accept" value="1">
            <input type="submit" name="Accept" value="Accept Applicant" id="accBTN">
            <input type="hidden" name="refuse" value="2">
            <input type="submit" name="Refuse" value="Refuse Applicant" id="refBTN">
            <input type="hidden" name="pending" value="3">
            <input type="submit" name="Pending" value="Keep As Pending" id="penBTN">
            <button type="button" name="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;" id="print">Print</button>
          </form>
        </div>
      <?php } ?>
    </div>




</body>
</html>
