<?php session_start();
if(empty($_SESSION["username"])){
    header('location:adminlogin.php');
}
else {
?>

<html>
<head>
    <title>Fun & Learn: Schedules</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Schedules.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet2.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet3.css">
    <link rel="stylesheet" type="text/css" href="hovertips.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script type="text/javascript">
    window.onload = function() {
        document.getElementById('navMenu').style.display = 'none';
        document.getElementById('new').style.display = 'none';
    };
    function checkD() {
      return confirm("Are you sure you want to delete this file? This action is irreversible.");
    }
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
    <p id="h1S">Schedules</p>
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
            <a href="Addusers(AS).php" id="admAdr">Child Acceptance</a>
            <a href="editchild(AS).php" id="admAdr">Child Edit</a>
            <a href="editteacher(AS).php" id="admAdr">Teacher Edit</a>
            <div class="dropdown">
                <button class="dropbtn">More
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="EditDB.php" id="admAdr">Control Panel</a>
                    <a id="admAdr" href="event(AS).php">Events</a>
                    <a id="admADR" href="Payment(AS).php">Payments</a>
<!--                    <a id="addr" href="Schedules(AS).php">Schedule</a>-->
                    <a href="logout.php" id="admAdr">Logout</a>
                    <!--<a id="addr" href="" >Gallery</a>-->
                </div>
            </div>
        </div>
    </div>
  </header>
  <?php
  require_once("CoursesController.php");
  require_once("scheduleController.php");
  require_once("ChildtypeController.php");
  $childtypeC = new childtypeC();
  $CTrow =  $childtypeC->CTselectAll();
   ?>
  <div class = "schedsEdit">
    <div class="hovertip">
      <span class="hovertiptext"> Choose a table to View </span>
      <form  action="Schedules(AS).php" method="post">
        <select name="childtype">
          <?php
           while($row=mysqli_fetch_assoc($CTrow))
           echo "<option value='".$row['id']."'>".$row['type']."</option>";
           ?>
        </select>
        <button type="submit" name="childtypeselect">View</button>
        <?php echo $row['type']; ?>
      </form>
    </div><hr>
    <table id="scTable">
      <tr>
        <th>Time Interval</th>
        <th>Classes</th>
      </tr>
      <tr>
        <?php
         if (isset($_POST['childtypeselect'])) {
           $schedule = new ScheduleC();
           $Scall =$schedule->SCselectAll($_POST['childtype']);
           $Courses= new coursesC();
           while($row=mysqli_fetch_assoc($Scall)){
             $COrow=$Courses->COselectV($row['course_id']);
             $COrow=mysqli_fetch_assoc($COrow);
         ?>
         <td><?php echo $row['start'];?> to <?php echo $row['ends']; ?></td>
         <td><?php echo $COrow['id'], " - ", $COrow['description']; ?></td>
        </tr>
        <?php } } ?>
    </table><hr><br>
  </div>
  <form action="CoursesController.php" method="post">
      <div id="createTable">
          <table>
              <tr>
                  <th>Course No.</th>
                  <th>Course Name</th>
<!--                  <th>Course Duration</th>-->
<!--                  <th>Class</th>-->
              </tr>
              <tr>
                <?php
                    require_once("ChildtypeController.php");
                    require_once("CoursesController.php");
                    require_once("scheduleController.php");


                    $childOBJ = new childtypeC();
                    $CTrow2 =  $childOBJ->CTselectAll();

                    $schedule2 = new ScheduleC();
                    $Scall2 = $schedule2->SCdisplay();
                    $schedule3 = new ScheduleC();
                    $Scall3 = $schedule3->SCdisplay();

                    $CourseOBJ1 = new coursesC();
                    $COrow2=$CourseOBJ1->COdisplay();

                    while($row2=mysqli_fetch_assoc($COrow2)){
                ?>
                <td><?php echo $row2['id']; ?></td>
                <td><?php echo $row2['description']; ?></td>
<!--                --><?php
//                    $schedule2 = new ScheduleC();
//                    $Scall2 = $schedule2->SCselectAll($_POST['childtype_id']);
//                    $Courses = new coursesC();
//                    while($row4=mysqli_fetch_assoc($Scall2)){
//                    $COrow=$Courses->COselectV($row4['course_id']);
//                    //$COrow=mysqli_fetch_assoc($COrow);
//                ?>
<!--                <td>--><?php //echo $row4['start'];?><!-- to --><?php //echo $row4['end']; ?><!--</td>?>-->
<!--                <td>--><?php //echo $COrow['childtype_id'] ;?><!--</td>-->
              </tr>
              <?php } ?>
          </table>

          <br>
        <div>To Add a new course: <br>
            1- Write the name of course you want to add here: <br>
            <input type="text" name="Courseadd" value="<?php $row2['description'];?>"> <br>
            2- Select the type of students you wnat to assign the course to:<br>
            <select name="childtype_id">
                <?php
                $childtypeC = new childtypeC();
                $CTrow =  $childtypeC->CTselectAll();
                while($row=mysqli_fetch_assoc($CTrow))
                    echo "<option value='".$row['id']."'>".$row['type']."</option>";
                ?>
            </select>
            3- Select duration:
            <select name="start">
                <?php
                while($row4=mysqli_fetch_assoc($Scall2))
                    echo "<option>".$row4['start']."</option>";
                ?>
            </select>
             to
            <select name="ends">
                <?php
                while($row5=mysqli_fetch_assoc($Scall3))
                    echo "<option>".$row5['ends']."</option>";
                ?>
            </select>
            <button type="submit" name="AddCourse">Add</button><br><br>
        </div>
        <div>
            Write the number and name of course you want to modify here: <br>
            <input type="text" name="CourseUid" value="<?php $row2['id']; ?>" id="idBox">
            <input type="text" name="Coursenew" value=" <?php $row2['description']; ?>">
            <button type="submit" name="updateCourse">Modify</button> <br><br>
        </div>
        <div>
            Write the number of course you want to delete here: <br>
            <input type="text" name="Courseid" value="<?php $row2['id']; ?>" id="idBox">
            <button type="submit" name="deleteCourse" onclick="checkD()">Delete</button> <br><br>
        </div>
      </div>
  </form>
</body>
</html>
