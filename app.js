$(window).ready(function() {
	init();
});

var items=[];

function init() {
	//showPage("overview");
	for (var i=2-1;i>=0;i--) {
		var item = new LostItem(i, "iPhone 6s (128gb, Space Grey)", "This is placeholder text that we can edit once we have the backend stuff ready but for now it works!", Math.round(Math.random()));
		addItem(item);
	}
}

// this adds an item to the "overview" tab
function addItem(lostItem) {
	var itemCard = duplicate("#lostItemCard").attr("id", "lostItemCard"+lostItem.index);

	$(itemCard).find("h4").text(lostItem.name);
	$(itemCard).find("header").addClass("mdl-color--"+lostItem.getStatusColour()+"-100");
	$(itemCard).find("span").text(lostItem.description);
	$(itemCard).find("button").attr("id", "btn"+lostItem.index);
	$(itemCard).find("ul").attr("for", "btn"+lostItem.index);
	$(itemCard).insertAfter("#optionCards");
	$(itemCard).on('click', function() {
		alert("Not available in prototype release 1");
		//$(".dialog").removeClass("hidden");
		//document.querySelector('dialog').showModal();
	});

	items.push(lostItem);
}

function duplicate(id) {
	return $(id).clone().removeClass("hidden");
}

function showPage(pageName) {
	$(".mdl-layout__tab-panel").each(function(i, val) {
		$(this).removeClass("is-active");
		if ($(this).attr("id") == pageName) {
			$(this).addClass("is-active");
		}
	});
}

// Classes/Objects

function LostItem(index, name, description, status) {
	this.index=index;
	this.name=name;
	this.description=description;
	this.status = status;
}

LostItem.prototype = {
	constructor:LostItem,
	getStatusColour:function() {
		return this.status == 0 ? "red" : "teal";
	}
};

/* End of Lost Item class */
	