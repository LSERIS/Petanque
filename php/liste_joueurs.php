<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/tablet.css" />
        <title>LISTE DES JOUEURS</title>
    </head>
    <style>
    form
    {
        text-align:center;
    }
    </style>
    <body>
    
    <form action="liste_joueurs_post.php" method="post">
        <p>
        <label for="Nom_Prenom">Nom Prénom</label> : <input type="text" name="Nom_Prenom" autocomplete="off" /> </br></br>

        <input type="submit" value="Valider" />
		</p>
    </form>

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

	// Récupération de la liste des joueurs de l'équipe A
	$reponse = $bdd->query('SELECT Nom_Prenom FROM Joueurs_Equipe_A ORDER BY ID');
	echo 'Liste des joueurs de l\'équipe A';
	
	// Affichage de chaque nom de joueur (toutes les données sont protégées par htmlspecialchars)
	while ($donnees = $reponse->fetch())
	{
		echo '<p><strong>' . htmlspecialchars($donnees['Nom_Prenom']) . '</strong></p>';
	}

	// Récupération de la liste des joueurs de l'équipe B
	$reponse = $bdd->query('SELECT Nom_Prenom FROM Joueurs_Equipe_B ORDER BY ID');
	echo 'Liste des joueurs de l\'équipe B';

	// Affichage de chaque nom de joueur (toutes les données sont protégées par htmlspecialchars)
	while ($donnees = $reponse->fetch())
	{
		echo '<p><strong>' . htmlspecialchars($donnees['Nom_Prenom']) . '</strong></p>';
	}

	$reponse->closeCursor();

	?>

    </body>
</html>