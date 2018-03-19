<?php

if (isset($_POST['submit'])){
    include_once 'db.php';

    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $uid = mysqli_real_escape_string($connect, $_POST['uid']);
    $pass = mysqli_real_escape_string($connect, $_POST['pass']);

    // error handlers
        if (empty($name) || empty($email) || empty($uid) || empty($pass)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    }    else {
        //input check for valid chars
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else {
            //email check
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?signup=email");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid= '$uid'";
                $result = mysqli_query($connect, $sql);
                $resultcheck = mysqli_num_rows($result);

                if ($resultcheck > 0) {
                    header("Location: ../signup.php?signup=usertaken");
                    exit();
                } else {
                    //pass hash
                    $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
                    //data into DB
                    $insert = "INSERT INTO users (user_name, user_email, user_uid, user_pass) VALUES ('$name', '$email', '$uid', '$hashedpass');";
                    mysqli_query($connect, $insert);
                    header("Location: ../signup.php?signup=succes");
                    exit();
                }
            }
        }
    }
}
else {
    header("Location: ../signup.php");
    exit();
}