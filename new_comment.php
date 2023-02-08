<?php

    if (!isset($_POST['Content']) || empty($_POST['Content']))
    {
        header('location: browse_discussions.php?id=' .$_POST['Discussion'] .'&message=Veuillez remplir tous les champs');
        exit;
    }
    
    include 'include/db.php';

    $q = "SELECT MAX(id) AS max, NOW() AS date FROM commentaires";
    $req = $bdd->query($q);
    $res = $req->fetch();

    $id = $res['max'] +1;
    $date = $res['date'];

    $q = 'SELECT id FROM users WHERE email="' . $_POST['User'] .'"';
    $req = $bdd->query($q);
    $res = $req->fetch();

    $id_user = $res['id'];

    $q = 'INSERT INTO commentaires(id, dateheure, id_user, contenu, id_discussion) VALUES (:id, :dateheure, :id_user, :contenu, :id_discussion)';
    $req = $bdd->prepare($q);
    $req->execute([
    		'id' => $id,
    		'dateheure' => $date,
    		'id_user' => $id_user,
    		'contenu' => $_POST['Content'],
    		'id_discussion' => $_POST['Discussion']
    	]);
    $res = $req->fetch();

  if ($res){
  
  header('location: browse_discussions.php?id=' .$_POST['Discussion']);
  exit;
  
  }else{
  
  header('location: browse_discussions.php?id=' .$_POST['Discussion']) . '&message="Erreur lors de l\'envoi"';
  exit;
  }

?>