function oblicz()
{
    var km = document.getElementById('km').value;
    var formula = (km*2);

    if (document.getElementById("check").checked == true)
    {
        document.getElementById('wynik').innerHTML = "Dowóz będzie Cię kosztował "+formula+ " złotych";
    }
    else
    {
        document.getElementById('wynik').innerHTML = "Dowieziemy Twoją pizzę za darmo";
    }
}