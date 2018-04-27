<?php
require_once("Encryption.php");

    $contact = new encrypt();
    $password = "mostafa";  
    $password1 = "mostafa";  
    $contact->encrypt1($password);
    $contact->encrypt1($password1);


?>