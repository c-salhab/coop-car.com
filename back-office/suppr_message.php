<?php
      include '../include/verif_admin.php';
      include '../include/db.php';

      $q = 'DELETE FROM contact WHERE id=' . $_GET['id'];
      $req = $bdd->query($q);
      $res = $req->execute();

      if ($res) {
      	header('location: messages.php?message=message supprimé avec succès');
      	exit;
      } else {
      	header('location: messages.php?message=Suppression du message annulée');
      	exit;
      }

?>