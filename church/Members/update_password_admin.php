<?php
include('lib/dbcon.php'); 
dbcon(); 
include('session.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_password = $_POST['new_password'];

    // Hash the new password
    $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update the password in the database for the user
    mysqli_query($conn, "UPDATE members SET password = '$hashed_new_password' WHERE id = '$session_id'") or die(mysqli_error());
}
?>
