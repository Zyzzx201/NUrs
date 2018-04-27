<?php session_start(); ?>
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
    <form method="POST" action="afterSaveBtn.php">
      <p id="h1t"><u>Preliminary Teacher Application:</u></p><br><br><hr>
      Full name:
      <input type="text" name="fname" id="boxes" > <!--box msh sh8al-->
      <input type="text" name="lname" id="boxes" ><br><br> <!--box msh sh8al-->
      Date of birth:
      <input type="Date" name="dob" id="boxes" ><br><br> <!--box msh sh8al-->
      Nationality:
      <input type="text" name="nat" id="boxes" ><br><br> <!--box msh sh8al-->
      Home Address:
      <select  id="boxes" name="address_id" >
        <?php require_once("AddressClass.php");
       $addOBJ3 = new Address();
       $names = $addOBJ3->getAllRoots();
       $size = count($names);
       for ($i=0; $i < $size ; $i++) {
         echo '<option value= ' .$names[$i].'>'.$names[$i].'</option>';
       }
       ?>
      </select>  <br><br> <!--box msh sh8al name="address"  -->
      Mobile number:
      <input type="text" name="cellphone" maxlength="11" id="boxes" ><br><br> <!--box msh sh8al-->
      Social Security Number:
      <input type="text" name="ssn" maxlength="11" id="boxes" ><br><br>
      Marital Status:<br>
      <input type="radio" name="mstatus" value="Single" checked>Single<br>
      <input type="radio" name="mstatus" value="Married">Married<br>
      <input type="radio" name="mstatus" value="Divorced">Divorced<br>
      <input type="radio" name="mstatus" value="Widowed">Widowed<br><br>
      Academic Qualifications with Dates:<br>
      Qualification 1:
      <textarea rows="1" cols="50" id="boxes"  name="acaqual1"></textarea>  <!--box msh sh8al-->
      <input type="Date" name="date_acaqual1" id="boxes" ><br>
      <!--Qualification 2:
      <textarea rows="1" cols="50" id="boxes"  name="acaqual2"></textarea>
      <input type="Date" name="date_acaqual2" id="boxes" ><br>
      Qualification 3:
      <textarea rows="1" cols="50" id="boxes"  name="acaqual3"></textarea>
      <input type="Date" name="date_acaqual3" id="boxes" ><br>
      Qualification 4:
      <textarea rows="1" cols="50" id="boxes"  name="acaqual4"></textarea>
      <input type="Date" name="date_acaqual4" id="boxes" ><br>
      Qualification 5:
      <textarea rows="1" cols="50" id="boxes"  name="acaqual5"></textarea>
      <input type="Date" name="date_acaqual5" id="boxes" ><br--><br><hr>
      Professional Qualifications with Dates:<br>
      Qualification 1:
      <textarea rows="1" cols="50" id="boxes"  name="personal_qual1"></textarea>
      <input type="Date" name="date_ppersonalqual1" id="boxes" ><br>
      <!--Qualification 2:
      <textarea rows="1" cols="50" id="boxes"  name="personal_qual2"></textarea>
      <input type="Date" name="date_ppersonalqual2" id="boxes" ><br>
      Qualification 3:
      <textarea rows="1" cols="50" id="boxes"  name="personal_qual3"></textarea>
      <input type="Date" name="date_ppersonalqual3" id="boxes" ><br>
      Qualification 4:
      <textarea rows="1" cols="50" id="boxes"  name="personal_qual4"></textarea>
      <input type="Date" name="date_ppersonalqual4" id="boxes" ><br>
      Qualification 5:
      <textarea rows="1" cols="50" id="boxes"  name="personal_qual5"></textarea>
      <input type="Date" name="date_ppersonalqual5" id="boxes" ><br--><br><hr>

      Present Employer's Name:
      <input type="text" name="pempname" id="boxes"   ><br><br>
      Present Employer's Address:
      <select  id="boxes" name="pempaddress_id" >
        <?php require_once("AddressClass.php");
       $addOBJ3 = new Address();
       $names = $addOBJ3->getAllRoots();
       $size = count($names);
       for ($i=0; $i < $size ; $i++) {
         echo '<option value= ' .$names[$i].'>'.$names[$i].'</option>';
       }
       ?>
      </select><br><br>
      Present Employer's phone number:
      <input type="text" name="pempnum" id="boxes"  maxlength="11"  ><br><br><hr>

      Current or Last Salary:
      <input type="number" name="corlsalary" id="boxes"  min="1" max ="10000"  ><br><br>
      Requested Salary:
      <input type="number" name="reqsalary" id="boxes"  min="1" max ="10000"  ><br><br>

      Have you been interviewed recently at other nurseries? if yes, please mention names:<br>
      <input type="text" name="othernursery" id="boxes" ><br><br>

      In your point of view, how do you see an ideal nursery regarding its academic side?<br>
      <textarea rows="1" cols="50" id="boxes"  name="povnursery"></textarea><br>

      <br>
      <input type="submit" name="Savebtn" value="Submit Form" id="Sbtn">
      <input type="reset"  value="Reset Form" id="REbtn">
    </form>
  </div>

  <div id="footer" style="top:250%;">
		<object type="text/html" data="Contactus.php" id="ftr"></object>
	</div>

</body>
</html>
<?php
session_unset();
session_destroy();
 ?>
