var num = Math.floor(Math.random()*6)+1;

var timer = 0;
function wyswietlSlajd(ktoren) {
	$('#slajder-content li img').fadeTo( "slow" , 0, );
	$('#text-content li').fadeTo( "slow" , 0, );
	$('#Title li').fadeTo( "slow" , 0, );
	num = ktoren;
	$('.'+num).fadeTo( "slow" , 1, ); 
	$('.text'+num).fadeTo( "slow" , 1, ); 
	var jezyk = $.cookie('lang');
	switch(num) {
		case 1:
			if(jezyk == 'pl')
				$('.text'+num).load("../txt/1_pl.txt");
			else
				$('.text'+num).load("../txt/1_en.txt");
			break;
		case 2:
			if(jezyk == 'pl')
				$('.text'+num).load("../txt/2_pl.txt");
			else
				$('.text'+num).load("../txt/2_en.txt");
			break;
		case 3:
			$('.text'+num).load("../txt/odzyskiwanie.txt");
			break;
		case 4:
			$('.text'+num).load("../txt/odzyskiwanie.txt");
			break;
		case 5:
			$('.text'+num).load("../txt/odzyskiwanie.txt");
			break;
		case 6:
			$('.text'+num).load("../txt/odzyskiwanie.txt");
			break;
		default:
			break;					
				}
}

function nastepnySlajd() {
	var ktoryTo = num + 1; 
	if (ktoryTo > 6)
		ktoryTo = 1;
	return ktoryTo;
}

function poprzedniSlajd() {
	var ktoryTo = num - 1; 
	if (ktoryTo < 1)
		ktoryTo = 6;
	return ktoryTo;
}

function zmienSlajdAutomatycznie() {
	wyswietlSlajd(nastepnySlajd());
	slajderowyCzasomierz();
}

function slajderowyCzasomierz() {
	timer = setTimeout(zmienSlajdAutomatycznie, 12000);
}

$(document).ready(function() {
	$("#nawigacja-prawo").on("click", function() {
		clearTimeout(timer);
		wyswietlSlajd(nastepnySlajd());
	});

	$("#nawigacja-lewo").on("click", function() {
		clearTimeout(timer);
		wyswietlSlajd(poprzedniSlajd());
	});
	wyswietlSlajd(num);
	slajderowyCzasomierz();
});