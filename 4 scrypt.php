W tabeli 2 podano wybór funkcji PHP do obsługi bazy danych.

Wymagania dotyczące skryptu:

Znajduje się w pliku o nazwie dodajDane.php, jest połączony z formularzem z pliku rejestracja
Napisany w języku PHP
Nie jest wymagane sprawdzenie, czy operacja na bazie danych powiodła się
Skrypt łączy się z serwerem bazodanowym na localhost, użytkownik root bez hasła, baza danych o nazwie ogloszenia
Skrypt pobiera dane z formularza
Skrypt wysyła do bazy danych zapytanie wstawiające rekord w tabeli uzytkownik z danymi pobranymi z formularza (zapytanie można wykonać na bazie projektu kwerendy 1, patrz punkt „Operacje na bazie danych”)
Na końcu działania skrypt zamyka połączenie z serwerem.

Zapytanie 1: wstawiające do tabeli uzytkownik jeden rekord. Klucz główny nadany automatycznie przez bazę danych, pola wypełnione danymi:
 -imie: Jolanta, -nazwisko: Jasny, -telefon: 600600600, -email: jolanta@poczta.pl


<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ogloszenia';
$conn = mysqli_connect($servername,$username,$password,$dbname);

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];

$query = "INSERT INTO uzytkownik (id, imie, nazwisko, telefon, email) VALUES (NULL,$imie, $nazwisko, $telefon, $email)";

if(isset($imie) || isset($nazwisko) || isset($telefon) || isset($email)){

    mysqli_query($conn, $query);
    echo "Informacja została dodana";
}

mysqli_close($conn);



?>