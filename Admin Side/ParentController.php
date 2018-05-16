<?php
require_once("ParentClass.php");

class parentsC
{
   //private $last_id;
  public function PselectV($id)
  {
    $Pobj1 = new parents();
    $Pobj1->child_id=$id;
    $Prow1 = $Pobj1->select();
    return $Prow1;
  }

    public function PselectParents($id)
    {
        $Pobj1 = new parents();
        $Pobj1->child_id=$id;
        $Prow1 = $Pobj1->selectParents();
        return $Prow1;
    }


}


 ?>
