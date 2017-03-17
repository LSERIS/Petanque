<?php

$bdd = new PDO('sqlite3:host=localhost;dbname=Petanque', 'root', 'Petanque');
$reponse = $bdd->query('SELECT * FROM Joueurs_Equipe_A');
while ( $donnees = $reponse->fetch())
{
	echo '<p>' . $donnees['Nom_Prénom'] . '</p>';
}

?>