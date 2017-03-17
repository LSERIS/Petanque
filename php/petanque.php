<?php


$bdd = new PDO('sqlite:../phpsqliteconnect/Petanque.sqlite');
$reponse = $bdd->query('SELECT * FROM Joueurs_Equipe_A');
while ( $donnees = $reponse->fetch())
{
	echo '<p>' . $donnees['Nom_Prénom'] . '</p>';
}

?>
