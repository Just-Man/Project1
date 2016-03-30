<?php
require_once 'config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="resource/css/stylesheet.css" rel='stylesheet' type='text/css'>
    <link href="resource/css/reset.css" rel='stylesheet' type='text/css'>
    <link rel="icon" href="resource/img/favicon.ico" type="image/x-icon" />
    <link href="resource/css/font-awesome.min.css">
    <title>Web Encounters</title>
</head>
<body>
    <?php require_once "resource/php/layouts/header.php";?>
    <main class="clearFix">
        <?php
        if ($_SESSION){
            require_once "resource/php/layouts/logged.php";
            require_once "resource/php/layouts/stories.php";
        } else {
            require_once "resource/php/layouts/welcome.php";
        }
        ?>
    </main>
</body>
