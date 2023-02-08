<?php

include '../include/db.php';

$q = 'UPDATE users SET ava_tete=:tete, ava_yeux=:yeux, ava_bouche=:bouche, ava_nez=:nez WHERE id=:id';
$req = $bdd->prepare($q);
$res = $req->execute([
	'id' => $_POST['id_user'],
	'tete' => $_POST['ava_tete'],
	'yeux' => $_POST['ava_yeux'],
	'bouche' => $_POST['ava_bouche'],
	'nez' => $_POST['ava_nez']
]);

echo $_POST['id_user'];
exit;

?>