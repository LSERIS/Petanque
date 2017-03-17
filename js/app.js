/*(function($){

	var $page = $('#bloc_page')
	$page.hammer()
		.on('swiperight', function(e){
			console.log('swipe')
		})

})(Zepto);
*/

// Création de l'objet Hammer
var hammer = Hammer($("#bloc_equipe_A"), {
	transform_always_block: true,
	tap_always: false,
	drag_min_distance: 0
});

//Ajout du listener sur l'objet Hammer
hammer.on("touch tap", function(event) {
	bloc_equipe_AAction(event);
});

//Fonction appelée lorsqu'un événement est déclenché

var $bloc_equipe_A = $("#bloc_equipe_A");

var transform = "";
var boxShadow = "";

var scale = lastScale = 1,
	positionX = positionY = lastPositionX = lastPositionY = 0,
	pushed = false,
	square = false;

function bloc_equipe_AAction(event) {
	switch(event.type) {

		// au touch (quel que soit l'événement), on initialise les variables
		case "touch" :
			lastScale = scale;
			lastPositionX = positionX;
			lastPositionY = positionY;
		break;

		case "tap" :
			txt = "Tap : on incrémente la score de 1";
			// +1 au score de l'équipe_A
			console.log("Ceci est un tap");
		break;
	}
}