
$(window).ready(function() {
	initFormController();
});


var categories = ["Apple iPhone",
				"Samsung Galaxy",
				"Bag",
				"Umbrella",
				"Laptop",
				"iPad",
				"Tablet"];
var subcats = [["6S, 16gb", "6S, 64gb", "6S, 128gb", "6, 16gb", "6, 64gb", "6, 128gb", "5S, 16gb", "5S, 32gb", "5S, 64gb", "5, 16gb", "5, 32gb"],
				["S7, 32gb", "S7, 64gb", "S6, 32gb", "S6, 64gb", "S5, 16gb", "S5, 32gb", "S4, 16gb", "S4, 32gb"],
				["Adidas", "Nike", "Stussy", "Herschel", "Other"],
				["Polo", "Generic"],
				["MacBook Air 11\"", "MacBook Air 13\"", "MacBook Pro 13\"", "MacBook Pro 15\"", "Lenovo", "Dell", "HP", "Acer", "Asus", "Surface Book Pro", "Other"],
				["Mini", "9.7\""],
				["Surface 3", "Surface 4", "Surface Book", "Samsung Galaxy Tab"]];

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