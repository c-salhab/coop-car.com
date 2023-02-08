<!DOCTYPE html>
<html>
      <?php $title = 'Mention Légale'; include('../include/head.php'); 
      include '../include/verif_admin.php';?>
  
  <style>
      body {
        margin: 0;
      }
      .bodyy{
    margin-left:25%;
    padding:1px 16px;
    height:800px;
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
    
    .image_2{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
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
        font-size:10px;}
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
    .image_2{
      height:200px;
      width:400px;
      padding-bottom:10px;
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
    .image_2{
      height:200px;
      width:400px;
      padding-bottom:10px;
      }
    
    }
    
    html{
      font-family: 'Blogger Sans';
      scroll-behavior: smooth;
    }
</style>

      <link rel="icon" href="../images/logo_.png" type="image/icon type">
      <link rel="style sheet" type="text/css" href="../css/style.css">

<body>
        <div class="sidebar">
        <ul>
          <li><img src="../images/logo.png" height="110" style="padding-left:20px;" ></li>
          <li><a  href="back-office.php">Accueil</a></li>
          <li><a href="messages.php">Messages Utilisateurs</a></li>
          <li><a  href="../../log.txt">Logs</a></li>
          <li><a class="active" href="mention.php">Mention Légale</a></li>
          <li><a  href="deconnexion.php">Deconnexion</a></li>
        </ul>
        </div>
<main>
        <div class="bodyy">
        
        <div style="background-color: #217bb1;padding: 12px;display: flex;"><img src="../images/law.png" height="40"><p style="padding-left: 10px;color: white;"            >MENTIONS LÉGALES : DONNÉES PERSONNELLES</p></div>
        <p style="font-size: 18px;line-height: 2rem;">Les informations recueillies à partir de nos formulaires font objet  traitement informatique destiné à :
        <br>Coop-Car
        <br>Le ou les destinataire(s) des données sont :
        <br>Les données restent en interne et sont considérées confidentielles.
        
        <br>Conformément à <a href="https://www.cnil.fr/fr/la-loi-informatique-et-libertes" target="_blank">la loi « informatique et libertés »</a> du 6 janvier            1978 modifiée, vous disposez un <a href="https://www.cnil.fr/fr/le-droit-dacces-connaitre-les-donnees-quun-organisme-detient-sur-vous" target="_blank"             >droit accès</a> et de <a href="https://www.cnil.fr/fr/le-droit-de-rectification-corriger-vos-informations" target="_blank">rectification</a> aux                  informations qui vous concernent.
        
        <br>Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant.
        
        <br>Pour en savoir plus, <a href="https://www.cnil.fr/fr/les-droits-pour-maitriser-vos-donnees-personnelles" target="_blank">consultez vos droits sur le           site de la CNIL</a>.</p>
        <img class="image_2" src="../images/cov.jpg">
        
        </div>

</main>
</body>
</html>
