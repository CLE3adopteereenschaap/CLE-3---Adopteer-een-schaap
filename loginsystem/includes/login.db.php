<?php

session_start();
// check if submit is pressed
if (isset($_POST['submit'])) {
    include 'db.php';
    //making sure symbols are turned into characters
    $uid = mysqli_real_escape_string($connect, $_POST['uid']);
    $pass = mysqli_real_escape_string($connect, $_POST['pass']);

    //error checks
        //check if username and password aren't empty
    if (empty($uid) || empty($pass)) {
        header("Location: ../index.php?login=emptyfield");
        exit();
            //run query in DB
    } else {
        $sql = "SELECT * FROM users WHERE user_uid= '$uid' OR user_email= '$uid'";
        $result = mysqli_query($connect, $sql);
        $resultcheck = mysqli_num_rows($result);
            //check if correct user is selected
        if ($resultcheck < 1) {
            header("Location: ../index.php?login=error");
            exit();
            //make array for data from result
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                //dehash password
                $hashpasswordcheck = password_verify($pass, $row['user_pass']);

                //password check
                if ($hashpasswordcheck == false){
                    header("Location: ../index.php?login=error");
                    exit();

                }   elseif  ($hashpasswordcheck == true) {
                    //log user in
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['user_name'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                        echo "You are logged in";
                }
            }
        }
    }

} else {
    header("Location: ../index.php?login=error");
    exit();
}
if ($hashpasswordcheck == true) {
    header("Location: ../succes.php");
}
?>