<?php session_start(); ?>

<!DOCTYPE html>
<html>
        <?php $title = 'Accueil'; include('include/head.php'); ?>

<script>
        //navbar color change
        function scrolldetection() {
        var header = document.getElementsByClassName("navbar")[0]
        
        var sticky = header.offsetTop
        if (window.pageYOffset > sticky) {
        header.classList.add("scroll")
        } else {
        header.classList.remove("scroll")
        }
        }
</script>
<script> window.onscroll = function() {scrolldetection()};</script>

<style type="text/css">
            *{
            box-sizing:border-box;
            }
            
            /* axe bleu */
            /* The actual timeline (the vertical ruler) */
            .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            }
            
            /* The actual timeline (the vertical ruler) */
            .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: white;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            }
            
            /* Container around content */
            .container22 {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
            }
            
            /* The circles on the timeline */
            .container22::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #FF9F55;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
            }
            
            /* Place the container to the left */
            .left {
            left: 0;
            }
            /* Place the container to the right */
            .right {
            left: 50%;
            }
            
            /* Add arrows to the left container (pointing right) */
            .left::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
            }
            
            /* Add arrows to the right container (pointing left) */
            .right::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
            }
            
            /* Fix the circle for containers on the right side */
            .right::after {
            left: -16px;
            }
            
            /* The actual content */
            .content22 {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
            }
            
            /* responsive design axe bleu */
            /* Media queries - Responsive timeline on screens less than 600px wide */
            @media screen and (max-width: 600px) {
            /* Place the timelime to the left */
            .timeline::after {
            left: 31px;
            }
            /* Full-width containers */
            .container22 {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
            }
            /* Make sure that all arrows are pointing leftwards */
            .container22::before {
            left: 60px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
            }
            /* Make sure all circles are at the same spot */
            .left::after, .right::after {
            left: 15px;
            }
            /* Make all right containers behave like the left ones */
            .right {
            left: 0%;
            }
            }
            
            .flexbox, .flexbox2{
            display: flex;
            }
             /*on selectionne les balises figure balises enfants direct de flexbox*/
            .flexbox > figure,.flexbox2{
            flex-basis: 35%;
            text-align: center;
            margin-left: 0;
            margin-right: 0;}
            
            .flexbox img {
            height:360px; 
            width:500px;
            border-radius:10px;
            }
            .flexbox p,.flexbox2 {
            flex-basis: 65%;}
            
            .div_p{
            padding: 15px;padding-bottom:0px;
            }
            .container {
            display: flex;
            align-content: center;
            flex-wrap:nowrap;
            flex-direction: row;
            align-items: center;
            }
            
            .container{
            padding-left: 10px;
            }
            
            .conteneur div{
            padding: 20px 40px;
            }
            
            .conteneur{
            height: 350px;
            margin-bottom: 30px;
            color: rgb(5,71,82);
            display: flex;
            }
            
            html {
            font-size: 18px;
            scroll-behavior: smooth;
            }
            
            body {
            margin: 0;
            padding: 0;
            background-color: rgb(255 255 255);
            }
            
            .img-navbar { 
            padding-left:46px;
            } 
            
            main {margin: 0px;padding-top: 20px;}
            :root {
            --main-color: #d9a400;
            --main-secondary: green;
            --white: #ffffff;
            --black: #000000;
            --grey: #333;
            }
            
            a{
            text-decoration: none;
            color: var(--black);
            }
            
            /*PARTIE NAVBAR */
            .navbar {
            position: fixed;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: transparent;
            color:rgb(5,71,82);
            transition: all 1s ease-in-out;
            z-index: 10;
            }
            
            .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            }
            
            .navbar li {
            list-style: none;
            padding-left: 0;
            padding-right: 0;
            }
            
            .navbar li a {
            text-decoration: none;
            color:white;
            margin: 1rem;
            padding-bottom: 0.5rem;
            display: block;
            transition: all 0.3s ease-in-out;
            font-size: 1.2rem;
            
            }
            
            .navbar a {
            background: linear-gradient(
            to top,
            var(--main-color) 0%,
            var(--main-color) 4px,
            transparent 5px
            )
            no-repeat;
            border-radius: 3px;
            background-size: 0 100%;
            transition: background-size 0.9s;
            }
            
            .navbar .active {
            background-size: 100% 100%;
            background: linear-gradient(
            to top,
            var(--main-color) 0%,
            var(--main-color) 4px,
            transparent 5px
            )
            no-repeat;
            }
            
            
            .navbar a:hover {
            background-size: 100% 100%;
            }
            
            .scroll {
            background-color: var(--white);
            box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
            color: rgb(5,71,82);
            }
            
            .scroll li a {
            color: rgb(5,71,82);
            }
            
            /*FIN PARTIE NAVBAR */
            
            /*
            PARTIE BANNIERE AVEC LA PHOTO
            */
            
            .banner {
            height: 800px;
            width: 100%;
            margin: auto;
            background-image: url("images/coop-car.png");
            display: table;
            top: 0;
            background-size: cover;
            background-position: center;
            }
            
            .inner {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
            max-width: none;
            }
            
            .content {
            padding-top:10px;
            margin: auto;
            text-align: center;
            width: 100%;
            }
            
            .content h1 {
            color: #f8f8f8;
            text-shadow: 2px 0 0 rgba(51, 51, 51, 0.1), 2px 2px 0 rgba(51, 51, 51, 0.1), 0 2px 0 rgba(51, 51, 51, 0.1), -2px 2px 0 rgba(51, 51, 51, 0.1), -2px 0 0 rgba(51, 51, 51, 0.1), -2px -2px 0 rgba(51, 51, 51, 0.1), 0 -2px 0 rgba(51, 51, 51, 0.1), 2px -2px 0 rgba(51, 51, 51, 0.1);
            font-size: 500%;
            }
            
            /*
            FIN PARTIE BANNIERE AVEC LA PHOTO
            */
            .flexbox p {
            line-height:60px;
            font-size: 23px;
            color:rgb(5 71 82);
            padding-left:50px;}
            
            /*RESPONSIVE*/
            
            @media screen and (max-width: 800px) {
            
            .colonne{padding-top:80px;}
            
            #ex1 {
            display:flex;
            flex-direction:column;
            flex-wrap:nowrap;
            justify-content:space-around;
            align-items:center;
            }
            
            .banner{
            height:400px;
            width:100%;
            }
            
            .img-navbar {
            padding-left:0px;
            height:40%;
            width:20%;
            }
            
            
            /*Nav Bar reponsive partie */
               
            header nav {display: none;}
            
            /*Nav Bar reponsive partie */
              .navbar-links {
                display: flex;
                flex-direction:column;
                flex-wrap:nowrap;
                justify-content:flex-end;
                align-items:center;
                width: 100%;
                height: 8vh;
                padding-top:55px;
                
              }
              .navbar {
                background-color: white;
                flex-direction: row;
                align-items: flex-start;
                
              }
              .navbar img {
              margin-top:11px;
              padding-left:0px;
              height:30px;
              width:55px;
              }
              .navbar-links ul {
                padding-top:10px;
                flex-direction: row;
              }
              .navbar-links li {
                padding-top:10px;
                text-align: center;
              }
              .navbar-links li a {
                
                color:rgb(5 71 82) ;
                font-size:7.2px;
              }
              .navbar-links.toggle {
                display: flex;
              }
              .toggle{display:none;}
            
            }
            /*Fin Nav Bar reponsive partie */
            
            
            
            /* Clear floats after the columns */
            .texts:after {
            content: "";
            display: table;
            clear: both;
            }
            
            .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
            }
            
            .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            }
            
            .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
            }
            
            .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            }
            
            .flip-card-front {
            background-color: #bbb;
            color: black;
            }
            
            .flip-card-back {
            background-color: rgb(5, 71, 82);
            color: white;
            transform: rotateY(180deg);
            }
            .flexbox2{
            padding:50px;
            padding-top:0px;
            justify-content:space-between;}
            
            @media screen and (max-width: 800px)
            {
            html{margin:0;}
            .flexbox {
            flex-direction: column;
            justify-content:space-around;
            }
            .flexbox p {
            display:block;
            font-size:18px;
            padding:15px;
            }
            .flexbox img {
            margin-top:150px;
            height:250px;
            width:300px;
            }
            .flexbox2 {display:none;}
            .toggle{display:none;}
            .colonne{
            margin-top:10px;
            }
            .conteneur{margin-top:150px;}
            }

</style>

<body>
<header style="font-family: 'Blogger Sans';">
<nav class="navbar" id="navbar">
<img src="images/logo.png" class="img-navbar" height="60" width="190">

        <div class="navbar-links">
        <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="forums.php">Forum</a></li>
        <li><a  href="trajets/trajets.php">Trajets</a></li>

<?php
                    session_start();
                    if(!isset($_SESSION['Email'])){
                   	echo '<li><a href="register.php">Inscription</a></li>';
                    echo '<li><a href="login.php">Connexion</a></li>';
                    echo  '<li><a href="contact.php">Contact</a></li>';
                      

                    }else{
                    echo '<li><a href="profil.php">Profil</a></li>';
                    echo  '<li><a href="contact.php">Contact</a></li>';
				            echo '<li><a href="../back-office/deconnexion.php">Deconnexion</a></li>';
                    }
			              
?>	

        <li class="toggle"><?php include('include/button.php'); ?></li>
        </ul>
        </div>
</nav>
</header>

        <section class="banner">
        <div class="inner">
        <div class="content">
        <h1 style="font-size: 45px;color: white;">
        Allez où vous voulez. D'où vous voulez.
        </h1>
        </div>
        </div>
        </section>

<main>
      <div class="div_p">
      
      <div class="conteneur" id="ex1">
      
      <div class="colonne" style="height: 300px;">
      <h2 id="text" style="font-size: 23px;"><i>1. Vos voyages préférés à petits prix</i></h2>
      <p  id="text" style="font-size: 22px;">Où que vous alliez,en covoiturage, trouvez l'itinéraire idéal parmi notre large choix de destinations à petits prix.
      </p>
      </div>
      
      <div class="colonne" style="height: 300px;">
      <h2 id="text" style="font-size: 23px;"><i>2. Voyagez en toute confiance</i></h2>
      <p id="text" style="font-size: 22px;">Nous prenons le temps de vérifier les avis et les identifiants.Vous savez donc avec qui vous allez voyager pour              réserver en toute confiance sur notre plateforme sécurisée.</p>
      </div>

      <div class="colonne" style="height: 300px;">
      <h2 id="text" style="font-size: 23px;"><i>3. Cherchez, cliquez et réservez !</i></h2>
      <p id="text" style="font-size: 22px;">Réserver un voyage devient encore plus simple! Simple d'utilisation,dotée de technologies avancées, notre site vous          permet de réserver un trajet en un rien de temps.</p>    
      </div>
      
      </div>
      </div>
      
      <div class="flexbox" style="padding:50px;padding-top:0px;">
      <figure><img src="images/bonj.jpg"></figure>
      <p id="text">
      Proposez vos trajets sur Coop-Car et faites des économies en partageant les frais avec vos passagers.Économisez tous les jours avec la site web de Coop-Car !
      <br>Vos déplacements sont chers?Découvrez Coop-Car,notre site de covoiturage domicile.Il vous aide à trouver la personne idéale avec qui covoiturer et à           faire des économies au quotidien.
      </p>
      </div>

      <div style="background-color:rgb(5, 71, 82);padding-top:20px;padding-bottom:20px;line-height:1.5rem;">
      <div class="timeline">
      <div class="container22 left">
      <div class="content22">
      <h2>Dites-nous où vous allez !</h2>
      <p>Le covoiturage est une excellente façon de voyager. <br>C'est abordable, confortable et écologique ! Si vous êtes seul dans votre voiture,<br>pensez à           publier un trajet de covoiturage sur Coop-Car.<br> Notre communauté de covoiturage est la plus digne de confiance au monde !</p>
      </div>
      </div>
      <div class="container22 right">
      <div class="content22">
      <h2>Un vaste choix de trajets</h2>
      <p>Avec le site web Coop-Car, partagez vos trajets domicile-travail sans changer vos habitudes. <br>Récupérez Pascal, Nadia ou Clovis sur la route et               économisez. Le tout sans changer votre emploi du temps, ni votre itinéraire !</p>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
</main>

          <p style="padding:30px;color:rgb(5 71 82);font-size:20px;" id="text">Notre technologie vous facilite la vie tout au long de votre expérience Coop-Car               pour trouver des passagers facilement, les retrouver directement sur votre route et échanger le temps d'un trajet.Indiquez votre lieu de départ et                 d’arrivée, la date et découvrez vos chances d’avoir vos 1ers passagers et avis.</p><br>

<div class="flexbox2">
<div class="flip-card">
<div class="flip-card-inner">

    <div class="flip-card-front">
    <img src="images/hi.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>

    <div class="flip-card-back">
    <h2>Plateforme Coop-Car</h2> 
    <p>Pour votre prochain trajet, pensez au covoiturage | Coop-Car.</p> 
    </div>

</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">

    <div class="flip-card-front">
    <img src="images/covo.jpg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    
    <div class="flip-card-back">
    <h2>Quand c'est à coté, c'est encore mieux.</h2> 
    <p>Il y a toujours un trajet proche de vous. Et maintenant, il y a un filtre spécialement pour ça. </p> 
    </div>

</div>
</div>

<div class="flip-card">
<div class="flip-card-inner">
    <div class="flip-card-front">
    <img src="images/covoit.jpeg" alt="Avatar" style="width:300px;height:300px;">
    </div>
    
    <div class="flip-card-back">
    <h2>Publier Un Trajet</h2> 
    <p>Le covoiturage est une excellente façon de voyager:abordable,confortable et écologique !Si vous êtes tout seul dans votre voiture,pensez à publier un trajet sur Coop-Car.</p> 
    </div>

</div>
</div>

</div>
</div>

        <?php include('include/footer.php'); ?>

</body>
</html>