<html>

<head>
  <title>Fun & Learn: About Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
  <link rel="stylesheet" href="SecretGetAway.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript">
    window.onload = function() {
      document.getElementById('navMenu').style.display = 'none';
      document.getElementById('sBar').style.display = 'none';
    };
    function changeM(x) {
      x.classList.toggle("change");
      document.getElementById('navMenu').style.display = 'block';
      if (document.getElementById('Menicon').clicked){
        document.getElementById('navMenu').display = 'none';
      }
    };
    function sgaBox() {
      document.getElementById('sBar').style.display = 'block';
    };
    function cancelGA(){
      document.getElementById('sBar').style.display= 'none';
    };
  </script>

</head>

<body>
  <header>
		<img src="logo.png" id="logo" onclick="location.href='/index.php';">
    <h1 id="h1U" style="font-size: 34px;">About Us</h1>
		<div class="micon" onclick="changeM(this)" id="Menicon">
      <div class="b1"></div>
      <div class="b2"></div>
      <div class="b3"></div>
    </div>
		<div id="navMenu" >
      <div id="myTopnav" class="topnav">
        <a id="addr" href="/Onlineapplication.php" >Online Application</a>
        <a id="addr" href="/About us.php" >About Us</a>
        <a id="addr" href="/addteacher.php" >Teacher Registration</a>
        <a id="addr" href="/Schedules.php" >Schedule</a>
        <a id="addr" href="" >Gallery</a>
        <a id="addr" href="" >Events</a>
        <div class="dropdown">
          <button class="dropbtn">Admin
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="/acceptteacher.php" id="admAdr">Teacher Acceptance</a>
            <a href="/Addusers.php" id="admAdr">User Add</a>
            <a href="/deleteuser.php" id="admAdr">User Delete</a>
            <a href="/editteacher.php" id="admAdr">Teacher Edit</a>
            <a href="#" class="secretGABtn" onclick="sgaBox()">Login</a>
          </div>
        </div>
      </div>
    </div>
	</header>
  <div class="pics">
    <div class="picsLeft">
  		<img src="pic1.jpg" alt="pic1" id="pic1" class="w3-round-xxlarge">
  		<img src="pic2.jpg" alt="pic2" id="pic2" class="w3-round-xxlarge">
  		<img src="pic13.jpg" alt="pic13" id="pic3" class="w3-round-xxlarge">
  	</div>
  	<div class="picsRight">
  		<img src="pic10.jpg" alt="pic1" id="pic4" class="w3-round-xxlarge">
  		<img src="pic12.jpg" alt="pic12" id="pic5" class="w3-round-xxlarge">
  		<img src="pic3.jpg" alt="pic13" id="pic6" class="w3-round-xxlarge">
  	</div>
  	<div class="picsButtom">
  		<img src="pic5.jpg" alt="pic1" id="pic7" class="w3-round-xxlarge">
  		<img src="pic11.jpg" alt="pic12" id="pic8" class="w3-round-xxlarge">
  		<img src="pic4.jpg" alt="pic13" id="pic9" class="w3-round-xxlarge">
  		<img src="pic9.jpg" alt="pic13" id="pic10" class="w3-round-xxlarge">
  		<img src="pic6.jpg" alt="pic13" id="pic11" class="w3-round-xxlarge">
  		<img src="pic7.jpg" alt="pic13" id="pic12" class="w3-round-xxlarge">
  		<img src="pic8.jpg" alt="pic13" id="pic13" class="w3-round-xxlarge">
  	</div>
  </div>

  <div class = "mission">
    <strong><h2 id="h2">Mission :</h2></strong><hr>
    Many parents are concerned when their children are not practicing letters
    and numbers, they feel that completing paper and pencil exercises will most
    effectively prepare their children for elementary school. To change this common idea
    in our society we are working in our nursery hand in hand with parents in order to
    enrich your child's physical and mental development through our "Fun and Learn" strategy,
    where the child can enjoy learning through playing by using different activities.
    Our concept is aiming to increase the child's self confidence, encourage him to think
    widely and independently & work using his/her  own hands to prepare him to do pencil & paper
    work, a step that should come at some stage of preschool education without stressing over it.
  </div>
  <br>
  <div class = "vision">
    <h2 id="h2">Vision :</h2><hr>
     Our program is based on the "Fun & Learn" strategy where all acitivities kids experience at the nursery
      are aiming to teach new skills they need, even fun acitvities:<br>
     <br>
    <strong>Fun:</strong> quality time, where children can enjoy being creative, being part of a team, solving
    problems, trying to win, accepting loss, share, work on motor skills,and act in live preformances.<br>
    <br>
    <strong>Learn:</strong> New skills & how to face future life challenges through our academic program which is
    very well prepared to help children enhancing their language skills, imagination, gross/fine motor skills,
    cognitive/thinking skills, social skills,and mental principles. <br>
  </div>

  <div id="footer">
    <object type="text/html" data="Contactus.php" id="ftr"></object>
  </div>

</body>
</html>
