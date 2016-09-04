<?php

session_start();
	include_once("databaseinterface.php");
	$incorrectCreds = false;
	if (isset($_POST['loginSet'])) {
		if (checkLoginCorrect($_POST['userid'], $_POST['pass'])) {
			$_SESSION['userid'] = $_POST['userid'];
            $_SESSION['username'] = getNameForID($_POST['userid']);
			header("Location: main.php");
		} else {
			$incorrectCreds=true;
		}
	}


?>

<!DOCTYPE html>
<html>


  <head>
      <title>Login</title>
      <!--link to the main css stylesheet-->
      <link rel="stylesheet" href="newstyles.css">
      <!--Google Material Design Lite css import-->
      <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
      <!--Google Material Design Lite javascript import-->
      <script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
      <!--Google Material Design Lite import library-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!--this makes sure the website scales when viewed on different displays-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>


  <body>
 <div class="cen" id="loginScreen">
  <!--logo-->
<div class="logocontainer">
    <img src="images/logo.png" alt="logo" height="50%" width="50%">
</div>
<!--<div class="logincontainer">
<b>Incorrect Login Details.</b>
</div>-->
 <form action="login.php" method="POST">
 <input type="hidden" name="loginSet" value="true"/>
  <!--username-->
    <div class="logincontainer">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="userid" id="userid"/>
        <label class="mdl-textfield__label" for="userid">Username</label>
      </div>
    </div>
    <!--password-->
    <div class="logincontainer">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" name="pass" id="password"/>
        <label class="mdl-textfield__label" for="password">Password</label>
      </div>
    <div>
</form>
<!--loginbutton-->
    <div class="buttoncontainer">
                  <button class="mdl-button resizableItem mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect">
                    Login
                  </button>
    </div>
</div>
  </body>
</html>

