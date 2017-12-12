<?php
require_once 'include/infoConnexion.php';
require_once 'include/connect.php';
require_once 'include/executeRequete.php';

$connexion = connect(SERVER, BASEDEDONNEES, UTILISATEUR, MOTDEPASSE);
$msg="";
$varQuery= "CREATE TABLE utilisateurs(prenom varchar(25) NOT NULL, nom varchar(40) NOT NULL, login varchar(255) NOT NULL UNIQUE, motpasse varchar(255)  NOT NULL) CHARSET UTF8 ENGINE=InnoDB";
$idRequete = executeR($connexion, $varQuery);
$droite="tk!@";
$gauche="ar30&b%";

$prenom="Melanie";
$nom="Zethofrais";
$login="mzethofrais";
$pw="mel36";
$jeton=hash('ripemd128', "$gauche. $pw . $droite");
ajouterUtilisateur($connexion, $prenom, $nom, $login, $jeton, $msg);
echo "<p> $msg </p>";


$prenom="Miles";
$nom="Davis";
$login="mdavis";
$pw="sowhat";
$jeton=hash('ripemd128', "$gauche. $pw . $droite");
ajouterUtilisateur($connexion, $prenom, $nom, $login, $jeton, $msg);
echo "<p>$msg </p>";

function ajouterUtilisateur($connexion, $prenom, $nom, $login, $jeton, &$msg){
	$sql="INSERT INTO utilisateurs VALUES('$prenom', '$nom', '$login', '$jeton')";
	$idRequete = executeR($connexion, $sql);
	$msg= $msg.sprintf("l'utilisateur %s %s a été crée avec succees. <br>", $nom , $prenom);	
}
?>