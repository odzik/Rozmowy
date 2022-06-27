//Imie sprawdz
function sprawdz()
{
    var op = document.getElementById("op").value.length;
    var em = document.getElementById("email").value.length;
    var name = document.getElementById("firstname").value.length;
    var kontakt = document.getElementById("telefon").value.length;
	if (op>20)
		document.getElementById("op").style.backgroundColor="#136600";
	else if (em>3)
		document.getElementById("email").style.backgroundColor="#136600";
	else if (name > 2)
		document.getElementById("firstname").style.backgroundColor="#136600";
	else if (kontakt > 8)
		document.getElementById("telefon").style.backgroundColor="#136600";
    if (op>20 && em >3 && name > 2 && kontakt > 8)
    {
        document.getElementById("wyslij").style.display = "inline-block";
        document.getElementById("info").style.display = "none";
    }
    else
    {
        document.getElementById("wyslij").style.display = "none";
        document.getElementById("info").style.display = "inline-block";
    }
}
function sprawdz1()
{
    var op = document.getElementById("op1").value.length;
    var em = document.getElementById("email1").value.length;
    var name = document.getElementById("firstname1").value.length;
    var kontakt = document.getElementById("telefon1").value.length;
	if (op>20)
		document.getElementById("op1").style.backgroundColor="#136600";
	else if (em>3)
		document.getElementById("email1").style.backgroundColor="#136600";
	else if (name > 2)
		document.getElementById("firstname1").style.backgroundColor="#136600";
	else if (kontakt > 8)
		document.getElementById("telefon1").style.backgroundColor="#136600";
    if (op>20 && em >3 && name > 2 && kontakt > 8)
    {
        document.getElementById("wyslij1").style.display = "inline-block";
        document.getElementById("info-formularza1").style.display = "none";
    }
    else
    {
        document.getElementById("wyslij1").style.display = "none";
        document.getElementById("info-formularza1").style.display = "inline-block";
    }
}
//Imie PL
function imiepl()
{
    var imie = document.getElementById("firstname").value;

    if (imie == 0)
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Nie poprawne imie";
        document.getElementById("firstname").value ="";
    }
    else if(imie>0)
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Nie poprawne imie";
        document.getElementById("firstname").value ="";
    }
    else if(imie<0)
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Nie poprawne imie";
        document.getElementById("firstname").value ="";
    }
    else if(imie="")
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Nie poprawne imie";
        document.getElementById("firstname").value ="";
    }
    else
    {
        document.getElementById("firstname").style.backgroundColor="#136600";
    }
}

//Imie ENG
function imieen()
{
    var imie = document.getElementById("firstname").value;

    if (imie == 0)
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Incorrect First Name. Please try again.";
        document.getElementById("firstname").value ="";
    }
    else if(imie>0)
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Incorrect First Name. Please try again.";
        document.getElementById("firstname").value ="";
    }
    else if(imie<0)
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Incorrect First Name. Please try again.";
        document.getElementById("firstname").value ="";
    }
    else if(imie="")
    {
        document.getElementById("firstname").style.backgroundColor="#f79494";
        document.getElementById("firstname").placeholder ="Incorrect First Name. Please try again.";
        document.getElementById("firstname").value ="";
    }
    else
    {
        document.getElementById("firstname").style.backgroundColor="#136600";
    }
}
//    Numer telefonu PL
function zadzwonpl()
{    
    var telefon = document.getElementById("telefon").value.length;
    if(telefon>8)
    {
        document.getElementById("telefon").style.backgroundColor="#136600"; 
    }
    else if(telefon<9)
    {
        document.getElementById("telefon").style.backgroundColor="#f79494";
        document.getElementById("telefon").placeholder ="Nie poprawny numer telefonu";
        document.getElementById("telefon").value ="";
    }
    else if(telefon="")
    {
        document.getElementById("telefon").style.backgroundColor="#f79494";
        document.getElementById("telefon").placeholder ="Nie poprawny numer telefonu";
        document.getElementById("telefon").value ="";
    }
    else
    {
        document.getElementById("telefon").style.backgroundColor="#f79494";
        document.getElementById("telefon").placeholder ="Nie poprawny numer telefonu";
        document.getElementById("telefon").value ="";
    }
}

//Telefon ENG
function zadzwonen()
{    
    var telefon = document.getElementById("telefon").value.length;
    if(telefon>8)
    {
        document.getElementById("telefon").style.backgroundColor="#136600";
    }
    else if(telefon<9)
    {
        document.getElementById("telefon").style.backgroundColor="#f79494";
        document.getElementById("telefon").placeholder ="Incorrect telefon number. Please try again.";
        document.getElementById("telefon").value ="";
    }
    else if(telefon="")
    {
        document.getElementById("telefon").style.backgroundColor="#f79494";
        document.getElementById("telefon").placeholder ="Incorrect telefon number. Please try again.";
        document.getElementById("telefon").value ="";
    }
    else
    {
        document.getElementById("telefon").style.backgroundColor="#f79494";
        document.getElementById("telefon").placeholder ="Incorrect telefon number. Please try again.";
        document.getElementById("telefon").value ="";
    }
}

function opisbpl()
{    
    var op = document.getElementById("op").value.length;
    if (op == 0)
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
        document.getElementById("op").value ="";

    }
    else if(op>20)
    {
        document.getElementById("op").style.backgroundColor="#136600";
    }
    else if(op<20)
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
        document.getElementById("op").value ="";
    }
    else if(op="")
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
        document.getElementById("op").value ="";
    }
    else
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
        document.getElementById("op").value ="";
        document.getElementById("wyslij").style.display = "none";
    }
}

//Opis ENG
function opisben()
{    
    var op = document.getElementById("op").value.length;
    if (op == 0)
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Not enought informations. Please write more.";
        document.getElementById("op").value ="";
        document.getElementById("wyslij").style.display = "none";

    }
    else if(op>20)
    {
        document.getElementById("op").style.backgroundColor="#136600";
    }
    else if(op<20)
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Not enought informations. Please write more.";
        document.getElementById("op").value ="";
        document.getElementById("wyslij").style.display = "none";
    }
    else if(op="")
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Not enought informations. Please write more.";
        document.getElementById("op").value ="";
        document.getElementById("wyslij").style.display = "none";
    }
    else
    {
        document.getElementById("op").style.backgroundColor="#f79494";
        document.getElementById("op").placeholder ="Not enought informations. Please write more.";
        document.getElementById("op").value ="";
        document.getElementById("wyslij").style.display = "none";
    }
}
function emailen()
{    
    var em = document.getElementById("email").value.length;
    if (em == 0)
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Incorrect E-mail. ";
        document.getElementById("email").value ="";

    }
    else if(em>5)
    {
        document.getElementById("email").style.backgroundColor="#136600";
    }
    else if(em<5)
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Incorrect E-mail. ";
        document.getElementById("email").value ="";
    }
    else if(em="")
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Incorrect E-mail. ";
        document.getElementById("email").value ="";
    }
    else
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Incorrect E-mail. ";
        document.getElementById("email").value ="";
    }
}
function emailpl()
{    
    var em = document.getElementById("email").value.length;
    if (em == 0)
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Nie poprawny adres E-mail.";
        document.getElementById("email").value ="";

    }
    else if(em>5)
    {
        document.getElementById("email").style.backgroundColor="#136600";
    }
    else if(em<5)
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Nie poprawny adres E-mail.";
        document.getElementById("email").value ="";
    }
    else if(em="")
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Nie poprawny adres E-mail.";
        document.getElementById("email").value ="";
    }
    else
    {
        document.getElementById("email").style.backgroundColor="#f79494";
        document.getElementById("email").placeholder ="Nie poprawny adres E-mail.";
        document.getElementById("email").value ="";
    }
}

//formularz zamowien
//Imie PL
function imiepl1()
{
	var imie = document.getElementById("firstname1").value;

	if (imie == 0)
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Nie poprawne imie";
		document.getElementById("firstname1").value ="";
	}
	else if(imie>0)
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Nie poprawne imie";
		document.getElementById("firstname1").value ="";
	}
	else if(imie<0)
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Nie poprawne imie";
		document.getElementById("firstname1").value ="";
	}
	else if(imie="")
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Nie poprawne imie";
		document.getElementById("firstname1").value ="";
	}
	else
	{
		document.getElementById("firstname1").style.backgroundColor="#136600";
	}
}

//Imie ENG
function imieen1()
{
	var imie = document.getElementById("firstname1").value;

	if (imie == 0)
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Incorrect First Name. Please try again.";
		document.getElementById("firstname1").value ="";
	}
	else if(imie>0)
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Incorrect First Name. Please try again.";
		document.getElementById("firstname1").value ="";
	}
	else if(imie<0)
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Incorrect First Name. Please try again.";
		document.getElementById("firstname1").value ="";
	}
	else if(imie="")
	{
		document.getElementById("firstname1").style.backgroundColor="#f79494";
		document.getElementById("firstname1").placeholder ="Incorrect First Name. Please try again.";
		document.getElementById("firstname1").value ="";
	}
	else
	{
		document.getElementById("firstname1").style.backgroundColor="#136600";
	}
}
//    Numer telefonu PL
function zadzwonpl1()
{    
	var telefon = document.getElementById("telefon1").value.length;
	if(telefon>8)
	{
		document.getElementById("telefon1").style.backgroundColor="#136600"; 
	}
	else if(telefon<9)
	{
		document.getElementById("telefon1").style.backgroundColor="#f79494";
		document.getElementById("telefon1").placeholder ="Nie poprawny numer telefonu";
		document.getElementById("telefon1").value ="";
	}
	else if(telefon="")
	{
		document.getElementById("telefon1").style.backgroundColor="#f79494";
		document.getElementById("telefon1").placeholder ="Nie poprawny numer telefonu";
		document.getElementById("telefon1").value ="";
	}
	else
	{
		document.getElementById("telefon1").style.backgroundColor="#f79494";
		document.getElementById("telefon1").placeholder ="Nie poprawny numer telefonu";
		document.getElementById("telefon1").value ="";
	}
}

//Telefon ENG
function zadzwonen1()
{    
	var telefon = document.getElementById("telefon1").value.length;
	if(telefon>8)
	{
		document.getElementById("telefon1").style.backgroundColor="#136600";
	}
	else if(telefon<9)
	{
		document.getElementById("telefon1").style.backgroundColor="#f79494";
		document.getElementById("telefon1").placeholder ="Incorrect telefon number. Please try again.";
		document.getElementById("telefon1").value ="";
	}
	else if(telefon="")
	{
		document.getElementById("telefon1").style.backgroundColor="#f79494";
		document.getElementById("telefon1").placeholder ="Incorrect telefon number. Please try again.";
		document.getElementById("telefon1").value ="";
	}
	else
	{
		document.getElementById("telefon1").style.backgroundColor="#f79494";
		document.getElementById("telefon1").placeholder ="Incorrect telefon number. Please try again.";
		document.getElementById("telefon1").value ="";
	}
}

function opisbpl1()
{    
	var op = document.getElementById("op1").value.length;
	if (op == 0)
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
		document.getElementById("op1").value ="";

	}
	else if(op>20)
	{
		document.getElementById("op1").style.backgroundColor="#136600";
	}
	else if(op<20)
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
		document.getElementById("op1").value ="";
	}
	else if(op="")
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
		document.getElementById("op1").value ="";
	}
	else
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Za mało informacji. Proszę opisz problem dokładniej.";
		document.getElementById("op1").value ="";
		document.getElementById("wyslij1").style.display = "none";
	}
}

//Opis ENG
function opisben1()
{    
	var op = document.getElementById("op1").value.length;
	if (op == 0)
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Not enought informations. Please write more.";
		document.getElementById("op1").value ="";
		document.getElementById("wyslij1").style.display = "none";

	}
	else if(op>20)
	{
		document.getElementById("op1").style.backgroundColor="#136600";
	}
	else if(op<20)
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Not enought informations. Please write more.";
		document.getElementById("op1").value ="";
		document.getElementById("wyslij1").style.display = "none";
	}
	else if(op="")
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Not enought informations. Please write more.";
		document.getElementById("op1").value ="";
	}
	else
	{
		document.getElementById("op1").style.backgroundColor="#f79494";
		document.getElementById("op1").placeholder ="Not enought informations. Please write more.";
		document.getElementById("op1").value ="";
		document.getElementById("wyslij1").style.display = "none";
	}
}
function emailen1()
{    
	var em = document.getElementById("email1").value.length;
	if (em == 0)
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Incorrect E-mail. ";
		document.getElementById("email1").value ="";

	}
	else if(em>5)
	{
		document.getElementById("email1").style.backgroundColor="#136600";
	}
	else if(em<5)
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Incorrect E-mail. ";
		document.getElementById("email1").value ="";
	}
	else if(em="")
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Incorrect E-mail. ";
		document.getElementById("email1").value ="";
	}
	else
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Incorrect E-mail. ";
		document.getElementById("email1").value ="";
	}
}
function emailpl1()
{    
	var em = document.getElementById("email1").value.length;
	if (em == 0)
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Nie poprawny adres E-mail.";
		document.getElementById("email1").value ="";

	}
	else if(em>5)
	{
		document.getElementById("email1").style.backgroundColor="#136600";
	}
	else if(em<5)
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Nie poprawny adres E-mail.";
		document.getElementById("email1").value ="";
	}
	else if(em="")
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Nie poprawny adres E-mail.";
		document.getElementById("email1").value ="";
	}
	else
	{
		document.getElementById("email1").style.backgroundColor="#f79494";
		document.getElementById("email1").placeholder ="Nie poprawny adres E-mail.";
		document.getElementById("email1").value ="";
	}
}