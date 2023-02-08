<?php

      if (!isset($_POST['Titre']) || !isset($_POST['Description']) || 
          empty($_POST['Titre']) || empty($_POST['Description']))
      {
        header('location: discussions.php?theme=' .$_POST['Forum'] .'&message=Veuillez remplir les deux champs');
        exit;
      }
      
      include 'include/db.php';

      $q = "SELECT MAX(id) AS max FROM discussions";
      $req = $bdd->query($q);
      $res = $req->fetch();
      
      $id = $res['max'] +1;
      
      $q = 'SELECT id FROM users WHERE email="' . $_POST['User'] .'"';
      $req = $bdd->query($q);
      $res = $req->fetch();
      
      $id_user = $res['id'];
      
      $q = 'INSERT INTO discussions(id, titre, description, id_user, theme_forum) VALUES (:id, :titre, :description, :id_user, :theme_forum)';
      $req = $bdd->prepare($q);
      $req->execute([
      		'id' => $id,
      		'titre' => $_POST['Titre'],
      		'description' => $_POST['Description'],
      		'id_user' => $id_user,
      		'theme_forum' => $_POST['Forum']
      	]);
      $res = $req->fetch();

      if ($res){
  
      header('location: discussions.php?theme=' .$_POST['Forum']);
      exit;
      
      }else{
      
      header('location: discussions.php?theme=' .$_POST['Forum']) . '&message="Erreur lors de l\'envoi"';
      exit;
      }

?>