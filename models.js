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