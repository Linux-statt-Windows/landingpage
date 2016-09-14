function loadPage(site) {
    switch (site) {
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
        case 'tgSmalltalk':
            window.location = "";
            break;
        case 'tgPur':
            window.location = "";
            break;
        default:
            break;
    }
}