/*
Author: David "AdenFlorian" Valachovic
*/

// Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-50585312-1', 'adenflorian.com');
ga('send', 'pageview');

var previousHash = "";

$(function(){

	setVerticals();

	$("#games").hide();
	$("#websites").hide();
	$("#contact").hide();

	$("#left-outer").width(0);
	$("#left-outer").animate({width: "33%"}, 600, function() {
		if (location.hash === "") {
			location.hash = "#games";
		} else {
			var hash = location.hash;
			show(hash);
			previousHash = hash;
		}
	});

});

$(window).hashchange(function(){
	var hash = location.hash;
	show(hash);
	previousHash = hash;
});

$(window).resize(function() {
	setVerticals();
});

$(window).unload(function() {
	previousHash = "";
});

function setVerticals()
{
	$('.vertcenter').each(function(index){
		$(this).css({
			'margin-top' : ($(this).parent().height() / 2) - ($(this).height() / 2)
		});
	});
}

function repositionVerticals()
{
	$('#right-inner').animate({'margin-top': (($('#right-inner').parent().height() / 2) - ($('#right-inner').height() / 2))}, 300);
}

function show(newHash)
{
	if (previousHash === "") {
		$(newHash).fadeIn('fast');
		setVerticals();
	} else {
		$('a#nav-' + previousHash.substring(1)).attr('class', '');
		$(previousHash).fadeOut('fast', function() {
			$(newHash).fadeIn('fast');
			setVerticals();
		});
	}
	$('a#nav-' + newHash.substring(1)).attr('class', 'selected');
}