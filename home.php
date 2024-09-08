<?php 
session_start();
include("components/header.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php 
// if logout is clicked destroy session and go back to index.php
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";
?>