<?php
include 'connect.php';

if(isset($_POST['updatePassword'])){
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $new_password = md5($new_password); // Hash the new password (you should use a stronger hashing algorithm)

    // Update password in the database
    $sql = "UPDATE users SET password='$new_password' WHERE email='$email'";
    if($conn->query($sql) === TRUE){
        echo "Password updated successfully!";
    } else {
        echo "Error updating password: " . $conn->error;
    }
}
?>
