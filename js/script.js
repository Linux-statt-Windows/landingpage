$(document).ready(function(){
    if (screen.width <= 699) {
        document.location = "mobile.html";
    }

    $('#desktop_panel .draggable').draggable();
    $('#sidebar').sortable();
    startTime();
}).keyup(function(e) {
     if (e.keyCode == 27) {
        launcher('applications');
    }
});

function startTime() {
    var days = ['Son', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var d = days[today.getDay()];

    if (h < 10) {
        h = '0' + h;
    }
    if (m < 10) {
        m = '0' + m;
    }

    var e = document.getElementsByClassName('timedate')[0];
    e.innerHTML = d + ' ' + h + ':' + m;
    setTimeout(startTime, 500);
}

function launcher(name) {
    if (name == 'applications') {
        $('#application_menu').fadeToggle();
        $('#desktop_panel').fadeToggle();
    }
}