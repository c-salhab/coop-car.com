<!DOCTYPE html>
<html>
      <?php $title = 'A Propos De Nous'; include('include/head.php'); ?>
<style type="text/css">
      .column1 {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
      }
    
      .card1 {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      }
    
      .container1 {
      padding: 0 16px;
      }
    
      .container1::after, .row1::after {
      content: "";
      clear: both;
      display: table;
      }
    
      .title1 {
      color: grey;
      font-size:18px;
      }
    
      .buttonn {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: rgb(5 71 82);
      text-align: center;
      cursor: pointer;
      width: 100%;
      }
    
      .buttonn:hover {
      background-color: #555; 
      }
      
      .paragraph{color:  rgb(5 71 82);
      }
      
      .paragraph p {
      font-size: 18px;
      }
      
      .container1 p {
      font-size:16px;
      }
      
      @media screen and (max-width: 650px) {
      .column1 {
        width: 100%;
        display: block;
      }
      .paragraph{
      padding:30px;
      display:block;
      }
      }
    
</style>

<body style="padding-top:100px;">

  <?php include('include/header.php');?>
      
  <main style="max-width: 1200px;margin:auto;">

      <div class="paragraph">
      <h2><b>Qui Nous Sommes?</b></h2>
      <br><p>C'était en février 2022 et Charbel prévoyait de fêter Noël avec sa famille vivant à la campagne, mais il n'avait pas de voiture et les trains étaient       déjà tous pleins. Sa sœur a accepté avec joie de venir le chercher mais sur la route, Charbel a été frappé par le nombre de conducteurs seuls dans leurs           voitures. Il a pensé que tous ces sièges vides pourraient être le début d'un nouveau réseau de transport. Au cours des années suivantes, Charbel et ses deux       acolytes Sacha et Jade, co-fondateurs du site, ont transformé cette idée simple en une plateforme de covoiturage, mettant en relation des millions de              voyageurs.</p><br>
      </div>

      <div class="row1">
      
      <div class="column1">
      <div class="card1">
      <img src="images/charbel.jpg" alt="Charbel" style="width:100%">
      <div class="container1">
      <h2 style="color:  rgb(5 71 82);">Charbel Salhab</h2>
      <p class="title1">Étudiant en 1ère année d'ingénierie informatique</p><br>
      <p style="color:  rgb(5 71 82);">Ce projet de covoiturage consiste en l'utilisation d'une même voiture par plusieurs personnes effectuant le même trajet           (notamment pour alléger le trafic routier).-Charbel</p> <br>
      <p><a href = "mailto:csalhab@myges.fr"><button class="buttonn">Contact</button></a></p><br>
      </div>
      </div>
      </div>
      
      <div class="column1">
      <div class="card1">
      <img src="images/jade.jpg" alt="Jade" style="width:100%">
      <div class="container1">
      <h2 style="color:  rgb(5 71 82);">Jade Kurz</h2>
      <p class="title1">Étudiant en 1ère année d'ingénierie informatique</p><br>
      <p style="color:  rgb(5 71 82);">Des avantages économiques et sociaux.Il est possible de faire la promotion en mettant l'accent sur sa convivialité et en           offrant des moyens de mesurer l'impact budgétaire.-Jade</p><br>
      <p><a href = "mailto:jkurz@myges.fr"><button class="buttonn">Contact</button></a></p><br>
      </div>
      </div>
      </div>

      <div class="column1">
      <div class="card1">
      <img src="images/charbel.jpg" alt="Sacha" style="width:100%">
      <div class="container1">
      <h2 style="color:  rgb(5 71 82);">Sacha Toutut</h2>
      <p class="title1">Étudiant en 1ère année d'ingénierie informatique</p><br>
      <p style="color:  rgb(5 71 82);">Le gain de temps en évitant les embouteillages via l'utilisation d'une voie réservée ainsi que les avantages tarifaires sont      en effet d'excellents axes de développement du covoiturage.-Sacha</p><br>
      <p><a href = "mailto:stoutut@myges.fr"><button class="buttonn">Contact</button></a></p><br>
      </div>
      </div>
      </div>

      </div>

  </main>

  <?php include('include/footer.php'); ?>

</body>

</html>
