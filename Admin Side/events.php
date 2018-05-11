<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="userSide/StyleSheet.css">
    <link rel="stylesheet" type="text/css" href="StyleSheet2.css">
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
                document.getElementById('navMenu').style.display = 'none';
            }
        }

    </script>
</head>
<body>
    <header>
        <img src="logo.png" id="logo" onclick="location.href='index.php';">
        <h1 id="h1W">Events</h1>

        <div class="micon" onclick="changeM(this)" id="Menicon">
            <div class="b1"></div>
            <div class="b2"></div>
            <div class="b3"></div>
        </div>
        <div id="navMenu" >
            <div id="myTopnav" class="topnav">
                <a id="addr" href="userSide/Onlineapplication.php">Online Application</a>
                 <a id="addr" href="addteacher.php">Teacher Registration</a>
                <a id="addr" href="Schedules.php">Schedule</a>
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

    <?php
    require_once("eventsController.php");
    $event = new eventsC();
    $evRow = $event->EVselectV();
    ?>

    <div class="Events">
        Event Name/Description: <?php echo $evRow['description'];?> <br>
        Event Date: <?php echo $evRow['date']; ?> at <?php echo $evRow['Time']; ?> <br>
        Even Location: <?php echo $evRow['Location']; ?>
    </div>

<!--    <div id="footer">-->
<!--        <object type="text/html" data="userSide/Contactus.php" id="ftr"></object>-->
<!--    </div>-->
</body>
</html>