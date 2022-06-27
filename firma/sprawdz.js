function sprawdz()
{
	var wartosc = document.getElementById("pole").value;
	if (wartosc<0)
		document.getElementById("sprawdzenie").innerHTML = "Liczba jest ujemna";
	else if (wartosc>0)
		document.getElementById("sprawdzenie").innerHTML = "Liczba jest dodatnia";
	else if (wartosc=="0")
		document.getElementById("sprawdzenie").innerHTML = "Liczba jest równa zero";
	else 
		document.getElementById("sprawdzenie").innerHTML = "Podana przez Ciebie wartość nie jest liczbą";
	
}