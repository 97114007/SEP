<?php

?>

<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css" />
<link rel="stylesheet" href="styles.css">
<style>
</style>
</head>
<body>
<h1>New Lost Item Form</h1>
<div>
	Category:*
	<select>
		<option value="" disabled selected>Select</option>
		<option value="categorydatavalue1">CategoryName1</option>
		<option value="categorydatavalue2">CategoryName2</option>
		<option value="categorydatavalue3">CategoryName3</option>
		<option value="categorydatavalue4">CategoryName4</option>
		<option value="categorydatavalue5">CategoryName5</option>
	</select>
</div>
<div>
	Sub-Category:*
	<select>
		<option value="" disabled selected>Select</option>
		<option value="subcategorydatavalue1">Sub-CategoryName1</option>
		<option value="subcategorydatavalue2">Sub-CategoryName2</option>
		<option value="subcategorydatavalue3">Sub-CategoryName3</option>
		<option value="subcategorydatavalue4">Sub-CategoryName4</option>
		<option value="subcategorydatavalue5">Sub-CategoryName5</option>
	</select>
</div>
<div>
	Colour:*
	<select>
		<option value="" disabled selected>Select</option>
		<option value="colour1">Colour1</option>
		<option value="colour2">Colour2</option>
		<option value="colour3">Colour3</option>
		<option value="colour4">Colour4</option>
		<option value="colour5">Colour5</option>
	</select>
</div>
<div>
Date Lost:*
<input type="number" placeholder="DD" maxlength="2" min="1" max="31">
<input type="number" placeholder="MM" maxlength="2" min="1" max="12">
<input type="number" placeholder="YYYY" maxlength="4" min="1900" max="2016">
</div>

<div>
	Location Lost:
	<select>
		<option value="" disabled selected>Select</option>
		<option value="location1">Location1</option>
		<option value="location2">Location2</option>
		<option value="location3">Location3</option>
		<option value="location4">Location4</option>
		<option value="location5">Location5</option>
	</select>
</div>

<div>
Picture:
<input type="file" id="ImgFile">
<!--<button onclick="uploadFn()"></button>-->
<script>
function uploadFn() {
	var photo = document.getElementById("ImgFile").accept="image/*";
}
</script>
</div>
<div>
Additional Details:
<br></br>
<textarea rows="6" cols="50" placeholder="Please enter any other information to identify your lost item"></textarea>
</div>
<div><input type="submit">
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Submit
</button>
</input>
</div>
</body>
</html>
