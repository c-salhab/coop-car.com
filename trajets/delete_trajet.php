<?php

	include '../include/db.php';

	$q = 'DELETE FROM offres WHERE id_trajet=' .$_POST['id_trajet'];
	$req = $bdd->query($q);
	$res = $req->fetch();

	$q = 'DELETE FROM trajets WHERE id=' .$_POST['id_trajet'];
	$req = $bdd->query($q);
	$res = $req->fetch();

?>