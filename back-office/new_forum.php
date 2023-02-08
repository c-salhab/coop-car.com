<?php
      include '../include/verif_admin.php';
      include '../include/db.php';

      $q = 'INSERT INTO forums(theme, description) VALUES("'. $_POST['theme'] .'", "' .$_POST['description'] .'")';
      $req = $bdd->query($q);
      $res = $req->execute();

      if ($res) {
      	header('Location: back-office.php?message=Nouveau forum crée avec succès!');
      	exit;
      } else {
      	header('Location: back-office.php?message=Erreur lors de la création du forum');
      	exit;
      }
?>