<?php
switch($gestion){

	case 'authetification':
	require_once ($gestion.'Controleur.php');
	if ( isset($_POST['login'])){
		var_dump($_POST);
		login($_POST);
	}else{
		authetification();
	}
	break;

	case 'logout':
	require_once($gestion.'.php');
	break;

	case 'dashboard':
	require_once ($gestion.'Controleur.php');
	if(isset($_POST['ca'])){

	}
	else{
		vendeur();
	}
	break;


	case 'produit':
	require_once ($gestion.'Controleur.php');

	if (isset($_POST['ajouter'])){
		ajouter($_POST);
	}elseif (isset($_POST['ajouterProduitS'])) {
		ajouterProduitS($_POST);

	}
	elseif (isset($_POST['modifier'])) {
		modifier($_POST);

	}
	elseif(isset($_POST['modifierProduitM'])){
		modifierProduitM($_POST);
	}

	elseif (isset($_POST['supprimerProduit'])) {
		supprimerProduit($_POST);
	}
	elseif (isset($_POST['valider'])) {
		valider();

	}elseif (isset($_POST['consulter'])) {
		consulter($_POST);

		}else{ 
			liste();
		}
		break;
		default: 
		echo "Impossible";



		case 'vendeur':
		require_once($gestion.'Controleur.php');
		if(isset($_POST['ajoutvendeur'])){
			ajoutervendeur($_POST);
		}else{
			listevendeur();
		}

		break;
		default:
		echo "Impossible!!!";
	}



	?>