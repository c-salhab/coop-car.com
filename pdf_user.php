<?php

      use Dompdf\Dompdf;
      use Dompdf\Options;
      
      include 'include/db.php';
      
      $q = 'SELECT identifiant,adresse,telephone,email FROM users WHERE email = "' . $_SESSION['Email'] .'"';
      
      $query = $bdd->query($q);
      
      $users = $query->fetchAll();
      
      ob_start();
      include 'profil_u.php';
      $html = ob_get_contents();
      ob_end_clean();
      
      
      include 'dompdf/autoload.inc.php';
      
      $options= new Options();
      $options->set('defaultFont','Courier');
      
      $dompdf = new Dompdf($options);
      
      $dompdf->loadHtml($html);
      
      $dompdf->setPaper('A4','portrait');
      
      $dompdf->render(); //rendre le pdf en memoire
      
      $fichier = 'Mes infos-Utilisateurs.pdf'; //nom du fichier que je veux generer
      $dompdf->stream($fichier); //envoie en pdf telecharge

?>