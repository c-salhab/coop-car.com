<?php

          use Dompdf\Dompdf;
          use Dompdf\Options;
          
          include 'include/db.php';
          
          $sql = 'SELECT * FROM users';
          
          $query = $bdd->query($sql);
          
          $users = $query->fetchAll();
          
          ob_start();
          include 'pdf-content.php';
          $html = ob_get_contents();
          ob_end_clean();
          
          
          include 'dompdf/autoload.inc.php';
          
          $options= new Options();
          $options->set('defaultFont','Courier');
          
          $dompdf = new Dompdf($options);
          
          $dompdf->loadHtml($html);
          
          $dompdf->setPaper('A4','portrait');
          
          $dompdf->render(); //rendre le pdf en memoire
          
          $fichier = 'infos-utilisateur.pdf'; //nom du fichier que je veux generer
          $dompdf->stream($fichier); //envoie en pdf telecharge

?>