<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<header>
    <nav>
        <div class="main-wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
            <div class="nav-login">
               <?php
                if (isset($_SESSION['u_id'])){
                    echo '<form action="includes/logout.php" method="post">
                        <button type="submit" name="submit">Logout</button>
                </form>';
                } else
                    echo '    
                <form action="includes/login.db.php" method="POST">
                    <input type="text" name="uid" alt="email" placeholder="Username/email">
                    <input type="password" name="pass" placeholder="Password">
                    <button type="submit" name="submit">Sign in</button>
                </form>
                <a href="signup.php">Sign up</a>';
                ?>

            </div>
        </div>
    </nav>
</header>