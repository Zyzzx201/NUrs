<?php
require_once("Encryption.php");
require_once("AdminClass.php");

    $contact = new encrypt();
    $adminOBJ =  new admin();
    $adminOBJ->username = "doha";
    $password = "doha1234";
    $adminOBJ->passwords = $contact->encrypt1($password);
    $adminOBJ->teacher_id = "1";
    $adminOBJ->insert();
$result = $contact->encrypt1($password);
echo $result;

?>