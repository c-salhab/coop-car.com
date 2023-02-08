<?php

	include '../include/db.php';

	$q = 'UPDATE offres SET statut="Acceptée" WHERE id_conducteur=' .$_POST['id_conducteur']. ' AND id_trajet=' .$_POST['id_trajet'];
	$req = $bdd->query($q);
	$res = $req->fetch();

	$q = 'UPDATE offres SET statut="Refusée" WHERE id_conducteur!=' .$_POST['id_conducteur']. ' AND id_trajet=' .$_POST['id_trajet'];
	$req = $bdd->query($q);
	$res = $req->fetch();

?>