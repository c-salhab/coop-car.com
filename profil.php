<?php
    session_start();
    if(!isset($_SESSION['Email'])){
	        header('location:index.php');
	        exit;
    }
?>

<!DOCTYPE html>
<html>
      <?php $title = 'Mon Profil'; include('include/head.php'); ?>
<style>
      main {
        margin: auto;
        width: 50%;
        padding: 150px;
        padding-left:0px;
        padding-bottom:42px;
      }
      main p {
      font-size : 24px;
      color:rgb(5, 71, 82);
      }
      h1{
      color:rgb(5, 71, 82);
      }
      
       @media screen and (max-width: 800px){
        main{
        margin: 10px;
        width: 50%;
        padding: 100px;
        padding-left:20px;
        padding-bottom:42px;
        }
        h1{
        color:rgb(5, 71, 82);
        font-size:16px;
        }
        p{
        color:rgb(5, 71, 82);
        font-size:14px;
        }
        
        img{
        width:280px;
        height:200px;
        }
        .link{
        padding-bottom:15px;
        }
        }

</style>

<body>

        <?php include('include/header.php'); ?>
        
        <div class="link">
        <a href="pdf_user.php" style="float:right;padding-top:90px;padding-right:30px;">Télécharger Mes Informations Utilisateurs</a>
        </div>
        
<main>
      <?php include('include/db.php');?>
      <h1><i>Identifiant</i></h1>
      <?php
          $q = 'SELECT identifiant, image FROM users WHERE email = "' . $_SESSION['Email'] .'"';
          $req = $bdd->query($q);
          $result = $req->fetch(PDO::FETCH_ASSOC);
          $identifiant = $result['identifiant'];
      ?>
      <p><?= $identifiant ?></p>
        	
      <h1><i>Adresse email</i></h1>
     	<p><?= $_SESSION['Email']; ?></p>
      <?php
      if (empty($result['image']))
      {
        echo '<h1><i>Image Avatar</i></h1>';
        echo '<a href="avatar">Créer un nouvel avatar</a>';
        echo '<img src="include/genere_avatar.php" style="width: 50vh; height: 50vh">';
      } else {
        echo '<h1><i>Image de profil</i><h1>';
        echo '<img src="filigrane.php" style="width: 50vh; height: 50vh">';
      }
      ?>
     <div>
     </div>
     
</main>
      <?php include('include/footer.php'); ?>
</body>
</html>