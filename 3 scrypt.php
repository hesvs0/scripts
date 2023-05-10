W tabeli 2 podano wybór funkcji PHP do obsługi bazy danych.

Wymagania dotyczące skryptu:

Znajduje się w pliku o nazwie dodajRekord.php, jest połączony z formularzem z pliku formularz
Napisany w języku PHP
Nie jest wymagane sprawdzenie, czy operacja na bazie danych powiodła się
Skrypt łączy się z serwerem bazodanowym na localhost, użytkownik root bez hasła, baza danych o nazwie ogloszenia
Skrypt pobiera dane z formularza
Skrypt wysyła do bazy danych zapytanie wstawiające rekord w tabeli ogloszenie z danymi pobranymi z formularza (zapytanie można wykonać na bazie projektu kwerendy 1, patrz punkt „Operacje na bazie danych", dla uproszczenia pole uzytkownik_id jest równe 1, przyjmujemy, że dane dotyczą ogłoszenia Anny Kowalskiej)
Na końcu działania skrypt zamyka połączenie z serwerem.
Zapytanie 1: wstawiające do tabeli ogloszenia jeden rekord. Klucz główny nadany automatycznie przez bazę danych, pola wypełnione danymi:
 -uzykownik_id = 1; -kategoria = 2; -podkategoria = 0; -tytul = „Celine Dion”, -tresc = „Sprzedam CD piosenkarki”


<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = 'ogloszenia';

$conn = mysqli_connect($servername, $username, $password, $dbname);

$uzytkownik_id = 1;
$kategoria = $_POST['kategoria'];
$podkategoria = $_POST['podkategoria'];
$title = $_POST['title'];
$tresc = $_POST['tresc'];
$query = "INSERT INTO uzytkownik_id, kategoria, podkategoria, tytul VALUES (NULL, 1, $uzytkownik_id, $kategoria, $podkategoria, $title, $tresc)";

if (isset($kategoria) || isset($podkategoria) || isset($title) || isset($tresc)){

    mysqli_query($conn, $query);
    echo "Dane zostały dodane";
}
$mysqli_close($conn);







?>