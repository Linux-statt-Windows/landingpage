function load() {
    if (screen.width <= 699) {
        document.location = "mobile.html";
    }

    var e = document.getElementById('nojs');
    e.parentNode.removeChild(e);

    startTime();
}

function loadPage(site) {
    switch (site){
        case 'blog':
            window.location = "http://blog.lsw.io";
            break;
        case 'forum':
            window.location = "http://forum.lsw.io";
            break;
        case 'team':
            window.location = "http://team.lsw.io";
            break;
        case 'facebook':
            window.location = "https://www.facebook.com/groups/LinuxstattWindows/";
            break;
        case 'twitter':
            window.location = "https://twitter.com/lsw_io?lang=de";
            break;
        case 'youtube':
            window.location = "https://www.youtube.com/channel/UCfkO3rbaoKNDoB77TZGcQ0Q";
            break;
        default:
            break;
    }
}

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
    var t = setTimeout(startTime, 500);
}

function launcher(name) {
    var e = document.getElementsByClassName(name)[0];

    if (e.classList.contains('selected')) {
        e.classList.remove('selected');
        if (name == 'applications') {
            var f = document.getElementById('application_menu');
            var p = document.getElementById('pressMe');
            f.classList.remove('fade-in');
            f.classList.add('fade-out');
            p.classList.remove('fade-out');
            p.classList.add('fade-in');
        }
    } else {
        e.classList.add('selected');
        if (name == 'applications') {
            var f = document.getElementById('application_menu');
            var p = document.getElementById('pressMe');
            f.style.display = 'inline-block';
            f.classList.remove('fade-out');
            f.classList.add('fade-in');
            p.classList.remove('fade-in');
            p.classList.add('fade-out');
        }
    }
}

