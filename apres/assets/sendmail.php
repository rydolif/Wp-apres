<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';
	$mail->setLanguage('ru', 'phpmailer/language/');
	$mail->IsHTML(true);

	//От каго письмо
	$mail->setFrom('biuro@apres-technology.pl', 'ApresTechnology');
	//Кому отправить
	$mail->addAddress('biuro@apres-technology.pl');
	//Тема письма
	$mail->Subject = ('Cześć, to test wysyłki formy');

	//Тело письма
	$body = '<h1>List zwrotny</h1>';

	if(trim(!empty($_POST['name']))) {
		$body.='<p><strong>Imie: </strong>' . $_POST['name']. '</p>';
	}
	if(trim(!empty($_POST['email']))) {
		$body.='<p><strong>E-mail: </strong>' . $_POST['email']. '</p>';
	}
	if(trim(!empty($_POST['phone']))) {
		$body.='<p><strong>Telefon: </strong>' . $_POST['phone']. '</p>';
	}
	if(trim(!empty($_POST['index']))) {
		$body.='<p><strong>Kod pocztowy: </strong>' . $_POST['index']. '</p>';
	}

	$mail->Body = $body;

	//Отправляем
	if (!$mail->send()) {
		$message = 'Błąd';
	} else {
		$massage = 'Dane zostały wysłane!';
	}

	$response = ['message' => $massage];

	header('Content-type: application/json');
	echo json_encode($response);


?>