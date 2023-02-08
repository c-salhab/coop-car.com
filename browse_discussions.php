<!DOCTYPE html>
<html>
      <?php $title = 'Discussion'; include('include/head.php'); ?>
<style>
      body{
      margin : 0;
      background-color:rgb(237,237,237);
      }
      
      .discuss{
      padding-top:70px;
      margin:20px;
      }
      
      input,.btn {
        width: 30%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none;
      }
      p{
      color:rgb(5,71,82);
      }
      input:hover,
      .btn:hover {
        opacity: 1;
      }
      
      input[type=submit] {
        background-color: rgb(69,185,191);
        color: white;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: rgb(91,209,215);
      }
      
      @media screen and (max-width: 800px){
          .discuss{
            padding-top:60px;
            margin:20px;
            }
          
          input,.btn {
          width: 50%;
          padding: 12px;
          border: none;
          border-radius: 4px;
          margin: 5px 0;
          opacity: 0.85;
          display: inline-block;
          font-size: 14px;
          line-height: 20px;
          text-decoration: none;
        }
      }
</style>
<?php 
      include 'include/db.php';
      
      $q = 'SELECT theme_forum FROM discussions WHERE id=' .$_GET['id'];
      $req = $bdd->query($q);
      $res = $req->fetch();
      $theme = $res['theme_forum'];
?>
<body
<?php

if ($theme == 'pizza time')
{
  echo 'style="margin: 0px; background-image: url(' . "'uploads/image-pizza-time.jpg'". ');"';
}

?>
>

    <?php include 'include/header.php'; ?>
      
      <div class="discuss">
      <?php
      if ($theme == 'pizza time')
      {
        echo '
        <audio controls autoplay loop>
          <source src="uploads/pizza_time.mp3" type="audio/mpeg" />
        </audio>
        ';
      }
      
      $q = 'SELECT users.identifiant AS user, dateheure, contenu FROM commentaires LEFT JOIN users ON id_user=users.id WHERE id_discussion=' . $_GET['id'] . ' ORDER       BY dateheure';
      $req = $bdd->query($q);
      $res = $req->fetchAll();
      
      foreach ($res as $i) {
      	echo '<p>' . $i['user'] . ' a écrit ' . $i['contenu'] . ' le ' . $i['dateheure'] .'</p>';
      }
      
      session_start();
      if (isset($_SESSION['Email'])) {
        echo '<form action="new_comment.php" method="post">';
        echo '<input type="text" name="Content" id="Content" placeholder="Qu\'en pensez vous?" required/> <br>';
        echo '<input type="hidden" name="Discussion" value="' .$_GET['id']. '" />';
        echo '<input type="hidden" name="User" value="' .$_SESSION['Email']. '" />';
        echo '<input type="submit" value="Envoyer" />';
      } else {
        echo '<a href="login.php">Connectez vous et faites connaître vôtre opinion!</a>';
      }
      ?>
      </div>
      
</body>
</html>