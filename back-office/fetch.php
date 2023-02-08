<?php
      include("./fonctions.php");

      $sql = "SELECT id, identifiant, email, statut FROM users WHERE identifiant LIKE '".$_GET["word"]."%'";

      $pdo = BDconnectPDO();
      $stmt = $pdo->prepare($sql);
      if($stmt){
          $res = $stmt->execute();
      if($res){
              echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
              http_response_code(200);
      }else{
              http_response_code(500);
      }
      }else{
          http_response_code(500);
      }

?>