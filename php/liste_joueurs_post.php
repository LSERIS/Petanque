<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('sqlite:../db/petanque.sqlite');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// on teste la déclaration de nos variables
if (isset($_POST['Nom_Prenom']))
{
	// on affiche le résultat
	echo 'Votre nom est '.$_POST['Nom_Prenom'];
}
else
{
	echo 'n\'existe pas';
}
// Insertion du nom du joueur à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO Joueurs_Equipe_B (Nom_Prenom) VALUES(?)');
$req->execute(array($_POST['Nom_Prenom']));

// Redirection du visiteur vers la page du minichat
header('Location: liste_joueurs.php');
?>