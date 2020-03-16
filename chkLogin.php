<?php
include "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from admin where email='$email'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($row['password'] == $password) {
        session_start();
        $_SESSION['admin'] = $email;
        header("Location:adminHome.php");
    } else {
        header("Location:adminLogin.php?er=1");
    }
} else {
    header("Location:adminLogin.php?er=2");
}