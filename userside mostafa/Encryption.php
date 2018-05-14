<?php
//require_once("db.php");
class encrypt{
    public function encrypt1($password){
        $salt1 = "ironclad";
        $salt2 = "password";
        $ceasar = 8;
        $result = "";
        $result1 = "";

//      $newpass = $password;

        $newpass = $salt1.$password.$salt2; //salting
//        echo $newpass;
//        echo "<br>";
//        echo "after salting";
        //////works1
        for ($i = 0 ; $i<strlen($newpass);$i++){
            $result .= chr(ord($newpass{$i})+$ceasar+$i);
        }
        //echo $result;
        //echo "<br>";
        //echo "after casar";
        $newpass = sha1($result);
//        echo "<br>";
//        echo $newpass;
        return $newpass;
    }

}


$encrypt = new encrypt();
$encrypt->encrypt1("doha1234");

?>