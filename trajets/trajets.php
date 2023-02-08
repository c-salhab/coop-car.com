<?php session_start(); ?>
<!DOCTYPE html>
<html>
<?php $title = 'Trajets Proposés'; include('../include/head.php'); ?>
<link rel="icon" href="../images/logo_.png" type="image/icon type">
<link rel="style sheet" type="text/css" href="../css/style.css">
<style>
          .trajet{
          font-family: 'Blogger Sans';
          padding-left:40px;
          padding-top:20px;
          
          }
          body{
          margin:0px;
          padding-top:0px;
          background-color:#f8f8f8;
          }
          main{
          padding-bottom:30px;
          }
          main h1{
          padding-top:15px;
          padding-left:30px;
          }
          .button2 {
          background-color: white; 
          color: black; 
          border: 2px solid #008CBA;
          }
          
          .button2:hover {
          background-color: #008CBA;
          color: white;
          }
          
          .boutton{
          position:absolute;
          top: 15px; 
          left:30px;
          padding-left:15px;
          }
          .button {
          display: inline-block;
          border-radius: 4px;
          background-color:#6dabe4;
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 16px;
          padding: 14px;
          width: 100px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 5px;
          margin-top:40px;
          margin-left:25px;
          }
          
          .button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
          }
          
          .button span:after {
          content: '\00AB';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
          }
          
          .button:hover span {
          padding-right: 25px;
          }
          
          .button:hover span:after {
          opacity: 1;
          right: 0;
          }
          
          form{
          padding-left:350px;
          padding-top:30px;
          padding-bottom:30px;
          }
          input[type=text], select {
              width: 60%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }
              input[type=date], select {
              width: 60%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              
            }
              input[type=time], select {
              width: 60%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              
            }
            input[type=submit] {
              width: 60%;
              background-color:#6dabe4;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              
            }
            input[type=submit]:hover {
              background-color:#008CBA;
            }
            
             @media screen and (max-width: 700px) {
                  form{
                  padding-left:50px;
                  }
                  input[type=submit] {
                  width:80%;
                  }
                  input[type=text] {
                  width:80%;
                  }
                  input[type=date] {
                  width:80%;
                  }
                  input[type=time] {
                  width:80%;
                  }
              }
          
          
</style>
<body>
    <button class="button" onclick="location.href = '../index.php';" style="vertical-align:middle;"><span>Retour</span></button>
    
<main>
	<?php
  
	if (isset($_SESSION['Email']))
	{
     
     $today = date("Y-m-d"); 
 
		echo '
    
		<form action="new_trajet.php" method="POST">
			<input type="hidden" name="email" value="' .$_SESSION['Email']. '"> <br>
			<label><b>Départ</b></label><br>
      <input type="text" name="depart" required placeholder="Votre Départ"> <br>
			<label><b>Arrivée</b></label><br>
      <input type="text" name="arrivee" required placeholder="Votre Arrivée"> <br>
			<label><b>Date</b></label><br>
      <input type="date" name="date" min="' . $today . '" required><br>
			<label><b>Heure</b></label><br>
      <input type="time" name="heure" required> <br>
			<label><b>Description Du Trajet</b></label><br>
      <input type="text" name="description" required placeholder="Description Du Trajet"> <br>
			<input type="submit" value="Nouveau Trajet">
		</form>
   
		';
	} 

  
	include '../include/db.php';

	if (isset($_SESSION['Email']))
	{
		$q = 'SELECT id FROM users WHERE email="' . $_SESSION['Email'] .'"';
	    $req = $bdd->query($q);
	    $res = $req->fetch();

	    $id_user = $res['id'];

		$q='SELECT trajets.id AS id, depart, arrivee, date, heure, description, users.identifiant AS identifiant, DATEDIFF(date, NOW()) AS diffdays FROM trajets LEFT JOIN users ON id_user=users.id WHERE date>NOW() AND id_user!='. $id_user;
	} else {
		$q='SELECT trajets.id AS id, depart, arrivee, date, heure, description, users.identifiant AS identifiant, DATEDIFF(date, NOW()) AS diffdays FROM trajets LEFT JOIN users ON id_user=users.id WHERE date>NOW()'; 
  }

	$req = $bdd->query($q);
	$res = $req->fetchAll(PDO::FETCH_ASSOC);

	foreach ($res as $offre) {
    echo '<div class="trajet">';
    echo '<h2>Trajet posté par ' . $offre['identifiant'] . '</h2>';
		echo '<p>Part de: ' . $offre['depart'] . '</p>';
		echo '<p>Souhaite arriver à: ' . $offre['arrivee'] . '</p>';
		echo '<p>' . $offre['date'] . '</p>';
		echo '<p>' . $offre['heure'] . '</p>';
		echo '<p>Il reste ' . $offre['diffdays'] . ' jours avant ce trajet</p>';
		echo '<p>' . $offre['description'] . '</p>';
		if (isset($_SESSION['Email']))
		{
			$q = 'SELECT message, statut FROM offres WHERE id_trajet=' .$offre['id']. ' AND id_conducteur=' .$id_user;
			$req = $bdd->query($q);
			$res = $req->fetch();

			if (empty($res))
			{
				echo '<form action="new_offre.php" method="POST">';
			    echo '<input type="text" name="message" placeholder="Un message avec votre offre">';
			    echo '<input type="hidden" name="id" value="'. $offre['id'] .'">';
			    echo '<input type="hidden" name="email" value="'. $_SESSION['Email'] .'">';
			    echo '<input type="submit" value="Envoyer L\'Offre">';
			    echo '</form>';
			} else {
				echo '<p style="color: red">Vous avez déjà proposé une offre: </p>';
				echo '<p style="color: red">"' .$res['message']. '"</p>';
				echo '<p style="color: red">L\'offre est: ' .$res['statut']. '</p>';
			}

		}
    echo '</div>';
	}

	?>

	<?php

	if (isset($_SESSION['Email']))
	{
		echo '<h1><i>Vos trajets</i></h1>';
		$q = 'SELECT id, depart, arrivee, date, heure, description, DATEDIFF(date, NOW()) AS diffdays FROM trajets WHERE id_user='.$id_user;
		$req = $bdd->query($q);
		$res = $req->fetchAll(PDO::FETCH_ASSOC);

		foreach ($res as $offre) {

      echo '<div class="trajet" id="trajet'.$offre['id'].'">';
      echo '<p><b>Ou ?</b></p>';
      echo '<p>Part de: ' . $offre['depart'] . '</p>';
      echo '<p><b>Arrivé à ?</b></p>';
			echo '<p>Souhaite arriver à: ' . $offre['arrivee'] . '</p>';
      echo '<p><b>Quand ?</b></p>';
			echo '<p>' . $offre['date'] . '</p>';
			echo '<p>' . $offre['heure'] . '</p>';
			echo '<p><b>Description ?</b></p>';
      echo '<p>Il reste ' . $offre['diffdays'] . ' jours avant ce trajet</p>'; 
			echo '<p>' . $offre['description'] . '</p>';
      echo '<button onclick="deleteTrajet(' .$offre['id'].')">Effacer ce trajet</button>';
			$q = 'SELECT id_conducteur, id_trajet, users.identifiant AS identifiant, offres.statut AS statut, message FROM offres LEFT JOIN users ON id_conducteur=users.id WHERE id_trajet=' .$offre['id'];
			$req = $bdd->query($q);
			$innerRes = $req->fetchAll(PDO::FETCH_ASSOC);
      echo '<div class="offres">';
			foreach ($innerRes as $prop)
			{
        echo '<div id="offre'.$prop['id_conducteur']. $prop['id_trajet'].'">';
				echo '<p><i>'.$prop['identifiant'].' propose "'.$prop['message'].'". La proposition est '. $prop['statut'] .'</i></p>';
				echo '<button onclick="acceptOffre('.$prop['id_conducteur'].', '.$prop['id_trajet']. ')">Accepter offre</button>';
        echo '</div>';
			}
      echo '</div>';
      echo '</div>';
		}
	}
	?>
	<script src="trajets.js"></script>
</main>

</body>
</html>