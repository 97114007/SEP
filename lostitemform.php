<?php
  session_start();
  if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
  } else {
    include_once("DatabaseInterface.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="UTS Lost and Found web app">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <title>UTS Lost and Found - release 1</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css" />
    <link rel="stylesheet" href="styles.css">
    <style>
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

	<!-- New lost item form !-->

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="lodgeForm">
      <header class="mdl-layout__header  mdl-layout__header--scroll mdl-color--white mdl-color-text--grey-700 mdl-shadow--2dp">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">New Lost Item Form</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel mdl-color--grey-100 is-active" id="newForm">
          <section id="" class="section--center mdl-grid mdl-grid--no-spacing ">
            <div style="height:630px;" class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Item details</h4>
                  <form action="LFModules.php" onsubmit="return validateData()" method="POST">
                    <input type="hidden" name="module" value="submitItemClaim" /> 
                    <span>Category*: </span>
                    <select name="category" name="category" id="category"></select><p/>
                    <span>Sub-Category*: </span>
                    <select name="subcat" name="subcat" id="subcat"></select><p/>
                    <span>Colour*: </span>
                    <select name="colour" name="colour" id="colour"></select><p/>
                    <span>Location Lost: </span>
                    <select name="location" name="location" id="location"></select><p/>
                    <span>Date Lost (DD/MM/YY)*: </span>
                    <span class="mdl-textfield mdl-js-textfield" style="width:150px;">
                      <input class="mdl-textfield__input" type="text" pattern="[0-3]{0,1}[0-9]{1}/\d{1,2}/\d{4}" name="date" id="date">
                      <label class="mdl-textfield__label" for="date"></label>
                    </span><p/>
                    <span>Memo: </span>
                    <div class="mdl-textfield mdl-js-textfield">
                     <textarea class="mdl-textfield__input" type="text" rows= "3" name="comment" ></textarea>
                     <label class="mdl-textfield__label" for="comment">Additional comments relating to the item...</label>
                    </div></p>
                    <a href="main.php" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                      Cancel
                    </a>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect">
                      Submit
                    </button>
                  </form>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="https://code.getmdl.io/1.2.0/material.min.js"></script>
    <script src="form-controller.js"></script>
  </body>
</html>
