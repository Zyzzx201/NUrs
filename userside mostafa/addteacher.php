<html>
<head>

  <title>Fun & Learn: Teacher App</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="StyleSheet.css">
  <header id="bkbtn">
    <img src="logo.png" id="logo" onclick="location.href='/index.php';">
    <button type="button" id="bkbtn" onclick="location.href='/index.php';">Back</button>
  </header>
</head>

<body>


<div class = "teacher1">   
<form <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">

Full name:<br>
<input type="text" name="Fname" required><br>
Date of birth:<br>
<input type="date" name="tdob" required><br>
Nationality:<br>
<input type="number" name="nat" required><br>
Home Address:<br>
<input type="text" name="address1" required><br>
Telephone number:<br>
<input type="text" name="Tel" maxlength="8" required><br>
Mobile number 1:<br>
<input type="text" name="number1" maxlength="11" required><br>
Mobile number 2:<br>
<input type="text" name="number2" maxlength="11"><br>
Marital Status:<br>
<input type="radio" name="status" value="Single" checked>Single<br>
<input type="radio" name="status" value="Married">Married<br>
<input type="radio" name="status" value="Divorced">Divorced<br>
<input type="radio" name="status" value="Widowed">Widowed<br>
Academic Qualifications with Dates:<br>
Qualification 1:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q1"><br>
Qualification 2:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q2"><br>
Qualification 3:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q3"><br>
Qualification 4:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q4"><br>
Qualification 5:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q5"><br>
<hr>
Professional Qualifications with Dates:<br>
Qualification 1:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q11"><br>
Qualification 2:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q22"><br>
Qualification 3:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q33"><br>
Qualification 4:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q44"><br>
Qualification 5:
<textarea rows="1" cols="50"></textarea>
<input type="Date" name="q55"><br>
<hr>

Present Employer's Name:<br>
<input type="text" name="Emname" required><br>
Present Employer's Address:<br>
<input type="text" name="num123" ><br>
Present Employer's phone number:<br>
<input type="text" name="Emnum" maxlength="11" required><br>
<hr>

Current or Last Salary:<br>
<input type="number" name="salary" min="1" max ="10000" required><br>
Required Salary:<br>
<input type="number" name="salary1" min="1" max ="10000" required><br>

Have you been interviewed recently at other nurseries? if yes, please mention names:<br>
<input type="text" name="other1"><br>

In your point of view, how do you see an ideal nursery regarding its academic side?
<textarea rows="1" name="other2" cols="50"></textarea>

<br>

<hr><input type="submit" value="Submit Form">
<input type="reset"  value="Reset Form">
</body>
    <?php
    require_once('db.php');
    class teacheradd 
    {
        var $Fullname,$Dateofbirth,$Nationality,$HomeAddress,$Telnumber,$Mobilenumber1,$Mobilenumber2,$MarStat,$AQual1,$AQual2,$AQual3,$AQual4,$AQual5,$PQual1,$PQual2,$PQual3,$PQual4,$PQual5,$PresEmName,$PresEmAddr,$PresEmphonenumb,$CurrSalary,$ReqSal,$intna,$ac;
        
            function __construct() {
            $Fullname=$Dateofbirth=$Nationality=$HomeAddress=$Telnumber=$Mobilenumber1=$MarStat=$AQual1=$AQual2=$AQual3=$AQual4=$AQual5=$PQual1=$PQual2=$PQual3=$PQual4=$PQual5=$PresEmName=$PresEmAddr=$PresEmphonenumb=$CurrSalary=$ReqSal=$intna=$ac=""
        }
        
        
         function valid($data)
	   {
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	   }
        
        function teacherreg():void
        {
            if($_SERVER["REQUEST_METHOD"] == "POST"){
	       $Fullname=valid($_POST["Fname"]);
            if(!preg_match("/^[a-zA-Z]*$/",$Fullname)){
            $Fullname="Only Letters and wightspaces are Allowed!";
            $Fullname="";
	       }
            $Dateofbirth=valid_POST["tdob"]);
            $Nationality=valid($_POST["nat"]);
            $HomeAddress=valid($_POST["address1"]);
            $Telnumber=valid($_POST["Tel"]);
            $Mobilenumber1=valid($_POST["number1"]);
            $Mobilenumber2=valid($_POST["number2"]);
            $MarStat=valid($_POST["status"]);
            $AQual1=valid($_POST["q1"]);
            $AQual2=valid($_POST["q2"]);
            $AQual3=valid($_POST["q3"]);
            $AQual4=valid($_POST["q4"]);
            $AQual5=valid($_POST["q5"]);
            $PQual1=valid($_POST["q11"]);
            $PQual2=valid($_POST["q22"]);
            $PQual3=valid($_POST["q33"]);
            $PQual4=valid($_POST["q44"]);
            $PQual5=valid($_POST["q55"]);
            $PresEmName=valid($_POST["Emname"]);
            $PresEmAddr=valid($_POST["num123"]);
            $PresEmphonenumb=valid($_POST["Emnum"]);
            $CurrSalary=valid($_POST["salary"]);
            $ReqSal=valid($_POST["salaray1"]);
            $intna=valid($_PO ST["other1"]);
            $ac=valid($_POST["other2"]);

	  
                if(($Fullname!="")&&($Dateofbirth!="")&&($Nationality!="")&&($HomeAddress!="")&&($Telnumber!="")&&($Mobilenumber1!="")&&($MarStat!="")&&($AQual1!="")&&($AQual2!="")&&($AQual3!="")&&($AQual4!="")&&($AQual5!="")&&($PQual1!="")&&($PQual2!="")&&($PQual3!="")&&($PQual4!="")&&($PQual5!="")&&($PresEmName!="")&&($PresEmAddr!="")&&($PresEmphonenumb!="")&&($CurrSalary!="")&&($ReqSal!="")&&($intna!="")&&($ac!="")){
        
	   $sql="INSERT INTO teacher(nationality,address_id,main_id,telnum,mobile1,maritalstatus,acaqual1,date_acaqual1,personal_qual1,date_ppersonalqual1,pempname,pempaddress_id,pempnum,corlsalary,reqsalary,othernursery,povnursery VALUES('$Nationality',' ', ' ', '$HomeAddress',' ', '$Telnumber', '$Mobilenumber1', '$MarStat', ('$AQual1', '$AQual2', '$AQual3', '$AQual4', '$AQual5'),('$PQual1', '$PQual2', '$PQual3', '$PQual4', '$PQual5'), '$PresEmName', '$PresEmAddr', '$PresEmphonenumb', '$CurrSalary', '$ReqSal', '$intna', '$ac')";
    
	 if($conn->query($sql)===true){ 
	
	    alert("Your Application has been submitted Successsfully!");    
        header("Location:/index.php");
		exit;
	
	  }
	  else{
	    echo "error";
	  }
	}    
            }
}
   
?>

</html>
