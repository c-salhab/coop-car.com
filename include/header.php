<?php session_start(); ?>

<head>
      <link rel="stylesheet" type="text/css" href="../css/style.css">

<style type="text/css">

      :root {
        --main-color: #d9a400;
        --main-secondary: green;
        --white: #000000;
        --black: white;
        --grey: #333;
      }
      
      * {
        box-sizing: border-box;
      }
      
      a{
        text-decoration: none;
        color: rgb(5 71 82);
      }
      
      /*PARTIE NAVBAR */
      
      .navbar {
        padding-top: 0;
        padding-bottom: 0;
        position: fixed;
        width: 100%;
        top: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color:  white;
        color:  rgb(5 71 82);
        transition: all 1s ease-in-out;
        z-index: 10;
        box-shadow: 0px 0px 10px  rgba(0,0,0,0.6);
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
        color:  rgb(5 71 82);
        margin: 1rem;
        padding-bottom: 0.5rem;
        display: block;
        transition: all 0.3s ease-in-out;
        font-size: 1.1rem;
        
      }
      .navbar img {
      padding-left:46px;
      height:60px; 
      width:190px;
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
      
      .navbar-button {
        position: absolute;
        top: 0.75rem;
        right: 1rem;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 30px;
        height: 21px;
        margin-top: 0.5rem;
      }
      .navbar-button .bar {
        height: 3px;
        width: 100%;
        background-color: var(--black);
        border-radius: 10px;
      }
      
      @media screen and (max-width: 800px) {
        
         header nav {display: none;}
          header {padding-top: 10px;
              padding-bottom: 0px;}
      
      /*Nav Bar reponsive partie */
        .navbar-links {
          display: flex;
          flex-direction:column;
          flex-wrap:nowrap;
          justify-content:flex-end;
          align-items:center;
          width: 100%;
          
        }
        .navbar {
          background-color: white;
          flex-direction: row;
          align-items: flex-start;
        }
        .navbar img {
        margin-top:8px;
        padding-left:0px;
        height:30px;
        width:55px;
        }
        .navbar-links ul {
          width: 100%;
          flex-direction: row;
        }
        .navbar-links li {
          text-align: center;
        }
        .navbar-links li a {
          color:rgb(5 71 82);
          font-size:7.2px;
          padding-bottom:0px;
        }
        .navbar-links.toggle {
          display: flex;
        }
        .toggle{display:none;}
      }
        

</style>
</head>

<header> 
        <nav class="navbar" id="navbar">
        <img src="images/logo.png">
        
        <div class="navbar-links">
        <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a  href="forums.php">Forum</a></li>
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
      <li class="toggle"><?php include('button.php'); ?></li>
      </ul>
      </div>

</nav>
</header>





  