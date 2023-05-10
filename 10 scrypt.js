<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="button" onclick="oblicz()">
</body>


<script>
    function oblicz()
    {
        var liczba = document.getElementById('box').value;
        var formula = (100 * liczba *(1+0.3));
        var notformula = (liczba * 100);

        if (document.getElementById("check").checked == false)
        {
            document.getElementById("text").innerHTML = "Koszt Twojego wesela to " +notformula+" złotych";
        }
        else
        {
            document.getElementById("text").innerHTML = "Koszt Twojego wesela to "+formula+" złotych"
        }

    }
</script>







</html>