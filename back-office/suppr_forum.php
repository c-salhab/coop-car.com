<?php
      include '../include/verif_admin.php';
      include '../include/db.php';
      
      $q = 'DELETE FROM commentaires WHERE id_discussion IN (SELECT id FROM discussions WHERE theme_forum="' .$_GET['theme']. '")';
      $req = $bdd->query($q);
      $res = $req->fetch();
      
      $q = 'DELETE FROM discussions WHERE theme_forum="' .$_GET['theme']. '"';
      $req = $bdd->query($q);
      $res = $req->fetch();
      
      $q = 'DELETE FROM forums WHERE theme="' . $_GET['theme'] . '"';
      $req = $bdd->query($q);
      $res = $req->fetch();

      if ($res) {
      	header('location: back-office.php?message=Forum supprimé avec succès');
      	exit;
      } else {
      	header('location: back-office.php?message=Suppression annulée');
      	exit;
      }

?>