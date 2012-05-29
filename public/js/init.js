/*
	Funciones para el init de la pagina
*/

//Inicializa la pagina project.html
function initProject(){
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
}

//Inicializa la pagina projects.html
function initProjects(){

}

function initMembers(){
	
	var container = $('#members-box');
	container.imagesLoaded( function (){
		container.masonry({
			itemSelector: '.thumbnail'
		});	
	});
	alert('hola');
}

$().ready(function($) {
	//alert('Hola');

	//If i'm on project.html...
	if($('#nav-project').length > 0){ 
		initProject();
	}

	//If i'm on projectS.html
	if($('#project-box').length > 0){
		initProjects();
	}

	//If i'm on members.html
	if($('#members-box').length > 0){
		initMembers();
	}

	//Common init for all pages
	$('#search-projects').typeahead({source: ["Stracomter III"]});
	$('.dropdown-toggle').dropdown();
});
