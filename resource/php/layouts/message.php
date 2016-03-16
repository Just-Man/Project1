<!--
Created by PhpStorm.
User: just
Date: 02.01.16
Time: 06:27
-->
<section id="message">
    <div id="history">
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
        <span class="history"></span>
    </div>
    <div id="messages"></div>
    <form action=""><label for="writeMessage">Message:</label>
        <textarea name="newMessage" id="writeMessage" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form>
    <div id="quickView">
        <img src="resource/img/arrow_up.png">
        <div id="quickViewContent">
            <?php require_once "profileAboutTop.php" ?>
        </div>
    </div>
</section>