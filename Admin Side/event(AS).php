<?php session_start();
if(empty($_SESSION["username"])){
    header('location:adminlogin.php');
}
else {
    ?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet2.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet3.css">
    <link rel="stylesheet" type="text/css" href="crudsCSS1.css">
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
                document.getElementById('navMenu').style.display = 'none';
            }
        }
        function checkD() {
            return confirm("Are you sure you want to delete this file? This action is irreversible.");
        }
    </script>
</head>
<body>
<header>
    <img src="logo.png" id="logo" onclick="location.href='index(AS).php';">
    <h1 id="h1W">Events</h1>
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
<!--                    <a id="admAdr" href="event(AS).php">Events</a>-->
                    <a id="admAdr" href="Schedules(AS).php">Schedule</a>
                    <a id="admADR" href="Payment(AS).php">Payments</a>
                    <a href="logout.php" id="admAdr">Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="editEvents">
    <form action="afterCruds.php" method="post">
        <u id="A_E">Events List:</u> <br>
        <?php
        require_once("eventsController.php");
        $event = new eventsC();
        $evRow = $event->EVselectAll();
        ?>
        <br><hr>
        <u id="A_E">Add/Edit:</u><br><br>
        <div>
            Write the name of event you want to add here: <br>
            <input type="text" name="EVadditional" value="<?php $evRow['description'];?>">
            <input type="date" name="EVdate" value="<?php $evRow['Time'];?>">
            <input type="time" name="EVtime" value="<?php $evRow['Date'];?>">
            <button type="submit" name="saveEV">Add</button><br><br>
        </div>
        <div>
            Write the number and name of event you want to modify here: <br>
            <input type="text" name="EVUid" value="<?php $evRow['id']; ?>" id="idBox">
            <input type="text" name="EVnew" value=" <?php $evRow['description']; ?>">
            <input type="date" name="EVUdate" value="<?php $evRow['Time'];?>">
            <input type="time" name="EVUtime" value="<?php $evRow['Date'];?>">
            <button type="submit" name="updateEV">Modify</button><br><br>
        </div>
        <div>
            Write the number of event you want to delete here:
            <input type="text" name="EVid" value="<?php  $evRow['id']; ?>" id="idBox">
            <button type="submit" name="deleteEV" onclick="checkD()">Delete</button> <br><br>
        </div>
    </form>
</div>

</body>
</html>
