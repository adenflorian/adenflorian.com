var previousHash = "";

$(function(){

	$("#games").hide();
	$("#websites").hide();
	$("#contact").hide();
/*
	$("#left-outer").width(0);
	$("#right-outer").width(0);
	$("#left-outer").animate({width: "33%"}, 600);
	$("#right-outer").animate({width: "67%"}, 600);
*/
	if (location.hash == "") {
		location.hash = "#games";
	} else {
		var hash = location.hash;
		show(hash);
		previousHash = hash;
	}

	setVerticals();

	$(window).hashchange(function(){
		var hash = location.hash;
		show(hash);
		previousHash = hash;
	})

	$( window ).resize(function() {
		setVerticals();
	});

	$(window).unload(function() {
		previousHash = "";
	})

});

function setVerticals()
{
	$('.vertcenter').each(function(index){
		$(this).css({
			'margin-top' : ($(this).parent().height() / 2) - ($(this).height() / 2)
		})
	});
}

function repositionVerticals()
{
	$('#right-inner').animate({'margin-top': (($('#right-inner').parent().height() / 2) - ($('#right-inner').height() / 2))}, 300);
}

function show(page)
{
	if (previousHash != "") {
		$(previousHash).fadeOut('fast', function() {
			$(page).fadeIn('fast');
			repositionVerticals();
		});
	} else {
		$(page).fadeIn('fast');
		setVerticals();
	}
}