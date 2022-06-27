var selectedValues = new Array;
var cena = new Array;
var procent = 0;
var suma = 0;
var j = 1;
var i = 0;
function usun(kolumna){
	$('#'+kolumna).remove();
	i--;
	j--;
	$('#ilosc').html(i);
	suma -= cena[kolumna];
	$('#desc').html(selectedValues[i]);
	var jezyk = $.cookie('lang');
	switch(selectedValues[i]){
		case 'Odzyskiwanie danych IDE/SATA':
			$('#description').load('../txt/odzyskiwanie.txt');
			break;
		case 'Instalacja Windows/Linux & Formatowanie':
			$('#description').load('../txt/format.txt');
			break;
		case 'Konfiguracja urządzeń sieciowych, routerów, drukarek, bezprzewodowych i przewodowych':
			$('#description').load('../txt/konfiguracja_sieci.txt');
			break;
		case 'Zabezpieczanie sieci lokalnej':
			$('#description').load('../txt/zabezpieczenie_sieci.txt');
			break;
		case 'Usuwanie błędów - problemów z komputerem':
			$('#description').load('../txt/errors.txt');
			break;
		case 'Usuwanie wirusów, spyware':
			break;
		case 'Odzyskiwanie haseł do programów/Windows':
			$('#description').load('../txt/hasla.txt');
			break;
		case 'Wymiana złączek RJ45 i RJ11 (Ethernet/Telephone)':
			$('#description').load('../txt/zlaczki.txt');
			break;
		case 'Zwiększanie wydajności komputera':
			$('#description').load('../txt/optymalizacja.txt');
			break;
		case 'Usuwanie problemu z przegrzewającym i wyłączającym się komputerem':
			$('#description').load('../txt/przegrzany_komputer.txt');
			break;
		case 'Dostrzętne usuwanie danych z dysku':
			$('#description').load('../txt/usuwanie_danych.txt');
			break;
		case 'Recovery Data IDE/SATA':
			$('#description').load('../txt/odzyskiwanie.txt');
			break;
		case 'Instalation Windows & Formatting':
			$('#description').load('../txt/format.txt');
			break;
		case 'Configuration net devices, routers, printers, wireless and lan':
			$('#description').load('../txt/konfiguracja_sieci.txt');
			break;
		case 'Security local network':
			$('#description').load('../txt/zabezpieczenie_sieci.txt');
			break;
		case 'Removing errors - Problems with computers':
			$('#description').load('../txt/errors.txt');
			break;
		case 'Removing viruses, spyware':
			break;
		case 'Recovery passwords for all kinds of programs, systems':
			$('#description').load('../txt/hasla.txt');
			break;
		case 'Replace connectors RJ45 & RJ11 (Ethernet/Telephone)':
			$('#description').load('../txt/zlaczki.txt');
			break;
		case 'Optimalization efficiency of computer':
			$('#description').load('../txt/optymalizacja.txt');
			break;
		case 'Removing overheat':
			$('#description').load('../txt/przegrzany_komputer.txt');
			break;
		case 'Removing data':
			$('#description').load('../txt/usuwanie_danych.txt');
			break;
	}
		if(i>1){
			procent = suma - ((30 * suma) / 100);
			$('#suma').html(procent.toFixed(2)+" £");
		}
		else if ( i < 1 ){
			if(jezyk == 'pl'){
				$('#desc').html('Opis');
				$('#description').html('W celu wykonania zamówienia prosimy o wypełnienie formularza. Prosimy przesyłać screenshots które pomogą nam w bardziej precyzyjny sposób zapewnić Państwu najwyższą jakość usług. Prosimy wypełnić dane w formularzu po lewej, następnie opisać w kilku zdaniach urządzenie/problem, wybrać usługę - wtedy pojawi się opis usług. <b style="color:red;">Cena jest poglądowa ma ona jedynie za zadanie przybliżenie docelowej ceny. Przy więcej niż jednej usłudze 10% rabatu!</b>');
			}
			else{
				$('#desc').html('Description');
				$('#description').html('To complete your order, please complete the form. Please submit screenshots that will help us to provide you with the highest quality service. Please fill in the form on the left, then describe in a few sentences the device / issue, choose the service - then the service description will appear. <b style="color:red;">More than 1 order - 30% discount!</b>');
			}
			procent = suma;
			$('#suma').html(procent.toFixed(2)+" £");
			}
		else{
			procent = suma;
			$('#suma').html(procent.toFixed(2)+" £");
		}
	}
$(document).ready(function(){
	$('#usluga').change(function() {
		i++;
		selectedValues[i] = $('#usluga option:selected').text();
		cena[i] = $('#usluga option:selected').val();
		$('#mnoznik tr:nth-last-child(1)').before("<tr id="+i+"><td onclick='usun("+i+")' style='color:red; cursor:pointer'><i class='demo-icon kosz-trash'></i></td><td>"+selectedValues[i]+"</td><td>"+cena[i]+"</td></tr>");
		$('#ilosc').html(i);
		for (j; j <= i; j++){
			suma += parseInt(cena[j]);
		}			
			if(i>1 ){
				procent = suma  - ((30 * suma ) / 100);
				$('#suma').html(procent.toFixed(2)+" £");
			}
			else
				procent = suma;
			$('#suma').html(procent.toFixed(2)+" £");
			if(i>1 ){
				procent = suma - ((30 * suma) / 100);
				$('#suma').html(procent.toFixed(2)+" £");
			}
			else{
				procent = suma;
				$('#suma').html(procent.toFixed(2)+" £");
			}
		$('#desc').html(selectedValues[i]);
		switch(selectedValues[i]){
			case 'Odzyskiwanie danych IDE/SATA':
				$('#description').load('../txt/odzyskiwanie.txt');
				break;
			case 'Instalacja Windows/Linux & Formatowanie':
				$('#description').load('../txt/format.txt');
				break;
			case 'Konfiguracja urządzeń sieciowych, routerów, drukarek, bezprzewodowych i przewodowych':
				$('#description').load('../txt/konfiguracja_sieci.txt');
				break;
			case 'Zabezpieczanie sieci lokalnej':
				$('#description').load('../txt/zabezpieczenie_sieci.txt');
				break;
			case 'Usuwanie błędów - problemów z komputerem':
				$('#description').load('../txt/errors.txt');
				break;
			case 'Usuwanie wirusów, spyware':
				break;
			case 'Odzyskiwanie haseł do programów/Windows':
				$('#description').load('../txt/hasla.txt');
				break;
			case 'Wymiana złączek RJ45 i RJ11 (Ethernet/Telephone)':
				$('#description').load('../txt/zlaczki.txt');
				break;
			case 'Zwiększanie wydajności komputera':
				$('#description').load('../txt/optymalizacja.txt');
				break;
			case 'Usuwanie problemu z przegrzewającym i wyłączającym się komputerem':
				$('#description').load('../txt/przegrzany_komputer.txt');
				break;
			case 'Dostrzętne usuwanie danych z dysku':
				$('#description').load('../txt/usuwanie_danych.txt');
				break;
		}
	});
	$('#dojazd').change(function() {
		if ($('#dojazd').is(":checked"))
			suma += 20;
		else
			suma -= 20;
		if(i>1 ){
			procent = suma  - ((30 * suma ) / 100);
			$('#suma').html(procent.toFixed(2)+" £");
		}
		else{
			procent = suma;
			$('#suma').html(procent.toFixed(2)+" £");
		}
	});
	
	$('#resetuj').on('click', function(){
		for(i;i>=1;i--){
			j--;
			$('#'+i).remove();
		}
			$('#desc').html('Opis');
			$('#description').html('W celu wykonania zamówienia prosimy o wypełnienie formularza. Prosimy przesyłać screenshots które pomogą nam w bardziej precyzyjny sposób zapewnić Państwu najwyższą jakość usług. Prosimy wypełnić dane w formularzu po lewej, następnie opisać w kilku zdaniach urządzenie/problem, wybrać usługę - wtedy pojawi się opis usług. <b style="color:red;">Cena jest poglądowa ma ona jedynie za zadanie przybliżenie docelowej ceny. Przy więcej niż jednej usłudze 10% rabatu!</b>');
		 	suma = 0;
			$('#suma').html(suma);
			$('#ilosc').html(i);
			selectedValues = new Array;
		$('#dane').removeClass('greenground');
		$('#adres').removeClass('greenground');
		$('#tel').removeClass('greenground');
		$('#em').removeClass('greenground');
		$('#opis').removeClass('greenground');
		$('#usluga').removeClass('greenground');
		$('#dane').removeClass('redground');
		$('#adres').removeClass('redground');
		$('#tel').removeClass('redground');
		$('#em').removeClass('redground');
		$('#opis').removeClass('redground');
		$('#usluga').removeClass('redground');
		$('#uploading').removeClass('uploading');
		$('#uploading').removeClass('error');
		$('#uploading').removeClass('success');
		$('#uploading').html("");
	});
	
	$('#zdjecia').on("change", function(){
		var n=0;		
		var dane1 = $('#dane').val();
		if (!dane1 == ""){
			var ilosc = $("#zdjecia").prop("files").length;
			for( n;n <= ilosc-1; n++){
				var plik = this.files[0];
				var rodzaj = plik.type;
				if(rodzaj == "image/png" || rodzaj == "image/gif" || rodzaj == "image/jpg" || rodzaj == "image/jpeg" ){
					var file_data = $("#zdjecia").prop("files")[n];
					var nazwa_pliku = $("#zdjecia").get(0).files[n].name;
					var form_data = new FormData();                  
					form_data.append("file", file_data);
					form_data.append("dane", dane1);
					$.ajax({
						url: "../php/mailer1.php",
						type: "POST",
						data : form_data,
						processData: false,
						contentType: false,
						beforeSend: function() {
							$('#uploading').removeClass('error');
							$('#uploading').removeClass('uploading');
							$('#uploading').addClass('uploading');
							$('#uploading').html("Uploading...");
						},
						success: function(data){
							$('#uploading').removeClass('uploading');
							$('#uploading').removeClass('error');
							$('#uploading').addClass('success');
							$('#uploading').html("Complete");
						}
					});
				}
				else{
					alert("Incorrect type of file. Please choice only IMAGE Files.");
					$('#uploading').removeClass('uploading');
					$('#uploading').removeClass('success');
					$('#uploading').addClass('error');
					$('#uploading').html("Error!");
				}
			}
		}
		else
			alert("If you want to upload some files, first you must fill First name and Last Name");
		
	})
	$('#slij').on("click", function(){
		var dane, adres, tel, em, opis, model, rodzajpc, rodzajsys, zgoda1, zgoda2, outside = 0;
		var uslugi = "";
		var zdjecia = new Array;
		dane = $('#dane').val().length;
		adres = $('#adres').val().length;
		tel = $('#tel').val().length;
		em = $('#em').val().length;
		opis = $('#opis').val().length;
		if(selectedValues == ''){
			$('#usluga').addClass('redground');
		} 
		else{
			$('#usluga').removeClass('redground');
			$('#usluga').addClass('greenground');
		}
		if( dane < 5 ){
			$('#dane').addClass('redground');
		} 
		else{
			$('#dane').removeClass('redground');
			$('#dane').addClass('greenground');
		}
		if( adres < 5 ){
			$('#adres').addClass('redground');
		} 
		else{
			$('#adres').removeClass('redground');
			$('#adres').addClass('greenground');
		}
		if( tel < 11 ){
			$('#tel').addClass('redground');
		} 
		else{
			$('#tel').removeClass('redground');
			$('#tel').addClass('greenground');
		}
		if( em < 6 ){
			$('#em').addClass('redground');
		} 
		else{
			$('#em').removeClass('redground');
			$('#em').addClass('greenground');
		}
		if( opis < 15 ){
			$('#opis').addClass('redground');
		} 
		else{
			$('#opis').removeClass('redground');
			$('#opis').addClass('greenground');
		}
		dane = $('#dane').val();
		adres = $('#adres').val();
		tel = $('#tel').val();
		em = $('#em').val();
			if($.trim(opis) != "" && $.trim(dane) != "" && $.trim(tel) != "" && $.trim(em) != "" && $.trim(adres) != ""){
				
				//Dane z formularza
				dane = $('#dane').val();
				adres = $('#adres').val();
				tel = $('#tel').val();
				em = $('#em').val();
				model = $('#model').val();
				rodzajpc = $('#komp').val();
				rodzajsys = $('#sys').val();
				if($('#mark').is(":checked") === true)
					zgoda1 = "Tak";
				else
					zgoda1 = "Nie";
				if($('#subskryption').is(":checked") === true)
					zgoda2 = "Tak";
				else
					zgoda2 = "Nie";
				if($('#dojazd').is(":checked") === true)
					outside = "Tak";
				else
					outside = "Nie";
				opis = $('#opis').val();
				for(var k=1; k<= i; k++){
					uslugi += selectedValues[k] + " , ";
				}
////////////////////////////////////////////////////////////////////////////////////////////////
				
				$.post('../php/zamowienie.php', {Dane: dane, Email: em, Telefon: tel, Adres: adres, Model: model, RodzajPC: rodzajpc, RodzajSys: rodzajsys, Opis: opis, Zgoda1: zgoda1, Zgoda2: zgoda2, Outside: outside, Cena: procent.toFixed(2), Uslugi: uslugi}, function(data){
					$.post('../php/mailer.php', {Dane: dane, Email: em, Telefon: tel, Adres: adres, Model: model, RodzajPC: rodzajpc, RodzajSys: rodzajsys, Opis: opis, Zgoda1: zgoda1, Zgoda2: zgoda2, Outside: outside, Cena: procent.toFixed(2), Uslugi: uslugi});
					$('#title').append('Zamowienie: '+rodzajpc+' Model: '+model);
					$('#uslugi-content #uslugi form ul').animate({opacity:"0"}, 300);
					$('#uslugi form ul li textarea').animate({opacity:"0"}, 300);
					$('#uslugi form ul li #usluga').animate({opacity:"0"}, 300);
					$('#uslugi form ul #podliczenie').animate({opacity:"0"}, 300);
					$('#uslugi form ul #op').animate({opacity:"0"}, 300);
					$('#uslugi form ul li input').animate({opacity:"0"}, 300);
					$('#uslugi-content #uslugi form').delay(400).animate({width: "55%", height: "500px"}, 1000);
					var lang = $.cookie('lang');
					if( lang == undefined || lang == 'en'){
						$('#order-complete').append("<span>Thank you for submitting your application!</span>");
						$('#order-complete').append("<br/><br/><i>Within 3 hours the employee will contact you in action.</i>");
					}
					else{
						$('#order-complete').append("<span>Dziękujemy za przesłanie zgłoszenia!</span>");
						$('#order-complete').append("<br/><br/><i>W ciągu 3h nasz pracownik skontakuje się z Państwem w celu uzgodnienia działania.</i>");
					}
					$('#order-complete').append("<div id='order-thanks'></div>");					
					$('#order-complete').delay(400).animate({opacity:"1"},1000);
					$('#order-complete').delay(400).css({ "z-index": "999999"});
					$('#order-complete').delay(2500).animate({opacity:"0"},1000, "linear", function(){
						$('#order-complete span').remove();
						$('#order-complete i').remove();
						$('#order-complete #order-thanks').remove();
					});
			
					$('#uslugi-content #uslugi form').delay(3700).animate({width: "90%", height: "650px"},1000, "linear",function(){
						$('#uslugi-content #uslugi form ul').animate({opacity:"1"}, 300);
						$('#uslugi form ul li textarea').animate({opacity:"1"}, 300);
						$('#uslugi form ul li #usluga').animate({opacity:"1"}, 300);
						$('#uslugi form ul #podliczenie').animate({opacity:"1"}, 300);
						$('#uslugi form ul #op').animate({opacity:"1"}, 300);
						$('#uslugi form ul li input').animate({opacity:"1"}, 300);
						$('#dane').removeClass('greenground');
						$('#adres').removeClass('greenground');
						$('#tel').removeClass('greenground');
						$('#em').removeClass('greenground');
						$('#opis').removeClass('greenground');
						$('#usluga').removeClass('greenground');
						$('#uploading').removeClass('uploading');
						$('#uploading').removeClass('error');
						$('#uploading').removeClass('success');
						$('#uploading').html("");
						for(i;i>=1;i--){
							j--;
							$('#'+i).remove();
						}
						$('#desc').html('Opis');
						$('#description').html('W celu wykonania zamówienia prosimy o wypełnienie formularza. Prosimy przesyłać screenshots które pomogą nam w bardziej precyzyjny sposób zapewnić Państwu najwyższą jakość usług. Prosimy wypełnić dane w formularzu po lewej, następnie opisać w kilku zdaniach urządzenie/problem, wybrać usługę - wtedy pojawi się opis usług. <b style="color:red;">Cena jest poglądowa ma ona jedynie za zadanie przybliżenie docelowej ceny. Przy więcej niż jednej usłudze 10% rabatu!</b>');
						suma = 0;
						$('#suma').html(suma);
						$('#ilosc').html(i);
						selectedValues = new Array;
						document.getElementById("formzamowienie").reset();
						var lang = $.cookie('lang');
						if( lang == undefined || lang == 'en'){
							window.open('../html/szablon.html', '_blank');
						}
						else{
							window.open('../html/szablon-pl.html', '_blank');
						}
					});
				});
			}
			else{
				var lang = $.cookie('lang');
				if( lang == undefined || lang == 'en')
					alert("One of the fields was not filled.");
				else
					alert("Jedno z pół nie zostało wypełnione.");
			}
	});
});