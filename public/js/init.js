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

function addRandomLi(){
	//Add lorem-ipsum items (for debug)
	var container = $('#members-box .thumbnails');
	for(var i = 0; i < 15; i++){
		var li = $('<li class="span3 thumbnail members-item"></li>');
		li.html(i + fillLorem(Math.floor((Math.random()*15)+5)));
		container.append(li);
	}
}

function initMembers(){
	addRandomLi();
	var options = {
		autoResize: true, // This will auto-update the layout when the browser window is resized.
        container: $('#members-box'), // Optional, used for some extra CSS styling
        offset: 10
	};

	// Get a reference to your grid items.
    var handler = $('#members-box ul .members-item');
      
    // Call the layout function.
    handler.wookmark(options);

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

function modal()
{
	$('#myModal').modal('toggle');
}
