<?php
require("CoursesClass.php");
require("scheduleClass.php");

$obj = new Courses();
$obj1 = new Schedule();
//$obj->description = "FUN AND STUFF";
//$obj->insert();
$obj1->course_id = 30;
$obj1->childtype_id = 1;
$obj1->start = 800;
$obj1->ends = 1000;
$obj1->insert();

/**
 * Created by PhpStorm.
 * User: Daizy
 * Date: 5/12/2018
 * Time: 1:05 PM
 */
?>