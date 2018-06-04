$('#summary').attr({'disabled': false}).css('background-color', '#008800').click(function () {summary()});
$('#end').click(function () {endO()});

let mode = "";
let rState = Array("Przekazane do realizacji", "W trakcie realizacji", "Czeka na kelnera", "W drodze", "Zrealizowane");
//order["NazwaProduktu", "opis", "CenaBrutto", "StawkaVAT", "LiczbaProduktow", "StanRealizacji"]

createOrderTable();
summaryAlert();
$('#cover').css('visibility', 'hidden');
summaryMessage();

function summaryMessage()
{
    $('#platnosc').html( "Łączna watość rachunku wyniosła "+$('#bTotal').html()+
        ", prosimy przygotować "+((payment==="gotówka")?"gotówkę.":"kartę."));
}

function createOrderTable()
{
    if(document.getElementById('tp')===null)
    {
        let sum , sumAll = 0.0;
        let tr = $('<tr>');
        $('<td>').addClass('c cListNa').html('Nazwa').appendTo(tr);
        $('<td>').addClass('c cListCn').html('Cena' ).appendTo(tr);
        $('<td>').addClass('c cListVa').html('VAT'  ).appendTo(tr);
        $('<td>').addClass('c cListIl').html('Ilość').appendTo(tr);
        $('<td>').addClass('c cListRz').html('Razem').appendTo(tr);
        $('<td>').addClass('c cListSt').html('Stan' ).appendTo(tr);
        $('<td>').addClass('c cListOp').html('Opis' ).appendTo(tr);
        let table = $('<table>').attr({'id': 'tp'});
        $(tr).appendTo(table);
        let even = true;
        order.forEach(function (obj)
        {
            let oddEven = (even = !even)?"cListP":"cListN";
            tr = $('<tr>').addClass(oddEven);
            $('<td>').addClass('cListNa'  ).html(obj["NazwaProduktu"]).appendTo(tr);
            $('<td>').addClass('cListCn r').html(FD(obj["CenaBrutto"]) + ' zł').appendTo(tr);
            $('<td>').addClass('cListVa r').html(obj["StawkaVAT"]+'%').appendTo(tr);
            $('<td>').addClass('cListIl r').html(obj["LiczbaProduktow"]).appendTo(tr);
            sum = obj["LiczbaProduktow"]*obj["CenaBrutto"];
            sumAll += sum;
            $('<td>').addClass('cListRz r').html(FD(sum) + ' zł').appendTo(tr);
            $('<td>').addClass('cListSt'  ).html(rState[obj["StanRealizacji"]]).appendTo(tr);
            $('<td>').addClass('cListOp'  ).html(obj["opis"]).appendTo(tr);
            $(tr).appendTo(table);
        });
        $(table).appendTo('#pKat');
        let div = $('<div>').attr({'id': 'bT'}).html('Razem: ');
        $('<div>').attr({'id': 'bTotal'}).html(FD(sumAll) + ' zł').appendTo(div);
        $(div).appendTo('#pKat');
    }
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

function endO()
{
    alert();
    showConfirm('Czy napewno chesz opóścić stronę?', 'Uwaga do tej stronie nie można powrócić!<br>Zalecamy zatwierdzić dopiero po przyjęciu płatnosci przez kelnera.', 'Wychodzę', 'Zostaję');
    mode = "end";
}


function exit()
{
    let form = $('<form>').attr({id: 'hiddenF', method: 'post'});
    $('<input>').attr({ type: 'hidden', name: 'clearSession', value: "" }).appendTo(form);
    $(form).appendTo('body');
    form.submit();
}

function summary()
{
    mode = "summary";
    summaryAlert();
}

function alert()
{
    let table = $('<table>');
    let tr= $('<tr>');
    $('<td>').attr({'id': 'alertTitle'}).appendTo(tr);
    $(tr).appendTo(table);
    tr= $('<tr>');
    $('<td>').attr({'id': 'alertText'}).appendTo(tr);
    $(tr).appendTo(table);
    tr= $('<tr>');
    let td = $('<td>').attr({'id': 'alertBs'}).appendTo(tr);
    $('<button>').attr({'id': 'alertLB', 'onfocus': 'if(this.blur)this.blur()'}).appendTo(td);
    $(td).append("&nbsp;&nbsp;");
    $('<button>').attr({'id': 'alertRB', 'onfocus': 'if(this.blur)this.blur()'}).appendTo(td);
    $(tr).appendTo(table);
    $('#cover').html("");
    $(table).appendTo('#cover');
}

function summaryAlert()
{
    let TABLE = $('<table>');
    let TR= $('<tr>');
    $('<td>').attr({'id': 'alertTitle'}).html('Podsumowanie').appendTo(TR);
    $(TR).appendTo(TABLE);
    TR= $('<tr>');
    let box = $('<td>').attr({'id': 'alertText'}).appendTo(TR);

    let sum , sumAll = 0.0, sumVat = 0.0;
    let tr = $('<tr>');
    $('<td>').addClass('c cListNa').html('Nazwa').appendTo(tr);
    $('<td>').addClass('c cListCn').html('Cena' ).appendTo(tr);
    $('<td>').addClass('c cListVa').html('VAT'  ).appendTo(tr);
    $('<td>').addClass('c cListIl').html('Ilość').appendTo(tr);
    $('<td>').addClass('c cListRz').html('Razem').appendTo(tr);
    let table = $('<table>').attr({'id': 'tp'});
    $(tr).appendTo(table);
    let even = true;
    order.forEach(function (obj)
    {
        let oddEven = (even = !even)?"cListP":"cListN";
        tr = $('<tr>').addClass(oddEven);
        $('<td>').addClass('cListNa'  ).html(obj["NazwaProduktu"]).appendTo(tr);
        $('<td>').addClass('cListCn r').html(FD(obj["CenaBrutto"]) + ' zł').appendTo(tr);
        $('<td>').addClass('cListVa r').html(obj["StawkaVAT"]+'%').appendTo(tr);
        $('<td>').addClass('cListIl r').html(obj["LiczbaProduktow"]).appendTo(tr);
        sum = obj["LiczbaProduktow"]*obj["CenaBrutto"];
        sumAll += sum;
        sumVat += sum*(obj["StawkaVAT"]*0.01);
        $('<td>').addClass('cListRz r').html(FD(sum) + ' zł').appendTo(tr);
        $(tr).appendTo(table);
    });
    $(table).appendTo(box);
    let div = $('<div>').attr({'id': 'bT'}).addClass('relative').html('Razem: ');
    $('<div>').attr({'id': 'bTotal'}).html(FD(sumAll) + ' zł').addClass('relative').appendTo(div);
    $(div).appendTo(box);
    div = $('<div>').attr({'id': 'vT'}).addClass('relative').html('Vat: ');
    $('<div>').attr({'id': 'vTotal'}).html(FD(sumVat) + ' zł').addClass('relative').appendTo(div);
    $(div).appendTo(box);

    $(TR).appendTo(TABLE);
    TR= $('<tr>');
    let td = $('<td>').attr({'id': 'alertBs'}).appendTo(TR);
    $('<button>').attr({'id': 'alertLB', 'onfocus': 'if(this.blur)this.blur()'})
        .html('Zamknij').click(function () {alertLeftButton()}).appendTo(td);
    $(TR).appendTo(TABLE);
    $('#cover').css('visibility', 'visible').html("");
    $(TABLE).appendTo('#cover');
}

function alertLeftButton()
{
    $('#cover').css('visibility', 'hidden');
    switch(mode)
    {
        case "end": exit(); break;
        case "summary": console.log(mode+" result: close alert"); break;
        default: console.log("no that mode available: "+ mode);
    }
}

function alertRightButton()
{
    $('#cover').css('visibility', 'hidden');
    switch(mode)
    {
        case "end": console.log(mode+" result: stay"); break;
        default: console.log("no that mode available: "+ mode);
    }
}

function showConfirm(alert_title, alert_text, alert_LB_text, alert_RB_text)
{
    $('#cover').css('visibility', 'visible');
    $('#alertTitle').html(alert_title);
    $('#alertText').html(alert_text);
    $('#alertLB').html(alert_LB_text).click(function () {alertLeftButton()});
    $('#alertRB').html(alert_RB_text).click(function () {alertRightButton()});
}