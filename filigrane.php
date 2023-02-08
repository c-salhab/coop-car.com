<?php
    session_start();
    if(!isset($_SESSION['Email'])){
	        header('location:index.php');
	        exit;
    }
?>
<?php
        include('include/db.php');
        
        $q = 'SELECT image FROM users WHERE email = "' . $_SESSION['Email'] .'"';
        $req = $bdd->query($q);
        $result = $req->fetch(PDO::FETCH_ASSOC); 
        $url = 'uploads/' . $result['image'];        
        // Charge le cachet et la photo afin d'y appliquer le tatouage numérique
        $stamp = imagecreatefrompng('images/logo_.png');
        $im = imagecreatefromjpeg($url);
        
        // Définit les marges pour le cachet et récupère la hauteur et la largeur de celui-ci
        $marge_right = 10;
        $marge_bottom = 10;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);
        
        // Copie le cachet sur la photo en utilisant les marges et la largeur de la
        // photo originale  afin de calculer la position du cachet 
        imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));
        
        // Affichage et libération de la mémoire
        header('Content-type: image/png');
        imagepng($im);
        imagedestroy($im);
?>

