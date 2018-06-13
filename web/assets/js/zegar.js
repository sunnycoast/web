function zegar()
{
    let data = new Date();
    document.getElementById("zeg").innerHTML = FI(data.getHours(), 2)+":"+FI(data.getMinutes(), 2)+":"+FI(data.getSeconds(), 2)+"<br/>"
        +FI(data.getDate(), 2)+"/"+FI(data.getMonth()+1, 2)+"/"+data.getFullYear();
    setTimeout("zegar()", 1000)
}

/** @return {string} */
function FI(num, size)
{
    let sqr = ""+num;
    while(sqr.length < size)
        sqr="0"+num;
    return sqr;
}