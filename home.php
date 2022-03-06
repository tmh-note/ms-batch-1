<?php

include './init.php';

if(!isset($_SESSION['auth'])) {
    redirect('login');
}

?>

<h1>Home Page</h1>
<p>Welcome <?php echo $_SESSION['auth']['email'] ?></p>
<a href="http://localhost/ms/logout.php">Logout</a>