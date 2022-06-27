function zamknij(id)
{
        $('#'+id).fadeOut();
}

function otworz(cena, rodzaj)
{
            $("#zamowienie").fadeIn();
			$( "#cena1" ).val( cena );
			$("#rodzaj1").val( rodzaj );
}