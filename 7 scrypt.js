<script>
    function oblicz
    {
        var p = document.getElementById('p').value;
        var n = document.getElementById('n').value;
        var r = document.getElementById('r').value;
        var x = (parseInt(p)+parseInt(n)+parseInt(r))/3;

        if(isNaN(x)||isNaN(p || n || r) || p === "" || n === "" || r === "")
        {
            alert("bląd wprowadzenia danych")
        }
        else
        {
            document.getElementById("out").innerHTML = x;
        }
    }
</script>