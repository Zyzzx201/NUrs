<?php
//require_once("db.php");
    class encrypt{
        public function encrypt1($password){

            $salt1 = "ironclad";
            $salt2 = "password";
            $ceasar = 8;
            $result = "";
            $result1 = "";

//            $newpass = $password;
            $newpass = $salt1.$password.$salt2; //salting
            //echo $newpass;
            //echo "<br>";
            //////works1
            for ($i = 0 ; $i<strlen($newpass);$i++){
                $result .= chr(ord($newpass{$i})+$ceasar+$i);                
            }
            
            //echo $result;
            //echo "<br>";
           
            // for ($i = 0 ; $i<strlen($result);$i++){
            //     $result1 .= chr(ord($result{$i})-$ceasar-$i);                
            // }

            // echo $result1;
            $newpass = sha1($result);
            return $newpass;
        }
        
     }



?>