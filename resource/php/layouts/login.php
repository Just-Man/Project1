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
    $_POST['table'] = 'users';
    $_POST['where'] = 'username';
    $_POST['has'] = $_POST['username'];
    $result = $user ->select($_POST,1);
//    var_dump($result);
//    die;
//
    if (!$result) {
        echo 'Няма открит потребител';
    } else if ($result->user_pass !== md5($_POST['pass'])) {
        echo 'Грешна парола';
    } else {
//        $_SESSION['user'] = $result;
        foreach ($result as $k => $v) {
            if ($k !== 'user_pass'){
                $_SESSION[$k] = $v;
            }
            if ($k === 'user_about') {
                $_SESSION[$k] = 0;
            }
        }
        header('Location: index.php');
    }
}
?>
<form action="" method="post" id="login" class="buttons">
            <span>
            <input id="username" class="input" type="text" name="username" placeholder="Username">
            </span>
            <span>
             <input id="pass" class="input" type="password" name="pass" placeholder="Password">
            </span>
            <span><input name="login" class="input" type="submit" value="Sing in"></span>
</form>
