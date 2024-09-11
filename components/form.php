<form class="login-register-form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter your username" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password" required>

    <input class="login-register-button" type="submit" name="submit" value="Submit">
</form>

<style>
    form{
        background-color: #3D3A50;
        padding: 1.75em 1em;
        border-radius: 0.5em;
    }
    input{
        padding: 0.8em;
        border-radius: 0.5em;
        border: none;
        background-color: #F7F7F7;
    }

    input[type="submit"]{
        background-color: #580EF6;
        color: #F7F7F7;
        font-weight: bold;
    }
    
    input[type="submit"]:hover{
        cursor: pointer;
    }

    .login-register-form {
        display: flex;
        gap: 0.5em;
        flex-direction: column;
        width: 100%;
        min-width: 20em;
    }

    label:nth-of-type(2), .login-register-button{
        margin-top: 1em;
    }
</style>