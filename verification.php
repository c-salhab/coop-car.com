<?php 
    	function writeLogLine($success,$email){
    		//ecrire dans le fichier log
    		$log = fopen('log.txt', 'a+');
    		$value = $success ? ' successfull' : ' failed' ;
    		$line = date('Y/m/d H:i:s') . ' - Login attempt ' . $value .' of ' . $email . "\n";
    		fputs($log,$line);
    		fclose($log);
    	}
       

      
         	
      	// Si le parametre email existe et n'est pas vide : créer un cookie email
      	if(isset($_POST['Email']) && !empty($_POST['Email'])){
      		setcookie('email', $_POST['Email'], time() + 24 * 60 * 60);
      	}

      	// Si email vide ou password vide : redirection vers le formulaire avec un message
      	if(empty($_POST['Email']) || empty($_POST['Password'])){
      		header('location: login.php?message=Vous devez remplir les 2 champs.');
      		exit;
      	}

      	// Si l'email n'est pas valide : redirection vers le formulaire avec un message
      	if(!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)){
      		header('location: login.php?message=Email invalide.');
      		exit;
      	}
       
	        // Connexion à la base de données

	        try{
        	$bdd = new PDO('mysql:host=localhost:3306;dbname=coopcar', 'user', 'Respons11');
        	[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
          }
          catch(Exception $e){
          	die('Erreur : ' . $e->getMessage());
          }
          
        	// Si les identifiants ne sont pas les bons : redirection vers le formulaire avec un message
        	$q = 'SELECT id FROM users WHERE email = :Email AND motdepasse = :Password AND statut!=2';
        	$req = $bdd->prepare($q);
        	$req->execute([
        					'Email' => $_POST['Email'],
        					'Password' => hash('sha512', $_POST['Password'])
        				]);

        	// récupération des résultats dans un tableau
        	$results = $req->fetchAll();

        	// Si le tableau de résultats est vide : redirection vers le formulaire avec un message
        	if(count($results) == 0){
        		//ecrire dans le fichier log
        		writeLogLine(false,$_POST['Email']);
        
        		header('location: login.php?message=Identifiants incorrects.');
        		exit;
        	}
        
        	// Si on arrive ici, c'est que toutes les verifications ont fonctionné
	        
          
        	//ecrire dans le fichier log
        	writeLogLine(true,$_POST['Email']);
        	// Ouverture d'une session utilisateur et enregistrement de l'email
        	session_start();
          $_SESSION['Email'] = $_POST['Email'];
          
          
        	include('include/db.php');	
        	$verif = 'UPDATE users SET verified = 1 WHERE email = :Email';
        	$req = $bdd->prepare($verif);
        	$result = $req->execute([
        	'Email' => $_SESSION['Email']
        	]);
        	
        	header('location:profil.php');
        	exit;
?>