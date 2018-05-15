<?php session_start();?>
<?php if(empty($_SESSION["username"])){
    header('location:adminlogin.php');
}
else {
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
    <script>
        function loadDoc()
        {
            var Name = document.getElementById("Searchbar").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("searchResult").innerHTML = this.responseText;
                }
            };
            xhttp.open("POST", "afterCHILDsearch.php?name="+Name, true);
            xhttp.send();
        }
    </script>
    <script type="text/javascript">
        function checkD() {
            return confirm("Are you sure you want to delete this file? This action irreversible.");
        }
    </script>
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
    <h1 align="left"><u>Child Application:</u></h1>
</head>

<body>
    <header>
        <img src="logo.png" id="logo" onclick="location.href='index(AS).php';">
        <p id="h1A">Edit</p><p id="h1U">Child</p>
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
    <!--            <a href="editchild(AS).php" id="admAdr">Child Edit</a>-->
                <a href="editteacher(AS).php" id="admAdr">Teacher Edit</a>
                <a href="EditDB.php" id="admAdr">Control Panel</a>
                <div class="dropdown">
                    <button class="dropbtn">More
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a id="addr" href="Schedules(AS).php">Schedule</a>
                        <a id="admADR" href="Payment(AS).php">Payments</a>
                        <!-- <a id="addr" href="" >Gallery</a> -->
                        <a id="admAdr" href="event(AS).php">Events</a>
                        <a href="logout.php" id="admAdr">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <br>

    <div class= "childedit">
        <input name="name" type="text" id="Searchbar" placeholder="Search by name..">
        <button name="search" onclick="loadDoc();" id="searchBtn">Search</button>
        <div id="searchResult">

        </div>
    </div>

</body>
</html>
