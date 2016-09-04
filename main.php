<?php
  session_start();
  if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
  } else {
    include_once("databaseinterface.php");
  }
?>

<!DOCTYPE html>
<html>


  <head>
      <title>My Lost Items</title>
      <!--link to the main css stylesheet-->
      <link rel="stylesheet" href="styles.css">
      <!--Google Material Design Lite css import-->
      <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
      <!--Google Material Design Lite javascript import-->
      <script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>
	  
	  <!--Reconfirming login details-->
	  <script>
		var userid = "<?php echo $_SESSION['userid']; ?>";
		var username = "<?php echo $_SESSION['username']; ?>";
		</script>
		<script src="controller.js"></script>
		<script src="models.js"></script>
		
      <!--Google Material Design Lite icon icon library import-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <!--this makes sure the website scales when viewed on different displays-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="landing">
      <header class="mdl-layout__header  mdl-layout__header--scroll mdl-color--primary mdl-shadow--2dp">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">UTS Lost & Found</span>
        </div>
        <div style="position:right;"class="mdl-layout__tab-bar mdl-layout--fixed-tabs mdl-js-ripple-effect"><!--mdl-layout--fixed-tabs !-->
          <a href="#overview" class="mdl-layout__tab is-active">Overview</a>
          <a href="#history" class="mdl-layout__tab">History</a>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section id="optionCards" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">

          </section>
          <section id="lostItemCard" class="hidden section--center mdl-grid mdl-grid--no-spacing mdl-shadow--3dp">
            <header style="width:2%;" class="mdl-cell mdl-cell--1-col mdl-color-text--white">
            </header>
            <div style="width:98%; height:215px;" class="itemCard mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4 class="itemName">Item Name</h4>
                <span>Description of item goes here.</span>
              </div>
            </div>
          </section>
          <a id="addButton" href="lodge-form.php" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">add</i>
          </a>
        </div>

		<!-- History tab !-->        

        <div class="mdl-layout__tab-panel mdl-color--grey-100 mdl-color-text--grey-700" id="history">
            <h4>Nothing here at the moment...</h3>
        </div>

      </main>
    </div>



    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://code.getmdl.io/1.2.0/material.min.js"></script>
    <script>
      var userid = "<?php echo $_SESSION['userid']; ?>";
      var username = "<?php echo $_SESSION['username']; ?>";
    </script>
    <script src="controller.js"></script>
  </body>

</html>
