<?php
  session_start();
  if (!isset($_SESSION['userid'])) {
    header("Location: index.php");
  } else {
    include_once("databaseinterface.php");
  }
?>

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="UTS Lost and Found web app">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=0">
      <title>UTS Lost and Found</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css" />
      <link rel="stylesheet" href="styles.css">
      <style>
		table {
			width:100%; 
		}
		table, td {
			text-align: center;
		}
      </style>
   </head>
   <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
      <!-- New lost item form !-->
      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="lodgeForm">
         <header class="mdl-layout__header  mdl-layout__header--scroll mdl-color--grey mdl-color-text--white-700 mdl-shadow--2dp">
            <div class="mdl-layout__header-row">
			<a href="main.php">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
                <i class="material-icons">arrow_backward</i>
              </button>
			  <a/>
          &nbsp;&nbsp;&nbsp;&nbsp;
               <span class="mdl-layout-title">New Lost Item Form</span>
            </div>
         </header>
         <main class="mdl-layout__content">
            <div class="mdl-layout__tab-panel mdl-color--grey-100 is-active" id="newForm">
               <section id="" class="section--center mdl-grid mdl-grid--no-spacing ">
                  <div style="height:630px;" class="mdl-card mdl-cell mdl-cell--12-col">
                     <div class="mdl-card__supporting-text">
                        <h4>Lost Item details</h4>
                        <form action="LFModules.php" onsubmit="return validateData()" method="POST">
                           <input type="hidden" name="module" value="submitItemClaim" />
                           <table>
                              <tr>
                                 <td><span>Category*: </span></td>
                                 <td><select name="category" name="category" id="category"></select>
                                 <p/></td>
                              </tr>
                              <tr>
                                 <td><span>Sub-Category*: </span></td>
                                 <td><select name="subcat" name="subcat" id="subcat"></select>
                              <p/></td>
                              </tr>
                              <tr>
                                 <td><span>Colour*: </span></td>
                                 <td>  <select name="colour" name="colour" id="colour"></select>
                                <p/></td>
                              </tr>
                              <tr>
                                 <td><span>Location Lost: </span></td>
                                 <td>  <select name="location" name="location" id="location"></select>
                                <p/></td>
                              </tr>
                              <tr>
                                 <td><span> Date Lost (DD/MM/YYYY)*: </span></td>
                                 <td>  <span class="mdl-textfield mdl-js-textfield" style="width:150px;">
                                 <input class="mdl-textfield__input" type="text" pattern="\d{1,2}/\d{1,2}/\d{4}" name="date" id="date">
                                 <label class="mdl-textfield__label" for="date"></label>
                                 </span>
                              <p/></td>
                              </tr>
                              <tr>
                                 <td><span>Memo: </span></td>
                                 <td>
                              <div class="mdl-textfield mdl-js-textfield">
                                 <textarea class="mdl-textfield__input" type="text" rows= "3" name="comment" ></textarea>
                                 <label class="mdl-textfield__label" for="comment">Additional comments relating to the item...</label>
                              </div>
                              </p></td>
                              </tr>
                           </table>
                           <a href="main.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent mdl-color--blue">
                           Cancel
                           </a>
                           <input type="submit"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect mdl-color--blue">
                           Submit
                           </button></input>
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

