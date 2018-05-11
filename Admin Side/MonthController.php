<?php
require_once("MonthClass.php");
require_once("valid.php");


$MonthOBJ3 = new month();
if (isset($_POST['saveMonth'])) {
    $_POST['MonthAdd'] = valid::test_input($_POST['MonthAdd']);
    $result = valid::isempty($_POST['MonthAdd']);
    $result = valid::onlyletters($_POST['MonthAdd']);
    $MonthOBJ3->name = $_POST['MonthAdd'];

    $MonthOBJ3->insert();
    header('location:EditDB.php');
}

$MonthOBJ4 = new month();
if (isset($_POST['updateMonth'])) {
    //$_POST['MonthUid'] = valid::test_input($_POST['MonthUid']);
    //$result = valid::numbersonly($_POST['MonthUid']);
    $MonthOBJ4->id = $_POST['MonthUid'];

    $_POST['newMonth'] = valid::test_input($_POST['newMonth']);
    $result = valid::isempty($_POST['newMonth']);
//    $result = valid::onlyletters($_POST['newMonth']);
    $MonthOBJ4->name = $_POST['newMonth'];

    $MonthOBJ4->update();
    header('location:EditDB.php');
}

$MonthOBJ5 = new month();
if (isset($_POST['deleteMonth'])) {
    $_POST['Monthid'] = valid::test_input($_POST['Monthid']);
    $result = valid::numbersonly($_POST['Monthid']);
    $MonthOBJ5->id = $_POST['Monthid'];
    $MonthOBJ5->delete();
    header('location:EditDB.php');
}

class monthC {
    public function MonselectV($id)
    {
        $Monthobj1 = new month();
        $Monthobj1->id=$id;
        $Monthrow1 = $Monthobj1->select();
        return $Monthrow1;
    }

    public function MonselectALL()
    {
        $Monthobj2 = new month();
        $Monthrow2 = $Monthobj2->selectAll();
        while ($row = mysqli_fetch_assoc($Monthrow2)){
            echo $row['id'];
            echo " - ";
            echo $row['name'];
            echo "<br>";
        }
    }
}



?>