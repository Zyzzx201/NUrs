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
    $Trow3 = $teacherOBJ3->MselectAll('1');
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
    <img src="logo.png" id="logo" onclick="location.href='index.php';">
    <p id="h1T">Edit</p><p id="h1Ac">Teacher</p>
    <p id="username"><?php echo "Hello ".$_SESSION["username"];} ?></p>
    <div class="micon" onclick="changeM(this)" id="Menicon">
        <div class="b1"></div>
        <div class="b2"></div>
        <div class="b3"></div>
    </div>
    <div id="navMenu" >
        <div id="myTopnav" class="topnav">
            <<a href="acceptteacher.php" id="admAdr">Teacher Acceptance</a>
            <a href="Addusers.php" id="admAdr">Child Acceptance</a>
            <a href="editchild.php" id="admAdr">Child Edit</a>
<!--            <a href="editteacher.php" id="admAdr">Teacher Edit</a>-->
            <a href="EditDB.php" id="admAdr">Control Panel</a>
            <div class="dropdown">
                <button class="dropbtn">More
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a id="addr" href="Schedules.php">Schedule</a>
                    <!-- <a id="addr" href="" >Gallery</a> -->
                    <a id="admAdr" href="event.php">Events</a>
                    <a href="logout.php" id="admAdr">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="EditTeacher">
    <form  action="editteacher.php" method="post">
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
    $ADrow1 =  $addOBJ3->ADselectV($row['address_id']);
    $ADrow=mysqli_fetch_assoc($ADrow1);

    $marrOBJ4 = new maritalC();
    $MRrow1= $marrOBJ4->MTselectV($row['mstatus_id']);
    $MRrow=mysqli_fetch_assoc($MRrow1);

    $ConOBJ5 = new contactinfoC();
    $CIrow1 = $ConOBJ5->CIselectV($_POST['pendingnames']);
    $CIrow=mysqli_fetch_assoc($CIrow1);

    $NatOBJ6 = new nationalityC();
    $NTrow1 = $NatOBJ6->NAselectV($row['nationality']);
    $NTrow=mysqli_fetch_assoc($NTrow1);

    $QualOBJ6 = new qualvaluesC();
    $Qualrow1 = $QualOBJ6->QVselectV($row['pendingnames']);
    $Qualrow1 = mysqli_fetch_assoc($Qualrow1);

    ?>
    <div>
    <form method="POST" action="afterSaveBtn.php" >
      <h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
      First name: <input name="fname" type="text" min="2" value="<?php echo $Trow1['fname'];?>"><br><br>
      Last Name: <input name="lname" type="text" min="2" value="<?php echo $Trow1['lname'];?>"><br><br>
      SSN: <input name="ssn" type="text" max="14" min="14" value="<?php echo $Trow1['ssn'];?>"><br><br>
      Nationality: <input name="nat" type="text" max="100" min="2"  value="<?php echo $NTrow['name'];?>"><br><br>
      Home Address: <input name="address" type="text" max="300" min="50" value="<?php echo $ADrow['name'];?>"><br><br>
      Mobile number: <input name="cellphone" type="text" max="11" min="11" value="<?php echo $CIrow['cellphone']; ?>"><br><br>
      Marital Status: <input name="mstatus" type="text" max="25" min="2" value="<?php echo $MRrow['value'];?>"><br><br>
      <p>Qualifications with Dates:<br><br></p>
        Qualification 1: <input name="qual1" type="text" max="25" min="2" max="100" min="2" value=" <?php echo $Qualrow1['value']; ?>"> <br><br>
        Date of Qualification: <input name="date_qual1" type="date"value="<?php echo $Qualrow1['date']; ?>"><br><br>
        Qualification 2: <input name="qual2" type="text" max="25" min="2" value=" <?php echo $Qualrow1['value']; ?>"> <br><br>
        Date of Qualification: <input name="date_qual2" type="date" value=" <?php echo $Qualrow1['date']; ?>"><br>
        Qualification 3: <input name="qual3" type="text" max="25" min="2" value=" <?php echo $Qualrow1['value']; ?>"> <br><br>
        Date of Qualification: <input name="date_qual3" type="date"value="<?php echo $Qualrow1['date']; ?>"><br>
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
</div>

    <?php } ?>
</body>
</html>
