<?php
	ini_set('display_errors', 1);
	error_reporting(E_ERROR | E_WARNING);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/SMTP.php';

	$lang 		= $_COOKIE['lang'];

	$imie 		= $_POST['Imie'];
	$nazwisko 	= $_POST['Nazwisko'];
	$ema 		= $_POST['Email'];
	$tele 		= $_POST['Telefon'];
	$tresc 		= $_POST['Tresc'];

	$mail = new PHPMailer(true);
	try {	
		$mail->CharSet="utf-8";
		$mail->setFrom('support@infirmarypc.co.uk', 'Infirmary PC Support');
		$mail->addAddress($ema, "$imie $nazwisko");
		$mail->addReplyTo($ema);
		$mail->isHTML(true);        

		$mail->Subject = "Question: $imie $nazwisko";

		if(!isset($_COOKIE['lang']) || $lang == "en"){
			$mail->Body    = file_get_contents('../html/szablon.html');
		}
		else{
			$mail->Body    = file_get_contents('../html/szablon-pl.html');
		}
		$mail->addBCC('slawomir.glodzik@gmail.com');
		$mail->addBCC('support@infirmarypc.co.uk');

		if(!$mail->send()){
			echo $mail->ErrorInfo;
			$mail->send();
			echo "We could not send message. Please inform webmaster@infirmarypc.co.uk";
		}
	}
	catch (Exception $e) {
		print_r($e);
		echo $mail->ErrorInfo;
	}

	$mail = new PHPMailer(true);
	try {	
		$mail->CharSet="utf-8";
		$mail->setFrom('support@infirmarypc.co.uk', 'Infirmary PC Support');
		$mail->addAddress('support@infirmarypc.co.uk');
		$mail->addAddress('slawomir.glodzik@gmail.com');

		$mail->isHTML(true);        

		$mail->Subject = "Zapytanie: $imie $nazwisko";

		$mail->Body    = "Imie: $imie <br/> Nazwisko: $nazwisko <br/> E-mail: $ema <br/> Telefon: $tele <br/> Tresc: <br/>$tresc";

		$mail->addBCC('slawomir.glodzik@gmail.com');
		$mail->addBCC('support@infirmarypc.co.uk');

		if(!$mail->send()){
			echo $mail->ErrorInfo;
			$mail->send();
			echo "We could not send message. Please inform webmaster@infirmarypc.co.uk";
		}

	}
	catch (Exception $e) {
		print_r($e);
		echo $mail->ErrorInfo;
	}
?>