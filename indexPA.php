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
    <title>Web Encounters</title>
</head>
<body>
    <?php require_once "resource/php/header.php";?>
<main class="clearFix">

    <?php require_once "resource/php/profileMenu.php";?>
    <div id="personalInfo">
        <h3>About Me</h3>
                <?php require_once "resource/php/profileAboutTop.php";?>
    </div>
     <div id="personalInterests">
         <h3>Looking for</h3>
                <?php require_once "resource/php/profileAbout.php";?>
     </div>
</main>
</body>