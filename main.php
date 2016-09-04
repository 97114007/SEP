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
