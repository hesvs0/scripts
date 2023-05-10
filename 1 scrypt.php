Skrypt połączenia z bazą danych
W tabeli 2 podano wybór funkcji PHP do obsługi bazy danych.
Wymagania dotyczące skryptu:
Napisany w języku PHP
Nie jest wymagane sprawdzenie, czy operacja na bazie danych powiodła się
Skrypt łączy się z serwerem bazodanowym na localhost, użytkownik root bez hasła, baza danych o nazwie ogloszenia
Skrypt wysyła do bazy danych dwa zapytania:
- zapytanie 1 (patrz punkt „Operacje na bazie danych”) - zapytanie 2 (patrz punkt „Operacje na bazie danych”) zmodyfikowane tak,
 aby dla danego id ogłoszenia pobierany był numer telefonu użytkownika, do którego należy ogłoszenie
Dla każdego zwróconego zapytaniem wiersza wykonuje następujące działania:
- Wyświetla w nagłówku trzeciego stopnia pola id oraz tytul - Wyświetla w akapicie treść ogłoszenia - W kolejnym akapicie wyświetla tekst:
 „telefon kontaktowy:” i dalej numer telefonu pobrany zmodyfikowanym zapytaniem 2
Na końcu działania skrypt zamyka połączenie z serwerem.


<?php

   //połączenie z bazą danych
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "ogloszenia";


   $conn = mysqli_connect($servername, $username, $password, $dbname);

   ////////////

   //zapytania

   $query1 = "SELECT id, tytul, tresc FROM ogloszenia WHERE kategoria = 'ksiazki'";

   $result1 = mysqli_query($conn, $query1);

   $query2 = "SELECT telefon FROM uzytkownik JOIN ogloszenia ON uzytkownik.id = ogloszenia.uzytkownik_id WHERE ogloszenia.id = 1";

   $result2 = mysqli_query($conn,$query2);

   $telefon = mysqli_fetch_assoc($result2)['telefon'];


   //wyświetlania zapytan
   while ($row = mysqli_fetch_assoc($result1)){
    echo "<h3>ID: {$row['id']} - {$row['tytul']}</h3>";
    echo "<p> {$row['tresc']}</p>";
    echo "<p> Telefon kontaktowy {$row['telefon']}";
   }

   mysqli_close($conn);





?>