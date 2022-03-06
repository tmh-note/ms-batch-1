<?php

include './init.php';

if(isset($_SESSION['auth'])) {
    redirect('home');
}

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!$email) {
        $errors['email'] = 'Email is required.';
    } else if(!$password) {
        $errors['password'] = 'Password is required.';
    } else if($email == 'mgmg@gmail.com' && $password == 'password') {
        $_SESSION['auth'] = [
            'email' => $email,
            'password' => $password,
        ];
        redirect('home');
    } else {
        echo "Email or password is incorrect";
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
        <!-- <label for="email">Email</label> -->
        <input type="email" id="email" name="email" placeholder="Enter Email">
        <?php if(isset($errors['email'])): ?>
            <br>
            <span><?php echo $errors['email'] ?></span>
        <?php endif; ?>
       
        <br><br>
        <!-- <label for="password">Password</label> -->
        <input type="password" id="password" name="password" placeholder="Enter Password">
        <?php if(isset($errors['password'])): ?>
            <br>
            <span><?php echo $errors['password'] ?></span>
        <?php endif; ?>
        <br><br>
        <button type="submit">Login</button>
    </form>

</body>
</html>