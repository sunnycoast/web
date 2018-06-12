$('#order')         .click( function () {order()} );
$('#orderOnTime')   .click( function () {orderOnTime()} );
$('#reservations')  .click( function () {reservations()} );
$('#signOut')       .click( function () {exit()} );

function order()
{ window.location = window.location+'/zamowienie'; }

function orderOnTime()
{
    //TODO alert select hour -> go to zamowienie
}

function reservations()
{ window.location = window.location+'/rezerwacje'; }

function exit()
{
    let form = $('<form>').attr({id: 'hiddenF', method: 'post'});
    $('<input>').attr({ type: 'hidden', name: 'clearSession', value: "" }).appendTo(form);
    $(form).appendTo('body');
    form.submit();
}