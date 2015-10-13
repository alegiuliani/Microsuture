<?php
if(empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo "Argumentos não enviados!";
	return false;
}

$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$to = 'vendas@microsuture.com.br';
$email_subject = "Envio de E-mail pelo site por:  $name";
$email_body = "Contato enviado pelo site.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nTelefone: $phone\n\nE-mail: $email_address\n\nMensagem:\n$message";
$headers = "From: noreply@gmail.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>