<<<<<<< HEAD:Ver3Backup/main.php
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


  <body>
 <!-- Header and tabs -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
      
      <header class="mdl-layout__header">
      
      <!-- Icon -->
      <div class="mdl-layout-icon"><button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                <i class="material-icons">arrow_backward</i>
              </button></div>

        <div class="mdl-layout__header-row">
      <!-- Title -->
          <span class="mdl-layout-title">My Lost Items</span>
        </div>

    <!-- Tabs -->
       <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
        <a href="#current" class="mdl-layout__tab is-active">Current</a>
       <a href="#history" class="mdl-layout__tab">History</a>
      </div>
     </header>

    <!-- Tab functionality -->
    <main class="mdl-layout__content">

    <!--current-->  
    <section class="mdl-layout__tab-panel is-active" id="current">

    
      <div class="page-content">
            
               <!--new form button-->
    <a href="lostitemform.php"><div class="addButton">
      <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
       <i class="material-icons">add</i>
      </button>
    </div></a>
            <!--<placeholder><p>No current items</p></placeholder>-->
            <div class="mdl-card mdl-shadow--3dp">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">iPhone 6</h2>
            </div>
            <div class="mdl-card__supporting-text">
              Date Lost: 21 August, 2016
            </div>
            <div class="mdl-card__supporting-text">
              Status: <b>Pending review by staff</b>
            </div>
            </div>
            
            <div class="mdl-card mdl-shadow--3dp">
            <div class="mdl-card__title">
              <h2 class="mdl-card__title-text">iPhone 6</h2>
            </div>
            <div class="mdl-card__supporting-text">
              Date Lost: 21 August, 2016
            </div>
            <div class="mdl-card__supporting-text">
              Status: <b>Pending review by staff</b>
            </div>

            </div>

 

    </div>
    </section>

    <!--history-->  
    <section class="mdl-layout__tab-panel" id="history">
      
      <div class="page-content"> <div class="placeholder"><b>Error:</b> This functionality has not been implemented in this project release.</div>

      </div>
    </section>
  </main>
 
</div>

  </body>
</html>
=======
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
          <a id="addButton" href="lostitemform.php" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
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
>>>>>>> origin/master:main.php
