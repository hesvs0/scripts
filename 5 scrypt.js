Wymagania dotyczące skryptu:

Wykonywany po stronie przeglądarki, po wciśnięciu przycisku „Oblicz”
Pobiera dane z obu pól z panelu prawego (liczbę oraz stan checkboxa)
Oblicza na podstawie pobranych wartości koszt ogłoszenia. Wytyczne dotyczące sposobu obliczenia kosztu znajdują się w tabeli 1
Wyświetla pod przyciskiem tekst: „Koszt ogłoszeń: … PLN", gdzie w miejscu kropek wstawiony jest obliczony koszt ogłoszeń




<script>
    function obliczanie() 
    {
        
        var x = document.getElementById("num").value;
        var sum = ((x*2)-(0.2*2*x));
        var sum2 = ((x*1)-(0.1*1*x));

        if(x>=1 && x<=50 && document.getElementById("check").cheked == false)
        {
            document.getElementById("wynik").innerHTML="Koszt ogłoszeń: "+x*2+" PLN";
        }
        else if( x>=1 && x<=50 && document.getElementById("check").cheked == true)
        {
            document.getElementById("wynik").innerHTML="Koszt ogłoszeń: " +sum+ "PLN";
        }
        else if (x<=51 && document.getElementById("check").cheked == false)
        {
            document.getElementById("wynik").innerHTML="Koszt ogłoszeń: "+x*1+ "PLN";
        }
        else if (x<=51 && document.getElementById("check").cheked == true)
        {
            document.getElementById("wynik").innerHTML="Koszt ogłoszeń"+sum2+ "PLN";
        }
        else
        {
            document.getElementById("wynik").innerHTML = "Wprowadż dane";
        }

    }
</script>

