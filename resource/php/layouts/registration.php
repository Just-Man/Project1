<?php
require_once 'autoload.php';
$user = new Users();
if (!empty($_POST['registration'])){
    if ($user ->add($_POST)) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: profile.php');
    }
}

?>
<div id="registration">
    <h2>Registration</h2>
    <form action="" method="post" name="registration" id="regForm">
            <span>
                <label for="regUserName">User name</label>
                    <input id="regUserName" type="text" name="username">
                <br>
                <label for="fName">First name</label>
                    <input id="fName" type="text" name="fName">
                <br>

                <label for="lName">Last name</label>
                    <input id="lName" type="text" name="lName">
                <br>
            </span>
            <span>
                <label for="mail">E-mail</label>
                    <input id="mail" type="email" name="mail">
                <br>
                <label for="regPass">Password</label>
                    <input id="regPass" type="password" name="regPass">
                <br>
                <label for="rePass">Repeat password</label>
                    <input id="rePass" type="password" name="rePass">
                <br>
            </span>
        <input id="submit-registration" name="registration" value="Register" type="submit">
    </form>
</div>