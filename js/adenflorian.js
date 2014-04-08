var previousHash = "";

$(function(){

	$("#games").hide();
	$("#websites").hide();
	$("#contact").hide();

	$("#left").width(0);
	$("#page").width(0);
	$("#left").animate({width: "33%"}, 600);
	$("#page").animate({width: "67%"}, 600);

	if (location.hash == "") {
		location.hash = "#games";
		previousHash = "#games";
		//console.log("ifffff");
	} else {
		//console.log("else");
		var hash = location.hash;
		show(hash);
		previousHash = hash;
	}

	$(window).hashchange(function(){
		var hash = location.hash;
		//document.title = hash;
		show(hash);
		previousHash = hash;
	})

	$(window).unload(function() {
		previousHash = "";
	})

});

function show(page)
{
	if (previousHash != "") {
		$(previousHash).fadeOut('fast', function() {
			$(page).fadeIn('fast');
		});
	} else {
		$(page).fadeIn('fast');
	}
	
}