<?php
require_once("ContactinfoClass.php");

    $contact = new contactinfo();

    $contact->main_id = 5;  
    $contact->cellphone = "01000197120";
    $contact->insert();

    $contact->id = 1;
    $contact->main_id = 1;
    $contact->cellphone = "01140050616" ;
    $contact->update();

    $contact->cellphone = 4097;
    $contact->delete();


?>