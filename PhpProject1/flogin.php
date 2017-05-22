<?php
/* User login process, checks if user exists and password is correct */

// Escape email to protect against SQL injections
$id=$_POST['fid'];

$result = $mysqli->query("SELECT * FROM faculty WHERE fid='$id'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "Faculty ID does not exist";
    header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();
    

    if ( password_verify($_POST['password'], $user['PW']) ) {
        
        $_SESSION['fid'] = $user['fid'];
        $_SESSION['fname'] = $user['fname'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
      
       
        header("location: home.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
}

