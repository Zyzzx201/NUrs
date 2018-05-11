<html>

<head>
    <title>Fun & Learn: Schedules</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet2.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet3.css">
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
      <div class="micon" onclick="changeM(this)" id="Menicon">
          <div class="b1"></div>
          <div class="b2"></div>
          <div class="b3"></div>
      </div>
      <div id="navMenu" >
          <div id="myTopnav" class="topnav">
              <a id="addr" href="Onlineapplication.php">Online Application</a>
              <a id="addr" href="addteacher.php">Teacher Registration</a>
<!--              <a id="addr" href="Schedules(US).php">Schedules</a>-->
               <a id="addr" href="" >Gallery</a>
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
    <p id="h1S">Schedules</p>
  </header>

  <div class = "scheds">
    <table id="scTable" >
  	<!--Make the Table cell slightly more appeasing to look at, make them wider or like divide the space amongst all 3 coloumns -->
      <tr>
        <th>Time</th>
        <th>Junior Class</th>
        <th>Senior Class</th>
      </tr>
      <tr>
        <td id="timing">08:00 - 10:00 </td>
        <td align="center">Blocks/Puzzle/Playdough/coloring</td>
        <td align="center">Montessori /Work Sheet, Art</td>
      </tr>
      <tr>
        <td id="timing">10:00 - 10:30 </td>
        <td colspan="2" align="center">Breakfast</td>
      </tr>
      <tr>
        <td id="timing">10:30 - 11:00 </td>
        <td colspan="2" align="center">Cricle Time</td>
      </tr>
      <tr>
        <td id="timing">11:00 - 12:00 </td>
        <td colspan="2" align="center">Garden</td>
      </tr>
      <tr>
        <td id="timing">12:00 - 12:30 </td>
        <td align="center" colspan="2">Snack</td>
      </tr>
      <tr>
        <td id="timing">12:30 - 1:00 </td>
        <td align="center">Let's Play</td>
        <td align="center"> Mon,Tues, Wed: Arabic / Sun,Thurs: Qur'an </td>
      </tr>
      <tr>
      <td id="timing">1:00 - 1:30 </td>
        <td align="center">Reading</td>
        <td align="center">Sun, Wed: Let's Dance/ Mon, Tues: I can do it, Thurs. Reading</td>
      </tr>
      <tr>
        <td id="timing">1:30 - 2:00 </td>
        <td colspan="2" align="center">Garden</td>
      </tr>
      <tr>
        <td id="timing">2:00 - 2:30 </td>
        <td colspan="2" align="center">Lunch</td>
      </tr>
      <tr>
        <td id="timing">2:30 - 3:00 </td>
        <td align="center">Sun: Dance, Mon: Colouring, Tues: Nursery songs, Wed: Small play, Thurs: Cartoon</td>
        <td align="center"> Sun: Tracing Names, Mon: Punching/Sewing, Tues: Playdough, Wed: Coloring/Thinking Games, Thurs: Cartoon </td>
      </tr>
      <tr>
        <td id="timing">3:00 - 4:00 </td>
        <td align="center">"Cutting skill" All Classes</td>
        <td align="center"> Data Entry</td>
      </tr>
    </table>
  </div>

  <div id="footer">
    <object type="text/html" data="Contactus.php" id="ftr"></object>
  </div>


</body>



</html>
