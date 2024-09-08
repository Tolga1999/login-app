<?php
session_start();
include("database.php");
include("components/header.php");
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
        <h1>Login</h1>
        <?php include("components/form.php"); ?>
    </main>
</body>

</html>

<style>
    <?php include("global.css"); ?>
</style>

<?php
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
                echo "Your password is wrong";
            }
        } else {
            echo "Your username is wrong";
        }
    } catch (mysqli_sql_exception) {
        echo "something went wrong";
    }

    // disconnect database connection
    mysqli_close($connection);
}

if (empty($_SESSION)) {
    echo "Session is killed or empty.";
} else {
    echo "Session is active.";
}
?>