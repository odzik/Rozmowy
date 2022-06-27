var numer = 0;
$(window).on('mousewheel', function(e){
	if(e.originalEvent.wheelDelta > 0) {
		numer--;
		if (numer = 0){
			numer = 1
		}
		$('html,body').animate({scrollTop: $("#slajder").offset().top - 100}, 400);
	}
	else {
		numer++;
		if (numer > 2){
			numer = 2
		}
		$('html,body').animate({scrollTop: $("#uslugi-content").offset().top +100}, 400);
	}
});