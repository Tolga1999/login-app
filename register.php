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
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Register account</h1>
        <?php include("components/form.php"); ?>
    </main>
</body>

</html>

<style>
    <?php include("global.css"); ?>
</style>

<?php
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";

    try {
        mysqli_query($connection, $sql);
        echo "registered user to database";
    } catch (mysqli_sql_exception) {
        echo "could not register user";
    }

    // disconnect database connection
    mysqli_close($connection);
}
?>