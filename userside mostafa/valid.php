<?php

    public function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function isempty($data){
        $error = "This field can't be left empty";
        if ($data = ""){
            return $error;
        }
    }
    public function onlyletters($data){
        $error = "Only Letters and WhiteSpace allowed";
        if(!preg_match("/^[a-zA-z]*$/",$data)){
            return $error;
        }
    }
    public function validemail($data){
        $emailerr = "Invalid Email Format";
        filter_var($data, FILTER_SANITIZE_EMAIL);
        if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
            return $emailerr;
        }
    }
    public function numbersonly($data){
        $msg = 'Data entered was not number';
        if(!is_numeric($data)) {
           return $msg;
        }
    }
    public function verifylength($data , $min , $max){
        $error = "The data entered has to be less than".$max."and more than".$min;
        if ($min>strlen($data)) || (strlen($data)>$max){
            return $error;
        }
    }
    /*
    use the following line to create a button(more or less) that will assist the user in printing the page hes currently on with all its contents.
    P.S. it doesnt appear like a button but rather a piece of text but if you press it, it will print open the print screen thingy.
    <a title="Print Screen" alt="Print Screen" onclick="window.print();" target="_blank" style="cursor:pointer;" >PRINT BUTTON</a>
    */
?>