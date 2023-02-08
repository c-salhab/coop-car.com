<?php
      include '../include/verif_admin.php';
      include '../include/db.php';

      $q = 'UPDATE users SET identifiant=:identifiant, email=:email, adresse=:adresse, telephone=:telephone, statut=:statut WHERE id='. $_POST['id'];
      $req = $bdd->prepare($q);
      $req->execute([
      	'identifiant' => $_POST['identifiant'],
      	'email' => $_POST['email'],
      	'adresse' => $_POST['adresse'],
      	'telephone' => $_POST['telephone'],
      	'statut' => $_POST['statut']
      ]);
      $res = $req->fetch();

      if ($res) {
      	header('location: modif_user.php?id='. $_POST['id']);
      	exit;
      } else {
      	header('location: modif_user.php?id='. $_POST['id']);
      	exit;
      }

?>