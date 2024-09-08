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
    <h1>Welcome <?php echo $_SESSION["username"]; ?></h1>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>

<?php 
// redirect to index.php if nobody is logged in
if (empty($_SESSION["username"]) && empty($_SESSION["password"])){
    header("Location: index.php");
}

// if logout is clicked destroy session and go back to index.php
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>