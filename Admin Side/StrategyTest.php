<?php
/**
 * Created by PhpStorm.
 * User: Demon Core
 * Date: 5/13/2018
 * Time: 7:53 PM
 */
class StrategyContext
{
    private $Strategy = NULL;
    public function __construct($encryption_type) //inside the switch case thingy
    {
        switch ($encryption_type)
        {
            case "1": // case 1
                $this->Strategy = new Salting(); //name of the encryption to be used
                break;
            case "2": // case 2
                $this->Strategy = new Salting_caesar();
                break;
            case "3": // case 3
                $this->Strategy = new Salt_caesar_hash();
                break;
        }
    }
    public function getencryptionmethod($password) // public function getencryptionmethod($password)
    {
        return $this->Strategy->encrypt($password);
    }
}
interface StrategyInterface
{
    public function encrypt($password); //encrypt($password)
}
class Salting implements StrategyInterface //encryption method implements stategy interface
{
    public function encrypt($password)
    {
        $salt1 = "ironclad";
        $salt2 = "password";
        $newpass = $salt1.$password.$salt2;
        return ($newpass);
    }
}
class Salting_caesar  implements StrategyInterface
{
    public function encrypt($password)
    {
        $newpass= null;
        $ceasar = 8;
        $salt1 = "ironclad";
        $salt2 = "password";
        $newpass = $salt1.$password.$salt2;
        for ($i = 0 ; $i<strlen($newpass);$i++){
            $newpass.= chr(ord($newpass{$i})+$ceasar+$i);
        }
        return $newpass;
    }
}
class Salt_caesar_hash implements StrategyInterface
{
    public function encrypt($password)
    {
        $newpass= null;
        $ceasar = 8;
        $salt1 = "ironclad";
        $salt2 = "password";
        $newpass = $salt1.$password.$salt2;
        $result = "";
        for ($i = 0 ; $i<strlen($newpass);$i++){
            $result.= chr(ord($newpass{$i})+$ceasar+$i);
        }
        $result = sha1($result);
        return $result;
    }
}
$strategy1 = new StrategyContext("3");
echo $strategy1->getencryptionmethod("doha1234");
?>