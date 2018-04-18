<?php
    require_once("MainClass.php");
    require_once("ParentClass.php");
    require_once("AddressClass.php");
    require_once('EmergencyClass.php');
    //Child Object and Adding in the Database.
    $MainObject = new main();
    $MainObject->fname = $_POST['cname1'];
    $MainObject->lname = $_POST['cname2'];
    $MainObject->dob = $_POST['dob'];
    $MainObject->ssn = $_POST['ssn'];
    $MainObject->utype = 2;
    $ChildID = $MainObject->insert();
    //Father Object and Adding in the Database.
    $FatherObject = new main();
    $FatherObject->fname = $_POST['FFname'];
    $FatherObject->lname = $_POST['FLname'];
    $FatherObject->dob = $_POST['Fdob'];
    $FatherObject->ssn = $_POST['Fssn'];
    $FatherObject->utype = 2;
    $FatherID = $FatherObject->insert();
    //Mother Object and Adding in the Database.
    $MotherObject = new main();
    $MotherObject->fname = $_POST['MFname'];
    $MotherObject->lname = $_POST['MLname'];
    $MotherObject->dob = $_POST['Mdob'];
    $MotherObject->ssn = $_POST['Mssn'];
    $MotherObject->utype = 2;
    $MotherID = $MotherObject->insert();

    //Filling the Parent Class and Adding.
    $ParentObject = new Parent1();
    $ParentObject->child_id = $ChildID;
    $ParentObject->mother_id = $MotherID;
    $ParentObject->father_id = $FatherID;
    $ParentObject->fnum = $_POST['number1'];
    $ParentObject->ffbook = $_POST['FFb'];
    $ParentObject->foccupation = $_POST['Focc'];
    $ParentObject->fofficenum = $_POST['Foff'];
    $ParentObject->mnum = $_POST['Mnumber'];
    $ParentObject->mfbook = $_POST['MFb'];
    $ParentObject->moccupation = $_POST['Mocc'];
    $ParentObject->mofficenum = $_POST['Moff'];
    $ParentObject->mstatus = $_POST['status'];
    $AddressObject = new Address();
    $AddressObject->fillobject($_POST['address']);
    echo $AddressObject->id;
    $ParentObject->address_id = $AddressObject->id;
    $ParentObject->homenum = $_POST['htn'];
    $ParentObject->usualpickup = $_POST['name1'];
    $ParentObject->insert();
 
    //Emergency Info
    $EmerObject = new emergency();
    $EmerObject->main_id = $ChildID;
    $EmerObject->ecname = $_POST['ern'];
    $AddressObject = new Address();
    $AddressObject->fillobject($_POST['address1']);
    $EmerObject->ecaddress_id = $AddressObject->id;
    $EmerObject->relation = $_POST['rel'];
    $EmerObject->ecnum = $_POST['contact1'];
    $EmerObject->extrainfo = $_POST['info'];
    $EmerObject->insert();



?>