var currentPage;
var previousHash;

$(function(){

	$("#home").hide();
	$("#contact").hide();

	if (location.hash == "") {
		location.hash = "#home";
		previousHash = "#home";
	};

	$(window).hashchange(function(){
		var hash = location.hash;

		document.title = hash;

		show(hash);

		previousHash = hash;
	})

	$(window).hashchange();

});

function show(page)
{
	$(previousHash).hide();
	$(page).slideDown();
}