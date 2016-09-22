<?php
/**
 * Gets the URL for the application key.
 *
 * @param string $appKey
 * @return string
 */
function getAppURL($appKey)
{
    $appURLArray = array(
        'blog'        => 'http://blog.lsw.io',
        'forum'       => 'http://forum.lsw.io',
        'team'        => 'http://team.lsw.io',
        'facebook'    => 'https://www.facebook.com/groups/LinuxstattWindows',
        'twitter'     => 'https://twitter.com/lsw_io?lang=de',
        'youtube'     => 'https://www.youtube.com/channel/UCfkO3rbaoKNDoB77TZGcQ0Q',
        'tgSmalltalk' => 'https://telegram.me/joinchat/ACVCYzvIz_HvV6Fc3tYaNA',
        'tgPur'       => 'https://telegram.me/joinchat/BSiaST53Rk5WR21vSJuBlw',
        'tgGaming'    => 'https://telegram.me/joinchat/BLqyGz2nLcY9nKjGVCWpRw'
    );

    if (!isset($appURLArray[$appKey])) {
        return '';
    }

    return $appURLArray[$appKey];
}