<?php
require_once("EmergencyClass.php");

$emer = new emergency();
$emer->main_id = 1;
$emer->ecname = "doha tariq";
$emer->ecnum = 1140050616;
$emer->ecaddress_id = 1;
$emer->relation = "sister";
$emer->extrainfo = "stuff";
$emer->insert();
?>
