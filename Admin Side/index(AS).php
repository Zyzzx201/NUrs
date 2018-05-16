<?php session_start();?>
<?php if(empty($_SESSION["username"])){
header('location:adminlogin.php');
}
else {
?>
<html>
<head>
	<title>Fun & Learn: Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="picsCSS.css">
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
		};
	</script>
</head>

<body>
	<header>
		<img src="logo.png" id="logo" onclick="location.href='index(AS).php';">
		<h1 id="h1W">Welcome</h1>
		<p id="username"><?php echo "Hello ".$_SESSION["username"];} ?></p>
		<div class="micon" onclick="changeM(this)" id="Menicon">
            <div class="b1"></div>
            <div class="b2"></div>
            <div class="b3"></div>
        </div>
		<div id="navMenu" >
        <div id="myTopnav" class="topnav">
            <a href="acceptteacher(AS).php" id="admAdr">Teacher Acceptance</a>
            <a href="Addusers(AS).php" id="admAdr">Child Acceptance</a>
            <a href="editchild(AS).php" id="admAdr">Child Edit</a>
            <a href="editteacher(AS).php" id="admAdr">Teacher Edit</a>
            <a href="EditDB.php" id="admAdr">Control Panel</a>
        <div class="dropdown">
        <button class="dropbtn">More
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a id="addr" href="Schedules(AS).php">Schedule</a>
            <a id="admAdr" href="event(AS).php">Events</a>
            <a id="admADR" href="Payment(AS).php">Payments</a>
            <a href="logout.php" id="admAdr">Logout</a>
        <!--<a id="addr" href="" >Gallery</a>-->
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
	<div align="justify" class = "wt">
		<h2 id="h2">An important Message to all the parents : </h2><hr>
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

	<div align="justify" class="ei">
		<h2 id="h2">Extra Information:</h2><hr>
		<ul>
			<li>We have opened our second branch @ Al Me3rag, starting october 2017 </li>
			<li>We have the honor serving Maadi children since 2008 </li>
			<li>Ask about our new baby class for age under 1 year old </li>
			<li>Transportation is available inside Maadi</li>
			<li>All teachers are foreigners or egyptians who are fluent in English </li>
		</ul>
	</div>

</body>
</html>
