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
		<option value="MobilePhone">Mobile Phone</option>
		<option value="WalletPurse">Wallet/Purse</option>
		<option value="Laptop">Laptop</option>
		<option value="IdentificationCard">Identification card</option>
		<option value="TravelCard">Travel Card</option>
		<option value="Camera">Camera</option>
		<option value="MusicPlayer ">Music player (e.g. ipod)</option>
		<option value="StorageDevices">Storage devices (e.g. USB, hard drives, SD cards)</option>
		<option value="ElectronicAccessories">Electronic accessories (earphones, charges)</option>
		<option value="Clothing">Clothing</option>
		<option value="Jewellery">Jewellery</option>
		<option value="GlassesSunglasses">Glasses & sunglasses</option>
		<option value="Keys">Keys</option>
		<option value="Bags">Bags & Luggage</option>
		<option value="Books">Books (e.g. literature, textbooks, notebooks)</option>
		<option value="Money">Currency & money</option>
		<option value="MiscElectronicDevices">Miscellaneous Electronic Devices</option>
		<option value="HouseholdTools">Household Items & Tools</option>
		<option value="Mail">Mail & Parcels</option>
		<option value="Toy">Toy</option>
		<option value="Medical">Medical (e.g. medicine, epipen, inhaler)</option>
		<option value="SportingGoods">Sporting Goods</option>
		<option value="MusicalInstruments">Musical Instruments</option>
		<option value="PersonalAccessories">Personal Accessories (e.g. umbrellas)</option>
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

<input type="submit" value="Submit Form" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">

</input>

</body>
</html>
