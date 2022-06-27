<!DOCTYPE HTML>
<html lang="EN">

<head>
	<?php
	$lang = $_COOKIE['lang'];
	?>
		<title> Infirmary PC Edinburgh - Repair & Service PC - laptops, computers, discs, recovery data, windows, format, removing viruses, removing erros, removing problems with computers, repair computers and laptops, service computers and laptops </title>
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Repair and service computers on Edinburgh Area - COMMING FOR FREE. We recovery data, make websites, removing viruses, errors, installing programos, windows, software.">
		<meta name="keywords" content="HTML,CSS,PHP,JavaScript, programowanie, program, gry, JS, Webdesign, web, repair, pc, computer, laptop, firma, edinburgh, edi, program, area, windows, polish, english, slawomir, glodzik, linux, error, blad, błąd, problem, infirmarypc, infirmary, ambulatorium, komputerowe, update, aktualizacja, pendrive, wsparcie, support, nintento, mac, apple, phones, fix, telephone, telephones, wtyczki, change, zmiana, wymiana, clean, instalowanie, install, remove, virus, wirusy, wirus, viruses, antyvirus, password, rj45, rj11, update, optymalizacja, kontakt, help, contact, edynburg, naprawa, issue, edinburgh, komputerów, komputer, laptopów, wentylatorów, wentylatory, przegrzewający, przegrzewanie, overheat, overheating, slow, overheating, disk, partition, partitions, odzyskiwanie danych, dane, recovery, odzyskiwanie">
		<meta name="author" content="Slawomir Glodzik">
		<meta property="og:url" content="http://infirmarypc.co.uk" />
		<meta property="og:title" content="Infirmary PC Edynburgh - Naprawa & Serwis PC - laptopy, komputery stacjonarne, dyski, odzyskwianie danych, windows, formatowanie, usuwanie wirusow, usuwanie bledow, usuwanie problemow z komputerem">
		
		<link rel="stylesheet" href="\Nowa strona/style\style.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&amp;subset=latin-ext" rel="stylesheet" />
		<link rel="shortcut icon" href="../grafika/logo.png" />
		<link rel="stylesheet" href="\Nowa strona/css/fontello.css" type="text/css" />
		<link rel="stylesheet" href="\Nowa strona/css1/fontello.css" type="text/css" />
		<link rel="stylesheet" href="\Nowa strona/style/css/aaaaa.css" type="text/css" />
		<link rel="stylesheet" href="\Nowa strona/style/nawigacja/css/nawigacja.css" type="text/css" />
		<link rel="stylesheet" href="../style/kosz/css/kosz.css" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet"/>
		<link rel="shortcut icon" href="\Nowa strona/grafika/logo-brows.png" />
		<link rel="stylesheet" href="../style/kosz/css/animation.css" />
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="\Nowa strona/jquery-cookie\jquery.cookie.js"></script>
		<script type="text/javascript" src="../js/upload.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer>
			{
				lang: 'en-GB'
			}
		</script>
		<script src="//platform.linkedin.com/in.js" type="text/javascript">
			lang: en_US
		</script>
		<script type="text/javascript" src="\Nowa strona/js/cookie.js"></script>
		<script type="text/javascript" src="../js/zamykanie.js"></script>
		<script type="text/javascript" src="\Nowa strona/js/subskrypcja.js"></script>
		<script type="text/javascript" src="\Nowa strona/js/slajdy.js"></script>
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
	$nawigacja[] = [ 'label' => "Strona główna <i class='demo-icon strzalkaright-circle-1'></i>" , 'path' => '\Nowa strona/en/index.php' ];
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
				<div id="text-cook"> This page uses cookies. Learn more about using them and changing your browser's cookie settings. By using this site you consent to the use of cookies in accordance with your current browser settings.</div>
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
							<a href="https://infirmarypc.co.uk"><img src="\Nowa strona\grafika\logo.png" alt="infirmary pc, naprawa komputerow, naprawa laptopow, edynburg"></a>
							<h1 class="logo-speech">Infirmary PC Edinburgh - Repair & Service PC</h1>
							<div class="logo-speech-key">WE CAN FIX IT</div>
						</div>
						<li onclick="otworz2('slajder')">News</li>
						<li onclick="otworz2('uslugi-content')">Services</li>
						<li onclick="otworz2('kontakt')">Contact</li>
					</ul>
					<div id="jezyk"> <img id="en" src="\Nowa strona\grafika\English.png" alt="angielski, english" title="English" onclick="ChangeLang('en')" /> <img id="pl" src="\Nowa strona\grafika\Polish.png" alt="polski, polish" title="Polish" onclick="ChangeLang('pl')" /> </div>
				</div>
				<div id="lokalizator">
					<div id="social">
						<ul>
							<li><?php
								if ($lang == 'pl'){
									echo<<<END
									<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FInfirmaryPC%2F&width=200&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId" width="250px" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
END;
								}
								else
								{
									echo<<<END
									<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FInfirmaryPC%2F&width=200&layout=button_count&action=like&size=large&show_faces=true&share=true&height=46&appId" width="150px" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
END;
								}
							?>	
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
						<div id="podziekowania">Thank you for subscription!</div>
						<form id="form-sub">
							<input id="personalia" type="text" name="personalia" placeholder="First name & Last Name" />
							<input id="telefon" type="tel" name="telefon" placeholder="Mobile" />
							<input id="email" name="email" type="email" placeholder="E-mail" />
							<input name="wyslij1" type="button" value="Subscription" title="Subscription is giving to you 10% discount and information about news and promotions!" /> </form>
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
						<li class="1"><img class="1" src="../grafika/slajdy/Diagnostyka_komputera.jpg" alt="Computer Diagnostic"></li>
						<li class="2"><img class="2" src="../grafika/slajdy/Instalacja_windows.jpg" alt="Windows Instalation"></li>
						<li class="3"><img class="3" src="../grafika/slajdy/Odzyskiwanie_danych.jpg" alt="Data Recovery"></li>
						<li class="4"><img class="4" src="../grafika/slajdy/Przegrzewajacy_sie_komputer.jpg" alt="Overheat computer"></li>
						<li class="5"><img class="5" src="../grafika/slajdy/Webdesign.jpg" alt="Web Design"></li>
						<li class="6"><img class="6" src="../grafika/slajdy/Wsparcie_techniczne.jpg" alt="Technical support"></li>
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
				<h3>Here you can find everything what do you need!</h3>
				<div id="uslugi">
					<form id="formzamowienie" method="post" role="form" enctype="multipart/form-data">
						<ul>
							<li><select id="usluga" title="Przy wybieraniu więcej niż jednej usługi przytrzymaj klawisz 'Ctrl'" name="uslugi" multiple="multiple">
								<option value=50 Title="Recover data from disassembled disks, data after removal, disk repairs">Recovery Data IDE/SATA</option>

								<option value=30 Title="Formatting drivers and instalation windows." >Instalation Windows & Formatting</option>

								<option value=30 Title="Removing data without possibility to recovery." >Removing data</option>

								<option value=30 Title="Configuring all types of network devices, creating network groups, configuring WIFI devices, etc." >Configuration net devices, routers, printers, wireless and lan</option>
								
								<option value=40 title="Secure your local area network with a router firewall, and your computer, setting up passwords for your router, configuring your network" >Security local network</option>

								<option value=40 Title="Removing all types of computer errors or problems." >Removing errors - Problems with computers</option>

								<option value=40 Title="Removal of all types of malware, trojans, spyware, etc." >Removing viruses, spyware</option>

								<option value=30 Title="Recovery passwords for all kinds of programs, systems" >Recovery password to Programs & Windows</option>

								<option value=30 Title="Replacement of the RJ45 or RJ11 connectors are cable or telephone connections" >Replace connectors RJ45 & RJ11 (Ethernet/Telephone)</option>

								<option value=20 Title="Increase your computer's performance to increase its speed." >Optimalization efficiency of computer</option>

								<option value=35 Title="Troubleshoot a hot and disabling computer problem" >Removing overheat</option>
								</select>
							</li>
							<li><input id="dane" name="dane" type="text" placeholder="First Name & Last Name"/></li>
							<li><input id="adres" name="adres" type="text" placeholder="Adress & Postcode"/></li>
							<li><input id="tel" name="telefon" type="tel" placeholder="Mobile"/></li>
							<li><input id="em" name="email" type="email" placeholder="E-mail"/></li>
							<li><input id="model" name="model" type="text" placeholder="Device model"/></li>
							<li><input id="zdjecia" name="zdjecie[]" type="file" placeholder="Add your problem picture" accept="image/*" multiple /></li>
							<li><select id="komp" title="King of PC" name="kindpc2">
								<option value="PC" name="pc">PC</option>
								<option value="Laptop" name="laptop" selected>Laptop</option>
								<option value="MAC" name="mac">MAC</option>
								<option value="MAC" name="inne">Diferent</option>
								</select></li>
							<li><textarea id="opis" title="Description all information about your problem."></textarea></li>
							<li><select id="sys" title="Kind of system" name="kindsystem2">
								<option value="Windows" name="windows">Windows</option>
								<option value="Linux" name="linux">Linux</option>
								<option value="MAC" name="mac">MAC</option>
								<option value="MAC" name="inne">Diferent</option>
								</select></li> 
							<li><div id="uploading"></div></li>
							<fieldset>
								<legend>Additional informations</legend>
								<li>
									<input id="mark" type="checkbox" name="mark" value="mark" checked/>
									<label for="mark">
										I agree to use my device's images for marketing purposes.
									</label>
								</li>
								<li>
									<input id="subskryption" type="checkbox" name="subskrypcja" value="subskrypcja" checked/>
									<label for="subskryption">I agree to send information about news and promotions to me.
									</label>
								</li>
								<li>
									<input id="dojazd" type="checkbox" name="subskrypcja" value="subskrypcja" />
									<label for="subskryption">I live outside Edinburgh - Price is 20 £ to 10km
									</label>
								</li>
							</fieldset>
							<li><input id="slij" name="sub" type="button" value="Send"/></li>
							<li><input id="resetuj" type="reset" value="Reset" /></li>
							<div id="op">
								<div id="desc">Description</div>
								<div id="description">To complete your order, please complete the form. Please submit screenshots that will help us to provide you with the highest quality service. Please fill in the form on the left, then describe in a few sentences the device / issue, choose the service - then the service description will appear. <b style="color:red;">More than 1 order - 30% discount!</b></div>
							</div>
							<div id="podliczenie">
								<span>Summary</span>
								<table id="mnoznik">
									<tr>
										<td></td>
										<td>Service</td>
										<td>Price</td>
									</tr>
									<tr>
										<td>Summary:</td>
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
					<h4>Do you have any questions? Write to us!</h4>
					<div id="kontakt-image"></div>
					<div id="kontakt-form">
						<form id="form-kontakt">
							<ul>
								<li><input type="firstname" id="imie" name="firstname" placeholder="First Name" /></li>
								<li><input type="lastname" id="nazwisko" name="lastname" placeholder="Last Name" /></li>
								<li><input type="E-mail" id="ema" name="emai" placeholder="E-mail" /></li>
								<li><input type="tel" id="tele" name="telef" placeholder="Mobile" /></li>
								<li><textarea id="tresc" placeholder="Description"></textarea></li>
								<li><input type="reset" id="resetnij" value="Reset" /></li>
								<li><input type="button" id="zgloszenie" name="zglos" value="Send" /></li>
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