<?php
require_once("eventClass.php");
require_once("valid.php");

$EVobj1 = new events();
if (isset($_POST['saveEV'])) {
    $_POST['EVadditional'] = valid::test_input($_POST['EVadditional']);
    $result = valid::isempty($_POST['EVadditional']);
//    $result = valid::onlyletters($_POST['EVadditional']);
    $EVobj1->description = $_POST['EVadditional'];
    $EVobj1->Time = $_POST['EVtime'];
    $EVobj1->date = $_POST['EVdate'];

    $EVobj1->insert();
    header('location:event.php');
}
$EVobj2 = new events();
if (isset($_POST['updateEV'])){
    $_POST['EVUid'] = valid::test_input($_POST['EVUid']);
    $result = valid::isempty($_POST['EVUid']);
    $result = valid::numbersonly($_POST['EVUid']);
    $EVobj2->id = $_POST['EVUid'];

    $_POST['EVnew'] = valid::test_input($_POST['EVnew']);
    $result = valid::isempty($_POST['EVnew']);
    //$result = valid::onlyletters($_POST['EVnew']);
    $EVobj2->description = $_POST['EVnew'];
    $EVobj2->Time = $_POST['EVUtime'];
    $EVobj2->date = $_POST['EVUdate'];

    $EVobj2->update();
    header('location:event.php');
}


$EVobj3 = new events();
if (isset($_POST['deleteEV'])) {
    $_POST['EVid'] = valid::test_input($_POST['EVid']);
    $result = valid::isempty($_POST['EVid']);
    $result = valid::numbersonly($_POST['EVid']);
    $EVobj3->id = $_POST['EVid'];

    $EVobj3->delete();
    header('location:event.php');
}





class eventsC{
    public function EVselectV()
    {
        $EVobj1 = new events();
        $EVrow1 = $EVobj1->select();
        return $EVrow1;
    }

    public function EVselectAll()
    {
        $EVobj2 = new events();
        $EVrow2 = $EVobj2->selectAll();
        while ($row = mysqli_fetch_assoc($EVrow2)){
            echo $row['id'];
            echo " - ";
            echo $row['description'];
            echo " on ";
            echo $row['date'];
            echo " at ";
            echo $row['Time'];
            echo "<br>";
        }
    }
}