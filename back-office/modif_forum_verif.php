<?php
      
      include '../include/verif_admin.php';
      include '../include/db.php';

      $q = 'UPDATE forums SET description = :description WHERE theme="' . $_POST['theme'] .'"';
      $req = $bdd->prepare($q);
      $req->execute([
      	'description' => $_POST['description']
      ]);
      
      $res = $req->fetch();
      
      if ($res) {
      	header('location: modif_forum.php?theme='. $_POST['theme']);
      	exit;
      } else {
      	header('location: modif_forum.php?theme='. $_POST['theme']);
      	exit;
      }

?>