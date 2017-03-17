<?php
try
{
	// On se connecte à la base sqlite
	$bdd = new PDO('sqlite:../db/petanque.sqlite');
	// on peut rajouter ", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)" pour activer un message sur les erreurs
}
catch (Exception $e)
{
       // En cas d'erreur, on affiche le message d'erreur et on arrête tout
        die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table 'Joueurs_Equipe_A'
$reponse = $bdd->query('SELECT * FROM Joueurs_Equipe_A');

// On affiche chaque entrée une à une
	while ( $donnees = $reponse->fetch())
	{
		echo '<p>' . $donnees['Nom_Prénom'] . '</p>';
	}

// Termine le traitement de la requête	
$reponse->closeCursor(); 

?>