<?php
require_once("Encryption.php");

    $contact = new encrypt();
    $contact1 = new admin();
    $contact1->username = "";
    $password = "mostafa";
    $contact->encrypt1($password);
    $contact1->password ="" ;
    $contact1->insert();




?>