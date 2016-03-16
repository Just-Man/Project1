<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 16.03.16
 * Time: 07:11
 */
require_once 'autoload.php';
$user = new Users();
//var_dump(isset($_POST['login']));
if (!empty($_POST['login'])){
    $result = $user ->select($_POST);
//    var_dump($result, $_POST['pass'], $result->user_pass);
    if (!$result) {
        echo 'Няма открит потребител';
    } else if ($result->user_pass !== $_POST['pass']) {
        echo 'Грешна парола';
    } else {
        $_SESSION['username'] = $_POST['username'];
        header('Location: index.php');
    }
}
?>
<form action="" method="post" id="login" class="buttons">
            <span>
            <input id="username" type="text" name="username" placeholder="Username">
            </span>
            <span>
             <input id="pass" type="password" name="pass" placeholder="Password">
            </span>
            <span><input name="login" type="submit" value="Sing in"></span>
</form>
