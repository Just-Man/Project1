<?php
$main_page = $_SERVER['PHP_SELF'];
$user = array_keys($_GET)[0];
$page = $main_page . "?$user"
?>
<div id="profileNav">
    <ul>
        <li><a class="profileButtons" href="<?= $page ?>&about">About</a></li>
        <li><a class="profileButtons" href="<?= $page ?>&gallery">Gallery</a></li>
        <?php if ($user !== $_SESSION['username']):?>
            <li><a class="profileButtons" href="<?= $page ?>#">Add friend</a></li>
        <?php endif; ?>
        <li><a class="profileButtons" href="<?= $page ?>&message">Massage</a></li>

    </ul>
</div>