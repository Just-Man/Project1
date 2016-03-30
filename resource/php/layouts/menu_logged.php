<?php
$user = $_SESSION['username'];
$page = "?$user"
?>
<ul id="fullNav" class="buttons">
    <li><a href="profile.php<?= $page ?>"><img src="resource/img/user_icon_small.png"></a></li>
    <li><img src="resource/img/menu_icon_small.png"></li>
    <li><img src="resource/img/heart_small.png"></li>
    <li><img src="resource/img/message_icon_small.png"></li>
    <li><a href="resource/php/layouts/logout.php">logout</a></li>
</ul>
<h2 class="hello">Здравей <?= $_SESSION['username']?></h2>