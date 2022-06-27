<?php
	ini_set('display_errors', 1);
	error_reporting(E_ERROR | E_WARNING);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/SMTP.php';

	$lang = $_COOKIE['lang'];
	$dane = $_POST['Dane'];
	$tel = $_POST['Telefon'];
	$email = $_POST['Email'];
	$adres = $_POST['Adres'];
	$model = $_POST['Model'];
	$rodzajpc = $_POST['RodzajPC'];
	$rodzajsys = $_POST['RodzajSys'];
	$opis = $_POST['Opis'];
	$zgoda1 = $_POST['Zgoda1'];
	$zgoda2 = $_POST['Zgoda2'];
	$outside = $_POST['Outside'];
	$cena = $_POST['Cena'];
	$uslugi = $_POST['Uslugi'];
	$mail = new PHPMailer(true);
	try {	
		$mail->setFrom('support@infirmarypc.co.uk', 'Infirmary PC Support');
		$mail->addAddress($email, $dane);
		$mail->addReplyTo("$email");
		$mail->isHTML(true);        

		$mail->Subject = "Zamowienie: ".$rodzajpc." Model: ".$model;

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
		$mail->setFrom('support@infirmarypc.co.uk', 'Infirmary PC Support - Dane zamowienia');
		$mail->addAddress('support@infirmarypc.co.uk', ''.$dane.'');
		$mail->addAddress('slawomir.glodzik@gmail.com', ''.$dane.'');
		
		$mail->isHTML(true);        

		$mail->Subject = "Zamowienie: ".$rodzajpc." Model: ".$model;

		$mail->Body    = "Dane: $dane <br/> Telefon: $tel <br/> E-mail: $email <br/> Adres: $adres <br/> Rodzaj Systemu: $rodzajsys <br/> Zgoda1: $zgoda1 <br/> Zgoda2: $zgoda2 <br/> Outside: $outside <br/> Cena: $cena <br/> Opis: <br/> $opis <br/><br/> Uslugi: <br/>$uslugi";
		
		$mail->addBCC('slawomir.glodzik@gmail.com');
		$mail->addBCC('support@infirmarypc.co.uk');

		$dir = dir('../upload/'.$dane);
		while($file = $dir->read())
			if($file != '.' && $file != '..') 
				$mail->addAttachment('../upload/' . $dane . '/' . $file); 
		$dir->close();

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