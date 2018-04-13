<html>
	<title>Fun & Learn</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">
	<link rel="stylesheet" href="AdminSS.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--arrow down-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<h1 align="left" id="h11"> <p><u>Teacher Application:</u></p> </h1>
	<script type="text/javascript">
		window.onload = function() {
			document.getElementById('ptdyz').style.display = 'none';
		}
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
	</script>
</head>

<body>
	<header>
		<img src="logo.png" id="logo" onclick="location.href='/index.php';">
		<p id="h1D">Delete</p><p id="h1U">User</p>
		<button type="button" id="bkbtn" onclick="location.href='/index.php';">Back</button>
		<button type="button" id="pabtn" onclick="location.href='';">Previous Applicaton</button>
		<button type="button" id="nabtn" onclick="location.href='';">Next Applicaton</button>
	</header>
</header>
    <br>
	<div class = "Dappform">
			<form name="app">
				Child's name:
				<input type="text" name="cname" id="boxes" required><br><br>
				Date of birth:
				<input type="date" name="dob"  id="boxes" required><br><br>
				Present age:
				<input type="number" name="page" min="1" max ="5" id="boxes" required><br><br>
				Desired Date of entry:
				<input type="date" name="dde" min="1" max ="5" id="boxes" required><br>
				<!--desired age > present age-->
				<hr>
				Father's name:
				<input type="text" name="Fname"  id="boxes" required><br><br>
				Mobile number:
				<input type="text" name="number1" maxlength="11" id="boxes" required><br><br>
				Facebook Account:
				<input type="text" name="Fb1" id="boxes" required><br><br>
				Occupation:
				<input type="text" name="occ1" id="boxes" required><br><br>
				Office phone number:
				<input type="text" name="off1" id="boxes" maxlength="8" required><br><br>
				<hr>
				Mother's name:
				<input type="text" name="Mname" id="boxes" required><br><br>
				Mobile number:
				<input type="text" name="number2" id="boxes" maxlength="11"  required><br><br>
				Facebook Account:
				<input type="text" name="Fb2" id="boxes" ><br><br>
				Occupation:
				<input type="text" name="occ2" id="boxes" required><br><br>
				Office phone number:
				<input type="text" name="off2" id="boxes" maxlength="8" required><br><br>
				<hr>
				Parents Are:<br>
				<label><input type="radio" name="status" value="Married"  > Married</label><br>
				<label><input type="radio" name="status" value="Separated" > Separated</label><br><br>
				<!-- Make this a required field/ choice-->
				Home Address:
				<input type="text" name="address" id="boxes" required><br><br>
				Home Telephone number:
				<input type="text" name="htn" maxlength="8" id="boxes" required><br><br>
				Name of the person who will usually pick up the child:
				<input type="text" name="name1" id="boxes" required><br><br>
				<hr>
				<h1 align="center" id="h11"> Requested for Attendance</h1>
				Please fill in with a tick below in order of preference:<br>
				<input type="radio" name="status" value="FT" id="ozr" onclick="ptdays();" checked> Full Time attendance : Sun.  - Thurs.(08:00 am - 3:00pm)<br>
				<input type="radio" name="status" value="PT" id="PTD" onclick="ptdays();"> Part Time attendance : Three days a week, please specify the days in the box below <br>
				<div id="ptdyz" >
					<input type="checkbox" name="sun" value="DY" onclick="KeepCount(), ptdays()" id="sun">Sunday<br>
					<input type="checkbox" name="mon" value="DY" onclick="KeepCount(), ptdays()" id="mon">Monday<br>
					<input type="checkbox" name="tue" value="DY" onclick="KeepCount(), ptdays()" id="tue">Tuesday<br>
					<input type="checkbox" name="wed" value="DY" onclick="KeepCount(), ptdays()" id="wed">Wednesday<br>
					<input type="checkbox" name="thu" value="DY" onclick="KeepCount(), ptdays()" id="thu">Thursday<br>
				</div>
				<input type="radio" name="status" value="other" id="ozr2" onclick="ptdays();"> Sun. - Thurs. (09:00 am - 1:00pm)
				<br>
				<strong>Note</strong> For working mothers who can not collect their children at 3:00pm extra fees will be charged<br><br>
				<hr>
				<h1 align="center" id="h11"> Emergency contact </h1>
				Emergency Contact's Name:
				<input type="text" name="ern" id="boxes" required><br><br>
				Emergency Contact's Address:
				<input type="text" name="address1" id="boxes" required><br><br>
				<!-- Make this a required field/ choice-->
				Relationship:
				<select id="boxes" required>
					<option value="auntM">Aunt (mum's side)</option>
			    <option value="uncleM">Uncle (mum's side)</option>
			    <option value="grandpaM">Grandpa (mum's side)</option>
			    <option value="grandmaM">Grandma (mum's side)</option>
			    <option value="auntD">Aunt (dad's side)</option>
			    <option value="uncleD">Uncle (dad's side)</option>
			    <option value="grandpaD">Grandpa (dad's side)</option>
			    <option value="grandmaD">Grandma (dad's side)</option>
			    <option value="cousin">Cousin (has to be 18+ years old)</option>
				</select><br><br>

				Emergency Contact's Number:
				<input type="text" name="contact1" id="boxes"  maxlength="11" required><br><br>

				Does your child have special needs, require regular medical attention, have any allergies, food dislikes or
				intolerances, if yes please give more details in the text are below:<br><br>
				<textarea name="info" rows="4" cols="50" id="boxes"></textarea><br>
			<button type="button" id="Dbtn">Delete Application</button> <!--send a mail, maybe?-->
		</form> <!--alert-->
	</div>

</body>
</html>
