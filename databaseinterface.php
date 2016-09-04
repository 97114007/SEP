<?php
$hostname = 'd6q8diwwdmy5c9k9.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306' ;
$dbname = 'etoesn3fmoerrnfa';
$username = 'tkkwirphqjda79q1';
$password = 'ytjjlujani3oskc6';

$con = new mysqli($hostname, $username, $password, $dbname);

if($con->connect_errno){
	
	die('Connection could not be established: '.$con->connect_errno);

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
      $q = doQuery("SELECT UserID FROM User WHERE UserID=UNHEX('".$ID."') AND UserPassword=UNHEX('".$Pass."')");
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
      $q = doQuery("INSERT INTO LostItem (Category, SubCategory, Colour, DayLost, LocationLost, Comments) VALUES(UNHEX('".$Cat."'), UNHEX('".$SubCat."'), UNHEX('".$Colour."'), UNHEX('".$Date."'), UNHEX('".$Location."'), UNHEX('".$Comment."'))");
      $q2 = doQuery("SELECT LAST_INSERT_ID() FROM LostItem");
      if (!$q || !$q2) {
         return -1;
      }
      $d=$q2->fetch_array(MYSQLI_NUM)[0];
      return $d;
  }

  function createClaim($UserID, $ItemID) {
      $UserID = bin2hex($UserID);
      $ItemID = bin2hex($ItemID);
      $q = doQuery("INSERT INTO Claim (UserID, LostItemID) VALUES(UNHEX('".$UserID."'), UNHEX('".$ItemID."'))");
      if (!$q) {
         return false;
      }
      return true;
  }


  function sendRecentItems($UserID) {
      $UserID = bin2hex($UserID);
      $queryString = "SELECT LostItem.Category, LostItem.SubCategory, LostItem.Colour, LostItem.DayLost, LostItem.LocationLost, Claim.ClaimStatus FROM LostItem, Claim WHERE Claim.LostItemID=LostItem.LostItemID AND Claim.UserID=UNHEX('".$UserID."') ORDER BY LostItem.DayLost DESC LIMIT 4";
      $q = doQuery($queryString);
      if (!$q) {
         die('Error: '.$con->error);
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
	  
	echo  '$con->error';
  }
  ?>
