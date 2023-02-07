<?php
    session_start();
    header('location:Login.php');

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'project');

    $name = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $s = "select * from information where username='$name'  &&  email = '$email' && password = '$pass'";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "User Name already taken";
    } else {
        $reg = "insert into information(username,email,password) values('$name','$email','$pass')";
        mysqli_query($con, $reg);
        echo "Registration Successful";
    }
