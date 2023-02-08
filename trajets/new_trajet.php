<?php
      include '../include/db.php';
      
      $q = "SELECT MAX(id) AS max FROM trajets";
      $req = $bdd->query($q);
      $res = $req->fetch();
            
      $id = $res['max'] +1;

      $q = 'SELECT id FROM users WHERE email="' . $_POST['email'] .'"';
      $req = $bdd->query($q);
      $res = $req->fetch();

      $id_user = $res['id'];
      
      $q = 'INSERT INTO trajets(id, depart, arrivee, date, heure, description, id_user) VALUES (:id, :depart, :arrivee, :date, :heure, :description, :id_user)';
      $req = $bdd->prepare($q);
      $req->execute([
      		'id' => $id,
      		'depart' => $_POST['depart'],
      		'arrivee' => $_POST['arrivee'],
      		'date' => $_POST['date'],
          'heure' => $_POST['heure'],
          'description' => $_POST['description'],
      		'id_user' => $id_user
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