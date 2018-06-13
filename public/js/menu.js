let alpha = "99";
let category = -1;
let nJustMenu = document.getElementById("pZaP")!==null;
let nr = 0;

showCategories();

function showCategories()
{
    if(category!==0)
    {
        let box = document.getElementById("pKat");
        box.innerHTML = "";
        let bt;
        tCat.forEach(function (obj) {
            bt = document.createElement("BUTTON");
            bt.id = 'k' + obj["id"];
            $(bt).html(obj["NazwaKategorii"]);
            $(bt).addClass("cBattonKat");
            $(bt).css('background-color', '#' + obj["KolorKategorii"]);
            $(bt).click(function () {
                showCategoryItems(tCat[getIdNum(this.id)]["id"])
            });
            box.appendChild(bt);
        });
        category = 0;
    }
}

function getIdNum(id)
{
    let result = 0;
    let temp;
    id.split('').forEach(function (obj) {
        if(!isNaN(temp = parseInt(obj)))
            result = result*10+temp;
    });
    return result;
}

function overlap(idNum)
{
    if(document.getElementById('z'+idNum)===null)
    {
        let  btx = document.createElement("BUTTON");
        btx.id = 'zx'+idNum;
        $(btx).html('X');
        $(btx).addClass("X");
        $(btx).css('background-color', '#' + tCat[idNum]["KolorKategorii"]+alpha);
        $(btx).click(function(){closeOverlap(getIdNum(this.id))});
        let  bt = document.createElement("BUTTON");
        bt.id = 'z'+idNum;
        $(bt).html(tCat[idNum]["NazwaKategorii"]);
        $(bt).addClass("cBattonZak");
        $(bt).css('background-color', '#' + tCat[idNum]["KolorKategorii"]+alpha);
        $(bt).click(function(){showCategoryItems(getIdNum(this.id))});
        document.getElementById("nKat").appendChild(btx);
        document.getElementById("nKat").appendChild(bt);
    }
}

function closeOverlap(idNum)
{
    document.getElementById("nKat").removeChild(document.getElementById('zx'+idNum));
    document.getElementById("nKat").removeChild(document.getElementById('z'+idNum));
    if(idNum===category)
        showCategories();
}

function showCategoryItems(idNum)
{
    overlap(idNum);
    let box = document.getElementById("pKat");
    box.innerHTML = "";
    let div1, div2;
    //*
    div1 = document.createElement("DIV");
    $(div1).addClass("cKategoria");
    $(div1).click(function () {showCategories()});
    div2 = document.createElement("DIV");
    $(div2).addClass("cKateg");
    $(div2).css('background-color', 'steelblue');
    $(div2).html('<br>Kategorie');
    div1.appendChild(div2);
    box.appendChild(div1);
    //*/
    tMI.forEach(function (obj)
    {
        if (obj["idK"] === idNum)
        {
            div1 = document.createElement("DIV");
            div1.id = 'ci'+obj["idPM"];
            $(div1).addClass("cKategoria");
            if(nJustMenu)
                $(div1).click(function(){addMenuItem(getIdNum(this.id))});
            div2 = document.createElement("DIV");
            $(div2).addClass("cKateg");
            $(div2).css('background-color', '#' + tCat[idNum]["KolorKategorii"]+alpha);
            $(div2).html(obj["NazwaProduktu"]+'<br/>'+FD(obj["CenaBrutto"])+' zł');
            div1.appendChild(div2);
            div2 = document.createElement("DIV");
            $(div2).addClass("cDivOp");
            $(div2).html(obj["Opis"]);
            div1.appendChild(div2);
            box.appendChild(div1);
        }
    });
    category = idNum;
}

function FD(num)
{
    let sqr = "";
    num = ""+num.toFixed(2);
    if(num.length>6)
        for(let i=num.length-1; i>=0; i--)
        {
            if( i%3===0 && (i+4)<num.length )
                sqr = num.charAt(i)+" "+sqr;
            else sqr = num.charAt(i)+sqr;
        }
    else sqr = num;
    return sqr;
}