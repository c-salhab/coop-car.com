<?php session_start(); ?>
<?php

      // Connexion � la base de donn�es
      include('include/db.php'); 

      $q = 'SELECT MAX(id) AS max FROM contact';

      $req = $bdd->query($q);
      $res = $req->fetchAll();

      $id = $res[0]['max'] + 1;

      // Cr�ation d'une requ�te pr�par�e utilisant des noms de valeurs
      
      $q = 'INSERT INTO contact(id,nom,email,message) VALUES(:Id,:nom,:email,:message)';
      $req = $bdd->prepare($q); // Requ�te pr�par�e
      $result = $req->execute([
      						'Id' => $id,
                  'nom' => $_POST['nom'],
                  'email' => $_POST['email'],
                  'message' => $_POST['message']
      					]);


      if($result){
      	// L'insertion a fonctionn�
      	header('location: contact.php?message=message �nvoy� avec succ�s.');
      	exit;
       
      }else{
      	// L'insertion n'a pas fonctionn�
      	header('location: contact.php?message=Erreur lors de l\'envoi du message.');
      	exit;
       
      }

?>