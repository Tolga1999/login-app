<form class="login-register-form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter your username" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password" required>

    <?php
    if ($_SERVER["PHP_SELF"] === "/login-app/index.php") {
        echo '<input class="login-register-button" type="submit" name="submit" value="Sign in">';
    } else {
        echo '<input class="login-register-button" type="submit" name="submit" value="Register account">';
    }
    ?>
</form>

<style>
    form {
        background-color: #212733;
        padding: 1.75em 1.5em;
        border-radius: 0.5em;
    }

    input {
        padding: 0.8em;
        border-radius: 0.5em;
        border: none;
        background-color: #F7F7F7;
        width: 100%;
    }

    input[type="submit"] {
        font-size: 1em;
        background-color: #580EF6;
        color: #F7F7F7;
    }

    input[type="submit"]:hover {
        cursor: pointer;
    }

    .login-register-form {
        display: flex;
        flex-direction: column;
        gap: 0.5em;
        width: 100%;
    }

    label:nth-of-type(2),
    .login-register-button {
        margin-top: 1em;
    }
</style>