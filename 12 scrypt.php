<?php
     $connect = mysqli_connect('localhost','root','','baza');
     $query = "SELECT MIN(cena) FROM dania WHERE typ=2";
     $result1 = mysqli_query($connect,$query);
     while($line = mysqli_fetch_row($result1))
     {
        echo $line[0]
     }
     mysqli_close($connect);
?>
<?php
     $connect = mysqli_connect('localhost','root','','baza');
     $query2 = "SELECT id, nazawa, cena FROM dania WHERE typ = 3";
     $result2 = mysqli_query($connect, $query2);
     while($line2 = mysqli_fetch_row($result2))
     {
        echo "<p>".$line2[0]." ".$line2[1]." ".$line2[2]."</p>";
     }
     mysqli_close($connect);
?>
<?php
    $connect = mysqli_connect('localhost','root','','baza');
    $query3 = "SELECT id, nazawa, cena FROM dania WHERE typ = 3";
    $result3 = mysqli_query($query3);
    while($line3 = mysqli_fetch_row($query3))
    {
        echo "<p>".$line2[0]." ".$line2[1]." ".$line2[2]."</p>";
    }
    mysqli_close($connect);


?>