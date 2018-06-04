$('#addOrder').attr({'disabled': false}).css('background-color', '#008800').click(function () {addOrder()});
$('#pay').click(function () {pay()});
let mode = "";
let rState = Array("Przekazane do realizacji", "W trakcie realizacji", "Czeka na kelnera", "W drodze", "Zrealizowane");
//setTimeout(function () { location.reload(true); }, 10000);

createOrderTable();

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

function addOrder()
{
    let urpP = (window.location.href).split("/");
    let form = $('<form>').attr({id: 'hiddenF', method: 'post'});
    $('<input>').attr({ type: 'hidden', name: 'addOrder', value: urpP[0]+'//'+urpP[2]+'/'+urpP[3]+'/'+urpP[4] }).appendTo(form);
    $(form).appendTo('body');
    form.submit();
}

function pay()
{
    showConfirm('Płatność', 'Proszę wybrać metodę płatności.','Karta','Gotówka');
    mode = "pay";
}

alert();

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
    $(td).append("&nbsp;&nbsp;");
    $('<button>').attr({'id': 'back', 'onfocus': 'if(this.blur)this.blur()'}).appendTo(td);
    $(tr).appendTo(table);
    $(table).appendTo('#cover');
}

function alertLeftButton()
{
    $('#cover').css('visibility', 'hidden');
    switch(mode)
    {
        case "pay": closeOrder('karta'); break;
        default: console.log("no that mode available: "+ mode);
    }
}

function alertRightButton()
{
    $('#cover').css('visibility', 'hidden');
    switch(mode)
    {
        case "pay": closeOrder('gotówka'); break;
        default: console.log("no that mode available: "+ mode);
    }
}

function closeOrder(payment)
{
    console.log(payment);
    let form = $('<form>').attr({id: 'hiddenF', method: 'post'});
    $('<input>').attr({ type: 'hidden', name: 'payment', value: payment }).appendTo(form);
    $(form).appendTo('body');
    form.submit();
}

function showConfirm(alert_title, alert_text, alert_LB_text, alert_RB_text)
{
    $('#cover').css('visibility', 'visible');
    $('#alertTitle').html(alert_title);
    $('#alertText').html(alert_text);
    $('#alertLB').html(alert_LB_text).click(function () {alertLeftButton()});
    $('#alertRB').html(alert_RB_text).click(function () {alertRightButton()});
    $('#back').html("Powrót").click(function () {$('#cover').css('visibility', 'hidden');});
}