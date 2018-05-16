<?php
require ("SalaryClass.php");
/**
 * Created by PhpStorm.
 * User: Demon Core
 * Date: 5/13/2018
 * Time: 8:09 PM
 */
//from here on our ull treat the decorator AS IF ITS A CONTROLLER, but bear in mind IT IS NOT A CONTROLLER, since this is the decorative design pattern
// and MVC is an entirely different design pattern
Class Salary{
    private $amount;
    private $teacherid;
    function __construct($am, $teacher_id){
        $this->amount = $am;
        $this->teacherid = $teacher_id;
    }
    function getAmount(){
        return $this->amount;
    }
    function getteacherid(){
        return $this->teacherid;
    }
}
Class SalaryDecorator{
    protected $salary;//object from class salary
    protected $amount;
    public function __construct(Salary $salary_in){
        $this->salary = $salary_in;
        $this->amount = $this->salary->getAmount();
        //$this->resetTitle();
    }
//    function resetTitle(){
//        $this->amount = $this->salary->getAmount();
//    }
    function showAmount(){
        return $this->amount;
    }
}
Class BonusDecorator extends SalaryDecorator{
    private $btd;
    public function __construct(SalaryDecorator $btd_in){
        $this->btd = $btd_in;
    }
    function addBonus($x){
        $this->btd->amount += $x; //$x will be replace with the bonus COLOUMN recieved from the database with the select function
    }
}
Class DeductionDecorator extends SalaryDecorator{
    private $btd;
    public function __construct(SalaryDecorator $btd_in){
        $this->btd = $btd_in;
    }
    function minusDeduction($x){
        $this->btd->amount -= $x; //$x will be replace with the deduct COLOUMN recieved from the database with the select function
    }
}
$Salary = new Salary(1000,1); //here the amount and the teacher id will be retrieved from the database and replaced with the parameters of
//this function RESPECTIVELY
$decorator = new SalaryDecorator($Salary);
$Deductiondecorator = new DeductionDecorator($decorator);
$BonusDecorator = new BonusDecorator($decorator);
$BonusDecorator->addBonus(500); // x will be filled from the the bonus recieved from the database
$Deductiondecorator->minusDeduction(500); //x will be filled from the the deduct recieved from the database
$result = $decorator->showAmount();
//show amount will insert the  value returned with the  month_id and the teacher_id into the DB
?>