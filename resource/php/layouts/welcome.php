<!--
Created by PhpStorm.
User: just
Date: 30.12.15
Time: 11:05
--> 
<section class="clearFix">
    <div>
        <img id="background" src="resource/img/happy-couple.jpg" alt="">
        <a href="#registration"><button class="home-buttons" id="home-button1">Join for free!</button></a>
        <a href="#suggest"><button class="home-buttons" id="home-button2">View our latest profiles</button></a>
    </div>

    <?php
    require_once "registration.php";
    require_once "suggest.php"
    ?>
</section>