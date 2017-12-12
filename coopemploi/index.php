

<?php
session_start();
require_once 'include/configuration.php';

if (isset($_REQUEST['gestion'])){
	$gestion= $_REQUEST['gestion'];
}

else{
	
if(isset($_SESSION['login'])){

	$gestion = 'conseiller';	
}elseif(isset($_SESSION['login'])){
	$gestion = 'porteur';
	
}else{
		$gestion = 'authetification';
}
}


 require_once 'controller/routeur.php';

?>
<script type="text/javascript" src="include/libs/jquery-3.1.1.js"></script>
<script type="text/javascript" src="controleur/common.js"></script>

