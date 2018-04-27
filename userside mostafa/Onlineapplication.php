<?php session_start(); ?>
<html>
<head>
	<title>Fun & Learn: Online Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('ptdyz').style.display = 'none';
			document.getElementById('navMenu').style.display = 'none';
			//document.getElementById('sBar').style.display = 'none';
		};
		function changeM(x) {
			x.classList.toggle("change");
			document.getElementById('navMenu').style.display = 'block';
			if (document.getElementById('Menicon').clicked){
				document.getElementById('navMenu').display = 'none';
			}
		};
		/*function sgaBox() {
			document.getElementById('sBar').style.display = 'block';
		};
		function cancelGA(){
			document.getElementById('sBar').style.display= 'none';
		};*/
		function ptdays(){
			if (document.getElementById('PTD').checked) {
        		document.getElementById('ptdyz').style.display = 'block';
			}
			else if (document.getElementById('ozr').checked || document.getElementById('ozr2').checked){
				document.getElementById('ptdyz').style.display = 'none';
				document.getElementById('sun').checked= false;
				document.getElementById('mon').checked= false;
				document.getElementById('tue').checked= false;
				document.getElementById('wed').checked= false;
				document.getElementById('thu').checked= false;
			}
		};
		function KeepCount() {
			var count = 0;
			if (document.app.sun.checked)
			{count = count + 1;}
			if (document.app.mon.checked)
			{count = count + 1;}
			if (document.app.tue.checked)
			{count = count + 1;}
			if (document.app.wed.checked)
			{count = count + 1;}
			if (document.app.thu.checked)
			{count = count + 1;}
			if (count > 3)
			{
				alert('Please only pick 3 days or one of the other options.');
				document.getElementById('ozr').checked= true;
			}
		};
		function relocate(){
			if (document.getElementById('editp').clicked) {
				window.location= 'http://localhost/stuff/Lab01/Edit.php';
			}
			else if (document.getElementById('deletep').clicked){
				window.location= 'http://localhost/stuff/Lab01/Delete.php';
			}
		};
	</script>
</head>

<body>

	<header>
		<img src="logo.png" id="logo" onclick="location.href='/index.php';">
		<p id="h1O">Online</p><p id="h1A">Application</p>
		<div class="micon" onclick="changeM(this)" id="Menicon">
			<div class="b1"></div>
			<div class="b2"></div>
			<div class="b3"></div>
		</div>
		<div id="navMenu" >
			<div id="myTopnav" class="topnav">
				<a id="addr" href="/Onlineapplication.php" >Online Application</a>
				<a id="addr" href="/About us.php" >About Us</a>
				<a id="addr" href="/addteacher.php" >Teacher Registration</a>
				<a id="addr" href="/Schedules.php" >Schedule</a>
				<a id="addr" href="" >Gallery</a>
				<a id="addr" href="" >Events</a>
				<!--div class="dropdown">
					<button class="dropbtn">Admin
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="/acceptteacher.php" id="admAdr">Teacher Acceptance</a>
						<a href="/Addusers.php" id="admAdr">User Add</a>
						<a href="/deleteuser.php" id="admAdr">User Delete</a>
						<a href="/editteacher.php" id="admAdr">Teacher Edit</a>
						<a href="#" class="secretGABtn" onclick="sgaBox()">Login</a>
					</div>
				</div-->
			</div>
		</div>
	</header>

	<div class = "Oappform">
			<h1 align="center"> Application Form </h1>
			<form name="app" method="POST" action="childafterSave.php">
				Child's name:
				<input type="text" name="cfname" id="boxes" > <!--box msh sh8al-->
				<input type="text" name="clname" id="boxes" ><br><br> <!--box msh sh8al-->
				Date of birth:
				<input type="date" name="dob" id="boxes" ><br><br> <!--box msh sh8al>
				Present age:
				<input type="number" name="page" min="1" max ="5" id="boxes" ><br> <box msh sh8al-->
				Child's Social number:
				<input type="text" name="cssn" maxlength="11" id="boxes" ><br><br>
				Desired Date of entry:
				<input type="date" name="ddoe" min="1" max ="5" id="boxes" ><br> <!--box msh sh8al-->
				<hr>
				Father's name:
				<input type="text" name="ffname" id="boxes" > <!--box msh sh8al-->
				<input type="text" name="flname" id="boxes" ><br><br> <!--box msh sh8al-->
				Father's Social security number:
				<input type="text" name="fssn" maxlength="11" id="boxes" ><br><br> <!--box msh sh8al-->
				Facebook Account:
				<input type="text" name="ffbook" id="boxes"><br><br> <!--box msh sh8al-->
				Occupation:
				<input type="text" name="foccupation" id="boxes" ><br> <!--box msh sh8al-->
				<hr>
				Mother's name:
				<input type="text" name="mfname" id="boxes" >
				<input type="text" name="mlname" id="boxes" ><br><br>
				Mother's Social security number:
				<input type="text" name="mssn" maxlength="11" id="boxes" ><br><br>
				Facebook Account:
				<input type="text" name="mfbook" id="boxes"><br><br>
				Occupation:
				<input type="text" name="moccupation" id="boxes" ><br>
				<hr>
				Parents Are:
				<label><input type="radio" name="mstatus_id" value="Married" > Married</label>
				<label><input type="radio" name="mstatus_id" value="Separated" > Separated<br><br></label>
				Home Address:
				<select  id="boxes" name="address_id" >
	        <?php require_once("AddressClass.php");
					$addOBJ3 = new Address();
					$names = $addOBJ3->getAllRoots();
					$size = count($names);
					for ($i=0; $i < $size ; $i++) {
						echo '<option value= '.$names[$i].'>'.$names[$i].'</option>';
					}
					?>
	      </select> <br><br>
				Home Telephone number:
				<input type="text" name="homenum" maxlength="8"  id="boxes"><br><br>
				Name of the person who will usually pick up the child:
				<input type="text" name="usualpickup" id="boxes" ><br><br>
				<p><u>Under any circumstance we will not give the child to any other person unless the parents will inform us previously with the identity of this person</u>.</p>
				<p><u>*Nursery is serving 2 nutritious meals included in the monthly fees.</u></p>
				<hr>
				<!-- Needs the  field to be made as a javascript function-->
				<h1 align="center"> Requested for Attendance</h1>
				Please fill in with a tick below in order of preference: <br>
			  <label><input type="radio" name="status" value="FT" id="ozr"  onclick="ptdays();" checked>
				Full Time attendance : Sun.  - Thurs.(08:00 am - 3:00pm)<br></label>
				<label><input type="radio" name="status" value="PT" id="PTD" onclick="ptdays();">
				Part Time attendance : Three days a week, please specify the days in the box below
			    <br></label>
			    <div id="ptdyz" >
					<input type="checkbox" name="sun" value="DY" onclick="KeepCount(), ptdays()" id="sun">Sunday<br>
					<input type="checkbox" name="mon" value="DY" onclick="KeepCount(), ptdays()" id="mon">Monday<br>
					<input type="checkbox" name="tue" value="DY" onclick="KeepCount(), ptdays()" id="tue">Tuesday<br>
					<input type="checkbox" name="wed" value="DY" onclick="KeepCount(), ptdays()" id="wed">Wednesday<br>
					<input type="checkbox" name="thu" value="DY" onclick="KeepCount(), ptdays()" id="thu">Thursday<br>
				</div>
			  <label><input type="radio" name="status" value="other" id="ozr2" onclick="ptdays();"> Sun. - Thurs. (09:00 am - 1:00pm)<br>
				</label><br>
				<strong>Note</strong> For working mothers who can not collect their children at 3:00pm extra fees will be charged<br>
				<hr>
				<h1 align="center"> Emergency contact </h1>
				Emergency Contact's Name:
				<input type="text" name="ecname" id="boxes" ><br><br>
				Emergency Contact's Address:
	      <select  id="boxes" name="ecaddress_id" >
					<?php require_once("AddressClass.php");
				 $addOBJ3 = new Address();
				 $names = $addOBJ3->getAllRoots();
				 $size = count($names);
				 for ($i=0; $i < $size ; $i++) {
					 echo '<option value= ' .$names[$i].'>'.$names[$i].'</option>';
				 }
				 ?>
	      </select>  <br><br>
				Relationship:
				<select  id="boxes">
			     	<option value="" >None</option>
				    <option value="1" name="relation_id">Uncle (mum's side)</option>
				    <option value="2" name="relation_id">Uncle (dad's side)</option>
				    <option value="3" name="relation_id">Cousin (has to be 18+ years old)</option>
						<option value="4" name="relation_id">Sister (has to be 18+ years old)</option>
						<option value="5" name="relation_id">Brother (has to be 18+ years old)</option>
						<option value="8" name="relation_id">Grandpa (mum's side)</option>
						<option value="8" name="relation_id">Grandpa (dad's side)</option>
				    <option value="9" name="relation_id">Grandma (dad's side)</option>
						<option value="9" name="relation_id">Grandma (mum's side)</option>
						<option value="10" name="relation_id">Aunt (mum's side)</option>
						<option value="11" name="relation_id">Aunt (dad's side)</option>
				</select><br><br>
				Emergency Contact's Number:
				<input type="text" name="ecnum"  maxlength="11" id="boxes" ><br><br>
				Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
				intolerances, if yes please give more details in the text are below: <br><br>
				<textarea name="extrainfo" rows="4" cols="50" id="boxes"></textarea><br>
				<hr>
				<p><u><h2 align="left">Rules and Regulations</h2></u></p>
				<ol>
				<li>Nursery working hours is from 08:00am till 03:00pm,1 waiting hour is applied for parents (Till 04:00pm)
					 as pick up time, any delay after 04:00pm will be charged.</li>
				<li>In case of child absence, please notify our nursery management one week before the vacation,
					 if parent would not notify the nursery and this absence will exceed a month, registration fee will be charged again.</li>
				<li>Absence due to illness is not deducted from monthly fees.</li>
				<li>All public holidays mentioned in the Egyptian calender are fully paid either they come in
					the beginning, middle or end of the month.</li>
				<li>Monthly fees should be paid in advance at the begging of each month, latest by 3<sup>rd</sup> of the month.</li>
				<li>10% Annual increase is applied on nursery fees at the beginning of academic year. (September of each year).</li>
				<li>Any contact between staff and parents should be done through nursery office, it is not allowed
					to contact staff via their personal mobile phones, so if you like to check about your child, please
					contact nursery phone number and we will communicate you with concerned personnel.</li>
				<li>The Principal reserves the right to require the removal of a child from the nursery on health
					grounds where necessary. Child may only return to the nursery 24 hours after the last bout of sickness.
					Should a child become sick at the nursery, every effort will be made to contact the parents, and the
					child will be isolated from others untill parent will arrive to pick him/her up.</li>
				<li>After child leaving the nursery, his/her personal items are kept at the nursery premises only for a
					week after his departure, so please be keen to take all personal items upon leaving.</li>
				<li>Please make your decision either your child will be full-timer or part-timer, noting that monthly
					fees are not refundable under any circumstances.</li>
				</ol>
				<br>
				<input type="checkbox" name="hereby" value="acceptance" > By checking this field, I hereby
				accepted all above mentioned rules and regulations.<br>
				<!--The date this formed is being filled out:
				<input type="date" name="doa" id="boxes"--><br>
				<hr>
				<input type="submit" value="Submit Form" name="childSave" id="atbtn"/>
				<input type="reset"  value="Reset Form" id="atbtn"/>
			</form>
		</div>

			<div class = "application">
					<h1 align="center"> Things to bring </h1>
					<ul>
						<li>Personal towel to be sent with the child at the beginning of the week and will be taken at the week end to wash it </li>
						<li>Tooth Paste </li>
						<li>Tooth Brush </li>
						<li>Hair brush </li>
						<li>clothes set to be remained permanently at the nursery</li>
						<li>3 pieces of diapers or wet tissues (only for babies under the age of 1) </li>
						<li>Large box of tissues </li>
						<li>Large bag of Dettol antibacterial wipes</li>
						<li>Plastic Cup & Bowl (preferably the same color)  </li>
						<li>For Junior class only: Small sketch </li>
					</ul>
					<h1 align="center"> Registration Paper </h1>
					<ul align="left">
						<li>Birth Certificate</li>
						<li>Vaccination Certificate </li>
						<li>One personal photo of the child </li>
						<li>Copy of parent's IDs </li>
						<li>Medical Certificate </li>
					</ul>
			</div>
			<br>
			<button type="submit" name="Savebtn">Save</button>
			<button onclick="relocate()" id="appbtnE">Edit</button>
			<button onclick="relocate()" id="appbtnD">Delete</button>

			<div id="footer" style="top: 500%;">
				<object type="text/html" data="Contactus.php" id="ftr"></object>
			</div>
</body>
</html>
<?php
session_unset();
session_destroy();
 ?>
