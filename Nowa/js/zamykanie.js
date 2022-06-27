function zamknij(id)
{
	$('#'+id).fadeOut();
}
function otworz1(id)
{
		$('#'+id).fadeIn();
		$('html,body').animate({scrollTop: $("#container-uslugi").offset().top}, 950);
}
function otworz2(id)
{
	$.ajax({
		type: "POST",
		url: "../php/przegladarka.php",
		success: function(g){
			if(g == 'Chrome'){
				$('html,body').animate({scrollTop: $('#'+id).offset().top - 100}, 700);
			}
			else
				$('html,body').animate({scrollTop: $('#'+id).offset().top - 100}, 700);
		}
	});
}

function otworz(cena, rodzaj)
{
	$("#zamowienie").fadeIn();
	$( "#cena1" ).val( cena );
	$("#rodzaj1").val( rodzaj );
}

function check(id, cena, rodzaj)
{	

	if($('.'+id).val($(this).is(':checked')))
	{
		$("#cont-zamowienie").show();
		$(".cena1").html('Cena: '+cena);
		$(".rodzaj1").html('Rodzaj: '+rodzaj);
	}
	else if ($('.'+id).val($(this).is(':unchecked')))
	{
		$("#cont-zamowienie").hide();
		$(".rodzaj1").html("ukryty");
	}
}