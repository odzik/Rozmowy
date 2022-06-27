$(document).ready(function() {
	var lang = $.cookie('lang');
	if($.cookie('subskrypcja') != undefined)
		$('#lokalizacja').css("display", "inline-block");
	else
		$('#form-sub').css("display", "inline-block");
		
	
	//Wysylanie formularza
	$("input[name='wyslij1']").on('click', function() {
		var email = $('#email').val().length;
		var telefon = $('#telefon').val().length;
		var personalia = $('#personalia').val().length;
		if(email >= 8 && email <= 40){
			$('#email').css({
				"background-color": "limegreen", 
				"color": "white"
			});
		}
		else{
			$('#email').css({
				"background-color": "orangered", 
				"color": "white"
		});
		}
		if(telefon >= 10 && telefon <= 14){
			$('#telefon').css({
					"background-color": "limegreen", 
					"color": "white"
			});
		}
		else{
			$('#telefon').css({
				"background-color": "orangered", 
				"color": "white"
			});
		}	
		if(personalia >= 3 && personalia <= 20){
			$('#personalia').css({
				"background-color": "limegreen", 
				"color": "white"
			});
		}
		else{
			$('#personalia').css({
				"background-color": "orangered", 
				"color": "white"
			});
		}
		if(personalia >= 3 && personalia <= 20 && telefon >= 10 && telefon <= 14 && email >= 8 && email <= 40){
			var personalia = $('#personalia').val();
			var telefon = $('#telefon').val();
			var email = $('#email').val();
			if($.trim(personalia) != ""){
				$.post('../php/subskrypcja.php', {Imie: personalia, Telefon: telefon, Email: email}, function(data){
					$('#form-sub').fadeOut();
					$('#podziekowania').delay(500).fadeIn();
					$.cookie('subskrypcja', '1', { path: '/' });
					$('#podziekowania').delay(2000).fadeOut();
					$('#lokalizacja').delay(3500).fadeIn();
				});
			}
		}
		else
		{
			if (lang = 'pl')
				alert("Nie wypelnileś jednego z pól.");
			else
				alert("You did not fill one of field.")
		}
				
	});
});