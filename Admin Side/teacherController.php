<?php


class TeacherController
{

  public function teacherModel($Tmodel)
  {
    require_once("teacherCLass'.$Tmodel.'.php");
    return new $Tmodel();
  }
  public function teacherView($Tview, $Tdata=[])
  {
    require_once("acceptteacher '.$Tview.'.php");
  }
}

 ?>
