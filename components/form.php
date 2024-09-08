<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <input type="submit" name="submit" value="Submit">
</form>

<style>
    form {
        display: flex;
        gap: 0.5em;
        flex-direction: column;
        width: 100%;
        min-width: 20em;
    }

    input[type=submit] {
        margin-top: 0.5em;
    }
</style>