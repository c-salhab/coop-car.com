<?php

session_start();
if (isset($_SESSION['Email']))
{
	include 'db.php';

	$q = 'SELECT id FROM users WHERE email="' . $_SESSION['Email'] .'"';
    $req = $bdd->query($q);
    $res = $req->fetch();
    $id_user = $res['id'];

	$q = 'SELECT ava_tete+1, ava_yeux+1, ava_bouche+1, ava_nez FROM users WHERE id=' .$id_user;
	$req = $bdd->query($q);
	$res = $req->fetch();

	$imageFinal = imagecreatefrompng("../avatar/Tete/TETE" .$res['ava_tete+1']. ".png");
  
  $imageMerge = imagecreatefrompng("../avatar/Yeux/y" .$res['ava_yeux+1'] . ".png");
	$merge_w = imagesx($imageMerge);
	$merge_h = imagesy($imageMerge);
  imagecolortransparent($imageMerge, $background);
  $background = imagecolorallocate($imageFinal, 0, 0, 0);
	imagecopy($imageFinal, $imageMerge, 540 - ($merge_w/2) + 25, 540 - ($merge_h/2) - 100, 0, 0, $merge_w, $merge_h);
  
	$imageMerge = imagecreatefrompng("../avatar/Bouches/b" .$res['ava_bouche+1'] . ".png");
	$merge_w = imagesx($imageMerge);
	$merge_h = imagesy($imageMerge);
	imagecopy($imageFinal, $imageMerge, 540 - ($merge_w/2) + 25, 540 - ($merge_h/2), 0, 0, $merge_w, $merge_h);
  
	$imageMerge = imagecreatefrompng("../avatar/NEZ/NEZ" .$res['ava_nez'] . ".png");
	$merge_w = imagesx($imageMerge);
	$merge_h = imagesy($imageMerge);
	imagecopy($imageFinal, $imageMerge, 540 - ($merge_w/2) + 25, 540 - ($merge_h/2) - 40, 0, 0, $merge_w, $merge_h);
 
} else {
	$imageFinal = imagecreatetruecolor(1080, 1080);
	imagecolorallocate($imageFinal, 255, 255, 255);
}

header('Content-Type: image/png');
imagepng($imageFinal);

imagedestroy($imageFinal);
imagedestroy($imageMerge);

?>