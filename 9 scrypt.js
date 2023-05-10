<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="button" name="123" id="123" onclick="oblicz">
    
</body>
</html>
<script>
    function oblicz() 
    {
      var n = document.getElementById('n').value;
      var r = document.getElementById('r').value;
      var p = document.getElementById('p').value;
      
      if(isNaN(n) || isNaN(r) || isNaN(p) || n === "" || r==="" || p === "")
      {
        alert("wpisz poprawne dane");
      }
      else if (!n == 0 && !r == 0 && p == 0)
      {
        a = parseFloat(n);
        b = parseFloat(r);
        c = parseFloat(p);
        
        so = Math.min(n,r,p);
        document.getElementById('wynik').innerHTML = so;

      }

    }
</script>

