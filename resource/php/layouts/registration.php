<?php
require_once 'autoload.php';
$user = new Users();
if (!empty($_POST['registration'])){
    if ($user ->add($_POST)) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: profile.php?' . $_POST['username']);
    }
}

?>
<div id="registration">
    <h2>Registration</h2>
    <form action="" method="post" name="registration" id="regForm">
            <span>
                <label for="regUserName">User name</label>
                    <input id="regUserName" class="input" type="text" name="username">
                <br>
                <label for="fName">First name</label>
                    <input id="fName" class="input" type="text" name="fName">
                <br>

                <label for="lName">Last name</label>
                    <input id="lName" class="input" type="text" name="lName">
                <br>
            </span>
            <span>
                <label for="mail">E-mail</label>
                    <input id="mail" class="input" type="email" name="mail">
                <br>
                <label for="regPass">Password</label>
                    <input id="regPass" class="input" type="password" name="regPass">
                <br>
                <label for="rePass">Repeat password</label>
                    <input id="rePass" class="input" type="password" name="rePass">
                <br>
            </span>
        <input id="submit-registration" name="registration" value="Register" type="submit">
    </form>
</div>