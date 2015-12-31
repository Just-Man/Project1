<!--
Created by PhpStorm.
User: just
Date: 30.12.15
Time: 11:05
--> 
<section class="clearFix">
    <h2>
        Welcome
    </h2>
    <?php require_once "story.php" ?>
    <div id="registration">
        <h2>Registration<img src="resource/img/arrow_down.png"></h2>
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
            <button type="submit">Register</button>
        </form>
    </div>
    <?php require_once "suggest.php"?>
</section>