<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if($email == 'mgmg@gmail.com' && $password == '123456789') {
        echo "login success";
    } else {
        echo "Email or pasword is incorrect";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form method="POST">
        <input type="email" name="email">
        <br><br>
        <input type="password" name="password">
        <br><br>
        <button type="submit">Login</button>
    </form>

</body>
</html>