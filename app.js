$(window).ready(function() {
	init();
});

//var mdlUpgradeDom = false;

function init() {
	showPage("overview");
	for (var i=2-1;i>=0;i--) {
		addItem(i, "Item #"+(i+1), "This is placeholder text that we can edit once we have the backend stuff ready but for now it works!");
	}
	//$("*").removeAttr("data-upgraded");
	//$("*").removeClass("is-upgraded");
	//componentHandler.upgradeAllRegistered();


    /*setInterval(function() {
      if (mdlUpgradeDom) {
        componentHandler.upgradeDom();
        mdlUpgradeDom = false;
      }
    }, 200);

    var observer = new MutationObserver(function () {
		alert(5);
      mdlUpgradeDom = true;
    });
    observer.observe(document.body, {
        childList: true,
        subtree: true
    });*/
}

function addItem(idx, name, desc) {
	var itemCard = duplicate("#lostItemCard").attr("id", "lostItemCard"+idx);

	$(itemCard).find("h4").text(name);
	$(itemCard).find("span").text(desc);
	$(itemCard).find("button").attr("id", "btn"+idx);
	$(itemCard).find("ul").attr("for", "btn"+idx);
	$(itemCard).insertAfter("#optionCards");
}

function duplicate(id) {
	return $(id).clone().removeClass("hidden");
}

//function showPage(pageName) {
//	$(".mdl-layout__tab-panel").each(function(i, val) {
//		$(this).removeClass("is-active");
//		if ($(this).attr("id") == pageName) {
//			$(this).addClass("is-active");
//		}
//	});
//}
