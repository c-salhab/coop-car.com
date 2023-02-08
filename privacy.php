<!DOCTYPE html>
<html>
      <?php $title = 'Politique De Confidentialité'; include('include/head.php'); ?>

<style type="text/css">
  
          body{padding-top: 20px;
          }
          
          .content9 {
          background-color: white;
          padding: 10px;
          }
          
          .container{
          position: relative;
          max-width: 1050px;
          margin: 0 auto;
          }
          
          .container img {
          vertical-align: middle;
          }
          
          .container .content9 {
          position: absolute;
          bottom: 0;
          background: rgb(0, 0, 0);
          background: rgba(0, 0, 0, 0.5); 
          color: #f1f1f1;
          width: 100%;
          padding: 20px;
          }
          
          .button {
          background-color:  #f8f8f8;
          border: none;
          color: white;
          padding: 12px 28px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 14px;
          margin: 4px 2px;
          transition-duration: 0.4s;
          cursor: pointer;
          margin-left:10px;
          }
          .button2 {
          background-color: white; 
          color: black; 
          border: 2px solid #008CBA;
          }
          
          .button2:hover {
          background-color: #008CBA;
          color: white;
          }
          
          .boutton{
          position:absolute;
          top: 15px; 
          left:30px;
          padding-left:15px;
          }
          .button {
          display: inline-block;
          border-radius: 4px;
          background-color:#6dabe4;
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 16px;
          padding: 14px;
          width: 100px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 5px;
          }
          
          .button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
          }
          
          .button span:after {
          content: '\00AB';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
          }
          
          .button:hover span {
          padding-right: 25px;
          }
          
          .button:hover span:after {
          opacity: 1;
          right: 0;
          }
          .content10 {display:none;}
          @media screen and (max-width: 650px) {
          .container .content9 {background:rgba(255,255,255,0);}
          .container img { display:none;}
          .container .content9 h1,.container .content9 p{display:none;}
          .site p {display:none;}
          .content10{
          display:block;
          color:rgb(5 71 82);
          padding:30px;
          }
          .content10 h1 {font-size:22px;}
          .content10 p {font-size:12px;}
          .boutton{padding-left:0px;}
          body{padding-top:0px;}
          }

</style>

<body>
    
    <div class="boutton">
    <button class="button" onclick="location.href = 'index.php';" style="vertical-align:middle;"><span>Retour</span></button>
    </div>

<main>

          <br><div class="site" style="color:rgb(5 71 82);font-size:18px;padding: 50px;">
          <i><p>Le site Web utilise des cookies pour stocker certaines informations.Bien qu'ils identifient l'appareil d'un utilisateur, les cookies ne révèlent             pas le nom, l'adresse e-mail ou d'autres identifiants évidents des utilisateurs.
          Nous essayons de rendre votre expérience du Web simple. Lorsque vous visitez notre site, notre serveur envoie un cookie à votre ordinateur ou appareil             mobile (selon la manière dont vous accédez au site). Les cookies sont de petits éléments d'information qui sont émis sur votre ordinateur lorsque vous             visitez un site Web et qui stockent et parfois suivent des informations sur votre utilisation du site.</p>
          <p>
          Nous utilisons des cookies pour :
          <br>
          Pour ce rappeler que vous nous avez déjà rendu visite,cela nous permet de nous assurer que nous avons une capacité suffisante pour le nombre d                     'utilisateurs que nous obtenons et auxquels nous allons.</p></i>
          </div>

          <div class="container">
          <img src="images/pooling.png" style="width:100%;" height="600px">
          <div class="content9">
          <h1><b><u>Politique de confidentialité de coop-car</u></b></h1>
          <p style="font-size:20px">Cette politique de confidentialité  décrit les informations que nous détenons, pourquoi nous les détenons et comment nous les             utilisons. Cette politique s'applique à toute personne qui utilise notre site Web.
          Nous sommes Coop-Car, société immatriculée en France. Nous sommes le responsable du traitement tel que défini par le règlement général sur la protection            des données et sommes enregistrés auprès du bureau du commissaire à l'information. Si vous avez des questions sur cette politique ou si vous souhaitez             contacter notre délégué à la protection des données, veuillez nous contacter via l'application ou envoyer un e-mail à <a href="mailto:support@coop-car             .com" style="color: blue;text-decoration: underline;"><b>support@coop-car.com</b></a>.</p></div>
          </div>

          <div class="content10">
          <h1><b><u>Politique de confidentialité de coop-car</u></b></h1><br>
          <p style="font-size:20px">Cette politique de confidentialité  décrit les informations que nous détenons, pourquoi nous les détenons et comment nous les            utilisons. Cette politique s'applique à toute personne qui utilise notre site Web.
          Nous sommes Coop-Car, société immatriculée en France. Nous sommes le responsable du traitement tel que défini par le règlement général sur la protection           des données et sommes enregistrés auprès du bureau du commissaire à l'information. Si vous avez des questions sur cette politique ou si vous souhaitez             contacter notre délégué à la protection des données, veuillez nous contacter via l'application ou envoyer un e-mail à <a href="mailto:support@coop-car             .com" style="color: blue;text-decoration: underline;"><b>support@coop-car.com</b></a>.</p>
          </div><br>

</main>

          <?php include('include/footer.php');?>

</body>
</html>