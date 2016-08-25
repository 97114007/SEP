<?php

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="UTS Lost and Found web app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>UTS Lost and Found - release 1</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css" />
    <link rel="stylesheet" href="styles.css">
    <style>
    .bg1 {
      color: white;
      background-image: url("http://www.newcitymed.com/wp-content/uploads/Newcity_Medical_footer-512x256.jpg");
    }
    .bg2 {
      color: white;
      background-image: url("http://ndl.mgccw.com/mu3/app/20150920/09/1442721709796/ss/0_small.png");
    }
    </style>
  </head>
  <body onload="upd()" class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header  mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row"></div>
        <div class="mdl-layout__header-row">
          <h3>UTS Lost & Found</h3>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
          <section id="optionCards" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="bg1 mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Lost an item?</h4>
                Have you lost an item? Lodge a "Lost Item" application in case we've found it.
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Lodge lost item</a>
              </div>
            </div>
            <div class="bg2 mdl-card mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Something else?</h4>
                This is just placeholder in case we need to fit something else here
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">Another button</a>
              </div>
            </div>
          </section>

          <section id="lostItemCard" class="hidden section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div  class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4 class="itemName">Item Name</h4>
                <span>Description of item goes here.</span>
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button">View item</a>
              </div>
            </div>
            <button class="hidden mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right">
              <li class="mdl-menu__item">View</li>
              <li class="mdl-menu__item">Edit</li>
              <li class="mdl-menu__item" disabled>Delete</li>
            </ul>
          </section>

        </div>
        
		<!-- PAGE STUFF HERE !-->


        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">FAQ</h1>
              <ul class="mdl-mega-footer--link-list">
                <li><a href="#">Questions</a></li>
                <li><a href="#">Answers</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <ul class="mdl-mega-footer--link-list">
              <li><a href="#">Help</a></li>
              <li><a href="#">Privacy and Terms</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://code.getmdl.io/1.2.0/material.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>
