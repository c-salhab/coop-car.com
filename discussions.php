<!DOCTYPE html>
<html>
      <?php $title = 'Discussion'; include('include/head.php'); ?>
<style>
      * {
        box-sizing: border-box;
      }
      body{
        margin:0px;
        background-color: rgb(237,237,237);
      }
      
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        padding-top:20px;
      }
      
      input,.btn {
        width: 90%;
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
      
      .discussion{
      margin:10px;
      padding-left:45px;
      padding-top:90px;
      }
      .discussion2{
      margin:10px;
      padding-left:45px;
      padding-top:40px;
      }
      .discussion2 a{
      font-size:22px;
      color: rgb(5,71,82);
      }
      
      .discussion2 a:hover {
        color: #3b838f;
      }
      .user{
      float:right;
      }
      
      @media screen and (max-width: 800px){
          .discussion2{
              padding-top: 40px;
              padding-left:0px;
              margin:0px;
          }
          
          .center {
            display: block;
            margin-left:auto;
            margin-right: auto;
            width: 80%;
            padding-top:0px;
          }
          
          .discussion {
          margin: 10px;
          padding-left: 5px;
          padding-top: 55px;
        }
      
      }
      
      
</style>

<body
<?php

if ($_GET['theme'] == 'pizza time')
{
  echo 'style="margin: 0px; background-image: url(' . "'uploads/image-pizza-time.jpg'". ');"';
}

?>
>

      <?php include('include/header.php'); ?>

<main>
      <div class="discussion">
      <?php
      if ($_GET['theme'] == 'pizza time')
      {
        echo '
        <audio controls autoplay loop>
          <source src="uploads/pizza_time.mp3" type="audio/mpeg" />
        </audio>
        ';
      }
      
      include 'include/db.php';
      $q = 'SELECT discussions.id AS id, titre, description, theme_forum, users.identifiant AS user FROM discussions LEFT JOIN users ON id_user=users.id WHERE           theme_forum="' . $_GET['theme'] . '"';
      $req = $bdd->query($q);
      $res = $req->fetchAll();
      
      session_start();
      if (isset($_SESSION['Email'])) {
        echo '<form action="new_discuss.php" method="post" class="center">';
        echo '<input type="text" name="Titre" id="Titre" placeholder="Titre" required/>';
        echo '<input type="text" name="Description" id="Description" placeholder="Description" required/>';
        echo '<input type="hidden" name="Forum" value="' .$_GET['theme']. '" />';
        echo '<input type="hidden" name="User" value="' .$_SESSION['Email']. '" />';
        echo '<input type="submit" value="Lancer la discussion!" />';
        echo '</form>';
      } else {
        echo '<a href="login.php">Vous devez vous connecter pour créer une discussion</a>';
      }
      
      foreach ($res as $i) {
      	echo '<div class="discussion2">';
        echo '<b><a href="browse_discussions.php?id='.$i['id'].'" class="titre">' .$i['titre']. '</a></b>';
        echo '<p class="description">' .$i['description']. '</p>';
        echo '<i><p class="user">' .$i['user']. '</p></i>';
        echo '</div>';
      }
      ?>
      </div>

</main>
</body>
</html>