<?php
      include '../include/db.php';
      
      $q = 'SELECT id FROM users WHERE email="' . $_POST['email'] .'"';
      $req = $bdd->query($q);
      $res = $req->fetch();

      $id_user = $res['id'];
      
      $q = 'INSERT INTO offres(id_conducteur, id_trajet, statut, message) VALUES (:id_conducteur, :id_trajet, :statut, :message)';
      $req = $bdd->prepare($q);
      $req->execute([
      		'id_conducteur' => $id_user,
      		'id_trajet' => $_POST['id'],
      		'statut' => 'En attente',
      		'message' => $_POST['message']
      	]);
      $res = $req->fetch();
      
      if ($res){
            header('location: trajets.php');
            exit;
      }else{
            header('location: trajets.php?message=Erreur');
            exit;
      }
?>