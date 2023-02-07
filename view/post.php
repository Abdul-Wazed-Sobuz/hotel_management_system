<?php
$cookie_name = "Visitor";
$cookie_value = "Ahnaf&Sobuz";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>
</head>

<body>
    <?php include 'navbar.php' ?>

    <br><br><br><br><br><br><br>

    <form method="post" style="margin-Left:350px ;">
        <input type="text" name="userp" placeholder="Your Post">
        <input type="submit" name="postt" value="Post Now">
    </form>
    <?php
    if (isset($_POST['postt'])) {
        $postt = $_POST['userp'];

        session_start();
        $_SESSION['postt'] = $postt;

        header('location: profile.php');
    }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include "Footer.php"; ?>
</body>

</html>