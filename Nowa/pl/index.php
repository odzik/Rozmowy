<!DOCTYPE HTML>
<html lang="EN">

<head>
	<?php
	$lang = $_COOKIE['lang'];
	?>
		<title> Infirmary PC Edynburgh - Naprawa & Serwis PC - laptopy, komputery stacjonarne, dyski, odzyskwianie danych, windows, formatowanie, usuwanie wirusow, usuwanie bledow, usuwanie problemow z komputerem </title>
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Naprawa i serwis komputerów na terenie całego Edynburga - DOJAZD GRATIS. Odzyskujemy dane, tworzymy strony internetowe, usuwamy wirusy, problemy z komputerem, instalujemy oprogramowanie windows/software">
		<meta name="keywords" content="HTML,CSS,PHP,JavaScript, programowanie, program, gry, JS, Webdesign, web, repair, pc, computer, laptop, firma, edinburgh, edi, program, area, windows, polish, english, slawomir, glodzik, linux, error, blad, błąd, problem, infirmarypc, infirmary, ambulatorium, komputerowe, update, aktualizacja, pendrive, wsparcie, support, nintento, mac, apple, phones, fix, telephone, telephones, wtyczki, change, zmiana, wymiana, clean, instalowanie, install, remove, virus, wirusy, wirus, viruses, antyvirus, password, rj45, rj11, update, optymalizacja, kontakt, help, contact, edynburg, naprawa, issue, edinburgh, komputerów, komputer, laptopów, wentylatorów, wentylatory, przegrzewający, przegrzewanie, overheat, overheating, slow, overheating, disk, partition, partitions, odzyskiwanie danych, dane, recovery, odzyskiwanie">
		<meta name="author" content="Slawomir Glodzik">
		<meta property="og:url" content="http://infirmarypc.co.uk" />
		<meta property="og:title" content="Infirmary PC Edynburgh - Naprawa & Serwis PC - laptopy, komputery stacjonarne, dyski, odzyskwianie danych, windows, formatowanie, usuwanie wirusow, usuwanie bledow, usuwanie problemow z komputerem">
		
		<link rel="stylesheet" href="\Nowa/style\style.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&amp;subset=latin-ext" rel="stylesheet" />
		<link rel="shortcut icon" href="../grafika/logo.png" />
		<link rel="stylesheet" href="\Nowa/css/fontello.css" type="text/css" />
		<link rel="stylesheet" href="\Nowacss1/fontello.css" type="text/css" />
		<link rel="stylesheet" href="\Nowa/style/css/aaaaa.css" type="text/css" />
		<link rel="stylesheet" href="\Nowa/style/nawigacja/css/nawigacja.css" type="text/css" />
		<link rel="stylesheet" href="../style/kosz/css/kosz.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet"/>
		<link rel="shortcut icon" href="\Nowa/grafika/logo-brows.png" />
		<link rel="stylesheet" href="../style/kosz/css/animation.css" />
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="\Nowa/jquery-cookie\jquery.cookie.js"></script>
		<script type="text/javascript" src="../js/upload.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer>
			{
				lang: 'en-GB'
			}
		</script>
		<script src="//platform.linkedin.com/in.js" type="text/javascript">
			lang: en_US
		</script>
		<script type="text/javascript" src="\Nowa/js/cookie.js"></script>
		<script type="text/javascript" src="../js/zamykanie.js"></script>
		<script type="text/javascript" src="\Nowa/js/subskrypcja.js"></script>
		<script type="text/javascript" src="\Nowa/js/slajdy.js"></script>
		<script type="text/javascript" src="../js/zamowienie.js"></script>
		<script type="text/javascript" src="../js/zapytanie.js"></script>
		<script type="text/javascript" src="../js/przegladarka.js"></script>
		<script>
			(function (d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.10";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-8788676597949037",
			enable_page_level_ads: true
		});
	</script>
</head>
<?php
	$nawigacja = [];
	$nawigacja[] = [ 'label' => "Strona główna <i class='demo-icon strzalkaright-circle-1'></i>" , 'path' => '\Nowa/en/index.php' ];
?>

	<body>
		<?php
	
	if(isset($_COOKIE['lang']))
	{
		$lang = $_COOKIE['lang'];
		
		echo<<<END
			<script type="text/javascript">
				$(document).ready(function(){
					$('#'+'$lang').css({
						'-webkit-box-shadow': '0px 0px 15px 2px rgba(255,255,255,1)',
						'-moz-box-shadow': '0px 0px 15px 2px rgba(255,255,255,1)',
						'box-shadow': '0px 0px 15px 2px rgba(255,255,255,1)',
					});
				});
			</script>
END;
	}
	else
	{
		echo<<<END
			<script type="text/javascript">
				$(document).ready(function(){
					$('#en').css({
						'-webkit-box-shadow': '0px 0px 15px 2px rgba(255,255,255,1)',
						'-moz-box-shadow': '0px 0px 15px 2px rgba(255,255,255,1)',
						'box-shadow': '0px 0px 15px 2px rgba(255,255,255,1)',
					});
				});
			</script>
END;
	}
	?>
			<div id="cookie">
				<div id="text-cook"> Ta strona używa cookie. Dowiedz się więcej o celu ich używania i zmianie ustawień cookie w przeglądarce. Korzystając ze strony wyrażasz zgodę na używanie cookie, zgodnie z aktualnymi ustawieniami przeglądarki. </div>
				<input id="cook" type="button" value="Akceptuje" onclick="zamknij('cookie')"> </div>
			<div id="fb-root"></div>
			<script>
				(function (d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.10";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			<div id="menu-content">
				<div id="menu">
					<ul>
						<div class="logo">
							<a href="https://infirmarypc.co.uk"><img src="\Nowa\grafika\logo.png" alt="infirmary pc, naprawa komputerow, naprawa laptopow, edynburg"></a>
							<h1 class="logo-speech">Infirmary PC Edynburg - Naprawa i Serwis komputerów</h1>
							<div class="logo-speech-key">WE CAN FIX IT</div>
						</div>
						<li onclick="otworz2('slajder')">Aktualności</li>
						<li onclick="otworz2('uslugi-content')">Usługi</li>
						<a href="poradnik.php"><li>Wsparcie</li></a>
						<a href="kontakt.php"><li>O nas</li></a>
						<li onclick="otworz2('kontakt')">Kontakt</li>
					</ul>
					<div id="jezyk"> <img id="en" src="\Nowa\grafika\English.png" alt="angielski, english" title="English" onclick="ChangeLang('en')" /> <img id="pl" src="\Nowa\grafika\Polish.png" alt="polski, polish" title="Polish" onclick="ChangeLang('pl')" /> </div>
				</div>
				<div id="lokalizator">
					<div id="social">
						<ul>
							<li>
								<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FInfirmaryPC%2F&width=200&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId" width="200" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
							</li>
							<li>
								<div class="fb-send" data-href="https://www.facebook.com/InfirmaryPC/"></div>
							</li>
							<li>
								<div class="g-plusone" data-callback="gapi.plusone.go(  opt_container )" data-href="https://plus.google.com/b/101125648584353623779/101125648584353623779"></div>
							</li>
							<li>
								<script type="IN/Share" data-url="https://www.linkedin.com/in/infirmary-pc-993424148/"></script>
							</li>
						</ul>
					</div>
					<div id="subskrypcja">
						<div id="lokalizacja">
							<ul>
								<? foreach ($nawigacja as $b): ?>
									<li>
										<a href="<?=$b['path'];?>">
											<?=$b['label'];?>
										</a>
									</li>
									<? endforeach ?>
							</ul>
						</div>
						<div id="podziekowania">Dziękujemy za subskrypcje!</div>
						<form id="form-sub">
							<input id="personalia" type="text" name="personalia" placeholder="Imie i nazwisko" />
							<input id="telefon" type="tel" name="telefon" placeholder="Numer telefonu" />
							<input id="email" name="email" type="email" placeholder="E-mail" />
							<input name="wyslij1" type="button" value="Subskrybuj" title="Subskrypcja daje Ci 10% rabatu na usługi oraz informację o nowościach i promocjach" /> </form>
					</div>
					<div id="contact">
						<div class="tel">&#9743; 07454 831 465</div>
						<div class="email">&#9993; SUPPORT@INFIRMARYPC.CO.UK</div>
					</div>
				</div>
			</div>
			<div id="slajder">
				<div id="nawigacja-lewo"><i class="demo-icon nawigacja-left-dir"></i> </div>
				<div id="nawigacja-prawo"><i class="demo-icon nawigacja-right-dir"></i> </div>
				<div id="slajder-content">
					<ul>
						<li class="1"><img class="1" src="../grafika/slajdy/Diagnostyka_komputera.jpg" alt="Diagnostyka komputera"></li>
						<li class="2"><img class="2" src="../grafika/slajdy/Instalacja_windows.jpg" alt="Instalacja Windows"></li>
						<li class="3"><img class="3" src="../grafika/slajdy/Odzyskiwanie_danych.jpg" alt="Odzyskiwanie danych"></li>
						<li class="4"><img class="4" src="../grafika/slajdy/Przegrzewajacy_sie_komputer.jpg" alt="Przegrzewający się komputer"></li>
						<li class="5"><img class="5" src="../grafika/slajdy/Webdesign.jpg" alt="Tworzenie stron internetowych"></li>
						<li class="6"><img class="6" src="../grafika/slajdy/Wsparcie_techniczne.jpg" alt="Wsparcie techniczne"></li>
					</ul>
				</div>
				<div id="Title">
					<ul>
						<li class="1"><h2>
						<?php
							if($lang == 'pl')
								echo "Przy więcej niż 1 usłudze - 30% rabatu";
							else
								echo "More than 1 order? - 30%  discount";
						?></h2></li>
						<li class="2"><h2>
							<?php
								if($lang == 'pl')
									echo "Jakość i szybkosć to nasz priorytet!";
								else
									echo "Quality and speed are our priority!";
							?>
						</h2></li>
						<li class="3"><h2>
							<?php
								if($lang == 'pl')
									echo "Zasubskrybuj Newslettera a otrzymasz 10% zniżki!";
								else
									echo "Subscribe Newsletter and get 10% discount!";
							?>
						</h2></li>
						<li class="4"><h2>
							<?php
								if($lang == 'pl')
									echo "Przyjedziemy po Twoje urządzenie - GRATIS!";
								else
									echo "We will come for your Device - GRATIS!";
							?>
						</h2></li>
						<li class="5"><h2>
							<?php
								if($lang == 'pl')
									echo "Nasze wsparcie było pomocne? Polub nas na FB!";
								else
									echo "Our help was helpful? Like us on FB!";
							?>
						</h2></li>
						<li class="6"><h2>
							<?php
								if($lang == 'pl')
									echo "Jesteśmy do Twojej dyspozycji 24/7!";
								else
									echo "We are at your disposal 24/7!";
							?>
						</h2></li>
					</ul>
				</div>
				<div id="text-content">
					<ul>
						<li class="text1"></li>
						<li class="text2"></li>
						<li class="text3"></li>
						<li class="text4"></li>
						<li class="text5"></li>
						<li class="text6"></li>
					</ul>
				</div>
			</div>
			<div id="uslugi-content">
				<div id="uslugi-tlo"></div>
				<h3>Tu znajdziesz to czego potrzebujesz!!</h3>
				<div id="uslugi">
					<form id="formzamowienie" method="post" role="form" enctype="multipart/form-data">
						<ul>
							<li><select id="usluga" title="Przy wybieraniu więcej niż jednej usługi przytrzymaj klawisz 'Ctrl'" name="uslugi" multiple="multiple">
								<option value=50 Title="Odzyskiwanie danych z wymontowanych dysków, danych po usunięciu, naprawa dysków">
								
								Odzyskiwanie danych IDE/SATA</option>

								<option value=30 Title="Formatowanie dysków i instalacja systemu Windows" >Instalacja Windows/Linux & Formatowanie</option>

								<option value=30 Title="Usuwanie danych z dysku bez możliwości ich odzyskania" >Dostrzętne usuwanie danych z dysku</option>

								<option value=30 Title="Konfiguracja wszelkiego rodzaju urządzeń sieciowych, tworzenie grup sieciowych, konfiguracja urządzeń WIFI itp." >Konfiguracja urządzeń sieciowych, routerów, drukarek, bezprzewodowych i przewodowych</option>
								
								<option value=40 title="Zabezpieczanie sieci lokalnej za pomocą firewalla routera, oraz komputera, nakładanie haseł na router, konfiguracja sieci" >Zabezpieczanie sieci lokalnej</option>

								<option value=40 Title="Usuwanie wszelkiego rodzaju błędów lub problemów komputera." >Usuwanie błędów - problemów z komputerem</option>

								<option value=40 Title="Usuwanie wszelkiego rodzaju złośliwego oprogramowania, trojanów, spyware itp." >Usuwanie wirusów, spyware</option>

								<option value=30 Title="Odzyskiwanie haseł do wszelkiego rodzaju programów, systemów" >Odzyskiwanie haseł do programów/Windows</option>

								<option value=30 Title="Wymiana złączek RJ45 lub RJ11 są to złącza przewodów internetowych lub telefonicznych" >Wymiana złączek RJ45 i RJ11 (Ethernet/Telephone)</option>

								<option value=20 Title="Zwiększenie wydajności komputera w celu zwiększenia prędkości jego pracy." >Zwiększanie wydajności komputera</option>

								<option value=35 Title="Usuwanie problemu związanego z gorącym i wyłączającym się komputerem" >Usuwanie problemu z przegrzewającym i wyłączającym się komputerem</option>
								</select>
							</li>
							<li><input id="dane" name="dane" type="text" placeholder="Imie i nazwisko"/></li>
							<li><input id="adres" name="adres" type="text" placeholder="Adres w raz z postcode"/></li>
							<li><input id="tel" name="telefon" type="tel" placeholder="Numer telefonu"/></li>
							<li><input id="em" name="email" type="email" placeholder="Adres E-mail"/></li>
							<li><input id="model" name="model" type="text" placeholder="Model urządzenia"/></li>
							<li><input id="zdjecia" name="zdjecie[]" type="file" placeholder="Dodaj zdjęcia problemu" accept="image/*" multiple /></li>
							<li><select id="komp" title="Rodzaj komputera" name="kindpc2">
								<option value="PC" name="pc">PC</option>
								<option value="Laptop" name="laptop" selected>Laptop</option>
								<option value="MAC" name="mac">MAC</option>
								<option value="MAC" name="inne">Diferent</option>
								</select></li>
							<li><textarea id="opis" title="Opis wszelkich informacji które mogą się przydać." placeholder="Opis wszelkich informacji które mogą się przydać."></textarea></li>
							<li><select id="sys" title="Rodzaj systemu" name="kindsystem2">
								<option value="Windows" name="windows">Windows</option>
								<option value="Linux" name="linux">Linux</option>
								<option value="MAC" name="mac">MAC</option>
								<option value="MAC" name="inne">Diferent</option>
								</select></li> 
							<li><div id="uploading"></div></li>
							<fieldset>
								<legend>Dodatkowe informacje</legend>
								<li>
									<input id="mark" type="checkbox" name="mark" value="mark" checked/>
									<label for="mark">Wyrażam zgodę na wykorzystywanie zdjęć mojego urządzenia w celach marketingowych.
									</label>
								</li>
								<li>
									<input id="subskryption" type="checkbox" name="subskrypcja" value="subskrypcja" checked/>
									<label for="subskryption">Wyrazam zgodę na przesyłanie do mnie informacji o nowościach i promocjach.
									</label>
								</li>
								<li>
									<input id="dojazd" type="checkbox" name="subskrypcja" value="subskrypcja" />
									<label for="subskryption">Mieszkam po za Edynburgiem - Cena za dojazd to 20£ do 10km
									</label>
								</li>
							</fieldset>
							<li><input id="slij" name="sub" type="button" value="Wyslij"/></li>
							<li><input id="resetuj" type="reset" value="Resetuj wszystko" /></li>
							<div id="op">
								<div id="desc">Opis</div>
								<div id="description">W celu wykonania zamówienia prosimy o wypełnienie formularza. Prosimy przesyłać screenshots które pomogą nam w bardziej precyzyjny sposób zapewnić Państwu najwyższą jakość usług. Prosimy wypełnić dane w formularzu po lewej, następnie opisać w kilku zdaniach urządzenie/problem, wybrać usługę - wtedy pojawi się opis usług. <b style="color:red;">Cena jest poglądowa ma ona jedynie za zadanie przybliżenie docelowej ceny. Przy więcej niż jednej usłudze 10% rabatu!</b></div>
							</div>
							<div id="podliczenie">
								<span>Podliczenie</span>
								<table id="mnoznik">
									<tr>
										<td></td>
										<td>Usluga</td>
										<td>Cena</td>
									</tr>
									<tr>
										<td>Suma:</td>
										<td id="ilosc"></td>
										<td id="suma"></td>
									</tr>
								</table>
							</div>
						</ul>
						<div id="order-complete"></div>
					</form>
				</div>
			</div>
			<div id="kontakt">
				<div id="kontakt-content">
					<h4>Masz pytania? Napisz do nas!</h4>
					<div id="kontakt-image"></div>
					<div id="kontakt-form">
						<form id="form-kontakt">
							<ul>
								<li><input type="firstname" id="imie" name="firstname" placeholder="Imię" /></li>
								<li><input type="lastname" id="nazwisko" name="lastname" placeholder="Nazwisko" /></li>
								<li><input type="E-mail" id="ema" name="emai" placeholder="E-mail" /></li>
								<li><input type="tel" id="tele" name="telef" placeholder="Telefon" /></li>
								<li><textarea id="tresc" placeholder="Opisz swoje zapytanie."></textarea></li>
								<li><input type="reset" id="resetnij" value="Resetuj" /></li>
								<li><input type="button" id="zgloszenie" name="zglos" value="Wyslij" /></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			<div id="stopka">
				<div id="stopka-content">
					<div id="footer-content">
						<div id="stopka-list">
							<ul>
								<li>
									<h1>&#x24B8; 2017 Infirmary PC Edinburgh</h1>
								</li>
								<li>
									<H1>All rights reserved</H1>
								</li>
								<li>
									<H1>&#9743; +44 07454 831 465</H1>
								</li>
								<li>
									<H1>&#9993; support@infirmarypc.co.uk</H1>
								</li>
							</ul>
						</div>
						<div id="logo-image"><img src="../grafika/logo1.png" alt="Infirmary PC"/></div>
					</div>
				</div>
			</div>
	</body>

</html>