<?php

include 'scripts/php/functions.php';

//teste si la variable $_POST['save'] a ete initialisée et n'est pas vide
if(isset($_POST['save'])) {

$name= !empty($_POST['nom'])? strip_tags($_POST['nom']): "default Name";
$surname= !empty($_POST['pre'])? strip_tags($_POST['pre']): "default Surname";
$mat= !empty($_POST['mat'])? strip_tags($_POST['mat']): "default Mat";
$class= !empty($_POST['classe'])? strip_tags($_POST['classe']): "default Class";	
$level = !empty($_POST['niveau'])? strip_tags($_POST['niveau']): "default Niveau";
$tel =!empty($_POST['tel'])? strip_tags($_POST['tel']): "default tel";
$photo =!empty($_POST['photo'])? strip_tags($_POST['photo']): "default Photo";


$url = "auth.php";
$delay = 0;

$destination = 'photos/'.basename($name);
$upload1 = upload('photo' , $destination , 1024*1024*5, array('png' , 'jpg' , 'jpeg'));
if($upload1) "Upload du fichier réussi <br/>";

$bdd = bdd_access();

$prefix = genere_prefixe_aleatoire(4);
$suffix = genere_suffixe_aleatoire(4);

echo "<script>alert('Pseudo :".$prefix." et MDP :".$suffix."');</script>";




try
{

if($level == 2){

$req=$bdd->prepare('INSERT INTO parrains (nom,prenom,matricule,classe,pseudo,pass,tel,photo) VALUES(?,?,?,?,?,?,?,?)');
$req->execute(array($name,$surname,$mat,$class,$prefix,$suffix,$tel,$photo));
}

else{
$req=$bdd->prepare('INSERT INTO filleuls (nom,prenom,matricule,classe,pseudo,pass,tel,photo) VALUES(?,?,?,?,?,?,?,?)');
$req->execute(array($name,$surname,$mat,$class,$prefix,$suffix,$tel,$photo));
}


}
catch(Exception $e)
{
//En cas d'erreur, on affiche un message et on arrête tout
die("Erreur de connexion à pdo".$e->getMessage());
}
finally
{
    die('got it !!!');
    refresher($url, $delay);
}
}
?>
