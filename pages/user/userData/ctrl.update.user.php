<?php
require '../../../includes/conn.php';

$id = $_GET['user_id'];

if (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check_username = mysqli_query($conn, "SELECT * FROM tbl_users WHERE username = '$username' AND user_id NOT IN ('$id')");
    $result_username = mysqli_num_rows($check_username);
    
    $check_email = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '$email' AND user_id NOT IN ('$id')");
    $result_email = mysqli_num_rows($check_email);

    if ($result_username == 0 && $result_email == 0) {
        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

        $update_user = mysqli_query($conn, "UPDATE tbl_users SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', telephone = '$telephone', email = '$email', username = '$username', password = '$hashed_pass' WHERE user_id = '$id'");
        header("location: ../update.user.php?user_id=". $id);

    } else {
        header("location: ../update.user.php?user_id=". $id);
    }

    

}


?>