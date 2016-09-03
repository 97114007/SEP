/* START of Models aka Classes */

function LostItem(index, category, subcategory, colour, locationLost, dayLost, status) {
	this.index=index;
	this.category=category;
	this.subcategory=subcategory;
	this.colour=colour;
	this.locationLost = locationLost;
	this.dayLost = dayLost;
	this.status = status;
}

LostItem.prototype = {
	constructor:LostItem,
	getStatusColour:function(lighterColours) {
		return (this.status == 0 ? "orange" : lighterColours ? "teal" : "green");
	}
};

/* End of Lost Item class */

/* START of User class */
function User(id, name) {
	this.id = id;
	this.name = name;
}

User.prototype = {
	constructor: User,
	viewRecentlyLostItems:function() {
		presentAllRecentlyLostItems();
	}
};

/* End of User class */
$(window).ready(function() {
	initFormController();
});


var categories = ["Cards",
				"Electronics",
				"Personal Accessories",
				"Clothing",
				"Miscellaneous",
				"Medical",
				"Sporting goods",
				"Musical Instruments"];
var subcats = [["Identification", "Travel", "Bank"],
				["Mobile Phone", "Labtop", "Tablets", "Camera", "Music player", "USB", "External hard drive", "Charger", "Headphones"],
				["Wallet", "Purses", "Jewellery", "Glasses", "Sunglasses", "Keys", "Bag", "Luggage", "Towel", "Umbrella"],
				["Shirt", "Pants", "Underwear", "Shoes", "Socks", "Jacket", "Dress", "Skirt", "Swimwear", "Onesie", "Sleepwear", "Raincoat"],
				["Book", "Textbook", "Currency", "Mail", "Parcel", "Toy", "Household tools"],
				["Medicine", "Epipen", "Inhaler", "Stethoscope"],
				["Ball", "Bat", "Net", "Hoops", "Bicycle"],
				["Violin", "Flute", "Clarinet", "Piano", "Saxophone", "Percussion", "Keyboard", "Guitar", "Trumpet", "Trombone", "Harmonica", "Accordion", "Kazoo", "Vuvuzela", "Harp", "Cello", "Viola", "French Horn", "Recorder", "Double Bass", "Wintergatan"]];

var colours = ["White", "Black", "Grey", "Red", "Green", "Blue", "Yellow", "Pink", "Teal", "Orange", "Brown", "Silver", "Gold", "Rose Gold", "Space Grey"];

var locations = ["UTS Library", "Central Park", "Building 1", "Building 2", "Building 3", "Building 4", "Building 5", "Building 6", "Building 7", "Building 8", "Building 10", "Building 11"];

function initFormController() {
	initCategories();
	initSubcategories();
	initColours();
	initLocations();
	setInitialDate();
}

function setInitialDate() {
	var date = new Date();
	return $('#date').val((date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear());
}

function validateData() {
	var valid = isValidDate($('#date').val());
	if (valid) {
		var date = $('#date').val();
		var newDate = new Date(date);
		$('#date').val(newDate.toISOString().split('T')[0]);
	}
	return valid;
}

function initCategories() {
	for (var i=0;i<categories.length;i++) {
		$("#category").append(new Option(categories[i], categories[i]));
	}

	$("#category").change(function() {
		$("#subcat").empty();
		$.each(subcats[$("#category")[0].selectedIndex], function (i, item) {
			$("#subcat").append(new Option(item, item));
		});
	});
}

function initSubcategories() {
	$.each(subcats[$("#category")[0].selectedIndex], function (i, item) {
		$("#subcat").append(new Option(item, item));
	});
}

function initColours() {
	$.each(colours, function (i, item) {
		$("#colour").append(new Option(item, item));
	});
}

function initLocations() {
	$.each(locations, function (i, item) {
		$("#location").append(new Option(item, item));
	});
}

// This function was sourced from Stackoverflow:
function isValidDate(dateString) {
	if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
		return false;

	var parts = dateString.split("/");
	var day = parseInt(parts[1], 10);
	var month = parseInt(parts[0], 10);
	var year = parseInt(parts[2], 10);

	if(year < 1000 || year > 3000 || month == 0 || month > 12)
		return false;

	var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

	if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
		monthLength[1] = 29;

	return day > 0 && day <= monthLength[month - 1];
};

