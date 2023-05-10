Wymagania dotyczące skryptu:

Wykonywany po stronie przeglądarki, po wciśnięciu przycisku „Oblicz”
Pobiera dane z obu pól z panelu prawego (liczbę oraz stan checkboxa)
Oblicza na podstawie pobranych wartości koszt ogłoszenia. Wytyczne dotyczące sposobu obliczenia kosztu znajdują się w tabeli 1
Wyświetla pod przyciskiem tekst: „Koszt ogłoszeń: … PLN", gdzie w miejscu kropek wstawiony jest obliczony koszt ogłoszeń


<scrypt>
   function obliczanie()
   {
    var x = document.getElementById("num").value;
    var sum = ((x*3)-(0.1*3*x));
    var sum2 = ((x*2)-(0.15*2*x));
}

if (x>=1 && x>=40 && document.getElementById("check").checked == false)
{
    doucument.getElementById("wynik").innerHTML = "Koszt ogłoszeń: " +x*3+"PLN";
}
else if(x>=1 && x>=40 && document.getElementById("check").checked == true)
{
    document.getElementById("wynik").innerHTML = "Koszt ogłoszeń: " +sum+ "PLN";
}
else if (x<=41 && document.getElementById("check").checked == false)
{
    document.getElementById("wynik").innerHTML = "Koszt ogłoszeń: " +x*2+"PLN";
}
else if (x<=41 && document.getElementById("check").checked == true)
{
    document.getElementById("wynik").innerHTML = "Koszt ogloszeń" +sum2+"PLN";
}
else
{
    document.getElementById("wynik").innerHTML = "Podaj liczbe";
}

</scrypt>