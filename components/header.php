<header>
    <ul>
        <?php
        if (empty($_SESSION)) {
            echo "<li class='logo'><a href='../login-app/index.php'>COMPANY LOGO</a></li>";
        } else {
            echo "<li class='logo'><a href='../login-app/home.php'>COMPANY LOGO</a></li>";
        }
        ?>
        <?php
        if (empty($_SESSION)) {
            echo "<li><a href='../login-app/register.php'>Register account</a></li>";
        } else {
            echo '<form class="logout-form" action="home.php" method="post"> <input class="logout-button" type="submit" name="logout" value="Logout"></form>';
        }
        ?>
    </ul>
</header>

<style>
    @font-face {
        font-family: khand;
        src: url(Khand-Regular.ttf);
    }

    header {
        width: 100%;
        margin-top: 2em;
        padding: 0 2em;
    }

    ul {
        padding: 0;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        list-style-type: none;
        width: 100%;
    }

    .logo a {
        font-family: khand, Arial, Helvetica, sans-serif;
        font-size: 2em;
        transition: 0.5s;
        padding: 0;
        margin-right: 1em;
    }

    .logo a:hover {
        color: #580EF6;
    }

    li:nth-of-type(2) a {
        color: #580EF6;
        font-weight: bold;
    }

    li:nth-of-type(2) a:hover {
        background-color: #580EF6;
        color: #F7F7F7;
        font-weight: bold;
    }

    a {
        color: #F7F7F7;
        text-decoration: none;
        transition: 0.25s;
        border-radius: 0.25em;
    }

    .logout-form {
        margin: 0;
    }

    .logout-button{
        font-size: 1em;
        padding: 0.8em 3em;
        color: #F7F7F7;
        background-color: #580EF6;
        border: none;
        border-radius: 0.5em;
    }

    .logout-button:hover{
        cursor: pointer;
    }

    @media screen and (min-width: 600px){
        a {
            padding: 1em;
        }
    }
</style>

<?php
// if logout is clicked destroy session and go back to index.php
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>