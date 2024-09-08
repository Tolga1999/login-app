<form class="login-register-form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <input class="login-register-button" type="submit" name="submit" value="Submit">
</form>

<style>
    .login-register-form {
        display: flex;
        gap: 0.5em;
        flex-direction: column;
        width: 100%;
        min-width: 20em;
    }

    .login-register-button {
        margin-top: 0.5em;
    }
</style>