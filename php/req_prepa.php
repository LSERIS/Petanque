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
$req = $bdd->prepare('SELECT Nom_Prenom FROM Joueurs_Equipe_A WHERE Nom_Prenom = ?' );

// On affiche chaque entrée une à une
	while ( $donnees = $req->fetch())
	{
		$req->execute(array($_GET['Nom_Prenom']));
		echo '<p>' . $donnees['Nom_Prenom'] . '</p>';
	}

// Termine le traitement de la requête	
$req->closeCursor(); 

?>