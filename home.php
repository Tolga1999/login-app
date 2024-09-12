<?php
session_start();
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
        <h1>Welcome <?php echo $_SESSION["username"]; ?> to your profile</h1>
        <h2>Would you like to make some changes?</h2>
    </main>
</body>

</html>

<style>
    <?php include("global.css"); ?>
</style>

<?php
// redirect to index.php if nobody is logged in
if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
    header("Location: index.php");
}
?>