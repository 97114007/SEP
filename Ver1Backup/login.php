<?php
	session_start();
	include_once("DatabaseInterface.php");
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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="UTS Lost and Found web app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <title>UTS Lost and Found Login - release 1</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.blue-light_blue.min.css" />
    <link rel="stylesheet" href="styles.css">
    <style>
		.resizableItem {
			width:200px;
			max-width:250px;
		}
		.cen {
			position: fixed;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		.bottomSpacer1 {
			margin-bottom:20px;
		}
		.bottomSpacer2 {
			margin-bottom:3px;
		}
		.topSpacer {
			margin-top:30%;
		}
    </style>
  </head>
  <body class="mdl-demo mdl-color-text--grey-700 mdl-base">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <main class="mdl-layout__content">
        <div class="cen mdl-layout__tab-panel is-active" id="loginScreen">
              <form action="login.php" method="POST">
                <input type="hidden" name="loginSet" value="true"/>
				<p  class="bottomSpacer2 <?php if (!$incorrectCreds) { echo "hidden"; } ?>">Incorrect User ID and/or password.</p>
                <div class="bottomSpacer2 resizableItem  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="text" name="userid" id="userid">
                  <label class="mdl-textfield__label" for="userid">User ID</label>
                </div><p/>
                <div class="bottomSpacer2 resizableItem  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <input class="mdl-textfield__input" type="password" name="pass" id="password">
                  <label class="mdl-textfield__label" for="userid">Password</label>
                </div>

                <div class="bottomSpacer1">
                  <button class="mdl-button resizableItem mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                    Login
                  </button>
                </div>
              </form>
      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://code.getmdl.io/1.2.0/material.min.js"></script>
  </body>
</html>
