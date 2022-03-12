<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'membership');
define('DB_PORT', '3306');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

// // select
// $result = mysqli_query($conn, "select * from users");
// while($user = mysqli_fetch_assoc($result)) {
//     print_r($user['email']);
// }

// insert
$result = mysqli_query($conn, "INSERT INTO users(`name`, `email`, `password`) VALUES ('Khine Zin Thaw', 'foo@bar.com', '123')");
var_dump($result);