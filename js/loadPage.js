function loadPage(site) {
    switch (site) {
        case 'blog':
            window.location = "https://blog.lsw.io";
            break;
        case 'forum':
            window.location = "https://forum.lsw.io";
            break;
        case 'team':
            window.location = "https://team.lsw.io";
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
            window.location = "https://telegram.me/joinchat/ACVCYzvIz_HvV6Fc3tYaNA";
            break;
        case 'tgPur':
            window.location = "https://telegram.me/joinchat/BSiaST53Rk5WR21vSJuBlw";
            break;
        case 'tgGaming':
            window.location = "https://telegram.me/joinchat/BLqyGz2nLcY9nKjGVCWpRw";
            break;
        default:
            break;
    }
}