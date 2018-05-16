<?php
require_once("OptionClass.php");

$optOBJ1 = new optionsC();
if (isset($_POST['optionsChoice'])){

}

class optionsC
{

    public function OselectV($id)
    {
        $Oobj1 = new options();
        $Oobj1->id=$id;
        $Orow1 = $Oobj1->select();
        return $Orow1;
    }
    public function OselectAll()
    {
        $Oobj2 = new options();
        $Orow2 = $Oobj2->selectAll();
        return $Orow2;
    }

}

?>
