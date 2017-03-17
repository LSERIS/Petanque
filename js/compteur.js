/* Déclaration des variables */
var total_locaux = 0;
var total_visiteur = 0;
var tat_locaux_terrain_1 = 0;
var tat_visiteurs_terrain_1 = 0;
var dou_locaux_terrain_1 = 0;
var dou_visiteurs_terrain_1 = 0;
var tri_locaux_terrain_1 = 0;
var tri_visiteurs_terrain_2 = 0;
var tat_visiteurs_terrain_2 = 0;
var dou_locaux_terrain_2 = 0;
var dou_visiteurs_terrain_2 = 0;
var tri_locaux_terrain_2 = 0;
var tri_visiteurs_terrain_2 = 0;
var tat_visiteurs_terrain_3 = 0;
var dou_locaux_terrain_3 = 0;
var dou_visiteurs_terrain_3 = 0;
var tri_locaux_terrain_3 = 0;
var tri_visiteurs_terrain_3 = 0;
var valeur = 0;
(function($){
	var $bloc_page = $('#bloc_page')
	$bloc_page.Hammer()
		.on('tape', function(e){
			console.log('appui');
		})
		
})(Zepto);