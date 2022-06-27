<?php
	require_once '../db/connect.php';

	$polaczenie = new mysqli($host, $login, $pass, $dbname);
	if($polaczenie->connect_errno!=0)
	{
		Echo "Error: ".$polaczenie->connect_errno; 
	}
	else
	{
		$polaczenie->query("set names utf8");
		//Wartości przesłane formularzem
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
		//Wysłanie wpisu do bazdy danych
		$dodaj = "INSERT INTO Zamowienie (ID, Dane, Email, Telefon, Adres, Model, RodzajPC, RodzajSys, Opis, Zgoda1, Zgoda2, Outside, Cena, Uslugi) VALUES(NULL, '$dane', '$em', '$tel' , '$adres' , '$model' , '$rodzajpc' , '$rodzajsys' , '$opis' , '$zgoda1' , '$zgoda2' , '$outside' , '$cena' , '$uslugi')";
		
		if ($polaczenie->query($dodaj) !== TRUE) {
			echo " Error: " . $polaczenie->errno . " Opis: " . $polaczenie->error;
		}
		$polaczenie->close();
	}
?>