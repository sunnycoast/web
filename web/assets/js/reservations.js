$('#order')         .click( function () {newReservation()} );
$('#backButton')    .click( function () {back()} );
$('#mainBox').addClass('box, c');
$('#categoryMainBox').addClass('kat');
$('#pKat').addClass('pKat');
function newReservation()
{ window.location = window.location+'/nowa'; }

function printReservations()
{

}

function back()
{
    let urlArray = (window.location.href).split("/");
    let url = urlArray[0]+'/';
    for(let i = 1; i<urlArray.length-1; i++)
        url += '/'+urlArray[i];
    window.location = url;
}