<!--
Created by PhpStorm.
User: just
Date: 02.01.16
Time: 06:47
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href="resource/css/stylesheet.css" rel='stylesheet' type='text/css'>
    <link href="resource/css/reset.css" rel='stylesheet' type='text/css'>
    <link href="resource/css/font-awesome.min.css">
    <title>Web Encounters</title>
</head>
<body>
    <?php
    require_once "resource/php/layouts/header.php";?>
<main class="clearFix">

    <?php
    require_once "resource/php/layouts/profileMenu.php";
    if ($_SERVER['QUERY_STRING']) {
        $page = $_SERVER['QUERY_STRING'];
        $path = 'resource/php/layouts/' . $page . '.php';
        require_once $path;
    } else {
        require_once 'resource/php/layouts/about.php';
    }
    require_once 'autoload.php';
    $user = new Users();
    ?>
</main>
</body>