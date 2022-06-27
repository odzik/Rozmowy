<?php
	if(isset($_POST['Imie']) === true && empty($_POST['Imie']) === false)
	{
		require_once '../db/connect.php';
		$polaczenie = new mysqli($host, $login, $pass, $dbname);
		if($polaczenie->connect_errno!=0)
		{
			Echo "Error: ".$polaczenie->connect_errno; 
		}
		else
		{
			//Wartości przesłane formularzem
			$imie = $_POST['Imie'];
			$tel = $_POST['Telefon'];
			$email = $_POST['Email'];
			//Wysłanie wpisu do bazdy danych
			$dodaj = "INSERT INTO Subskrypcja (ID, Email, Imie, Telefon) VALUES(NULL, '$email', '$imie', '$tel')";
			if ($polaczenie->query($dodaj) === TRUE) {
				$wyslij = 'slawomir.glodzik@gmail.com , SUPPORT@INFIRMARYPC.CO.UK'; // Adresy E-mail
				$data = date(DATE_RFC822); // Data
				//Treść E-maila
				mail($wyslij, $imie." -Subskrypcja: ".$data, "Imie: $imie\r\n\r\nNumer Telefonu: $tel\r\n\r\nE-mail: $email\r\n\r\n");
			}
			else {
				echo " Error: " . $polaczenie->errno . " Opis: " . $polaczenie->error . " Telefon: " . $tel;
			}
			$polaczenie->close();
		}
	}
?>