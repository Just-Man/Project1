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
    <div id="registration">
        <h2>Registration</h2>
        <form action="" method="post" name="registration" id="regForm">
            <span>
                <label for="regUserName">User name</label>
                    <input id="regUserName" type="text">
                <br>
                <label for="fName">First name</label>
                    <input id="fName" type="text">
                <br>
                <label for="regPass">Password</label>
                    <input id="regPass" type="password">
                <br>
            </span>
            <span>
                <label for="mail">E-mail</label>
                    <input id="mail" type="email">
                <br>
                <label for="lName">Last name</label>
                    <input id="lName" type="text">
                <br>
                <label for="rePass">Repeat password</label>
                    <input id="rePass" type="password">
                <br>
            </span>
            <button id="submit-registration" type="submit">Register</button>
        </form>
    </div>
    <?php require_once "suggest.php"?>
</section>