<style>
          *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
          }
          
          footer{
              bottom: 0;
              left: 0;
              right: 0;
              background: #c2c2c2;
              height: auto;
              width: 100%;
              padding-top:20px;
              color: #fff;
          }
          .footer-content{
              display: flex;
              align-items: center;
              justify-content: center;
              flex-direction: column;
              text-align: center;
          }
          .footer-content h3{
              font-size: 2.1rem;
              font-weight: 500;
              text-transform: capitalize;
              line-height: 3rem;
          }
          .footer-content p{
            padding-bottom:20px;
              max-width: 500px;
              margin: 10px auto;
              line-height: 28px;
              font-size: 16px;
              color: #ffffff;
          }
          .socials{
              list-style: none;
              display: flex;
              align-items: center;
              justify-content: center;
              margin: 1rem 0 3rem 0;
          }
          .socials li{
              margin: 0 10px;
          }
          .socials a{
              text-decoration: none;
              color: #fff;
              border: 1.1px solid white;
              padding: 5px;
          
              border-radius: 50%;
          
          }
          .socials a i{
              font-size: 1.1rem;
              width: 20px;
              transition: color .4s ease;
          
          }
          .socials a:hover i{
              color: aqua;
          }
          
          .footer-bottom{
              background:#b3b3b3;
              width: 100%;
              padding: 20px;
          padding-bottom: 40px;
              text-align: center;
          }
          .footer-bottom p{
              float: left;
              font-size: 16px;
              word-spacing: 2px;
              text-transform: capitalize;
          }
          .footer-bottom p a{
            color:rgb(5 71 82);
            font-size: 17px;
            text-decoration: none;
          }
          .footer-bottom span{
              text-transform: uppercase;
              opacity: .4;
              font-weight: 200;
          }
          .footer-menu{
            float: right;
          
          }
          .footer-menu ul{
            display: flex;
          }
          .footer-menu ul li{
          padding-right: 10px;
          display: block;
          }
          .footer-menu ul li a{
            color: #ffffff;
            text-decoration: none;
            font-size:15px;
          }
          .footer-menu ul li a:hover{
            color: rgb(5 71 82);
          }
          
          @media screen and(max-width:480px) {
          .footer-menu ul{
            display: flex;
            margin-top: 0px;
            margin-bottom: 20px; 
          }
          }
</style>

        <footer id="footer">
        
        <div class="footer-content">
        <h3>Coop-Car toujours à votre service</h3>
        <p>Résoudre le paiement pour le transport reste l'une des plus grandes opportunités en matière de mobilité.<br>Nous ajouterons plus de fonctionnalités,             intégrerons plus de modes de transport et explorerons les opportunités.</p>
        </div>
        
        <div class="footer-bottom">
        <p>copyright &copy; <?php echo date("Y"); ?> <a href="index.php">Coop-Car Team</a></p>
                    
        <div class="footer-menu">
        <ul class="f-menu">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="aboutus.php">Qui Sommes Nous ?</a></li>
        <li><a href="privacy.php">Politique</a></li>
        </ul>
        </div>
        </div>
</footer>
