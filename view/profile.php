<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>

<body>
    <?php include 'navbar.php' ?>
    <br><br>

    <?php
    if (isset($_SESSION['postt'])) {
        echo "<h3> Post: " . $_SESSION['postt'] . "</h3>";
        echo "<br>";
        echo "Posted by " . $_SESSION['email'];
    }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include "Footer.php"; ?>
</body>

</html>