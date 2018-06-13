$('#submitButton')  .click( function () {submitReservation()} );
$('#backButton')    .click( function () {back()} );
let openingTime         = "10:00";
let closingTime         = "22:00";
let minVisitTime        = "00:30";
let maxVisitTime        = "06:00";
let maxNumberOfPeople   = 12;


function start()
{
    let date = new Date();
    let currentDate = date.getFullYear()+"-"+FI(date.getMonth()+1, 2)+"-"+FI(date.getDate(), 2);
    $('#date').attr({'min': currentDate}).val(currentDate);
    $('#time').attr({'min': openingTime, 'max': closingTime}).val(FI(date.getHours(), 2)+':'+date.getMinutes());
    $('#numberOfPeople').attr({'min': '0', 'max': maxNumberOfPeople}).val('2');
    $('#visitTime').attr({'min': minVisitTime, 'max': maxVisitTime}).val('01:00');
    $('#tableNumber').attr({'min': '0', 'max': '50'}).val('3');

    let sSector = $('#sector');
    for(let k in aSectors)
        sSector.append($('<option>').val(k).text(aSectors[k]));
    sSector.val(1);
}

/** @return {string} */
function FI(num, size)
{
    let sqr = ""+num;
    while(sqr.length < size)
        sqr="0"+num;
    return sqr;
}

function submitReservation()
{
    let newReservation = $('#fNewReservation');
    newReservation.append( $('<input>').attr({'name':'sector', 'value': $('#sector').val(), 'type': 'hidden'}) );
    newReservation.append( $('<input>').attr({'name':'tableNumber', 'value': $('#tableNumber').val(), 'type': 'hidden'}) );
    newReservation.submit();
}

function back()
{
    let urlArray = (window.location.href).split("/");
    let url = urlArray[0]+'/';
    for(let i = 1; i<urlArray.length-1; i++)
        url += '/'+urlArray[i];
    window.location = url;
}

start();