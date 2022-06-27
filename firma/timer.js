function odliczanie()
{
				var dzisiaj = new Date();
			
				var dzien = dzisiaj.getDate();
				if (dzien < 10)
					dzien = "0"+dzien
				var miesiac = dzisiaj.getMonth()+1;
				if (miesiac < 10)
					miesiac = "0"+miesiac
				var rok = dzisiaj.getFullYear();
				
				var godzina = dzisiaj.getHours();
				if (godzina < 10)
					godzina = "0"+godzina
				var minuta = dzisiaj.getMinutes();
				if (minuta < 10)
					minuta = "0"+minuta
				var sekunda = dzisiaj.getSeconds();
				if (sekunda < 10)
					sekunda = "0"+sekunda
				var nazwa = dzisiaj.getDay();
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
				document.getElementById("zegar").innerHTML = day+" "+dzien+"/"+miesiac+"/"+rok+" "+godzina+":"+minuta+":"+sekunda;
				setTimeout("odliczanie()",1000);
}
