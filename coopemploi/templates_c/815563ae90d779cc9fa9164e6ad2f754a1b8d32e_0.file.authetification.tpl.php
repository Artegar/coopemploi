<?php
/* Smarty version 3.1.29, created on 2017-12-12 11:12:40
  from "C:\wamp64\www\coopemploi\authetification.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5a2fb9a8459245_40774936',
  'file_dependency' => 
  array (
    '815563ae90d779cc9fa9164e6ad2f754a1b8d32e' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploi\\authetification.tpl',
      1 => 1486742002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2fb9a8459245_40774936 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
	<link href="template/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
	<link href="template/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="template/style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<form method="POST" action="index.php">
				<div class="form-group">
					 
					
						Login : <input type="text" class="form-control" name="f-login" value='' />
				</div>
				<div class="form-group">
					 
					
						Mot de passe : <input type="password" class="form-control" name="f-pw" value='' />
				</div>
				<button type="submit" name="login" class="btn btn-default" > Se Connecter</button>
				
				
			</form>
		</div>
	</div>
</div>

<!-- 
	<form method="POST" action="authetification.php">
		login:<input type="text" name="f-login" value=''>
		<br>
		mot de passe :<input type="password" name="f-pw" value=''>
		<br>
		<input type="submit" name="valider" value="Se connecter">
	</form> -->

</body>

</html><?php }
}
