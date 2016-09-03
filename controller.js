/* START Controller functions here */

$(window).ready(function() {
	init();
});

var items=[];
var currentUser;

function init() {
	//showPage("landing");
	currentUser = new User(userid, username);
	currentUser.viewRecentlyLostItems();
}

// this adds an item to the "overview" tab
function addItem(lostItem) {
	var itemCard = duplicate("#lostItemCard").attr("id", "lostItemCard"+lostItem.index);

	$(itemCard).find("h4").text(lostItem.category + " ("+lostItem.colour + " - "+lostItem.subcategory+")");
	$(itemCard).find("header").addClass("mdl-color--"+lostItem.getStatusColour(true)+"-100");
	var statusText = "Pending review from staff...";
	if (lostItem.status == 1) { // collectable
		statusText = "Collect from UTS Tower building";
	} else if (lostItem.status == 2) { // item must have been collected
		statusText = "Item collected!";
	}
	var sanitisedDate = new Date(lostItem.dayLost).toDateString().replace(/ /g, ", ");
	$(itemCard).find("span").html("<b>Date Lost:</b> "+sanitisedDate+" - ("+lostItem.dayLost+")<br/><b>Status:</b> <font color='"+lostItem.getStatusColour(false)+"'>"+statusText+"</font>");
	$(itemCard).insertBefore("#optionCards");
	$(itemCard).on('click', function() {
		alert("Not available in prototype release 1");
		//document.querySelector('dialog').showModal();
	});

	items.push(lostItem);
}

function duplicate(id) {
	return $(id).clone().removeClass("hidden");
}


function presentAllRecentlyLostItems() {

	sendModuleRequest("getRecentLostItems", {}, function(data) {
		var index=0;
		jsonData = JSON.parse(data);
		for (var i=0;i<jsonData.length;i++) {
			var item = jsonData[i];
			var lostItem = new LostItem(index++, item.Category, item.SubCategory, item.Colour, item.LocationLost, item.DayLost, item.Status);
			addItem(lostItem);
		}
	});
}

function sendModuleRequest(moduleName, arguments, callback) {
	arguments.module = moduleName;
	$.get("LFModules.php", arguments, callback);
}
/* End of Controller */

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
	},
	viewAllHistoricalClaims:function() {
		
	},
	lodgeLostItem:function() {
		window.location="lodge-form.php";
	}
};

/* End of User class */


