<!Doctype html>
<html>
<head>
<title>Formulaire de contact</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<meta charset="utf-8" />
</head>

<?php

	if (isset($_POST['html'])){
	
		//Ajout des headers
		
		$to = $_POST['email']; //destinataire
		$subject = $_POST['objet'];
		$message = $_POST['message'];

		$header = "MIME Version 1.0\r\n"; //Multipurpose Internet Mail Extensions
		$header .= "Content-type: text/html; charset=utf-8\r\n";
		$header .= "From: no-reply@jipee.com\r\n" . "Reply-To: contact@jipee.com" . "\r\n" . "X-Mailer: PHP/" .phpversion();

		mail($to, $subject, $message, $header);


	} else if(isset($_POST['basique'])){
		
		mail('contact@jipee.com',"petit email de base","vous avez reçu cet email en réponse à votre inscrition.");
	}	
?>


<body>
	<div class=container> 
	<form class="form-horizontal" action="" method="post">
		<legend>Inscription</legend>
			

		<div class="form-group">
			<label class="col-sm-2 control-label">Adresse courriel </label>
			<div class="col-sm-10">
				<input class="form-control" name="email" type="text" />
				<span class="help-block">De la forme nom@domaine.com</span>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Objet du mail</label>
			<div class="col-sm-10">
				<input class="form-control" name="objet" type="text" />
				<span class="help-block">Indiquer la raison de l'envoi.</span>
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-2 control-label">Message </label>
			<div class="col-sm-10">
				<textarea name="message" rows="15" cols="60" maxlength="600" ></textarea>
    			<span class="help-block">Votre message ici.</span>
    		</div>
		</div>
		

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input class="btn btn-primary" type="submit" name="html"/>
				<input class="btn btn-default" type="submit" name="basique"/>
				
			</div>
		</div>
	</form>
	</div>
</body>
</html>