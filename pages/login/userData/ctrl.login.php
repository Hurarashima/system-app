<?php
session_start();

require '../../../includes/conn.php';

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check_username = mysqli_query($conn, "SELECT * FROM tbl_users
    LEFT JOIN tbl_roles ON tbl_users.role_id = tbl_roles.roles_id 
    WHERE username = '$username'");
    $result = mysqli_num_rows($check_username);

    if ($result != 0) {
        $row = mysqli_fetch_array($check_username);
        $pass_result = password_verify($password, $row['password']);

        if ($pass_result) {
            $_SESSION['fullname'] = $row['firstname'] . " " . $row['middlename'] . " " . $row['lastname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['email'] = $row['email'];

            header('location: ../../dashboard/index.php');
        } else {
            header('location: ../login.php');
        }
    } else {
        header('location: ../login.php');
    }

}


?>