<?php session_start(); ?>
<?php

      // Connexion à la base de données
      include('include/db.php'); 

      $q = 'SELECT MAX(id) AS max FROM contact';

      $req = $bdd->query($q);
      $res = $req->fetchAll();

      $id = $res[0]['max'] + 1;

      // Création d'une requête préparée utilisant des noms de valeurs
      
      $q = 'INSERT INTO contact(id,nom,email,message) VALUES(:Id,:nom,:email,:message)';
      $req = $bdd->prepare($q); // Requête préparée
      $result = $req->execute([
      						'Id' => $id,
                  'nom' => $_POST['nom'],
                  'email' => $_POST['email'],
                  'message' => $_POST['message']
      					]);


      if($result){
      	// L'insertion a fonctionné
      	header('location: contact.php?message=message énvoyé avec succès.');
      	exit;
       
      }else{
      	// L'insertion n'a pas fonctionné
      	header('location: contact.php?message=Erreur lors de l\'envoi du message.');
      	exit;
       
      }

?>