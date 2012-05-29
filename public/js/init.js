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

function initGallery(){
	var options = {
		autoResize: true, // This will auto-update the layout when the browser window is resized.
        container: $('.gallery-box'), // Optional, used for some extra CSS styling
        offset: 10
	};

	// Get a reference to your grid items.
    var handler = $('.gallery-box ul .gallery-item');
      
    // Call the layout function.
    handler.wookmark(options);
}

//Inicializa la pagina projects.html
function initProjects(){

}

function addRandomLi(){
	//Add lorem-ipsum items (for debug)
	var container = $('.gallery-box .thumbnails');
	//console.log(container);
	for(var i = 0; i < 15; i++){
		var li = $('<li class="span3 thumbnail gallery-item"></li>');
		li.html(i + fillLorem(Math.floor((Math.random()*15)+5)));
		//console.log(li);
		container.append(li);
	}
}

$().ready(function($) {
	//alert('Hola');

	//If i'm on project.html...
	if($('#nav-project').length > 0){ 
		initProject();
	}

	//If i'm on projectS.html
	if($('#projects-list').length > 0){
		initProjects();
	}

	//If i'm on members.html
	if($('#members-list').length > 0){
		addRandomLi();
	}

	//If i have a gallery...
	if($('.gallery-box').length > 0){
		//alert('init gallery');
		initGallery();
	}

	//Common init for all pages
	$('#search-projects').typeahead({source: ["Stracomter III"]});
	$('.dropdown-toggle').dropdown();
});

function modal()
{
	$('#myModal').modal('toggle');
}
