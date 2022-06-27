function sciag()
{
	var liczba1 = document.getElementById("pole1").value;
	var liczba2 = document.getElementById("pole2").value;
	var wypisz=" ";
	
	if (isNaN(liczba1))
		document.getElementById("wypiszciag").innerHTML = "Podana przez Ciebie wartość w pierwszym polu nie jest liczbą"
	else if (isNaN(liczba2))
		document.getElementById("wypiszciag").innerHTML = "Podana przez Ciebie wartość w drugim polu nie jest liczbą";
	else if (liczba1 == "")
		document.getElementById("wypiszciag").innerHTML = "Nie podano żadnej liczby w polu pierwszym, proszę wprowadź liczbę";
	else if (liczba2 == "")
		document.getElementById("wypiszciag").innerHTML = "Nie podano żadnej liczby w polu drugim, proszę wprowadź liczbę";
	else if (liczba1 > liczba2)
	{
		for (i=liczba1;i>=liczba2;i--)
		{
			wypisz = wypisz + i + " ";
			
		}
		document.getElementById("wypiszciag").innerHTML = wypisz;
	}	
	else if (liczba1 < liczba2)
	{
		for (i=liczba1;i<=liczba2;i++)
		{
			wypisz = wypisz + i + " ";
			
		}
		document.getElementById("wypiszciag").innerHTML = wypisz;
	}
	else
		document.getElementById("wypiszciag").innerHTML = "Nic nie wpisałeś, proszę podaj dowolną liczbę."
}
