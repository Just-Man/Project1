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
//var_dump($_SESSION);
    $pages = array_keys($_GET);
    $user = $pages[0];
    $len = count($pages);
    if ($len > 1) {
        $page = 'resource/php/layouts/'.$pages[1] . '.php';
    }
    if ($user == $_SESSION['username']) {
        if (!$_SESSION['user_about']){
            $page = 'resource/php/layouts/editAbout.php';
        } else {
            $page = 'resource/php/layouts/about.php';
        }
        require_once $page;
    } else {
        require_once $page;
    }
    ?>
</main>
</body>