function zmien1(lang)
{
    switch(lang)
            {
        case "pl":
            document.getElementsByClassName("head1")[0].innerHTML = "WITAJ!";
            document.getElementsByClassName("content-text")[0].innerHTML = "Twój komputer wolno działa? Nie chcesz przeszukiwać całego internetu, aby rozwiązać swój problem? Masz problemy z konfiguracją urządzenia lub instalacją sterowników? Na Twój komputer dostało się złośliwe oprogramowanie, które nie chce dać Ci spokoju? Potrzebujesz instalacji windowsa i formatowania? A może Twój komputer według Ciebie wygląda jak pustynia? To bardzo dobrze się składa! Bedę bardzo rad, jeśli będę mógł pomóc Ci w jaki kolwiek sposób. Jeśli w mojej ofercie nie ma interesującego Cię zagadnienia, to nic! Napisz do mnie wiadomość i opisz swoją sprawe, a ja postaram się zrobić wszystko aby sprostać Twoim wymaganiom. Nie przejmuj się, pomogę Ci! Rozumiem jak w dzisiejszych czasach jest ważna mobilność    i posiadanie w pełni sprawnego urządzenia, które działa bez zarzutu i jak bardzo ważne jest szybkie rozwiązanie problemów z nim związanych. Dlatego pomoc właśnie Tobie jest dla mnie najwyższym piorytetem!";
            break;
        case "en":
            document.getElementsByClassName("head1")[0].innerHTML = "WELCOME!";
            document.getElementsByClassName("content-text")[0].innerHTML = "Your computer is slow? Do not want to search the whole internet to solve your problem? Are you having trouble setting up your device or installing drivers? Has your computer got malicious software that does not want to give you peace of mind? Need windows installation and formatting? Or maybe your computer looks like you like a desert?  It is very good! I will be very glad if I can help you any way. If my offer does not interest you, then nothing! Write me a message and describe your business, and I will do everything to meet your requirements. Do not worry, I'll help you! I understand how important mobility is today And having a fully functional device that works flawlessly and how important it is to quickly solve problems related to it. That is why helping me is the highest priority for me!"; 
            break;
    }
}
function zmien2(lang)
{
    switch(lang)
            {
        case "pl":
            document.getElementsByClassName("head1")[0].innerHTML = "Jak działam?";
            document.getElementsByClassName("content-text")[0].innerHTML = "Troska o Twoją mobilność ma dla mnie najwyższy priotytet! Jeśli borykasz się z jakimś problemem nie przejmuj się, dołożę wszelkich starań aby pomóc Ci go rozwiązać online. Jeżeli mieszkasz zbyt daleko od Edynburga, nie możemy się umówić na odbiór lub wizyte, NIE PRZEJMUJ SIĘ!! Zrobimy to zdalnie przez internet! Łącząc się z Twoim urządzeniem zdalnie z mojego domu, a ty będziesz mieć kontrolę nad wszystkim co robię! To takie proste! Po zgłoszeniu problemu, analizuje opis dołączony przez Ciebie, następnie kontaktuję sie z Tobą zadając podstawowe pytania które pomogą mi szybko zweryfikować problem. Po pomyślnej weryfikacji zdecydujemy czy konieczna będzie moja wizyta w celu rozwiązania problemu (Dojazd na terenie 8£), czy umówimy się na odbiór urządzenia. Cena zależy od sytuacji jaka wynikła z komputerem, lub od Twoich konkretnych wymagań. Ceny zawarte w cenniku są orientacyjne. Jeśli jakość moich usług zadowoliła Cię, wszystko działa jak należy proszę podziel się ze znajomymi, znajdziesz na stronie odnośniki od portali społecznościowych, to tylko minuta, a dla mnie tak wiele! ";
            break;
        case "en":
            document.getElementsByClassName("head1")[0].innerHTML = "How I works?";
            document.getElementsByClassName("content-text")[0].innerHTML = "Caring for mobility is my priority! If you are struggling with some problem do not bother, try to make it easier for you to go online. If you live too close to Edinburgh, do can not to make an appointment or a visit, DO NOT WORRY !! We will do remotely over the Internet! By connecting to your device remotely with my home, you can have control over everything I do! It's so simple! After reporting the problem, you will then be asked the basic questions that will help me resolve the issue quickly. After a successful verification, we will decide whether we will need a visit (8 £), or we will arrange a pick up. Price depends on the state of the computer or your specific requirements. Prices in the price list are approximate. The quality of my service satisfied you, everything works like a thank you request to your friends, you find on the social networking site, it's just a minute, and so much to me!";
            break;
    }        
}
function zmien4(lang)
{
	var cena = "30";
	var rodzaj = "'CleanPC'";
    switch(lang)
            {
        case "pl":
            document.getElementsByClassName("head1")[0].innerHTML = "Czyszczenie PC za pomocą sprężonego powietrza";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Czyszczenie Twojego Laptopa lub Komputera Stacjonarnego za pomocą sprężonego powietrza, czyszczenie klawiatury, doprowadzanie go do czystości. <br/><br/>Ten rodzaj usługi wymaga umówienia się na odbioru urządzenia.<br/><br/>Czas oczekiwania na urządzenie: Do 3 dni roboczych<br/><br/>Komputery wymagają co jakiś czas czyszczenia ze względu na wysokie temperatury spowodowane brudem w urządzeniu, sprawia to że komputer z czasem staje się wolniejszy, a podzespoły mogą się przepalić. Dużo lepiej raz na jakiś czas wyczyścić komputer, niż kupować drogie części lub podzespoły. Zadbaj o swój komputer!<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 35£ od urządzenia</div>';
            break;
        case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Service PC/Laptop with Compressed Air";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Clean your laptop or desktop computer with compressed air, clean the keyboard, bring it clean.<br/><br/> The time it takes for a device: Up to 3 business days <br/> <br/> Hardware requirements require a certain period of time to read out that it is not easy and the components can burn out. . Lots of time for some time to clean the computer rather than buying expensive parts or components. Take care of your computer!<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 30£/Device</div>';
            break;
    }        
}
function zmien5(lang)
{
	var cena = "35";
	var rodzaj = "'Format'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Formatowanie & Instalacja Windows";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Jeśli Twój komputer działa zbyt wolno, wyskakują dziwne okienka, antywirus nie daje rady, lub Twój komputer nie był formatowany wieki a komputery nie są Twoją mocną stroną to właśnie dlatego tu jestem aby Ci pomóc. Napisz do mnie, umówimy się na wizytę, lub na odbiór urządzenia, ustalimy dogodny dla Ciebie termin a urządzenie będzie już gotowe w ciągu 2 dni roboczych!  <br/><br/>W zależności od wymagań możemy się umówić na wizytę lub odbiór urządzenia. Średni czas wizity to 2 godziny<br/><br/>Czas oczekiwania na urządzenie: Do 3 dni roboczych<br/><br/><br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 35£ od urządzenia</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Formatting & Installing Windows";
			document.getElementsByClassName("content-text")[0].innerHTML = 'If your computer is running too slowly, pop up strange windows, anti-virus can not handle it, or your computer has not been formatted for ages and computers are not your strength, that is why I am here to help you. Write me, we will arrange a visit or pick up the device, we will set a suitable date for you and the device will be ready in 2 working days! <br/> <br/> Depending on your requirements we can arrange a visit or reception. Average time of vision is 2 hours <br/> <br/> Device idle time: Up to 3 business days<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 35£/Device</div>';
			break;
	}        
}
function zmien6(lang)
{
	var cena = "40";
	var rodzaj = "'CleanVirus'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Czyszczenie urządzenia z wirusów/błędów";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Zdarza się, że zainstalujemy jakiś program którego nie możemy odinstalować, a antywirus nie wykrywa go lub nie usuwa, lub antywirus tak usunął wirusa że teraz nie możemy włączyć komputera , albo mamy blue screen który pojawia się zaraz po włączeniu urządzenia lub po jakimś czasie jego działania. Z uwagi na różnego rodzaju sytuacje czas pracy w tym przypadku nie jest określony. <br/><br/>W zależności od przeprowadzonej konsultacji, zdecydujemy czy będzie potrzebna moja wizyta czy odbiór urządzenia do naprawy<br/><br/>Czas oczekiwania na urządzenie: Do 5 dni roboczych<br/><br/><br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 40£ od urządzenia</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Cleaning your PC with viruses, erros, bluescreen";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Sometimes we install a program that we can not uninstall and antivirus does not detect or remove it, or anti-virus has removed the virus so that we can not turn on the computer now, or we have a blue screen that appears immediately after power on or after some time . Due to the various types of situations, the working time in this case is not specified. <br/> <br/> Depending on your consultation, we will decide if you will need my visit or pick up your repair device <br/> <br/> Time to wait for the device: Up to 5 business days<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 40£/Device</div>';
			break;
	}        
}
function zmien7(lang)
{
	var cena = "20";
	var rodzaj = "'ForPassword'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Zapomniałeś hasła na komputer DOS/Windows?";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Czasami jak to w życiu bywa uda nam się zapomnieć hasła które właśnie wczoraj ustawiliśmy na naszym komputerze, i nie możemy sobie go przypomnieć, a kiedy staramy się usunać je to nam nie wychodzi. Bywa też tak, że urządzenie samo z racji zawirusowania ustali hasło na komputerze np. na Windowsa. Ale spokojnie bez problemu Ci pomogę i szybko to załatwimy!<br/><br/>W zależności od przeprowadzonej konsultacji, zdecydujemy czy będzie potrzebna moja wizyta czy odbiór urządzenia do naprawy<br/><br/>Czas oczekiwania na urządzenie: Do 2 dni roboczych<br/><br/><br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 20£ od urządzenia</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Remove your forgotten passowrd";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Sometimes, as in life, we are able to forget the password that we just set up on our computer yesterday, and we can not remember it, and when we try to remove it we do not go out. It is also possible that the device itself because of a virus will set a password on the computer, for example Windows. <br/> <br/> Depending on your consultation, we will decide whether you will need my visit or pick up the device <br/> <br/> Time to wait for the device: To 2 business days<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 20£/Device</div>';
			break;
	}        
}
function zmien8(lang)
{
	var cena = "15";
	var rodzaj = "'Zapomniane hasło Nintendo'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Nintendo 3DXL - Usuwanie kontroli rodzicielskiej";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Twoje Nintendo ma hasło? Chcesz się go pozbyć ale nie wiesz jak to zrobić? Zgłoś się do mnie, załatwimy to w 15 minut!!<br/><br/>W zależności od przeprowadzonej konsultacji, zdecydujemy czy będzie potrzebna moja wizyta czy odbiór urządzenia.<br/><br/>Czas oczekiwania na urządzenie: Do 1 dni roboczych<br/><br/><br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 15£ od urządzenia</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Nintendo 3DXL - Removing parental controls";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Your Nintendo has a password? You want to get rid of it but you do not know how to do it? Report to me, we will settle it in 15 minutes! <br/> <br/> Depending on the consultation, we will decide whether you will need my visit or reception. <br/> <br/> Time to wait: 1 business day<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 15£/Device</div>';
			break;
	}        
}
function zmien9(lang)
{
	var cena = "10";
	var rodzaj = "'Wymiana zlaczek'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Wymiana złączek RJ45(Ethernet) i RJ11(Telephone)";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Jeśli masz problem ze swoim przewodem internetowym, Twój przewód nie łączy po podłączeniu czy to do telefonu, czy do komputera, musisz nim ruszać, ustawiać wtyczkę pod kątem aby zadziałała, nie męcz się dłużej! Wymienie te złączki dla Ciebie i będziesz mógł się dalej cieszyć bezproblemowym podłączeniem internetowym. Fani dużych szybkości internetu wiedzą o czym pisze, zważywszy na to, że WIFI nie jest w stanie przesłać danych z taką szybkością jak przewód.<br/><br/>W zgłoszeniu prosze przesłać godziny w jakich jest możliwość dokonania serwisu.<br/><br/>Czas oczekiwania na wizyte: Do 2 dni robocze<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 10£/wymiana + dojazd</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Replacement of RJ45 (Ethernet) and RJ11 (Telephone) connectors";
			document.getElementsByClassName("content-text")[0].innerHTML = 'If you have a problem with your internet cable, your cable does not connect when connected to your phone or computer, you have to move it, set the plug at an angle to work, do not tire anymore! Replace these connectors for you and you will continue to enjoy a hassle-free Internet connection. High speed internet users know what they are saying, since WIFI is not able to send data at as fast as a cable. <br/> <br/> Please send us your time in the notification of how many hours you can make the service. > Waiting time for visits: Up to 2 business days<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 10£/exchange + Drive</div>';
			break;
	}        
}
function zmien10(lang)
{
	var cena = "'Do ustalenia'";
	var rodzaj = "'Aktualizacja lub instalacja steroników'";
	switch(lang)
	{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Instalacja i aktualizacja sterowników";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Bardzo często możemy się spotkać z problemami związanymi z instalacją sterowników. Nasze komputery stają się coraz starsze, a oprogramowanie komputerowe coraz nowsze co koliduje z kompatybilnością podzespołów. Bardzo częstym problemem jest kolidowanie systemu operacyjnego z naszymi sterownikami do starego urządzenia do którego ciężko znaleźć odpowiednie sterowniki pod system operacyjny. Jeśli masz dość zabawy, napisz do mnie, chętnie pomogę!<br/><br/>Po konsultacji zdecydujemy o wizycie lub odbiorze sprzętu<br/><br/>Czas oczekiwania na urządzenie: Do 5 dni robocze<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam cena do ustalenia</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Install and update drivers";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Very often we encounter problems with installing drivers. Our computers are getting older, and computer software is getting newer that interfere with component compatibility. A very common problem is to interfere with the operating system of our drivers to the old device, which is hard to find suitable drivers under the operating system. If you have enough fun, write to me, I will be happy to help! <br/> <br/> After consultation we decide to visit or pick up the equipment <br/> <br/> Waiting time for device: Up to 5 working days<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order Price to settle</div>';
			break;
	}        
}
function zmien11(lang)
{
	var cena = "20";
	var rodzaj = "'Optymalizacja pracy komputera'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Optymalizacja pracy komputera do najwyższej wydajności";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Sformatowałeś swój komputer i zainstalowałeś świeżego windowsa ale nie jesteś zadowolony z osiągów jakie Twój komputer posiada? Napisz do mnie a na pewno temu zaradzimy! Jeśli boisz się o podkręcanie procesora itp. To spokojnie, nic z tych rzeczy nie będzie miało miejsca, zadbam o Twoje urządzenie tak aby jego wydajność mogła wzrosnąć nawet dwókrotnie bez obciążania jego podzespołów i ryzykownego podkręcania komputera!<br/><br/>Po konsultacji zdecydujemy o wizycie lub odbiorze sprzętu<br/><br/>Czas oczekiwania na wizyte/urządzenie: Do 3 dni roboczych<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 20£ + Dojazd</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Optimize your computer for maximum performance";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Have you reformatted your computer and installed a fresh windows, but are not happy with the performance your computer has? Write me and we will do it for sure! If you are afraid of overclocking the processor, etc. It will be quiet, nothing will happen, I will take care of your device so that its performance could grow up to two times without loading its components and risking overclocking! Consultation we decide to visit or pick up the equipment <br/> <br/> Time to wait for the visit / device: Up to 3 working days<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 20£ + Drive</div>';
			break;
	}        
}
function zmien12(lang)
{
	var cena = "10";
	var rodzaj = "'Pendrive'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Ratowanie Pendrive";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Każdy z nas może mieć swój wyjątkowy pendrive który się zepsuł, a swoim wyglądem jest dla nas wyjątkowy. Masz problemy ze swoim Pendrive? Nie możesz nic wgrać na niego, lub nie możęsz go sformatować? Napisz do mnie a postaram się temu zaradzić. Pendrive są bardzo delikatne więc nie ma 100% gwarancji na naprawienie urządzenia.<br/><br/>Po konsultacji zdecydujemy o wizycie lub odbiorze sprzętu<br/><br/>Czas oczekiwania na wizyte/urządzenie: Do 3 dni roboczych<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam 10£ + Dojazd</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Rescue the pendrive";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Do you have problems with your pendrive? You can not load anything on it, or you can not format it? Write me and I will try to fix it. <br /> <br/> After consultation we decide to visit or pick up the equipment <br/> <br/> Time to wait for the visit / device: Up to 3 working days <br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order 10£ + Drive</div>';
			break;
	}        
}
function zmien13(lang)
{
	var cena = "200";
	var rodzaj = "'Tworzenie stron internetowych'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Tworzenie stron internetowych w HTML/CSS/JavaScript/PHP/MySQL";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Podoba Ci się moja strona? Chciałbym posiadać własną i zaistnieć w sieci? Szukasz ciekawego rozwiązania, lub masz pomysł na ciekawy skrypt ale nie wiesz jak go napisać? Napisz do mnie skonsultujemy się i podejmiemy działania w celu utworzenia dla Ciebie wymarzonej strony lub skryptu.<br/><br/>Po konsultacji zdecydujemy o terminach i płatnościach<br/><br/>Czas oczekiwania na stronę/skrypt: Do ustalenia<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Zamawiam Cena do ustalenia</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Rescue the pendrive";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Do you like my site? Would I like to own and exist on the web? Are you looking for an interesting solution, or have an idea for an interesting script but do not know how to write it? Please contact me and we will take action to create your dream page or script for you. <br/> <br/> After consultation we will decide on the dates and payments <br/> <br/> Time to wait for page / script: To determine <br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Order Price to settle</div>';
			break;
	}        
}
function zmien14(lang)
{
	var cena = "0";
	var rodzaj = "'Wsparcie Online'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Wsparcie online";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Jeżeli posiadasz jakiś problem natury komputerowej, technicznej, szukasz pomocy jak zoptymalizować pracę komputera pod swoją ulubioną grę, lub masz z nią jakiś problem, masz problemy z internetem - zbyt duże lagi, pingi. Śmiało napisz do nas, ja swoim doświadczeniem postaram się pomóc i przy okazji czegoś się dowiedzieć, ty natomiast szybciej rozwiążesz swoje wątpliwości. Jeżeli także szukasz rady co do sprzętu komputerowego  pisz śmiało. Wspólnie coś wymyślimy!<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Wsparcie online - Bezpłatne</div>';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Support online";
			document.getElementsByClassName("content-text")[0].innerHTML = 'If you have a computer problem, technical, you are looking for help how to optimize your computer for your favorite game, or if you have a problem with it, you have problems with the internet - too big a lag, ping. Boldly write to us, I will try my best to help you and find out something, but you will solve your doubts more quickly. If you are also looking for advice on computer hardware write boldly. Together we will come up with something!<br/><br/><div class="zamawiam" onclick="otworz('+cena+','+rodzaj+')">Support online - Free</div>';
			break;
	}        
}
function zmien15(lang)
{
	var cena = "'0'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "Pomoc";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Masz jakiś niespotykany problem z którym nie wiesz jak sobie poradzić? Szukasz w internecie odpowiedzi na swoje pytania, ale żadne z fraz nie może trafić w problem który Cię dotyczy? Napisz do mnie, opisz swój problem, a na pewno coś wymyślimy. Jestem tutaj po to aby dbać o swoich klientów aby exploatacja komputera była dla nich miła i przyjemna, a problemy związane z komputerem były ostatnią rzeczą jaka pojawia nam się na ekranie monitora.<br/><br/> Jeśli masz uwagi odnośnie mojej działalności, wątpliwości napisz do mnie:).  ';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "Help";
			document.getElementsByClassName("content-text")[0].innerHTML = 'Do you have an uneasy problem with which you do not know how to deal? You are searching the internet for answers to your questions, but none of the phrases can not hit the problem that concerns you? Write to me, describe your problem, and we will make something. I am here to take care of my clients to make their computer exploits pleasant and pleasant for them, and computer problems were the last thing on the screen. <br/> <br/> If you have comments about my business, Doubt write to me :).';
			break;
	}        
}
function zmien16(lang)
{
	var cena = "'0'";
	switch(lang)
			{
		case "pl":
			document.getElementsByClassName("head1")[0].innerHTML = "";
			document.getElementsByClassName("content-text")[0].innerHTML = '<div class="kontakty"><ul><li>INFIRMARY PC<div class="logo"></div></li><<li>Telefon: 07454831465</li><li>SUPPORT@INFIRMARYPC.CO.UK</li><li>EDINBURGH</li><li>Napisz do nas na facebooku!</li></ul></div> ';
			break;
		case "en":
			document.getElementsByClassName("head1")[0].innerHTML = "";
			document.getElementsByClassName("content-text")[0].innerHTML = '<div class="kontakty"><ul><li>INFIRMARY PC<div class="logo"></div></li><li>Mobile: 07454831465</li><li>SUPPORT@INFIRMARYPC.CO.UK</li><li>EDINBURGH</li><li>Write to US on Facebook!</li></ul></div> ';
			break;
	}        
}