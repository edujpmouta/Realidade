<?php
date_default_timezone_set('America/Sao_Paulo');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if((isset($_POST['nome']) && !empty(trim($_POST['cpf']))) && (isset($_POST['nome']) && !empty(trim($_POST['nome'])))) {

	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];
	$telefone = $_POST['telefone'];
	$cidade = $_POST['cidade'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$perimetro = $_POST['perimetro'];
	$cep = $_POST['cep'];
	$arquivo = $_FILES["arquivo"];
	$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$mensagem = $_POST['mensagem'];
	$data = date('d/m/Y H:i:s');

	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'edu.jmouta@gmail.com';
	$mail->Password = 'shelbygt';
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
	$mail->Port = 587;

	$mail->setFrom('edu.jmouta@gmail.com', 'Empresa');
	$mail->addAddress('edu.jmouta@gmail.com', 'Destinatario');

	

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome: {$nome}<br>
				   CPF: {$cpf}<br>
				   RG: {$rg}<br>
				   Telefone: {$telefone}<br>
				   Cidade: {$cidade}<br>
				   Endereço: {$endereco}<br>
				   Bairro: {$bairro}<br>
				   Perimetro: {$perimetro}<br>
				   CEP: {$cep}<br>
				   Arquivo: {$arquivo}<br>
				   Data/hora: {$data}";

	$mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
				 

	if($mail->send()) {
		echo 'Email enviado com sucesso.';
	} else {
		echo 'Email não enviado.';
	}
} else {
	echo 'Não enviado: informar o email e a mensagem.';
}
