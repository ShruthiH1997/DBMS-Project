
    <?php



// Set session variables to be used on profile.php page
$_SESSION['fid'] = $_POST['fid'];


$fid = $mysqli->escape_string($_POST['fid']);
$password = $mysqli->escape_string(password_hash($_POST['password'], PASSWORD_BCRYPT));


$result = $mysqli->query("SELECT * FROM faculty WHERE fid='$fid' and PW='empty'") or die($mysqli->error());


// We know user email exists if the rows returned are more than 0
if ( $result->num_rows == 0 ) {
    echo "reached invalid";
    die;
    $_SESSION['message'] = 'Invalid Parameters!';
    header("location: error.php");
    
}
else { // Email doesn't already exist in a database, proceed...
    // active is 0 by DEFAULT (no need to include it here)

    
    $sql = "UPDATE faculty set PW='$password' WHERE fid='$fid'";
    
    
    // Add user to the database
    if ( $mysqli->query($sql) ){
        
       // $_SESSION['active'] = 0; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        //$_SESSION['message'] =
                
                 //"Confirmation link has been sent to $email, please verify
                 //your account by clicking on the link in the message!";

        /*Send registration confirmation link (verify.php)
        $to      = $email;
        $subject = 'Account Verification ( clevertechie.com )';
        $message_body = '
        Hello '.$first_name.',

        Thank you for signing up!

        Please click this link to activate your account:

        http://localhost/login-system/verify.php?email='.$email.'&hash='.$hash;  

        mail( $to, $subject, $message_body );

        header("location: profile.php"); 
*/
    }

    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }

}