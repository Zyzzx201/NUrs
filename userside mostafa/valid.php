<?php

    public function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //if the above is violated, select the error with id 5
    public function isempty($data){
        $error = "This field can't be left empty";
        if ($data = ""){
            return $error;
        }
    }
    //if the above is violated, select the error with id 1
    public function onlyletters($data){
        $error = "Only Letters and WhiteSpace allowed";
        if(!preg_match("/^[a-zA-z]*$/",$data)){
            return $error;
        }
    }
    //if the above is violated, select the error with id 2
    public function validemail($data){
        $emailerr = "Invalid Email Format";
        filter_var($data, FILTER_SANITIZE_EMAIL);
        if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
            return $emailerr;
        }
    }
    //if the above is violated, select the error with id 3
    public function numbersonly($data){
        $msg = 'Data entered was not number';
        if(!is_numeric($data)) {
           return $msg;
        }
    }
    //if the above is violated, select the error with id 4
    public function verifylength($data , $min , $max){
        $error = "The data entered has to be less than".$max."and more than".$min;
        if ($min>strlen($data)) && (strlen($data)<$max){
            return $error;
        }
    }
    //this one is an exception to the error thing because the error is produced by its parameters

    //in all the above you will remove the "return" and instead of it a select function will be run with the id of the error that i gave you


    /*
    use the following line to create a button(more or less) that will assist the user in printing the page hes currently on with all its contents.
    P.S. it doesnt appear like a button but rather a piece of text but if you press it, it will print open the print screen thingy.
    <a title="Print Screen" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;" >PRINT BUTTON</a>
    */
?>