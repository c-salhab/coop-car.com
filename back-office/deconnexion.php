<?php 

      // Ouverture de la session
      session_start();
      
      // Destruction de la session
      session_destroy();
      
      // Redirection vers la page d'accueil
      header('location: ../index.php');
      exit;

?>