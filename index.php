<?php
session_start();
include("database.php");
mysqli_close($connection);
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
    <a href="register.php">Register account</a>
</body>

</html>

<style>
    <?php include("global.css"); ?>
</style>

<?php
// check if login button is clicked en requet is made
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // hashing the password input for login
    $hashPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // username and password key with form values for the session
    $_SESSION["username"] = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION["password"] = $hashPassword;

    // echo "Welcome " . $_SESSION["username"] . ", your password is " . $_SESSION["password"];

    header("Location: home.php");
}

if (empty($_SESSION)) {
    echo "Session is killed or empty.";
} else {
    echo "Session is active.";
}

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     echo "hello";
// }
?>