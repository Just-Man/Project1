<?php session_start(); ?>
<!--
 * Created by PhpStorm.
 * User: just
 * Date: 29.12.15
 * Time: 18:35
 -->


<header class="clearFix">
    <img id="logo" src="resource/img/logo-heart.png" alt="Web Encounters">
    <div>
        <h1>Web Encounters</h1>
        <p id="subtitle">The #1 dating site of 2016</p>
    </div>
        <div id="lang" class="buttons">
            <button>Bg</button>
            <button>En</button>
        </div>
        <?php
//        echo 'post';
//        var_dump($_POST);
//        echo 'ses';
//        var_dump($_SESSION);
        if (!$_SESSION) {
            require_once 'resource/php/layouts/login.php';
        } else {
            require_once 'resource/php/layouts/menu_logged.php';
        }
            ?>

</header>