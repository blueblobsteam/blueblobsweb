/*
	Funciones para el init de la pagina
*/

$().ready(function($) {
	//alert('Hola');

	//Init for carousel
	$('.carousel').carousel();	

	//Init for 'a' with hastaghed href (fancy scroll)
	$('a.fancy-scroll').click(function() {
    	var elementClicked = $(this).attr("href");
    	var destination = $(elementClicked).offset().top;
    	$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 500 );
    	return false;
	});

	//Init for scrollspy on sections of project (not needed because we made it by markup)
	//$('#nav-project').scrollspy();
	//console.log($('#nav-project'));

	$('#search-projects').typeahead({source: ["Stracomter III"]});
});
