<header>
    <ul>
        <?php
        if (empty($_SESSION)) {
            echo "<li><a href='../login-app/index.php'>Home</a></li>";
        } else {
            echo "<li><a href='../login-app/home.php'>Home</a></li>";
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

    a {
        color: #F7F7F7;
        text-decoration: none;
        padding: 1em;
        transition: 0.25s;
        border-radius: 0.25em;
    }

    a:hover {
        background-color: #4E5E78;
    }

    .logout-form {
        margin: 0;
    }
</style>

<?php
// if logout is clicked destroy session and go back to index.php
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>