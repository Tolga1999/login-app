<header>
    <ul>
        <li><a href="../login-app/index.php">Home</a></li>
        <?php
        if (empty($_SESSION)) {
            echo "<li><a href='../login-app/register.php'>Register account</a></li>";
        }
        ?>
        <?php
        if (empty($_SESSION)) {
            echo "<li><a href='../login-app/index.php'>Log in</a></li>";
        } else {
            echo '<form class="logout-form" action="home.php" method="post"> <input class="logout-button" type="submit" name="logout" value="Logout"></form>';
        }
        ?>
    </ul>
</header>

<style>
    header {
        width: 100%;
        max-width: 40em;
        margin-top: 1em;
    }

    ul {
        padding: 0;
        display: flex;
        justify-content: space-around;
        align-items: center;
        list-style-type: none;
        width: 100%;
    }

    a{
        color: #FFFF;
        text-decoration: none;
        padding: 1em;
        transition: 0.25s;
        border-radius: 0.25em;
    }

    a:hover{
        background-color: #3D3A50;
    }

    .logout-form{
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