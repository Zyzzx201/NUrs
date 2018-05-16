<html>
  <head>
  </head>
  <title> Login </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="adminlogin.css">
  <header>
    <img src="logo.png" id="logo" onclick="location.href='index(US).php';">
  </header>

  <body>
    <div class="login">
      <form action="afterLOGIN.php" method="post"><br>
        Login:<br><hr>
        Username: <input id="btns" type="text" name="Username"><br><br>
        Password:  <input id="btns" type="password" name="Password"><br>
        <br>
        <button id="btns" type="submit">Sign In</button>
        <button id="btns" type="reset">Reset Fields</button>
      </form>
    </div>
  </body>

</html>
