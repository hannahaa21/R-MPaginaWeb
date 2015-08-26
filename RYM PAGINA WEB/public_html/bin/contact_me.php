<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'gerencia@rymenergia.com.co'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Enviado por:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Acaba de recibir un mensaje a traves de nuestra pagina web.\n\n"."Detalles:\n\nNombre: $name\n\nTelefono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>