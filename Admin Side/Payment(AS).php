<?php
session_start();
if(empty($_SESSION["username"])){
    header('location:adminlogin.php');
}
else {
?>
<html>
<head>
    <title>Fun & Learn: Payments</title>
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
        <p id="h1S">Payments</p>
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
                <a href=""></a>
                <div class="dropdown">
                    <button class="dropbtn">More
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="EditDB.php" id="admAdr">Control Panel</a>
                        <a id="admAdr" href="event(AS).php">Events</a>
                        <a id="addr" href="Schedules(AS).php">Schedule</a>
    <!--                    <a id="admADR" href="Payment(AS).php">Payments</a>-->
                        <a href="logout.php" id="admAdr">Logout</a>
                        <!--<a id="addr" href="" >Gallery</a>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="payments">

            <?php
                require_once("OptionController.php");
                require_once("PaymentoptController.php");
                require_once("PaymentController.php");

                $POBJ3 = new paymentC();
                $result = $POBJ3->PselectAll();


            ?>
            <form action="Payment(AS).php" method="post">
                Payment Method:
                <select name="payment" >
                    <option value="-1"></option>
                    <?php  //dh bigib mn payment
                    while ($row = mysqli_fetch_array($result))
                        echo "<option value='".$row['id']."'>".$row['name']."</option>";

                    ?>
                </select>
                <button type="submit" name="optionsChoice">Choose</button>
                <?php
                    $POobj1 = new payoptC(); //dh hya5od el id w yrmih fe paymentOPT
                    $POrow1 = $POobj1->POselectid($row['id']);
                foreach ($POrow1 as $POid) {
                    //$POid = $POrow1['id'];
                    if ($row['id'] == $POid['payment_id']) {
                        $Oobj1 = new optionsC(); //dh hya5od el id eli gai mn paymentOPT w select bih mn options
                        $Orow1 = $Oobj1->OselectV($POid['id']);
                            while ($row2 = mysqli_fetch_array($Orow1))
                                echo "<input type='".$row2['type']."' name='OPTname' value='".$row2['name']."'>";
                    }
                }
                ?>
            </form>
<!--                <div class="hovertip">-->
<!--                     <span class="hovertiptext">This could be account name, account no.-->
<!--                     expiration date, etc...</span>-->
<!--                    Info: <input type="" name="OPTname">-->
<!--                </div>-->
        <form action="afterCruds.php" method="post">

        </form>
    </div>

</body>
</html>
