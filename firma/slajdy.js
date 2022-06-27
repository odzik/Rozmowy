var numer = Math.floor(Math.random()*7)+1;
var timer1 = 0;
var timer2 = 0;

function ustawzdjecie(numerzdj)
{
	clearTimeout(timer1);
	clearTimeout(timer2);
	numer = numerzdj - 1;
	
	schowaj();
	setTimeout("zmienslajd()", 500);
}	

function schowaj()
{
    $("#cialo").fadeOut(500);
}

function zmienslajd()
{
				numer++; 
				
				if (numer>7) 
					numer=1;

                document.getElementById("cialo").style.backgroundImage = "url('slajdy/slajd"+numer+".png')";
    document.getElementById("cialo").style.backgroundSize = "100%";
    document.getElementById("cialo").style.backgroundRepeat = "no-repeat";
    document.getElementById("cialo").style.position = "static";
    $("#cialo").fadeIn(500);
				
	
				timer1 = setTimeout("zmienslajd()", 5000);
				timer2 = setTimeout("schowaj()", 4500);
}