<scrypt>
    function oblicz()
    {
        var p = parceFloat(document.getElementById('p').value);
        var n = parceFloat(document.getElementById('n').value);
        var r = parceFloat(document.getElementById('r').value);

        if(isNaN(p) || isNaN(n) || isNaN(r) || p === '' || n === '' || r === '')
        {
            alert ("wpisz poprawne dane");
        }
        else
        {
            var no = Math.max(p,n,r);
            document.getElementById('h3').innerHTML = no;
        }
    }
</scrypt>