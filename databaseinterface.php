<?php
$hostname = 'us-cdbr-iron-east-04.cleardb.net:3306' ;
$dbname = 'heroku_f15874510c5d18a';
$username = 'b67f01540effa5';
$password = 'c6efee0b';

$con = new mysqli($hostname, $username, $password, $dbname);

if(!$con){
	
	die('Connection could not be established: '.$con->connect_error);

}


function getNameForID($ID) {
      $ID = bin2hex($ID);
      $q = doQuery("SELECT GivenName FROM user WHERE UserID=UNHEX('".$ID."')");
      if (!$q) {
         return null;
      }
      return $q->fetch_array(MYSQLI_NUM)[0];
  }

  function checkLoginCorrect($ID, $Pass) {
      $ID = bin2hex($ID);
      $Pass = bin2hex($Pass);
      $q = doQuery("SELECT UserID FROM user WHERE UserID=UNHEX('".$ID."') AND UserPassword=UNHEX('".$Pass."')");
      if (!$q) {
         return false;
      }
      $d=$q->fetch_array(MYSQLI_NUM);
      return count($d) == 1 ? true : false;
  }

  function createLostItemRecord($Cat, $SubCat, $Colour, $Location, $Date, $Comment) {
      $Cat = bin2hex($Cat);
      $SubCat = bin2hex($SubCat);
      $Colour = bin2hex($Colour);
      $Location = bin2hex($Location);
      $Date = bin2hex($Date);
      $Comment = bin2hex($Comment);
      $q = doQuery("INSERT INTO lostitem (Category, SubCategory, Colour, DayLost, LocationLost, Comments) VALUES(UNHEX('".$Cat."'), UNHEX('".$SubCat."'), UNHEX('".$Colour."'), UNHEX('".$Date."'), UNHEX('".$Location."'), UNHEX('".$Comment."'))");
      $q2 = doQuery("SELECT LAST_INSERT_ID() FROM lostitem");
      if (!$q || !$q2) {
         return -1;
      }
      $d=$q2->fetch_array(MYSQLI_NUM)[0];
      return $d;
  }

  function createClaim($UserID, $ItemID) {
      $UserID = bin2hex($UserID);
      $ItemID = bin2hex($ItemID);
      $q = doQuery("INSERT INTO claim (UserID, LostItemID) VALUES(UNHEX('".$UserID."'), UNHEX('".$ItemID."'))");
      if (!$q) {
         return false;
      }
      return true;
  }


  function sendRecentItems($UserID) {
      $UserID = bin2hex($UserID);
      $queryString = "SELECT lostitem.Category, lostitem.SubCategory, lostitem.Colour, LostItem.DayLost, lostitem.LocationLost, claim.ClaimStatus FROM lostitem, claim WHERE claim.LostItemID=LostItem.LostItemID AND claim.UserID=UNHEX('".$UserID."') ORDER BY lostitem.DayLost DESC LIMIT 4";
      $q = doQuery($queryString);
      if (!$q) {
         die('Error: '.mysql_error());
         return;
      }
      $results = array();
      while ($row = $q->fetch_assoc()) {
        $results[] = $row;
      }
      echo json_encode($results);
  }
  
  function doQuery($q) {
    global $con;
    $s = $con->query($q);
    return $s;
  }
  function sendError() {
	  
	echo  'Error2';
  }
  ?>
