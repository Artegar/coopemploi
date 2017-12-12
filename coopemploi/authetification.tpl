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

</html>