<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>


    <?php include "navbar.php"; ?>
    <br><br><br><br>

    <h1>Welcome <?php echo $_SESSION['email']; ?></h1>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php include "Footer.php"; ?>
</body>

</html>