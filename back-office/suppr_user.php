<?php
      include '../include/verif_admin.php';
      include '../include/db.php';
      
      $q = 'UPDATE users SET statut=2 WHERE id=' . $_GET['id'];
      $req = $bdd->query($q);
      $res = $req->execute();

      if ($res) {
      	header('location: back-office.php?message=Utilisateur supprimé avec succès');
      	exit;
      } else {
      	header('location: back-office.php?message=Suppression annulée');
      	exit;
      }

?>