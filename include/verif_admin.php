<?php
session_start();
if (!isset($_SESSION['Email']) || empty($_SESSION['Email'])) 
{
	header('Location: ../index.php?message=Veuillez vous connecter pour accéder à ces pages.');
	exit;
}

include 'db.php';

$q = 'SELECT statut FROM users WHERE email="' . $_SESSION['Email'] . '"';
$req = $bdd->query($q);
$res = $req->fetch();

if ($res['statut'] != '1') {
	header('Location: ../index.php?message=Ces pages sont réservées aux administrateurs >:(');
	exit;
}

?>