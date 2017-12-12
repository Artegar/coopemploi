<?php
include 'Modele/modele.php';

require_once 'include/infoConnexion.php';




function login($param){

	if(isset($param)){
		$tmp_login= $param['f-login'];
		$tmp_pw= $param['f-pw'];
		$cnx = getBD();
		$sql="SELECT * FROM utilisateurs WHERE login = '$tmp_login'";
		$idRequete = executeR($cnx, $sql);
		if($idRequete -> rowCount()==1){
			$row = $idRequete->fetch(PDO::FETCH_NUM);
			$droite="tk!@";
			$gauche="ar30&b%";
			$jeton=hash('ripemd128', "$gauche. $tmp_pw . $droite");
			if($jeton == $row[3]){
				session_start();
				$_SESSION['login']=$tmp_login;
				$_SESSION['nom']=$row[1];
				$_SESSION['prenom']=$row[0];
				 header('Location: index.php');
			}

		}else{
			echo "Le nom enregistré ne correspond pas";
		}

	}
}
?>