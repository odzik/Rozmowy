
<!DOCTYPE HTML>
<html lang="PL">
	<head>
		<!--   Nazwa strony-->
		<?php
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
		switch($lang)
		{
			case 'en':
				echo<<<END
                                        <title> Infirmary PC</title>
END;
				break;
			case 'pl':
				echo<<<END
                                        <title> Ambulatorium Komputerowe</title>
END;
				break;
			default:
				echo<<<END
                                        <title> Infirmary PC</title>
END;
		}
		?>        
		<!--	Meta tagi-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.1">
		<meta name="description" content="Infirmary PC - Support for your Computer\r\n
										  Twój komputer wolno działa? Nie chcesz przeszukiwać całego internetu, aby rozwiązać swój problem? Masz problemy z konfiguracją urządzenia lub instalacją sterowników?
										  Na Twój komputer dostało się złośliwe oprogramowanie, które nie chce dać Ci spokoju? 
										  Potrzebujesz instalacji windowsa i formatowania? A może Twój komputer według Ciebie wygląda jak pustynia?
										  To bardzo dobrze się składa! Bedę bardzo rad, jeśli będę mógł pomóc Ci w jaki kolwiek sposób. 
										  Jeśli w mojej ofercie nie ma interesującego Cię zagadnienia, to nic! Napisz do mnie wiadomość i opisz swoją sprawe, a ja postaram się zrobić wszystko aby sprostać Twoim wymaganiom. 
										  Nie przejmuj się, pomogę Ci! Rozumiem jak w dzisiejszych czasach jest ważna mobilność
										  i posiadanie w pełni sprawnego urządzenia, które działa bez zarzutu i jak bardzo ważne jest szybkie rozwiązanie problemów z nim związanych. 
										  Dlatego pomoc właśnie Tobie jest dla mnie najwyższym piorytetem!">
		<meta name="keywords" content="HTML,CSS,PHP,JavaScript, programowanie, %program%, gr%, JS, Web, repair, pc, comp%, lapt%, forma%, %edinburgh&, Edi%, edi%, %edi%, progr%, %area%, %window%, %polish%, %english%, %slawomir%, %glodzik%, %linux%, %error%, %blad%, %błąd%, %problem%, %infirmary%, %ambulatorium%, %komputer%, %update%, %aktualizacja%, %pendrive%, %wsparcie%, %support%, %nintento%, %mac%, %apple%, %phones%, %fix%, %telephones%, %wtyczki%, %clean%, %instal%, %remov%, %virus%, %antyvirus%, %pass%, %rj45%, %rj11%, %update%, %opt%, %help%, %contact%, %20%, %edyn%, edynburg">
		<meta name="googlebot" content="index">
		<meta name="robots" content="index">
		<meta name="author" content="Slawomir Glodzik">

		<!-- Linki do styli  -->
		<link rel="stylesheet" href="style.css" type="text/css" />	
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&amp;subset=latin-ext" rel="stylesheet" />    <link rel="shortcut icon" href="grafiki/logo-brows.png" />
		<link rel="stylesheet" href="css/fontello.css" type="text/css" />
		<link rel="stylesheet" href="css1/fontello.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">

		<!-- Linki do skryptów -->
		<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="formularz.js"></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript" src="footer.js"></script>
		<script type="text/javascript" src="zamykanie.js"></script>
	</head>

	<!-- Ciało strony -->
	<body>  
		<div id="zamowienie" style="display:block;">
			<div id="forma-zamowienia">
				<div id="form-zamowienia">
					<div class="thanks">
						<?php 

						// polaczenie z baza
						require_once "connect.php";

						$polaczenie = new mysqli($host, $login, $pass, $dbname);
						if($polaczenie->connect_errno!=0)
						{
							Echo "Error: ".$polaczenie->connect_errno; 
						}
						else
						{
							$imie1 = $_POST['firstname2'];
							$tel1 = $_POST['telefon2'];
							$email1 = $_POST['email2'];
							$kindpc1 = $_POST['kindpc2'];
							$kindsystem1 = $_POST['kindsystem2'];
							$opis1 = $_POST['description2'];
							$cena = $_POST['cena'];
							$rodzaj = $_POST['rodzaj'];
							if($imie1<>"" && $tel1<>"" && $email1<>"" && $opis1<>"")
							{
								if($_SERVER['HTTP_CLIENT_IP'])
								{
									$ip = $_SERVER['HTTP_CLIENT_IP'];
								}
								else if($_SERVER['HTTP_X_FORWARDED_FOR'])
								{
									$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
								}
								else
								{
									$ip = $_SERVER['REMOTE_ADDR'];
								}
								$encoded = ip2long($ip);
								$dodaj = "INSERT INTO Zamowienia (ID, Imie, Telefon, Email, kindpc, kindsys, Opis, IP, Cena, Rodzaj) VALUES(NULL, '$imie1', '$tel1', '$email1', '$kindpc1', '$kindsystem1', '$opis1', '$encoded','$cena','$rodzaj')";
								if ($polaczenie->query($dodaj) === TRUE) 
								{
									$data = date(DATE_RFC822);
									$wyslij = 'slawomir.glodzik@gmail.com , SUPPORT@INFIRMARYPC.CO.UK';
									mail($wyslij, $imie1." - Zamowienie: ".$data, "Imie: $imie1\r\n\r\nNumer Telefonu: $tel1\r\n\r\nE-mail: $email1\r\n\r\nRodzaj PC: $kindpc1\r\n\r\nRodzaj systemu: $kindsystem1\r\n\r\nCena: $cena\r\n\r\nRodzaj: $rodzaj\r\n\r\nOpis Problemu: \r\n$opis1\r\n\r\n");
									if ($lang == "pl")
									{
										echo<<<END
                                <div class="emotkaf"></div>
                                Dziękujemy za wysłanie zgłoszenia $imie1
                                <br/><br/> 
                                W ciągu 5h odpowiemy na Twoje zgłoszenie
                                <br/><br/>
                                Poinformuj o nas znajomych! Może oni także potrzebują szybkiego i fachowego wsparcia!!
END;
									}
									elseif ($lang == "en")
									{
										echo<<<END
                                <div class="emotkaf"></div>
                                Thank you for your Notification $imie
                                <br/><br/>
								Within 5 hours we will respond to your application.
                                <br/><br/>
                                Inform your friends about us!
END;
									}
								} 
								else 
								{
									echo "Error: " . $polaczenie->errno;
								}
								$polaczenie->close();
							}
							else{
								if ($lang == "pl")
									echo '<div class="placzek"></div><br/></br><div class="error">Przepraszamy, ale nie wypełniłeś jednego z pól. Prosze wypełnij wszystkie wymagane dane.</div>';
								elseif($lang=="en")
									echo '<div class="placzek"></div><br/></br><div class="error">Sorry but you did not fill some input. Please try again.</div>';
							}
						}
						?>
						<br/><br/>
						<button type="button" class="wroc"><a href="index.php">Back</a></button>
					</div>
				</div>
			</div>
		</div>
		<div id="container-body">
			<div id="menu">
				<div class="container">
					<div class="menu" >
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>
					<?php
					$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
					switch($lang)
					{
						case 'en':
							echo<<<END
                                        <div class="contmenu">
                                            <ul>
                                                <li><a href="#" onclick="zmien1('en')">About me</a></li>
                                                <li><a href="uslugi.php">Services</a></li>
                                                <li><a href="" onclick="zmien15('en')">HELP</a></li>
                                                <li><a href="" onclick="zmien16('en')">Contact</a></li>
                                            </ul>
                                        </div>
END;
							break;
						case 'pl':
							echo<<<END
                                        <div class="contmenu">
                                            <ul>
                                                <li><a href="#" onclick="zmien1('pl')">O mnie</a></li>
                                                <li><a href="uslugi.php">Usługi</a></li>
                                                <li><a href="#" onclick="zmien15('pl')">Pomoc</a></li>
                                                <li><a href="#" onclick="zmien16('pl')">Kontakt</a></li>
                                            </ul>
                                        </div>
END;
							break;
						default:
							echo<<<END
                                        <div class="contmenu">
                                             <ul>
                                                <li><a href="#" onclick="zmien1('pl')">O mnie</a></li>
                                                <li><a href="uslugi.php">Usługi</a></li>
                                                <li><a href="#" onclick="zmien15('pl')">Pomoc</a></li>
                                                <li><a href="#" onclick="zmien16('pl')">Kontakt</a></li>
                                            </ul>
                                        </div>
END;
					}
					?>    
				</div>
				<div class="spolecznosc" title="Tell a friend!">
					<div class="spolecznosc-logo"></div>
					<?php
					$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
					switch($lang)
					{
						case 'en':
							echo<<<END
                                    <div class="lista-spolecznosc">
                                        <ul>
                                               <li><a href="https://twitter.com/infirmary_pc" target="_blank"><span class="social-sentence1">Tweet!</span><i class="icon-twitter"></i></a></li>
                                               <li><a href="https://plus.google.com/u/0/111108482545548487740" target="_blank"><span class="social-sentence2">Share</span><i class="icon-gplus"></i></a></li>
                                               <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finfirmarypc.co.uk%2F&amp;src=sdkpreparse" target="_blank"><span class="social-sentence3">Forward</span><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </div>
END;
							break;
						case 'pl':
							echo<<<END
                                    <div class="lista-spolecznosc">
                                        <ul>
                                               <li><a href="https://twitter.com/infirmary_pc" target="_blank"><span class="social-sentence1">Tweet!</span><i class="icon-twitter"></i></a></li>
                                               <li><a href="https://plus.google.com/u/0/111108482545548487740" target="_blank"><span class="social-sentence2">Podziel się</span><i class="icon-gplus"></i></a></li>
                                               <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finfirmarypc.co.uk%2F&amp;src=sdkpreparse" target="_blank"><span class="social-sentence3">Udostępnij</span><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </div>
END;
							break;
						default:
							echo<<<END
                                    <div class="lista-spolecznosc">
                                        <ul>
                                               <li><a href="https://twitter.com/infirmary_pc" target="_blank"><span class="social-sentence">Tweet!</span><i class="icon-twitter"></i></a></li>
                                               <li><a href="https://plus.google.com/u/0/111108482545548487740" target="_blank"><span class="social-sentence">Podziel się</span><i class="icon-gplus"></i></a></li>
                                               <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finfirmarypc.co.uk%2F&amp;src=sdkpreparse" target="_blank"><span class="social-sentence">Udostępnij</span><i class="icon-facebook"></i></a></li>
                                        </ul>
                                    </div>
END;
					}
					?>    

				</div>
				<div class="search">
					<div class="search-logo">
					</div>
					<div class="search-box">
						<form>
							<input type="search" name="search" placeholder="Search..." autofocus>
							<div class="search-symbol"></div>
						</form>
					</div>
				</div>
			</div>
			<div id="body">
				<div class="logo-type">
				</div>   
				<div class="copywriter">
					<?php
					switch($lang)
					{
						case 'en':
							echo<<<END
                    <div class="head">WELCOME!</div>
                    <DIV class="content-text">

                                Your computer is slow? Do not want to search the whole internet to solve your problem? Are you having trouble setting up your device or installing drivers?
                                Has your computer got malicious software that does not want to give you peace of mind?
                                Need windows installation and formatting? Or maybe your computer looks like you like a desert?
                                It is very good! I will be very glad if I can help you any way.
                                If my offer does not interest you, then nothing! Write me a message and describe your business, and I will do everything to meet your requirements.
                                Do not worry, I'll help you! I understand how important mobility is today
                                And having a fully functional device that works flawlessly and how important it is to quickly solve problems related to it.
                                That is why helping me is the highest priority for me! 
                    </div>
END;
							break;
						case 'pl':
							echo<<<END
                            <div class="head">WITAJ!</div>
                            <DIV class="content-text">
                                Twój komputer wolno działa? Nie chcesz przeszukiwać całego internetu, aby rozwiązać swój problem? Masz problemy z konfiguracją urządzenia lub instalacją sterowników?
                                Na Twój komputer dostało się złośliwe oprogramowanie, które nie chce dać Ci spokoju? 
                                Potrzebujesz instalacji windowsa i formatowania? A może Twój komputer według Ciebie wygląda jak pustynia?
                                To bardzo dobrze się składa! Bedę bardzo rad, jeśli będę mógł pomóc Ci w jaki kolwiek sposób. 
                                Jeśli w mojej ofercie nie ma interesującego Cię zagadnienia, to nic! Napisz do mnie wiadomość i opisz swoją sprawe, a ja postaram się zrobić wszystko aby sprostać Twoim wymaganiom. 
                                Nie przejmuj się, pomogę Ci! Rozumiem jak w dzisiejszych czasach jest ważna mobilność
                                i posiadanie w pełni sprawnego urządzenia, które działa bez zarzutu i jak bardzo ważne jest szybkie rozwiązanie problemów z nim związanych. 
                                Dlatego pomoc właśnie Tobie jest dla mnie najwyższym piorytetem!
                                </div>
END;
							break;
						default:
							echo<<<END
                                <div class="head">WITAJ!</div>
                                <DIV class="content-text">
                                Twój komputer wolno działa? Nie chcesz przeszukiwać całego internetu, aby rozwiązać swój problem? Masz problemy z konfiguracją urządzenia lub instalacją sterowników?
                                Na Twój komputer dostało się złośliwe oprogramowanie, które nie chce dać Ci spokoju? 
                                Potrzebujesz instalacji windowsa i formatowania? A może Twój komputer według Ciebie wygląda jak pustynia?
                                To bardzo dobrze się składa! Bedę bardzo rad, jeśli będę mógł pomóc Ci w jaki kolwiek sposób. 
                                Jeśli w mojej ofercie nie ma interesującego Cię zagadnienia, to nic! Napisz do mnie wiadomość i opisz swoją sprawe, a ja postaram się zrobić wszystko aby sprostać Twoim wymaganiom. 
                                Nie przejmuj się, pomogę Ci! Rozumiem jak w dzisiejszych czasach jest ważna mobilność
                                i posiadanie w pełni sprawnego urządzenia, które działa bez zarzutu i jak bardzo ważne jest szybkie rozwiązanie problemów z nim związanych. 
                                Dlatego pomoc właśnie Tobie jest dla mnie najwyższym piorytetem!

                                </div>
END;
					};
					?>
				</div>            
				<div class="form">
					<?php
					switch($lang)
					{
						case 'en':
							echo<<<END
                    <div class="contact">Are you looking for support? Write to me!!</div><div class="emotka"><div class="picture"></div></div>
                <form action="formularz.php" method="post" target="_self">
                    <input id="firstname" type="text" name="firstname" placeholder="First name" autocomplete="additional-name" title="First name" onchange="imieen()" oninput="sprawdz()" autofocus/>
                    <input id="telefon" type="tel" name="telefon" placeholder="Telephone number" title="Mobile/Telephone" autocomplete="mobile" onchange="zadzwonen()" oninput="sprawdz()"/>
                    <input id="email" type="email" title="Adress E-mail" name="email" placeholder="E-mail" onchange="emailen()" oninput="sprawdz()" autocomplete="email"/>
                    <select title="Kind of Computer" name="kindpc">
                        <option value="PC" name="pc">PC</option>
                        <option value="Laptop" name="laptop" selected>Laptop</option>
                        <option value="MAC" name="mac">MAC</option>
                        <option value="MAC" name="inne">Diferent</option>
                    </select>
                    <select title="Kind of System" name="kindsystem">
                        <option value="Windows" name="windows">Windows</option>
                        <option value="Linux" name="linux">Linux</option>
                        <option value="MAC" name="mac">MAC</option>
                        <option value="MAC" name="inne">Diferent</option>
                    </select>
                    <div class="description"><textarea id="op" title="What have happened with your Computer/Description of sytutation" name="description" placeholder="Description of the problem" oninput="sprawdz()" onblur="opisben()"></textarea></div>
                    <div class="g-recaptcha" data-sitekey="6LdvRR4UAAAAAGQeUNgh4r2BTbrw4Y7zMGwvkraD"></div>
                    <div class="button-content">
                    <input type="reset" name="reset" value="Reset">
                    <input id="wyslij" type="submit" name="wyslij" value="Send"><div id="info">To fill out the form</div>
                    </div>
                </form>
END;
							break;
						case 'pl':
							echo<<<END
                            <div class="contact">Szukasz wsparcia?? Napisz do mnie!!</div><div class="emotka"><div class="picture"></div></div>
                <form action="formularz.php" method="post" target="_self">
                    <input id="firstname" type="text" name="firstname" placeholder="Imię" autocomplete="additional-name" title="Podaj imię" onchange="imiepl()" oninput="sprawdz()" autofocus/>
                    <input id="telefon" type="tel" name="telefon" placeholder="Numer Telefonu" title="Podaj numer telefonu" autocomplete="mobile" onchange="zadzwonpl()" oninput="sprawdz()"/>
                    <input id="email" type="email" title="Adres E-mail" name="email" placeholder="E-mail" onchange="emailpl()" oninput="sprawdz()" autocomplete="email"/>
                    <select title="Rodzaj komputera" name="kindpc">
                        <option value="PC" name="pc">PC</option>
                        <option value="Laptop" name="laptop" selected>Laptop</option>
                        <option value="MAC" name="mac">MAC</option>
                        <option value="MAC" name="inne">Inne</option>
                    </select>
                    <select title="Rodzaj systemu operacyjnego" name="kindsystem">
                        <option value="Windows" name="windows">Windows</option>
                        <option value="Linux" name="linux">Linux</option>
                        <option value="MAC" name="mac">MAC</option>
                        <option value="MAC" name="inne">Inne</option>
                    </select>
                    <div class="description"><textarea id="op" title="What have happened with your Computer/Description of sytutation" name="description" placeholder="Opis problemu" oninput="sprawdz()" onblur="opisbpl()"></textarea></div>
                    <div class="g-recaptcha" data-sitekey="6LdvRR4UAAAAAGQeUNgh4r2BTbrw4Y7zMGwvkraD"></div>
                    <div class="button-content">
                    <input type="reset" name="reset" value="Reset">
                    <input id="wyslij" type="submit" name="wyslij" value="Wyślij"><div id="info">Aby wysłać wypełnij formularz</div>
                    </div>
END;
							break;
						default:
							echo<<<END
                                <div class="contact">Szukasz wsparcia?? Napisz do mnie!!</div><div class="emotka"><div class="picture"></div></div>
                <form action="formularz.php" method="post" target="_self">
                    <input id="firstname" type="text" name="firstname" placeholder="Imię" autocomplete="additional-name" title="Podaj imię"  onchange="imiepl()" oninput="sprawdz()" autofocus/>
                    <input id="telefon" type="tel" name="telefon" placeholder="Numer Telefonu" title="Podaj numer telefonu" autocomplete="mobile" onchange="zadzwonpl()" oninput="sprawdz()"/>
                    <input id="email" type="email" title="Adres E-mail" name="email" placeholder="E-mail" onchange="emailpl()" oninput="sprawdz()" autocomplete="email" />
                    <select title="Rodzaj komputera" name="kindpc">
                        <option value="PC" name="pc">PC</option>
                        <option value="Laptop" name="laptop" selected>Laptop</option>
                        <option value="MAC" name="mac">MAC</option>
                        <option value="MAC" name="inne">Inne</option>
                    </select>
                    <select title="Rodzaj systemu operacyjnego" name="kindsystem">
                        <option value="Windows" name="windows">Windows</option>
                        <option value="Linux" name="linux">Linux</option>
                        <option value="MAC" name="mac">MAC</option>
                        <option value="MAC" name="inne">Inne</option>
                    </select>
                    <div class="description"><textarea id="op" title="What have happened with your Computer/Description of sytutation" name="description" placeholder="Opis problemu" oninput="sprawdz()" onblur="opisbpl()"></textarea></div>
                    <div class="g-recaptcha" data-sitekey="6LdvRR4UAAAAAGQeUNgh4r2BTbrw4Y7zMGwvkraD"></div>
                    <div class="button-content">
                    <input type="reset" name="reset" value="Reset">
                    <div id="info">Aby wysłac wypełnij formularz</div>
                    <input id="wyslij" type="submit" name="wyslij" value="Wyślij">
                    </div>
END;
					};
					?>
				</div>
			</div>
			<div id="footer">
				<div class="footer-content">
					<div class="header">
						<DIV ID="name">Infirmary PC</DIV>
						<div class="logo"></div>
						<div class="pass">WE CAN DO IT</div>
					</div>
					<div class="social-media">
						<ul>
							<li><a href="https://twitter.com/infirmary_pc" target="_blank"><i class="icon-twitter"></i></a></li>
							<li><a href="https://plus.google.com/u/0/111108482545548487740" target="_blank"><i class="icon-gplus"></i></a></li>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finfirmarypc.co.uk%2F&amp;src=sdkpreparse" target="_blank"><i class="icon-facebook"></i></a></li>
						</ul>
					</div>
					<?php
					$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
					switch($lang)
					{
						case 'en':
							echo<<<END
                        <div id="information">
                        <div class="firma">
                            <div class="head">COMPANY</div>
                            <ul>
                                <li> <a href="#" onclick="zmien1('en')">About me</a></li>
                                <li> <a href="#" onclick="zmien2('en')">How do I works</a></li>
                                <li style="display:none;"> <a href="#" onclick="zmien3('en')">Partnership</a></li>
                            </ul>
                        </div>
                        <div class="uslugi">
                            <div class="head">SERVICES</div>
                            <ul>
                                <li> <a href="#" onclick="zmien4('en')">Service PC/Laptop with Compressed Air</a></li>
                                <li> <a href="#" onclick="zmien5('en')">Formatting & installing windows</a></li>
                                <li> <a href="#" onclick="zmien6('en')">Cleaning PC/Laptop</a></li>
                                <li> <a href="#" onclick="zmien7('en')">Deleteing forgotten password</a></li>
                                <li> <a href="#" onclick="zmien8('en')">Nintendo 3dxl - Deleteing forgotten passowrd</a></li>
                                <li> <a href="#" onclick="zmien9('en')">Replacing the RJ45(Ethernet) and RJ11(Telephone) plugs </a></li>
                                <li> <a href="#" onclick="zmien10('en')">Installing any drivers</a></li>
                                <li> <a href="#" onclick="zmien11('en')">Securely optimize your computer's performance</a></li>
                                <li> <a href="#" onclick="zmien12('en')">Support with pendrives</a></li>
                                <li> <a href="#" onclick="zmien13('en')">Websites in JS/PHP/HTML/CSS</a></li>
                                <li> <a href="#" onclick="zmien14('en')">Support online</a></li>

                            </ul>
                        </div>
                        <div class="informacje">
                            <div class="head">INFORMATIONS</div>
                            <ul>
                                <li> <a href="#" onclick="zmien15('en')">HELP</a></li>
                                <li> <a href="#" onclick="zmien16('en')">CONTACT</a></li>
                            </ul>
                        </div>
                    </div>
END;
							break;
						case 'pl':
							echo<<<END
                    <div id="information">
                        <div class="firma">
                            <div class="head">FIRMA</div>
                            <ul>
                                <li> <a href="#" onclick="zmien1('pl')">O mnie</a></li>
                                <li> <a href="#" onclick="zmien2('pl')">Jak działam</a></li>
                                <li style="display:none;"> <a href="#" onclick="zmien3('pl')">Współpraca</a></li>
                            </ul>
                        </div>
                        <div class="uslugi">
                            <div class="head">USŁUGI</div>
                            <ul>
                                <li> <a href="#" onclick="zmien4('pl')">Czyszczenie PC za pomocą sprężonego powietrza</a></li>
                                <li> <a href="#" onclick="zmien5('pl')">Formatowanie & Instalowanie Windowsa</a></li>
                                <li> <a href="#" onclick="zmien6('pl')">Usuwanie wirusów, błędów, plików</a></li>
                                <li> <a href="#" onclick="zmien7('pl')">Usuwanie zapomnianego hasła</a></li>
                                <li> <a href="#" onclick="zmien8('pl')">Nintendo 3dxl - Usuwanie hasła kontroli rodzicielskiej</a></li>
                                <li> <a href="#" onclick="zmien9('pl')">Wymiana złączek RJ45(Ethernet) i RJ11(Telephone)</a></li>
                                <li> <a href="#" onclick="zmien10('pl')">Instalacja & Aktualizacja sterowników</a></li>
                                <li> <a href="#" onclick="zmien11('pl')">Optymalizacja pracy komputera do najwyższej wydajności</a></li>
                                <li> <a href="#" onclick="zmien12('pl')">Ratowanie pendrive</a></li>
                                <li> <a href="#" onclick="zmien13('pl')">Tworzenie stron w JS/PHP/HTML/CSS</a></li>
                                <li> <a href="#" onclick="zmien14('pl')">Wsparcie online</a></li>

                            </ul>
                        </div>
                        <div class="informacje">
                            <div class="head">INFORMACJE</div>
                            <ul>
                                <li> <a href="#" onclick="zmien15('pl')">Pomoc</a></li>
                                <li> <a href="#" onclick="zmien16('pl')">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
END;
							break;
						default:
							echo<<<END
                    <div id="information">
                        <div class="firma">
                            <div class="head">FIRMA</div>
                            <ul>
                                <li> <a href="#" onclick="zmien1('pl')">O mnie</a></li>
                                <li> <a href="#" onclick="zmien2('pl')">Jak działam</a></li>
                                <li style="display:none;"> <a href="#" onclick="zmien3('pl')">Współpraca</a></li>
                            </ul>
                        </div>
                        <div class="uslugi">
                            <div class="head">USŁUGI</div>
                            <ul>
                                <li> <a href="#" onclick="zmien4('pl')">Czyszczenie PC za pomocą sprężonego powietrza</a></li>
                                <li> <a href="#" onclick="zmien5('pl')">Formatowanie & Instalowanie Windowsa</a></li>
                                <li> <a href="#" onclick="zmien6('pl')">Usuwanie wirusów, błędów, plików</a></li>
                                <li> <a href="#" onclick="zmien7('pl')">Usuwanie zapomnianego hasła</a></li>
                                <li> <a href="#" onclick="zmien8('pl')">Nintendo 3dxl - Usuwanie hasła kontroli rodzicielskiej</a></li>
                                <li> <a href="#" onclick="zmien9('pl')">Wymiana złączek RJ45(Ethernet) i RJ11(Telephone)</a></li>
                                <li> <a href="#" onclick="zmien10('pl')">Instalacja & Aktualizacja sterowników</a></li>
                                <li> <a href="#" onclick="zmien11('pl')">Optymalizacja pracy komputera do najwyższej wydajności</a></li>
                                <li> <a href="#" onclick="zmien12('pl')">Ratowanie pendrive</a></li>
                                <li> <a href="#" onclick="zmien13('pl')">Tworzenie stron w JS/PHP/HTML/CSS</a></li>
                                <li> <a href="#" onclick="zmien14('pl')">Wsparcie online</a></li>

                            </ul>
                        </div>
                        <div class="informacje">
                            <div class="head">INFORMACJE</div>
                            <ul>
                                <li> <a href="#" onclick="zmien15('pl')">Pomoc</a></li>
                                <li> <a href="#" onclick="zmien16('pl')">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
END;
					}
					?> 
					<div id="languages">
						<div id="content-languages">
							<div id="polish" title="Polish"></div>
							<div id="english" title="English"></div>
						</div>
					</div>
					<div id="rights">
						<div id="company">&#x24B8 2017 INFIRMARY PC</div>
						<div id="city">EDINBURGH AREA</div>
						<div id="reserved"> &#9743 +44 07454 831 465</div>
						<div id="e-mail">&#9993 SUPPORT@INFIRMARYPC.CO.UK</div>
						<div id="reserved">All rights reserved</div>
						<div id="author">Slawomir Glodzik</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
