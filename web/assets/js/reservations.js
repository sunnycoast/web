$('#newReservation').click( function () {newReservation()} );
$('#backButton')    .click( function () {back()} );
$('#mainBox').addClass('box, c');
$('#categoryMainBox').addClass('kat');
$('#pKat').addClass('pKat');
//window.onLoadCallback = createReservationsTable();

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

    initClient();
}
function handleClientLoad() {
    gapi.load('client:auth2', initClient);
}
function initClient() {
    gapi.client.init({
        apiKey: "AIzaSyDvjg8wCQr0umr9Ys-rhW_swowUxocMneY",
        clientId: "774147647679-h8eddhds2mgohd2g5i8hvfd53o8eg2as.apps.googleusercontent.com",
        discoveryDocs: ["https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest"],
        scope: "https://www.googleapis.com/auth/calendar.readonly"
    }).then(function () {
        // Listen for sign-in state changes.
        gapi.auth2.getAuthInstance().isSignedIn.listen(updateSigninStatus);

        // Handle the initial sign-in state.
        updateSigninStatus(gapi.auth2.getAuthInstance().isSignedIn.get());
        authorizeButton.onclick = handleAuthClick;
        signoutButton.onclick = handleSignoutClick;
    });
}
function updateSigninStatus(isSignedIn) {
    if (isSignedIn) {
        //authorizeButton.style.display = 'none';
        //signoutButton.style.display = 'block';
        listUpcomingEvents();
    } else {
        //authorizeButton.style.display = 'block';
        //signoutButton.style.display = 'none';
    }
}

/**
 *  Sign in the user upon button click.
 */
function handleAuthClick(event) {
    gapi.auth2.getAuthInstance().signIn();
}

/**
 *  Sign out the user upon button click.
 */
function handleSignoutClick(event) {
    gapi.auth2.getAuthInstance().signOut();
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