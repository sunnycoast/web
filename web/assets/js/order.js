if(order.length>0)
    enableButtons();
else
    disableButtons();

$('#zamStart').click(function () {cancel()});
$('#sub1').click(function () {confirm()});
$('#sub2').click(function () {confirm()});
let mode = "";
createOrderTable();

function createOrderTable()
{
    if(order.length>0)
    {
        $('<h4>').addClass('c').html('Zamówienie przekazane do realizacji:').appendTo('#pZaA');
        let sum , sumAll = 0.0;
        let tr = $('<tr>');
        $('<td>').addClass('c cListNa').html('Nazwa').appendTo(tr);
        $('<td>').addClass('c cListCn').html('Cena' ).appendTo(tr);
        $('<td>').addClass('c cListIl').html('Ilość').appendTo(tr);
        $('<td>').addClass('c cListRz').html('Razem').appendTo(tr);
        let table = $('<table>');
        $(tr).appendTo(table);
        let even = true;
        order.forEach(function (obj)
        {
            let oddEven = (even = !even)?"cListP":"cListN";
            tr = $('<tr>').addClass(oddEven);
            let id = obj["idPM"];
            $('<td>').addClass('cListNa'  ).html(tMI[id]["NazwaProduktu"]).appendTo(tr);
            $('<td>').addClass('cListCn r').html(FD(tMI[id]["CenaBrutto"]) + ' zł').appendTo(tr);
            $('<td>').addClass('cListIl r').html(obj["LiczbaProduktow"]).appendTo(tr);
            sum = obj["LiczbaProduktow"]*tMI[id]["CenaBrutto"];
            sumAll += sum;
            $('<td>').addClass('cListRz r').html(FD(sum) + ' zł').appendTo(tr);
            $(tr).appendTo(table);
        });
        $(table).appendTo('#pZaA');
        let div = $('<div>').attr({'id': 'bT'}).html('Razem: ');
        $('<div>').attr({'id': 'bTotalO'}).html(FD(sumAll) + ' zł').appendTo(div);
        $(div).appendTo('#pZaA');
        $('#pZaP').removeClass('greeting').html("");
        document.getElementById("pZaP").style.marginTop = "0px";
    }
}

function sumAll()
{
    let o = $('#bTotalO');
    let n = $('#bTotal' );
    if((o!==null && o.length>0) && (n!==null && n.length>0))
    {
        let total = parseFloat($(o).html())+parseFloat($(n).html());
        $('#pZaR').html($('<h4>').html('Suma łączna: '+ FD(total) + ' zł'));
    }
    else
        $('#pZaR').html("");
}
function addMenuItem(idNum)
{
    createTable();
    createRow(idNum);
}

function createTable()
{
    if(document.getElementById('tp')===null)
    {
        let box = $('#pZaP');
        $(box).html("").removeClass('greeting');
        document.getElementById("pZaP").style.marginTop = "0px";
        let tr = $('<tr>');
        $('<td>').addClass('c cListNa').html('Nazwa').appendTo(tr);
        $('<td>').addClass('c cListCn').html('Cena' ).appendTo(tr);
        $('<td>').addClass('c cListIl').html('Ilość').appendTo(tr);
        $('<td>').addClass('c cListRz').html('Razem').appendTo(tr);
        $('<td>').addClass('c cListBt')              .appendTo(tr);
        let table = $('<table>').attr({'id': 'tp'});
        $(tr).appendTo(table);
        $(table).appendTo(box);
        let div = $('<div>').attr({'id': 'bT'}).html('Razem: ');
        $('<div>').attr({'id': 'bTotal'}).html('0.00 zł').appendTo(div);
        $(div).appendTo(box);
        enableButtons();
    }
}

function createRow(idNum)
{
    if(document.getElementById('r'+idNum)===null)
    {
        let oddEven = ((nr++) % 2 === 1)?"cListP":"cListN";
        let tr = $('<tr>').attr({'id': 'r'+idNum}).addClass(oddEven);
        $('<td>').addClass('cListNa'  ).html(tMI[idNum]["NazwaProduktu"]).appendTo(tr);
        $('<td>').addClass('cListCn r').html(FD(tMI[idNum]["CenaBrutto"]) + ' zł').appendTo(tr);
        $('<td>').attr({'id': 'qty'+idNum}).addClass('cListIl r').html(1).appendTo(tr);
        $('<td>').attr({'id': 'total'+idNum}).addClass('cListRz r').html(FD(tMI[idNum]["CenaBrutto"]) + ' zł').appendTo(tr);
        let td = $('<td>').addClass('cListBt');

        $('<button>').attr({'id': 'ri'+idNum}).addClass(oddEven+' smButton').html('+')
            .click(function(){rIncrement(getIdNum(this.id))}).appendTo(td);
        $('<button>').attr({'id': 'rd'+idNum}).addClass(oddEven+' smButton').html('-')
            .click(function(){rDecrement(getIdNum(this.id))}).appendTo(td);
        $('<button>').attr({'id': 'rx'+idNum}).addClass(oddEven+' smButton').html('X')
            .click(function(){rDelete   (getIdNum(this.id))}).appendTo(td);

        $(td).appendTo(tr);
        $(tr).appendTo('#tp');

        let bTotal = $("#bTotal");
        let total = parseFloat($(bTotal).html())+tMI[idNum]["CenaBrutto"];
        $(bTotal).html(FD(total) + ' zł');
        sumAll();
    }
    else
        rIncrement(idNum);
}

function rIncrement(idNum)
{
    let q = document.getElementById("qty"+idNum);
    let qty = parseInt(q.textContent)+1;
    $(q).html(qty);
    let t = document.getElementById("total"+idNum);
    $(t).html(FD(tMI[idNum]["CenaBrutto"]*qty) + ' zł');
    let bTotal = document.getElementById("bTotal");
    let total = parseFloat(bTotal.textContent)+tMI[idNum]["CenaBrutto"];
    $(bTotal).html(FD(total) + ' zł');
    sumAll();
}

function rDecrement(idNum)
{
    let q = document.getElementById("qty"+idNum);
    let qty = parseInt(q.textContent)-1;
    if(qty<1)
        rDelete(idNum);
    else
    {
        let bTotal = document.getElementById("bTotal");
        let total = parseFloat(bTotal.textContent)-tMI[idNum]["CenaBrutto"];
        $(bTotal).html(FD(total) + ' zł');
        $(q).html(qty);
        let t = document.getElementById("total" + idNum);
        $(t).html(FD(tMI[idNum]["CenaBrutto"] * qty) + ' zł');
        sumAll();
    }
}

function rDelete(idNum)
{
    let q = document.getElementById("qty"+idNum);
    let qty = parseInt(q.textContent);
    let bTotal = document.getElementById("bTotal");
    let total = parseFloat(bTotal.textContent)-(tMI[idNum]["CenaBrutto"]*qty);
    $(bTotal).html(FD(total) + ' zł');
    if(total <= 0)
    {
        let box = document.getElementById("pZaP");
        if(order.length>0)
        {
            $(box).html('');
        }
        else
        {
            $(box).html('Tutaj będą się pojawiały<br>Twoje zamówienia.');
            $(box).addClass('greeting');
            document.getElementById("pZaP").style.marginTop = "200px";
            disableButtons();
        }
    }
    else
        document.getElementById("tp").removeChild(document.getElementById('r'+idNum));
    sumAll();
}

function enableButtons()
{
    let s = document.getElementById("sub1");
    s.disabled = false;
    $(s).css('background-color', '#008800');
    s = document.getElementById("sub2");
    s.disabled = false;
    $(s).css('background-color', '#008800');
}

function disableButtons()
{
    let s = document.getElementById("sub1");
    s.disabled = true;
    $(s).css('background-color', '#777777');
    s = document.getElementById("sub2");
    s.disabled = true;
    $(s).css('background-color', '#777777');
}

function cancel()
{
    let bt = document.getElementById("bTotal");
    if(order.length===0)
    {
        if ((bt === null || parseFloat(bt.textContent) === 0))
            exit();
        else
        {
            showConfirm('Czy napewno chesz opóścić stronę?', 'Spowoduje to usunięcie Twojego aktualnego zamwienia.', 'Wychodzę', 'Zostaję');
            mode = "exitWithOrder";
        }
    }
    else
    {
        if ((bt === null || parseFloat(bt.textContent) === 0))
            backToSummary();
        else
        {
            showConfirm('Anulować zamówienia?', 'Twoje nowo dodane zamówienie zostanie anulowane i zostaniesz przekierowany do podsumowania?', 'Tak', 'Nie');
            mode = "cancelNewOrder";
        }
    }
}

function backToSummary()
{
    let form = $('<form>').attr({id: 'hiddenF', method: 'post'});
    $('<input>').attr({type: 'hidden', name: 'backToSummary', value: ""}).appendTo(form);
    $(form).appendTo('body');
    form.submit();
}

function exit()
{
    let form = $('<form>').attr({id: 'hiddenF', method: 'post'});
    $('<input>').attr({ type: 'hidden', name: 'clearSession', value: "" }).appendTo(form);
    $(form).appendTo('body');
    form.submit();
}

function confirm()
{
    if($('td[id^="qty"]').length>0)
    {
        showConfirm('Skaładasz zamówienie?', 'Proszę upewnić się czy zamówienie jest poprawne gdyż zatwierdzenie jest złożeniem zamówienia z obowiązkiem zapłaty.', 'Wróć', 'Zatwierdź');
        mode = "confirmOrder";
    }
    else
        confirmed();
}

alert();

function alert()
{
    //change table to div's
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
    $(table).appendTo('#cover');
}

function alertLeftButton()
{
    $('#cover').css('visibility', 'hidden');
    switch(mode)
    {
        case "exitWithOrder": exit(); break;
        case "confirmOrder": console.log(mode+" result: stay"); break;
        case "cancelNewOrder": backToSummary(); break;
        default: console.log("no that mode available: "+ mode);
    }
}

function alertRightButton()
{
    $('#cover').css('visibility', 'hidden');
    switch(mode)
    {
        case "exitWithOrder": console.log(mode+" result: stay"); break;
        case "confirmOrder": confirmed(); break;
        case "cancelNewOrder": console.log(mode+" result: keep"); break;
        default: console.log("no that mode available: "+ mode);
    }
}

function confirmed()
{
    let qtys = $('td[id^="qty"]');
    let id, form = $('<form>').attr({id: 'hiddenF', method: 'post'});
    if(qtys.length>0)
        Array.prototype.forEach.call(qtys, object =>
        {
            id = $(object).attr('id').split('qty');
            $('<input>').attr({type: 'hidden', name: id[1], value: $(object).html()}).appendTo(form);
        });
    else
        $('<input>').attr({type: 'hidden', name: 'backToSummary', value: ""}).appendTo(form);
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
}