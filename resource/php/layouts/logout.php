<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 16.03.16
 * Time: 10:38
 */
function logout()
{
    $_SESSION = array(); //destroy all of the session variables
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();
}
logout();
header('Location:/index.php');