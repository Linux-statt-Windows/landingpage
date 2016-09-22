<?php
require_once 'src/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LsW Landingpage</title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style_mobile.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="./assets/image/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <script src="./js/script_mobile.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body onload="load()">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="./index.php">Linux statt Windows</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        </div>
    </div>
</nav>
<div class="container">
    <div class="starter-template">
        <div class="row">
            <div class="col-sm-3">
                <div class="section-title">Webseiten
                    <small style="margin-left: 4px;">⟩</small>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <a target="_blank" href="<?=getAppURL('forum')?>">
                        <img src="./assets/image/forum_pic.png"
                             style='height: 100%; width: 100%; object-fit: contain; border-top-left-radius: 8px; border-top-right-radius: 8px;'>
                    </a>
                    <h2><a target="_blank" href="<?=getAppURL('forum')?>" class="card-title">Forum</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <a target="_blank" href="<?=getAppURL('blog')?>">
                        <img src="./assets/image/blog_pic.png"
                             style='height: 100%; width: 100%; object-fit: contain; border-top-left-radius: 8px; border-top-right-radius: 8px;'>
                    </a>
                    <h2><a target="_blank" href="<?=getAppURL('blog')?>" class="card-title">Blog</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <a target="_blank" href="<?=getAppURL('team')?>">
                        <img src="./assets/image/team_pic.png"
                             style='height: 100%; width: 100%; object-fit: contain; border-top-left-radius: 8px; border-top-right-radius: 8px;'>
                    </a>
                    <h2><a target="_blank" href="<?=getAppURL('team')?>" class="card-title">Team</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="height: 5px;"></div>
                <div class="section-title">Soziale Netzwerke
                    <small style="margin-left: 4px;">⟩</small>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #3b5998;">
                    <h2><a target="_blank" href="<?=getAppURL('facebook')?>" class="card-title"
                           style="color: #fff">Facebook</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #4099FF">
                    <h2><a target="_blank" href="<?=getAppURL('twitter')?>" class="card-title" style="color: #fff">Twitter</a>
                    </h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #e52d27">
                    <h2><a target="_blank" href="<?=getAppURL('youtube')?>" class="card-title" style="color: #fff">Youtube</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div style="height: 5px;"></div>
                <div class="section-title">Telegram Gruppen
                    <small style="margin-left: 4px;">⟩</small>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #179cde">
                    <h2><a target="_blank" href="<?=getAppURL('tgPur')?>" class="card-title" style="color: #fff">Telegram Pur</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #179cde">
                    <h2><a target="_blank" href="<?=getAppURL('tgSmalltalk')?>" class="card-title" style="color: #fff">Telegram Smalltalk</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="background-color: #179cde">
                    <h2><a target="_blank" href="<?=getAppURL('tgGaming')?>" class="card-title" style="color: #fff">Telegram Gaming</a></h2>
                    <div style="height: 1px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="./bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
