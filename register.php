<?php
session_start();
include("database.php");
include("components/header.php");

// define resonse message variable
$response_message = "";

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";

    try {
        mysqli_query($connection, $sql);
        $response_message = "registered user to database";
    } catch (mysqli_sql_exception) {
        $response_message = "could not register user";
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
    <title>Document</title>
</head>

<body>
    <main>
        <h1>Register account</h1>
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
        <span class="response-span"> <?php echo $response_message ?> </span>
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