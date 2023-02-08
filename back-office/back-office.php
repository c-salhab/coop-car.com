<!DOCTYPE html>
<html>
<?php $title = 'Accueil Administration'; include('../include/head.php'); 
include '../include/verif_admin.php' ?>
  <style>
  
        .search {
        margin:3;
        width: 80%;
        max-width: 1125px;
        }
        input:focus {
        outline: 0;
        }
      
        input.question{
        font-size: 16px;
        font-weight: 150;
        border-radius: 2px;
        margin: 0;
        border: none;
        width: 80%;
        background: rgba(0, 0, 0, 0);
        transition: padding-top 0.2s ease, margin-top 0.2s ease;
        overflow-x: hidden;
        }
      
        input.question + label{
        display: block;
        position: relative;
        white-space: nowrap;
        padding: 0;
        margin: 0;
        width: 10%;
        border-top: 1px solid #012a30;
        -webkit-transition: width 0.4s ease;
        transition: width 0.4s ease;
        height: 0px;
      }
      
      input.question:focus + label{
        width: 80%;
      }
      
      input.question:focus,
      input.question:valid {
        padding-top: 35px;
      }
      
      textarea.question:valid,
      textarea.question:focus {
        margin-top: 35px;
      }
      
      input.question:focus + label > span,
      input.question:valid + label > span {
        top: -60px;
        font-size: 22px;
        color: rgb(5 71 82);
      }
      
      input.question:valid + label{
        border-color: rgb(5 71 82) ;
      }
      
      input.question:invalid{
        box-shadow: none;
      }
      
      input.question + label > span{
        font-weight: 300;
        margin: 0;
        position: absolute;
        color: #8F8F8F;
        font-size: 16px;
        top: -35px;
        left: 0px;
        z-index: -1;
        -webkit-transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
        transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
      }
      
      
      input.question:valid ~ input[type="submit"]{
        -webkit-animation: appear 1s forwards;
        animation: appear 1s forwards;
      }
      
      input.question:invalid ~ input[type="submit"]{
        display: none;
      }
      
      @-webkit-keyframes appear {
        100% {
          opacity: 1;
        }
      }
      
      @keyframes appear {
        100% {
          opacity: 1;
        }
      }
      
        body {
          margin: 0;
        }
        .sidebar {
        margin: 0;
        padding: 0;
        width: 200px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
      }
      
      
       ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 25%;
          background-color: #f1f1f1;
          position: fixed;
          height: 100%;
          overflow: auto;
        }
        .sidebar li a {
          display: block;
          color: #000;
          padding: 8px 16px;
          text-decoration: none;
        }
      
        .sidebar li a.active {
          background-color: rgb(5, 71, 82);
          color: white;
        }
      
        .sidebar li a:hover:not(.active) {
          background-color: #555;
          color: white;
        }
        
        .sidebar li a:hover:not(.not_active) {
          background-color: #555;
          color: white;
        }
        
      div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
      }
      
      
       
      form {max-width:600px; margin:30px auto;padding:0;}
      
      .feedback-input {
        color:black;
        font-weight:500;
        font-size: 18px;
        border-radius: 5px;
        line-height: 22px;
        background-color: transparent;
        border:2px solid rgb(5 71 82);
        transition: all 0.3s;
        padding: 13px;
        margin-bottom: 15px;
        width:100%;
        box-sizing: border-box;
        outline:0;
      }
      
      .feedback-input:focus { border:2px solid color:rgb(5 71 82); }
      
      textarea {
        height: 150px;
        line-height: 150%;
        resize:vertical;
      }
      
      [type="submit"] {
      
        width: 100%;
        background:rgb(5 71 82);
        border-radius:5px;
        border:0;
        cursor:pointer;
        color:white;
        font-size:24px;
        padding-top:10px;
        padding-bottom:10px;
        transition: all 0.3s;
        margin-top:-4px;
        font-weight:700;
      }
      [type="submit"]:hover { background:#076373; }
      
      
      
      label { font-size :18px; }
      
      html{
        font-family: 'Blogger Sans';
        scroll-behavior: smooth;
      }
      .bodyy{
      margin-left:25%;
      padding:1px 16px;
      height:1000px;
      
      }
      h1 {
        position: relative;
        padding: 0;
        margin: 0;
        font-family: "Raleway", sans-serif;
        font-weight: 300;
        font-size: 40px;
        color: #080808;
        -webkit-transition: all 0.4s ease 0s;
        -o-transition: all 0.4s ease 0s;
        transition: all 0.4s ease 0s;
      }
      
      .eight h1 {
        text-align:center;
       
        text-transform:uppercase;
        font-size:26px; letter-spacing:1px;
        
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 16px 0;
        grid-gap: 22px;
      }
      
      .eight h1:after,.eight h1:before {
        content: " ";
        display: block;
        border-bottom: 2px solid #ccc;
        background-color:#ffffff;
      }
      
      #customers {
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
        width: 100%;
      }
      
      #customers td, #customers th {
        padding: 8px;
      }
      
      #customers tr:nth-child(even){background-color: #f2f2f2;}
      
      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: rgb(5 71 82);
        color: white;
      }
      
      @media screen and (max-width: 700px) {
        .bodyy h2{
        font-size:18px;
        }
        .sidebar img{display:none;}
        .sidebar, ul {
          width: 100%;
          height: auto;
          position: relative;
        }
        .sidebar li a {float: left;
          font-size:11px;}
        div.content {margin-left: 0;}
        .bodyy{
          margin-left:0px;
          padding: 5px;
          height: 100px;
      }
      .eight h1 {
        text-align:center;
        text-transform:uppercase;
        font-size:15px; letter-spacing:1px;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 16px 0;
        grid-gap: 22px;
      } 
      .hidden_image{
            display: block;
        margin-left: 12%;
        margin-right: auto;
        width: 50%;
        }
      }
      
      .hidden_image{ display:none;}
      
      @media screen and (max-width: 400px) {
        .bodyy h2{
        font-size:18px;
        }
        .sidebar img{display:none;}
        .sidebar, ul {
          width: 100%;
          height: auto;
          position: relative;
        }
        .sidebar li a {float: left;
          font-size:8px;}
        div.content {margin-left: 0;}
        .bodyy{
          margin-left:0px;
          padding: 5px;
          height: 100px;
      }
      .eight h1 {
        text-align:center;
        text-transform:uppercase;
        font-size:15px; letter-spacing:1px;
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 16px 0;
        grid-gap: 22px;
      }
      .hidden_image{
            display: block;
      margin-left: 5%;
        margin-right: auto;
        width: 50%;
        }
      }
      @media 
      only screen and (max-width: 760px),
      (min-device-width: 768px) and (max-device-width: 1024px)  {
      
      	table, thead, tbody, th, td, tr { 
      		display: block; 
      	}	
      	thead tr { 
      		position: absolute;
      		top: -9999px;
      		left: -9999px;
      	}
      	td { 
      		position: relative;
      		padding-left: 50%; 
      	}
      	
      	td:before { 
      		position: absolute;
      		top: 6px;
      		left: 6px;
      		width: 45%; 
      		padding-right: 10px; 
      		white-space: nowrap;
      	}
       .hidden_image{
            display: block;
        margin-left: 5%;
        margin-right: auto;
        width: 50%;
        }
       }
</style>

      <link rel="icon" href="../images/logo_.png" type="image/icon type">
      <link rel="style sheet" type="text/css" href="../css/style.css">

<body>
      <div class="sidebar">
      <ul>
        <li><img src="../images/logo.png" height="110" style="padding-left:20px;" ></li>
        <li><a class="active" href="back-office.php">Accueil</a></li>
        <li><a href="messages.php">Messages Utilisateurs</a></li>
        <li><a  href="../../log.txt">Logs</a></li>
        <li><a href="mention.php">Mention Légale</a></li>
        <li><a  href="deconnexion.php">Deconnexion</a></li>
      </ul>
      </div>

      <div class="bodyy">

      <div class="hidden_image">
      <img src="../images/logo.png">
      </div>
  
      <br>
      <h2><i>Bonjour, bienvenue sur l'espace Administrateur de coop-car.</i></h2><br>
      
      <div class="eight">
      <h1>Liste des utilisateurs: </h1>
      </div><br><br>
      <a href="../genpdf.php" style = "float:right;padding-bottom:20px;">Télécharger la liste des utilisateurs</a>
      <div class="search">
      <input type="text" name="name" class="question" id="nme" oninput="fetch(this)"/>
      <label for="nme"><span>Recherchez Un Utilisateur !</span></label>  
      </div><br>
      
      <table id="customers">
              <thead>
                <th>Identifiant</th>
                <th>Email</th>
                <th>Statut</th>
                <th>Actions</th>
              </thead>
        
        <tbody id="user-table">
        <?php
              include '../include/db.php';
    
              $q = 'SELECT id, identifiant, email, statut FROM users';
              $req = $bdd->query($q);
              $res = $req->fetchAll();
          
              foreach ($res as $i){
            
              echo '<tr>';
              echo '<td>' . $i['identifiant'] . '</td>';
              echo '<td>' . $i['email'] . '</td>';
              echo '<td>';
            
              switch ($i['statut']) {
                    case 0:
                      echo 'Actif';
                      break;
                    
                    case 1:
                      echo 'Admin';
                      break;
          
                    case 2:
                      echo 'Inactif';
                      break;
                      
                    default:
                      echo 'Statut illisible';
                      break;
                  }
            
              echo '</td>';
              echo '<td>';
              echo '<a href=modif_user.php?id='.$i['id'].'>Modifier</a> <br>';
              echo '<a href=suppr_user.php?id='.$i['id'].'>Bannir</a>';
              echo '</tr>';
          }
          ?>  
          </tbody>
          </table>
          
      <script type="text/javascript" src="index.js"></script>
      
      <br><br>
      <div class="eight">
      <h1>Liste des forums </h1>
      </div>
      <br><br>
      <table id="customers">
        <thead>
          <th>Theme</th>
          <th>Description</th>
          <th>Actions</th>
        </thead>
        <tbody>
          <?php
          $q = 'SELECT theme, description FROM forums';
          $req = $bdd->query($q);
          $res = $req->fetchAll();
          foreach ($res as $i) 
          {
            echo '<tr>';
            echo '<td>' . $i['theme'] .'</td>';
            echo '<td>' . $i['description'] . '</td>';
            echo '<td>';
            echo '<a href="modif_forum.php?theme='. $i['theme'] .'">Modifier</a> <br>';
            echo '<a href="suppr_forum.php?theme='. $i['theme'] .'">Supprimer</a>';
            echo '</td>';
            echo '</tr>';
          }
          ?>  
        </tbody>
      </table>
      <br><br>
      <div class="eight">
      <h1>Ajouter un forum!</h1>
      </div>
      
          <form action="new_forum.php" method="POST" style="padding-bottom:50px;">
                <input type="text" name="theme" id="theme" class="feedback-input" placeholder="Nouveau Theme De Forum"><br>
                <textarea type="text" name="description" class="feedback-input" id="description" placeholder="Description"></textarea><br>
                <input type="submit" value="Créer!">
          </form>
      </div>

</body>
</html>