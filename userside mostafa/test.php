<?php
require_once("teacherClass.php");
require_once("MainClass.php");
require_once("AddressClass.php");
require_once("nationalityClass.php");
require_once("MaritalClass.php");
require_once("ContactinfoClass.php");

$MainObject = new main();
$Teacherobject =  new teacher();
$Addressobject = new address();
$Nationalityobject = new nationality();
$Maritalstatusobject = new marital();
$ContactinfoObject = new contactinfo();

    $MainObject->fname = "mostafa";
    $MainObject->lname = "waly1";
    $MainObject->dob = '1997-11-27';
    $MainObject->ssn = 1234567890;
    $MainObject->utype = 2;
    $teacherID = $MainObject->insert();

    $Teacherobject->nationality = 1 ;
    $Teacherobject->address_id = 1;
    $Teacherobject->main_id = $teacherID ;
    $Teacherobject->mstatus_id = 1 ;
    $Teacherobject->acaqual1 = "a degree from";
    $Teacherobject->date_acaqual1 = 27111997;
    $Teacherobject->personal_qual1 = "a degree from ";
    $Teacherobject->date_ppersonalqual1 = 27111997;
    $Teacherobject->pempname = "farouk el said";
    $Teacherobject->pempaddress_id = 1;
    $Teacherobject->pempnum = 123456789;
    $Teacherobject->corsalary = 5000;
    $Teacherobject->reqsalary = 5000 ;
    $Teacherobject->othernursery = "because why the hell not!!";
    $Teacherobject->povnursery = "a nursery should be a palce of nurture";
    $Teacherobject->insert();

    $ContactinfoObject->main_id = $teacherID;
    $ContactinfoObject->cellphone = 123456789;
    $ContactinfoObject->insert();
    ?>