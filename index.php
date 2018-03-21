<?php
session_start();
require_once 'database.php';

if (isset($_POST['submit'])) {
    //turning symbols into characters
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);

    //check if form isn't empty
    if (empty($name) || empty($pwd)) {
        header("Location: ../index.php?login=emptyfield");
        exit();
    } else {
        //run query
        $sql = "SELECT * FROM ass WHERE name = '$name'";
        $result = mysqli_query($db, $sql);
        $resultcheck = mysqli_num_rows($result);
        //check if correct user is selected
        if ($resultcheck < 1) {
            header("Location: ../index.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                    //log user in
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['points'] = $row['points'];
                    echo "You are logged in";
                 }
            }
        }
    }
//}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form method="post" action="">
    <input type="text" name="name" required><br>
    <input type="password" name="pwd" required><br>
    <button type="submit" name="submit">Inloggen!</button>
</form>

</body>
</html>