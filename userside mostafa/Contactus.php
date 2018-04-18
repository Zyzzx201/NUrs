<html>

<head>
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> fb icon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

	<script type="text/javascript">
		function fb(){
			if (document.getElementById('fbBtn').clicked) {
				window.location= 'https://www.facebook.com/funandlearnnursery/';
			}
		};
	</script>
</head>
<body>

	<div class = "footer">
		<strong><br>
			<h1 id="cntctU">Contact Us:</h1><br>
		</strong>
		<div id="cntct1">
			Address:El Shatr(7), Zahraa El Maadi <br>
			<br>Contact: 01067088943
		</div>
		<div id="cntct1">
			Address:Al Me3rag, Maadi <br>
			<br>Contact: 01004011048
		</div>
		<div id="cntct1">
			<!--Fun & Learn Preschool <a href="https://www.facebook.com/funandlearnnursery/" class="fa fa-facebook"></a>-->
			Fun & Learn Preschool <i class='entypo-facebook' onclick="fb()" id="fbBtn"></i>
		</div>
	</div>

</body>
<style type="text/css">
@import url(http://weloveiconfonts.com/api/?family=entypo);
	[class^="entypo-"]:before,
	[class*="entypo-"]:before {
		font-family: 'entypo', sans-serif;
	}
	*, *:after, *:before {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}
	.footer{
		text-align: center;
	}
	#cntctU{
		text-align: center;
		font-size: 15px;
		font-family: cursive;
		font-weight: bold;
	}
	#cntct1{
		float: left;
		font-family: cursive;
		font-weight: 300;
		font-size: 13px;
		width: 33.33%;
	}
	i {
		color: #3b5998;
	  padding: 1em;
	  position: relative;
	  background: transparent;
	  cursor: pointer;
	  display: inline-block;
	  transition: all 0.15s ease;
		border: 2px solid #3b5998;
	}
	i:hover {
	  border-radius: 50%;
		color: white;
	  border: 2px solid #3b5998;
		background-color: #3b5998;
	}
	.entypo-facebook:before {
    content: "\f30c";
	}
	/*.fa {
	    padding: 15px;
	    font-size: 10px;
	    width: 10px;
	    text-align: center;
	    text-decoration: none;
	    border-radius: 25%;
	}

	.fa-facebook {
	  background: #3B5998;
	  color: white;
	}*/
</style>


</html>
