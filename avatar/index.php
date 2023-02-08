<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <script type="text/javascript" src="carousel.js" async></script>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
        <?php
            for($i=1;$i<=23;$i++){
         ?>
       
             <img src="Tete/TETE<?= $i ?>.png" style="display: none;" class="Tete">
         <?php
         }
         ?>
         
          <?php
                for($z=1;$z<=5;$z++){
         ?>
         <img src="Yeux/y<?= $z ?>.png" style="display: none;" class="Yeux" id="yeux">
         <?php
           }
          ?>

          <?php
            for($j=1;$j<=4;$j++){
           ?>
           <img src="Bouches/b<?= $j ?>.png" style="display: none;" class="Bouches" id="bouches">
           <?php
             }
            ?>

            <?php

              for($f=0;$f<=1;$f++){

             ?>
             <img src="NEZ/NEZ<?= $f ?>.png" style="display: none;" class="Nez" id="nez">

             <?php
           }
              ?>

        <button type="button" name="button" id="buttonNextTete" onclick="changeNext()">next Tete</button>
        <button type="button" name="button" id="buttonPreviousTete" onclick="changePrevious()">previous Tete</button>
        <?php

        include '../include/db.php';
        session_start();
        $q = 'SELECT id FROM users WHERE email="' .$_SESSION['Email']. '"';
        $req = $bdd->query($q);
        $res = $req->fetch();
        
        ?>
        <button type="button" name="button" id="buttonFinish" onclick="sendAvatar(<?php echo $res['id'] ?>)">finish</button>

        <button type="button" name="button" id="buttonPreviousBouches" onclick="changePreviousBouches()">previous Bouches</button>
        <button type="button" name="button" id="buttonNextBouches" onclick="changeNextBouches()">next Bouches</button>

        <button type="button" name="button" id="buttonPreviousNez" onclick="changePreviousNez()">previous nez</button>
        <button type="button" name="button" id="buttonNextNez" onclick="changeNextNez()">next nez</button>

        <button type="button" name="button" id="buttonPreviousYeux" onclick="changePreviousYeux()">previous Yeux</button>
        <button type="button" name="button" id="buttonNextYeux" onclick="changeNextYeux()">next Yeux</button>

        <button type="button" name="button" id="buttonPreviousBouches" onclick="changePreviousBouches()">previous Bouches</button>
        <button type="button" name="button" id="buttonNextBouches" onclick="changeNextBouches()">next Bouches</button>

    </body>


</html>
