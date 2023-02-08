<?php 
    session_start();
    if(!isset($_SESSION['Email'])){
	  header('location:index.php');
	  exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Mes infos-Utilisateurs</title>
    </head>
<body>
<main>
    <?php include('include/db.php');?>
  
    <h1>Identifiant</h1>
    <?php
    $q = 'SELECT identifiant FROM users WHERE email = "' . $_SESSION['Email'] .'"';
    $req = $bdd->query($q);
    $result = $req->fetch(PDO::FETCH_ASSOC);
    $identifiant = $result['identifiant'];
    ?>
    
    <p><?= $identifiant ?></p>
  	<h1>Adresse email</h1>
  	<p><?= $_SESSION['Email']; ?></p>
  	<h1>Telephone</h1> 
    <?php
    $q = 'SELECT telephone FROM users WHERE email = "' . $_SESSION['Email'] .'"';
    $req = $bdd->query($q);
    $result = $req->fetch(PDO::FETCH_ASSOC);
    $telephone = $result['telephone'];
    ?>
    <p><?= $telephone ?></p>
   	<h1>Adresse</h1> 
    <?php
    $q = 'SELECT adresse FROM users WHERE email = "' . $_SESSION['Email'] .'"';
    $req = $bdd->query($q);
    $result = $req->fetch(PDO::FETCH_ASSOC);
    $adresse = $result['adresse'];
    ?>
    <p><?= $adresse ?></p>
</main>
</body>
</html>