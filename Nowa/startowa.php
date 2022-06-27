<!DOCTYPE HTML>
<html>

<head>
		<title> Infirmary PC Edynburgh - Naprawa & Serwis PC - laptopy, komputery stacjonarne, dyski, odzyskwianie danych, windows, formatowanie, usuwanie wirusow, usuwanie bledow, usuwanie problemow z komputerem </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Naprawa i serwis komputerów na terenie całego Edynburga - DOJAZD GRATIS. Odzyskujemy dane, tworzymy strony internetowe, usuwamy wirusy, problemy z komputerem, instalujemy oprogramowanie windows/software">
		<meta name="keywords" content="HTML,CSS,PHP,JavaScript, programowanie, program, gry, JS, Webdesign, web, repair, pc, computer, laptop, firma, edinburgh, edi, program, area, windows, polish, english, slawomir, glodzik, linux, error, blad, błąd, problem, infirmarypc, infirmary, ambulatorium, komputerowe, update, aktualizacja, pendrive, wsparcie, support, nintento, mac, apple, phones, fix, telephone, telephones, wtyczki, change, zmiana, wymiana, clean, instalowanie, install, remove, virus, wirusy, wirus, viruses, antyvirus, password, rj45, rj11, update, optymalizacja, kontakt, help, contact, edynburg, naprawa, issue, edinburgh, komputerów, komputer, laptopów, wentylatorów, wentylatory, przegrzewający, przegrzewanie, overheat, overheating, slow, overheating, disk, partition, partitions, odzyskiwanie danych, dane, recovery, odzyskiwanie">
		<meta name="author" content="Slawomir Glodzik">
		<meta property="og:url" content="http://infirmarypc.co.uk" />
		<meta property="og:title" content="Infirmary PC Edynburgh - Naprawa & Serwis PC - laptopy, komputery stacjonarne, dyski, odzyskwianie danych, windows, formatowanie, usuwanie wirusow, usuwanie bledow, usuwanie problemow z komputerem">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="\Nowa strona/jquery-cookie\jquery.cookie.js"></script>
</head>

<body>
	<?php
		if(isset($_COOKIE['lang']))
		{
			$lang = $_COOKIE['lang'];
			echo "<script type='text/javascript'>alert($lang);</script>";
			switch($lang)
			{
				case 'pl':
					
					header('Location: \Nowa/pl/index.php');
				break;
				case 'en':
					header('Location: \Nowa/en/index.php');
				break;
			}
		}
		else
		{
			header('Location: \Nowa/en/index.php');
		}
?>
</body>

</html>