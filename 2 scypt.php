W tabeli 2 podano wybór funkcji PHP do obsługi bazy danych.

Wymagania dotyczące skryptu:

Napisany w języku PHP
Nie jest wymagane sprawdzenie, czy operacja na bazie danych powiodła się
Skrypt łączy się z serwerem bazodanowym na localhost, użytkownik root bez hasła, baza danych o nazwie ogloszenia
Skrypt wysyła do bazy danych dwa zapytania:
- zapytanie 1 (patrz punkt „Operacje na bazie danych”) - zapytanie 2 (patrz punkt „Operacje na bazie danych”) zmodyfikowane tak, aby dla danego id użytkownika pobierany był tylko pierwszy tytuł ogłoszenia z jego ogłoszeń
Dla każdego zwróconego zapytaniem wiersza wykonuje działania:
- Wyświetla w nagłówku trzeciego stopnia pola: id imie nazwisko
Wyświetla w akapicie email
- W kolejnym akapicie wyświetla tekst: „Ogłoszenie:” i dalej pierwszy tytuł ogłoszenia pobrany zmodyfikowanym zapytaniem 2
Na końcu działania skrypt zamyka połączenie z serwerem.


<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$bdname = 'ogloszenia';

$conn = mysqli_connect($servername, $username, $password, $bdname);

$query1 = "SELECT id, imie, nazwisko, email FROM uzytkownik WHERE id < 4";

$result1 = mysqli_query($conn,$query1);



while ($row = mysqli_fetch_assoc($result1)){
    echo "<h3>ID:{$row['id']} - Imie:{$row['imie']} - Nazwisko:{$row['nazwisko']}</h3>";
    echo "<p>Email:{$row['email']}</p>";


    $query2 = "SELECT tytul FROM ogloszenia WHERE uzytkownik_id = 1";

    $result2 = mysqli_query($conn, $query2);



    if($row2 = mysqli_fetch_assoc($result2)){
    echo "<p>Ogloszenie:{$row2['tytul']}</p>";
    }else{
        echo "<p>Brak ogloszen</p>";}

    
}


mysqli_close($conn);







?>