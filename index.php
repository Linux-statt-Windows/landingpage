<?php
require_once 'src/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LsW - Linux statt Windows</title>
    <link rel="stylesheet" href="./assets/font/ionicons.min.css">
    <link rel="stylesheet" href="./css/style.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/image/favicon.ico">

    <script src="./js/jquery-3.1.0.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script src="./js/script.js"></script>
</head>
<body>
    <noscript id="nojs">
        <h2>Kein JavaScript?</h2>
        Bitte aktiviere JavaScript, um diese Seite korrekt darzustellen.
    </noscript>
    <div id="topbar">
        <div class="applications clickable" onclick="launcher('applications')"><span>Aktivitäten</span></div>
        <div class="timedate"><span>Mon 00:00</span></div>
        <div class="controls">
            <ul>
                <li class="wireless"><i class="ion ion-wifi"></i></li>
                <li class="audio"><i class="ion ion-volume-high"></i></li>
                <li class="power"><i class="ion ion-power"></i></li>
            </ul>
        </div>
    </div>
    <div id="currentapp_dialogue" class="dialogue">
        <ul class="vert_menu">
            <li><span>Quit</span></li>
        </ul>
    </div>
    <div id="timedate_dialogue" class="dialogue">
        <div class="leftpane">
            <div class="calendar"><span class="date">Montag Januar 01, 2000</span>
                <div class="monthpicker"><span class="icon">Vorheriger</span><span class="month">Januar</span><span
                        class="icon">Nächster</span></div>
                <table>
                    <tr>
                        <th>Sonntag</th>
                        <th>Montag</th>
                        <th>Dienstag</th>
                        <th>Mittwoch</th>
                        <th>Donnerstag</th>
                        <th>Freitag</th>
                        <th>Samstag</th>
                    </tr>
                </table>
            </div>
            <hr/>
            <ul class="vert_menu">
                <li><span>Uhr öffnen</span></li>
                <li><span>Datums & Uhr Einstellungen</span></li>
            </ul>
        </div>
        <div class="rightpane">
            <div class="events">
                <ul>
                    <li><span>Heute</span>
                        <ul>
                            <li>Alles</li>
                            <li class="detail">Nichts steht an</li>
                        </ul>
                    </li>
                    <li><span>Morgen</span>
                        <ul>
                            <li>Alles</li>
                            <li class="detail">Nichts steht an</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="controls_dialogue" class="dialogue">
        <ul class="vert_menu">
            <li class="slider_entry volume"><span class="icon">brightness</span>
                <input type="range" min="0" max="100" value="65"/>
            </li>
            <li class="slider_entry brightness"><span class="icon">volume</span>
                <input type="range" min="0" max="100" value="100"/>
            </li>
        </ul>
        <hr/>
        <ul class="vert_menu">
            <li class="dropdown_parent wireless">
                <span class="icontext">Wi-Fi</span>
                <span class="detail">Nicht verbunden</span>
                <ul class="dropdown_child">
                    <li><span>Netzwerk wählen</span></li>
                    <li><span>Ausschalten</span></li>
                    <li><span>Wi-Fi Einstellungen</span></li>
                </ul>
            </li>
            <li>
            </li>
            <li class="dropdown_parent battery">
                <span class="icontext">power</span>
                <span class="detail">Voll geladen</span>
                <ul class="dropdown_child">
                    <li><span>Energieeinstellungen</span></li>
                </ul>
            </li>
        </ul>
        <hr/>
        <ul class="circles_menu">
            <li class="settings"><span class="icon">Settings</span></li>
            <li class="lock"><span class="icon">Lock</span></li>
            <li class="power"><span class="icon">Power</span></li>
        </ul>
    </div>
    <div id="desktop_panel">
        <div id="press_me"><i class="ion ion-arrow-up-a"></i> Drück mich! :)</div>
        <div class="clear"></div>
        <div id="welcome_message" class="draggable">
            <h1>
                Willkommen bei LsW - Linux statt Windows
            </h1>
            <h3>
                Um mehr über unsere Community zu erfahren klicke auf Aktivitäten
            </h3>
        </div>
    </div>
    <div id="application_menu">
        <div id="sidebar">
            <div class="app_icon">1</div>
            <div class="app_icon">2</div>
            <div class="app_icon">3</div>
            <div class="app_icon">4</div>
        </div>
        <center>
            <div class="apps">
                <div class="app">
                    <div class="content clickable">
                        <a target="_blank" href="<?=getAppURL('blog')?>">
                            <img src="./assets/image/blog_pic.png" />
                        </a>
                    </div>
                    <div class="description">Blog</div>
                </div>
                <div class="app">
                    <div class="content clickable">
                        <a target="_blank" href="<?=getAppURL('forum')?>">
                            <img src="./assets/image/forum_pic.png" />
                        </a>
                    </div>
                    <div class="description">Forum</div>
                </div>
                <div class="app">
                    <div class="content" id="socialNetworking">
                        <a class="button" id="facebook" target="_blank" href="<?=getAppURL('facebook')?>">Facebook</a>
                        <a class="button" id="twitter" target="_blank" href="<?=getAppURL('twitter')?>">Twitter</a>
                        <a class="button" id="youtube" target="_blank" href="<?=getAppURL('youtube')?>">Youtube</a>
                    </div>
                    <div class="description">Social Media</div>
                </div>
                <div class="app">
                    <div class="content" id="telegram">
                        <a class="button"
                           id="telegramSmalltalk"
                           target="_blank"
                           href="<?=getAppURL('tgSmalltalk')?>">Smalltalk</a>
                        <a class="button"
                           id="telegramPur"
                           target="_blank" href="<?=getAppURL('tgPur')?>">Pur</a>
                        <a class="button" id="telegramGaming" target="_blank" href="<?=getAppURL('tgGaming')?>">Gaming</a>
                    </div>
                    <div class="description">Telegram Links</div>
                </div>
                <div class="app">
                    <div class="content clickable">
                        <a target="_blank" href="<?=getAppURL('team')?>">
                            <img src="./assets/image/team_pic.png" />
                        </a>
                    </div>
                    <div class="description">Übersicht unseres Teams</div>
                </div>
                <div class="app">
                    <div class="content" id="news">
                        Wir haben ein neues Forum und so einiges anderes Schönes! Schaut mal rein :)
                    </div>
                    <div class="description">Aktuelles</div>
                </div>
            </div>
        </center>
    </div>
</body>
</html>
