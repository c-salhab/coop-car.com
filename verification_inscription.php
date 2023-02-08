<?php session_start(); ?>

<?php 

        // Si le parametre email existe et n'est pas vide : créer un cookie email
        if(isset($_POST['Email']) && !empty($_POST['Email'])){
        	setcookie('email', $_POST['Email'], time() + 24 * 60 * 60);
        }
        
        // Si email vide ou password vide : redirection vers le formulaire avec un message
        if(!isset($_POST['Email']) || !isset($_POST['Password']) || empty($_POST['Email']) || empty($_POST['Password'])){
        	header('location: register.php?message=Vous devez remplir les champs.');
        	exit;
        }
        
        // Si l'email n'est pas valide : redirection vers le formulaire avec un message
        if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
        	header('location: register.php?message=Email invalide.');
        	exit;
        }
        
        // Si le mot de passe ne fait pas entre 6 et 12 caractères : redirection avec un message
        if(strlen($_POST['Password']) < 6 || strlen($_POST['Password']) > 12){
        	header('location:register.php?message=Le mot de passe doit contenir entre 6 et 12 caractères.');
        	exit;
        }
        
        // si les deux mots de passes ne sont pas les memes
        if($_POST['Password'] != $_POST['ConfirmPassword']){
        	header('location:register.php?message=Les mots de passe sont différents');
        	exit;
        }


        // Connexion à la base de données
        include('include/db.php');


        // Vérifier que l'email n'est pas déjà utilisé
        $q = 'SELECT id FROM users WHERE email = :Email';
        $req = $bdd->prepare($q);

        // Execution de la requête avec la valeur
        $req->execute([	
        				'Email' => $_POST['Email']
        			]);

        // Récupération des résultats de la requête SELECT
        $results = $req->fetchAll();

      // Si le tableau de résultats n'est pas vide : redirection vers le formulaire avec une erreur
      if(count($results) != 0){
      	header ('location: register.php?message=Email déjà utilisé.');
      	exit;
      }
              
      //si un fichier a été uploadé utilisateur envoie un fichier
      if($_FILES['image'] ['error'] != 4){
     	
       //verification du type de fichier
   	   $acceptable = ['image/jpeg'];
      
        //si le type de fichier n'est pas present dans le tableau acceptable
        
        if(!in_array($_FILES['image']['type'],$acceptable)){
        	header('location:register.php?message=format d\'image non valide.');
        	exit;
        }
        
        //verification du poids de fichier
        $maxSize = 2 * 1024 * 1024; // 2 Mo
        //si le poids du fichier est supérieur au poids max : redirection vers le formulaire
        
        if($_FILES['image']['size'] > $maxSize) {
        header('location:register.php?message=l\'image de profile doit faire 2 Mo max.');
        	exit;
        }
                
        //créer un dossier dossier "uploads" s'il n'existe pas 
        $path = 'uploads';
        if(!file_exists($path)) { mkdir($path, 0777); }
        
        //deplacer le fichier de son emplacement temporaire vers le dossier uploads
        
        $filename = $_FILES['image']['name'];
        $array = explode('.',$filename); 
        $extension = end($array);
        $filename = 'image-' . time() . '.' . $extension; 
        $destination = $path . '/' . $filename;
        
        move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
        }
                
        $q = 'SELECT MAX(id) AS max FROM users';
        $req = $bdd->query($q);
        $res = $req->fetchAll();
        $id = $res[0]['max'] + 1;
        
        $vkey = md5(time() . $_POST['u']);
        
        // Création d'une requête préparée utilisant des noms de valeurs
        $q = 'INSERT INTO users(id,identifiant,adresse,telephone,email,motdepasse,image,vkey) VALUES (:Id,:u,:adresse,:Telephone,:Email,:Password,:image,                  :vkey)';
                $req = $bdd->prepare($q); // Requête préparée
                
                
                
                $result = $req->execute([
              						'Id' => $id,
                          'u' => $_POST['u'],
                          'adresse' => $_POST['adresse'],
                          'Telephone' => $_POST['Telephone'],
                          'Email' => $_POST['Email'],
              						'Password' => hash('sha512', $_POST['Password']),
                          'image' => isset($filename) ? $filename : '',
                          'vkey' => $vkey
              					]);
                           
              if($result){
              
                          $to = $_POST['Email'];
                    			$subject = "Coop Car Mail Verification"; 
                    			
                          $message = 
                          "Bonjour,<br>Merci d'avoir rejoint notre plateforme.<br>Nous esperons que vous apprecierez votre experience avec nous!
                          <br><br><br>Coop-Car Team<br><br><br><a href='https://coop-car.com/captcha.php?vkey=$vkey'>Valider Votre Inscription</a>";
                          
                    			$headers = "From: Coop-CarTeam <coopcarteam@gmail.com>" . "\r\n";
                    			$headers .= "MIME-Version: 1.0" . "\r\n";
                    			$headers .= "Content-type: text/html; charset=utf-8";
                    			
                          mail($to,$subject,$message,$headers);
                    			
                          header('location:thankyou.php');
                    			exit;         
              
              }else{
              	
                // L'insertion n'a pas fonctionné
              	header('location: register.php?message=Erreur lors de l\'inscription.');
              	exit;
              
              }
        
        ?>

