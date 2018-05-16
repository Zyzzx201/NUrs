<?php
require_once ('errorClass.php');
Class valid{
    public static function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        // $error->id = 5;
        // $result = $error->select();
        // $row = msqli_fetch_array($result);
        // return $row[1];
    }
    //if the above is violated, select the error with id 5
    public static function isempty($data){
        $error = new error();
        //$error = "This field can't be left empty";
        if ($data = ""){
            //return $error;
            $error->id = 1;
            $result = $error->select();
            $row = mysqli_fetch_array($result);
            return $row[1];
        }
    }
    //if the above is violated, select the error with id 1
    public static function onlyletters($data){
        $error = new error();
        $error = "Only Letters and WhiteSpace allowed";
        if(!preg_match("/^[a-zA-z]*$/",$data)){
            //return $error;
            $error->id = 2;
            $result = $error->select();
            $row = mysqli_fetch_array($result);
            return $row[1];
        }
    }
    //if the above is violated, select the error with id 2
    public static function validemail($data){
        //$emailerr = "Invalid Email Format";
        $error = new error();
        filter_var($data, FILTER_SANITIZE_EMAIL);
        if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
            //return $emailerr;
            $error->id = 3;
            $result = $error->select();
            $row = mysqli_fetch_array($result);
            return $row[1];
        }
    }
    //if the above is violated, select the error with id 3
    public static function numbersonly($data){
        $error = new error();
        //$msg = 'Data entered was not number';
        if(!is_numeric($data)) {
            //return $msg;
            $error->id = 4;
            $result = $error->select();
            $row = mysqli_fetch_array($result);
            return $row[1];
        }
    }
    //if the above is violated, select the error with id 4
    public static function verifylength($data , $min , $max){
        $error = "The data entered has to be less than".$max."and more than".$min;
        if (($min>strlen($data)) || (strlen($data)>$max)){
            return $error;
        }
    }
}
    //this one is an exception to the error thing because the error is produced by its parameters
    /*
    use the following line to create a button(more or less) that will assist the user in printing the page hes currently on with all its contents.
    P.S. it doesnt appear like a button but rather a piece of text but if you press it, it will print open the print screen thingy.
    <a title="Print Screen" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;" >PRINT BUTTON</a>
    */
?>
