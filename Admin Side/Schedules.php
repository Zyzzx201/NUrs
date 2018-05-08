<html>

<head>
  <title>Fun & Learn: Schedules</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Schedules.css">
  <link rel="stylesheet" type="text/css" href="hovertips.css">
  <script type="text/javascript">
    window.onload = function() {
      document.getElementById('new').style.display = 'none';
    };
    function checkD() {
      return confirm("Are you sure you want to delete this file? This action is unreveresable.");
    }
  </script>
</head>

<body>
  <header>
    <img src="logo.png" id="logo" onclick="location.href='index.php';">
    <button type="button" id="bkbtn" onclick="location.href='index.php';">Back</button>
    <p id="h1S">Schedules</p>
  </header>
  <?php
  require_once("CoursesController.php");
  require_once("scheduleController.php");
  require_once("ChildtypeController.php");
  $childtypeC = new childtypeC();
  $CTrow =  $childtypeC->CTselectAll();
   ?>
  <div class = "scheds">
    <div class="hovertip">
      <span class="hovertiptext"> Choose a table to View </span>
      <form  action="Schedules.php" method="post">
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
        <th>Edit/Delete</th>
      </tr>
      <tr>
        <?php
         if (isset($_POST['childtypeselect'])) {
           $schedule = new ScheduleC();
           $Scall =$schedule->SCselectAll($_POST['childtype']);
           $Courses= new coursesC();
           while($row=mysqli_fetch_assoc($Scall)){
             $CO=$Courses->COselectV($row['course_id']);
             $COrow=mysqli_fetch_assoc($CO);
         ?>
         <td><?php echo $row['start'];?> to <?php echo $row['end']; ?></td>
         <td id="old"><?php echo $COrow['description']; ?></td>
         <td><button type="submit" name="updateCourse" onclick="edit()">Modify</button>
         <button type="submit" name="deleteCourse" onclick="checkD()">Delete</button></td>
        </tr>
        <?php } } ?>
    </table>
  </div>

</body>
</html>
