<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$id=$_POST['sid'];

$result = $mysqli->query("SELECT * FROM student WHERE sid='$id'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Student ID does not exist";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    echo $user['PW'];

    if ( password_verify($_POST['password'], $user['PW']) ) {
        
        $_SESSION['sid'] = $user['sid'];
        $_SESSION['sname'] = $user['sname'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: home.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

