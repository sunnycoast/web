$('#newReservation').click( function () {newReservation()} );
$('#backButton')    .click( function () {back()} );
$('#mainBox').addClass('box, c');
$('#categoryMainBox').addClass('kat');
$('#pKat').addClass('pKat');
createReservationsTable();

function newReservation()
{ window.location = window.location+'/nowa'; }
//*
function createReservationsTable()
{
    let tr = $('<tr>');
    $('<td>').addClass('c cListNa').html('Rezerwacja')  .appendTo(tr);
    $('<td>').addClass('c cListCn').html('Data' )       .appendTo(tr);
    $('<td>').addClass('c cListCn').html('Godzina' )    .appendTo(tr);
    $('<td>').addClass('c cListIl').html('Osoby')       .appendTo(tr);
    $('<td>').addClass('c cListRz').html('Stolik')      .appendTo(tr);
    $('<td>').addClass('c cListRz').html('Rachunek')    .appendTo(tr);
    $('<td>').addClass('c cListBt')                     .appendTo(tr);
    let table = $('<table>').attr({'id': 'tp'});
    $(tr).appendTo(table);
    $(table).appendTo($('#pKat'));
    let nr = 0;
    for(let r in aReservations)
        appendReservation(nr++, r, aReservations[r])
}

function appendReservation(nr, reservationID, reservation)
{
    let oddEven = (nr % 2 === 1)?"cListP":"cListN";
    let tr = $('<tr>').attr({'id': 'r'+reservationID}).addClass(oddEven);
    $('<td>').addClass('cListNa').html(reservationID+'')        .appendTo(tr);
    $('<td>').addClass('cListCn').html(reservation["date"])     .appendTo(tr);
    $('<td>').addClass('cListCn').html(reservation["time"])     .appendTo(tr);
    $('<td>').addClass('cListCn').html(reservation["persons"])  .appendTo(tr);
    $('<td>').addClass('cListIl').html(reservation["sector"]
                            +' stolik nr '+reservation["table"]).appendTo(tr);
    $('<td>').addClass('cListIl').html(reservation["bill"])     .appendTo(tr);

    let td = $('<td>').addClass('cListBt');
    let a = $('<a>').addClass('cListBt').attr({'id': 'rHrf'+reservationID}).html('Dodaj do kalendarza')
        .click(function(){calendar(getIdNum(this.id))});
    a.appendTo(tr);
    /*
    $('<button>').attr({'id': 'ri'+idNum}).addClass(oddEven+' smButton').html('+')
        .click(function(){rIncrement(getIdNum(this.id))}).appendTo(td);
    */
    //$(td).appendTo(tr);
    $(tr).appendTo('#tp');
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

function calendar(id)
{
    let clinetID = '289442566333-24jt321jartmei9o38q7e5u4ke2r3jf7.apps.googleusercontent.com';
    let r = aReservations[id];
    console.log("Obiad w Projekt Restauracja"+' '+r["date"]+" "+r["time"]);

    let event = {
        'summary': "Obiad w Projekt Restauracja",
        'location': '800 Howard St., San Francisco, CA 94103',
        'description': "Obiad w Projekt Restauracja",
        'start': {
            'dateTime': r["date"]+'T09:00:00-07:00',
            'timeZone': 'America/Los_Angeles'
        },
        'end': {
            'dateTime': r["date"]+'T17:00:00-07:00',
            'timeZone': 'America/Los_Angeles'
        },
        'attendees': [
            {'email': 'ka3.sledz@gmail.com'},
        ],
        'reminders': {
            'useDefault': false,
            'overrides': [
                {'method': 'email', 'minutes': 24 * 60},
                {'method': 'popup', 'minutes': 10}
            ]
        }
    };

    let request = gapi.client.calendar.events.insert({
        'calendarId': 'primary',
        'resource': event
    });

    request.execute(function(event) {
        appendPre('Event created: ' + event.htmlLink);
    });
}
//*/
function back()
{
    let urlArray = (window.location.href).split("/");
    let url = urlArray[0]+'/';
    for(let i = 1; i<urlArray.length-1; i++)
        url += '/'+urlArray[i];
    window.location = url;
}