<!DOCTYPE html>
<html>
      <?php $title = 'Modification Forum'; include('../include/head.php'); 
      include '../include/verif_admin.php'; ?>
<style>
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

  .bodyy{
  margin-left:25%;
  padding:1px 16px;
  height:400px;
  
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
  
  div.content {
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
  }
  
    
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
    input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
    input[type=tel], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=submit] {
    width: 100%;
    background-color: rgb(5, 71, 82) ;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color:#076373 ;
  }
  
  div {
    background-color: #ffffff;
    padding: 20px;
  }
  
  label { font-size : 18px; }
  html{
    font-family: 'Blogger Sans';
  
    scroll-behavior: smooth;
  }
  .hidden_image{ display:none;}
  
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
    margin-left: 5%;
    margin-right: auto;
    width: 50%;
    }
  }
  
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
        <li><a href="deconnexion.php">Deconnexion</a></li>
      </ul>
      </div>
      
      <?php include '../include/db.php';
      $q = 'SELECT theme, description FROM forums WHERE theme="' . $_GET['theme'] . '"';
      $req = $bdd->query($q);
      $res = $req->fetch();
      ?>

      <div class="bodyy">

      <div class="hidden_image">
      <img src="../images/logo.png">
      </div>
      
      <h2><i>Informations de forums sur <?= $res['theme'] ?></i></h2>
  
      <form action="modif_forum_verif.php" method="POST">
        <label for="identifiant">Description: </label>
        <input type="text" name="description" id="description" <?= 'value="'. $res['description'] .'"' ?>> <br>
        <input type="hidden" name="theme" <?= 'value='. $_GET['theme'] ?>>
        <input type="submit" value="Enregistrer">
      </form>

</div>
</div>
</body>
</html>