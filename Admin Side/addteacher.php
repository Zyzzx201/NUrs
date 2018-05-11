
<html>
<head>
  <title>Fun & Learn: Teacher App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="userSide/StyleSheet.css">
	<link rel="stylesheet" type="text/css" href="userSide/StyleSheet2.css">
	<link rel="stylesheet" type="text/css" href="userSide/StyleSheet3.css">
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
  <header id="bkbtn">
    <img src="logo.png" id="logo" onclick="location.href='index.php';">
    <p id="h1O">Teacher</p><p id="h1A">Application</p>
<!--    <p id="username">--><?php //echo "Hello ".$_SESSION["username"];} ?><!--</p>-->
    <div class="micon" onclick="changeM(this)" id="Menicon">
      <div class="b1"></div>
      <div class="b2"></div>
      <div class="b3"></div>
    </div>
    <div id="navMenu" >
      <div id="myTopnav" class="topnav">
          <a id="addr" href="Onlineapplication.php">Online Application</a>
          <!-- <a id="addr" href="addteacher.php">Teacher Registration</a> -->
          <a id="addr" href="Schedules(US).php">Schedule</a>
          <!-- <a id="addr" href="" >Gallery</a>-->
          <a id="admAdr" href="events.php">Events</a>
        <div class="dropdown">
            <button class="dropbtn">More
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="adminlogin.php">Login</a>
            </div>
        </div>
      </div>
    </div>
  </header>
</head>

<body>
    <div class = "teacher1">
        <form method="POST" action="userSide/afterSaveBtn.php">
            <p id="h1t"><u>Preliminary Teacher Application:</u></p><br><br><hr>
            Full name:
            <input type="text" name="fname">
            <input type="text" name="lname"><br><br>
            Date of birth:
            <input type="Date" name="dob"><br><br>
            Nationality:
            <input type="text" name="nat"><br><br>
            Home Address:
            <select name="address_id" >
            <?php require_once("AddressClass.php");
                $addOBJ3 = new Address();
                $names = $addOBJ3->getAllRoots();
                $size = count($names);
                for ($i=0; $i < $size ; $i++) {
                    echo '<option value= ' .$names[$i].'>'.$names[$i].'</option>'; }
            ?>
            </select>  <br><br>
            Mobile number:
            <input type="text" name="cellphone" maxlength="11"><br><br>
            Social Security Number:
            <input type="text" name="ssn" maxlength="11"><br><br>
            Marital Status:<br>
            <input type="radio" name="mstatus" value="Single" checked>Single<br>
            <input type="radio" name="mstatus" value="Married">Married<br>
            <input type="radio" name="mstatus" value="Divorced">Divorced<br>
            <input type="radio" name="mstatus" value="Widowed">Widowed<br><br><hr>
            <u>Qualifications with Dates:</u><br>
            Qualification 1:
            <select name="qualification_id1" >
                <option value="-1"></option>
                <?php require_once("qualificationClass.php");
                    $QOBJ3 = new qualification();
                    $result = $QOBJ3->select();
                    while ($row = mysqli_fetch_array($result))
                        echo "<option value='".$row['id']."'>".$row['name']."</option>";
                ?>
            </select>
            <input type="text" name="qual1">
            <input type="Date" name="date_qual1"><br><br>
            Qualification 2:
            <select name="qualification_id2" >
              <option value="-1"></option>
              <?php require_once("qualificationClass.php");
                    $QOBJ3 = new qualification();
                    $result = $QOBJ3->select();
                    while ($row = mysqli_fetch_array($result))
                        echo "<option value='".$row['id']."'>".$row['name']."</option>";
                ?>
            </select>
            <input type="text" name="qual2">
            <input type="Date" name="date_qual2"><br><br>
            Qualification 3:
            <select name="qualification_id3" >
                <option value="-1"></option>
                <?php require_once("qualificationClass.php");
                    $QOBJ3 = new qualification();
                    $result = $QOBJ3->select();
                    while ($row = mysqli_fetch_array($result))
                        echo "<option value='".$row['id']."'>".$row['name']."</option>";
                ?>
            </select>
            <input type="text" name="qual3">
            <input type="Date" name="date_qual3"><br><br>
            Branch:
            <select name="branches" >
                <option value="-1"></option>
                <?php require_once("BranchClass.php");
                $BOBJ3 = new branch();
                $result = $BOBJ3->selectAll();
                while ($row = mysqli_fetch_array($result))
                    echo "<option value='".$row['id']."'>".$row['value']."</option>";
                ?>
            </select> <br><br><hr>
            Present Employer's Name:
            <input type="text" name="pempname"  ><br><br>
            Present Employer's Address:
            <select name="pempaddress_id" >
                <?php require_once("AddressClass.php");
                    $addOBJ3 = new Address();
                    $names = $addOBJ3->getAllRoots();
                    $size = count($names);
                    for ($i=0; $i < $size ; $i++) {
                     echo '<option value= ' .$names[$i].'>'.$names[$i].'</option>'; }
                ?>
            </select><br><br>
            Present Employer's phone number:
            <input type="text" name="pempnum" maxlength="11"  ><br><br><hr>

            Current or Last Salary:
            <input type="number" name="corlsalary" min="1" max ="10000"  ><br><br>
            Requested Salary:
            <input type="number" name="reqsalary" min="1" max ="10000"  ><br><br>

            Have you been interviewed recently at other nurseries? if yes, please mention names:<br>
            <input type="text" name="othernursery"><br><br>

            In your point of view, how do you see an ideal nursery regarding its academic side?<br>
            <textarea rows="1" cols="50" name="povnursery"></textarea><br>

            <br>
            <input type="submit" name="Savebtn" value="Submit Form" id="Sbtn">
            <input type="reset"  value="Reset Form" id="REbtn">
        </form>
    </div>

</body>
</html>
