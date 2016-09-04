<?php
	session_start();
	include_once("databaseinterface.php");
	if (!isset($_SESSION['userid']) || !(isset($_GET['module']) || isset($_POST['module']))) {
echo "not set";
		sendError();
		return;
	}
	$module = isset($_GET['module']) ? $_GET['module'] : $_POST['module'];
	$userid = $_SESSION['userid'];
	if ($module == "getRecentLostItems") {
		sendRecentItems($userid);
	} else if ($module == "submitItemClaim") {
		$category = $_POST['category'];
		$subcategory = $_POST['subcat'];
		$colour = $_POST['colour'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$comment = $_POST['comment'];
		if (!isset($category) || !isset($subcategory) || !isset($colour) || !isset($date)) {
			header("Location: index.php");
			return;
		}
		$itemid = createLostItemRecord($category, $subcategory, $colour, $location, $date, $comment);
		if ($itemid == -1) {
			header("Location: index.php");
		} else {
			if (createClaim($userid, $itemid))  {
				header("Location: index.php");
			} else {
				sendError();
			}
		}
	}   
?>