function nazwij()
{
	var dzien = new Date();
	
	var nazwa = dzien.getDay();
	var day
	switch(nazwa)
	{
		case 0:
			day = "Poniedziałek";
		case 1:
			day = "Wtorek";
		case 2:
			day = "Środa";
		case 3:
			day = "Czwartek";
		case 4:
			day = "Piątek";
		case 5:
			day = "Sobota";
		case 6:
			day = "Niedziela";
	}
	document.getElementById("nazwadnia").innerHTML = day;
}			
	