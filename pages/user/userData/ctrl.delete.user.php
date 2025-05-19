<?php
require '../../../includes/conn.php';

$id = $_GET['user_id'];

$delete_user = mysqli_query($conn, "DELETE FROM tbl_users WHERE user_id = '$id'");
header("location: ../list.user.php");   

?>