<?php
session_start();
include("database.php");
include("components/header.php");

// define resonse message variable
$response_message = "";

// check if login button is clicked en requet is made
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password key with form values for the session
    $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION["password"] = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $username = $_SESSION["username"];
    $password = $_SESSION["password"];

    // login logic that checks if values correspond with the database values
    try {
        $sql = "SELECT * FROM `users` WHERE user = '$username'";
        $result = mysqli_query($connection, $sql);

        // check if row with username exists
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            // verify password input with hashed password in database
            if (password_verify($password, $hashed_password)) {
                header("Location: home.php");
            } else {
                $response_message = "Your password is wrong";
                // clear session variables
                session_unset();
                session_destroy();
            }
        } else {
            $response_message = "Your username is wrong";
            // clear session variables
            session_unset();
            session_destroy();
        }
    } catch (mysqli_sql_exception) {
        $response_message = "something went wrong";
    }

    // disconnect database connection
    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start of Php native</title>
</head>

<body>
    <main>
        <h1>Sign in</h1>
        <?php include("components/form.php"); ?>

        <span class="session-span">
            <?php
            if (empty($_SESSION)) {
                echo "Session is killed or empty.";
            } else {
                echo "Session is active.";
            }
            ?>
        </span>
        <span class="response-span"> <?php echo $response_message ?></span>
    </main>
</body>

</html>

<style>
    <?php include("global.css"); ?>
    
    .session-span, .response-span{
        text-align: center;
        margin-top: 1em;
    }

    .response-span{
        margin-top: 0.5em;
    }
</style>