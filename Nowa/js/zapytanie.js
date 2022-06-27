function zmiana(id, ilosc){
	var ciag = $("#"+id).val().length;
	if(ciag >= ilosc){
		$("#"+id).removeClass('blad');
		$("#"+id).addClass('sprawdzone');
	}
	else{
		$("#"+id).removeClass('sprawdzone');
		$("#"+id).addClass('blad');
		alert("Please fill this field again.");
	}
}

function zapytanie(){
	
	var imie 		= $("#imie").val();
	var nazwisko 	= $("#nazwisko").val();
	var ema 		= $("#ema").val();
	var tele 		= $("#tele").val();
	var tresc 		= $("#tresc").val();
	if( $.trim(imie).length >= 3 && $.trim(nazwisko).length >= 3 && $.trim(ema).length >= 5 && $.trim(tele).length >= 10 && $.trim(tresc).length >= 15 ){
		
		$.post('../php/zapytanie.php', {Imie: imie, Nazwisko: nazwisko, Email: ema, Telefon: tele, Tresc: tresc});
		
		var lang = $.cookie('lang');
		if( lang == undefined || lang == 'en'){
			window.open('../html/szablon.html', '_blank');
		}
		else{
			window.open('../html/szablon-pl.html', '_blank');
		}
		$("#form-kontakt ul li input").removeClass('sprawdzone');
		$("#form-kontakt ul li input").removeClass('blad');
		$("#form-kontakt ul li textarea").removeClass('sprawdzone');
		$("#form-kontakt ul li textarea").removeClass('blad');
		document.getElementById("form-kontakt").reset();
	}
	else{
		
		alert( "One of the fields is not filled." );
		
	}
	
}

$(document).ready(function(){
	$("#imie").on("change", function(){
		zmiana('imie', 3);
	});
	$("#nazwisko").change( function(){
		zmiana('nazwisko', 3);
	});
	$("#ema").change( function(){
		zmiana('ema', 5);
	});
	$("#tele").change( function(){
		zmiana('tele', 10);
	});
	$("#tresc").change( function(){
		zmiana('tresc', 15);
	});
	$("#resetnij").on("click", function(){
		$("#form-kontakt ul li input").removeClass('sprawdzone');
		$("#form-kontakt ul li input").removeClass('blad');
		$("#form-kontakt ul li textarea").removeClass('sprawdzone');
		$("#form-kontakt ul li textarea").removeClass('blad');
	});
	$("#zgloszenie").on("click", function(){
		zapytanie();
	});
});
