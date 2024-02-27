<?php
session_start();
include("dbconfig.php");

if (isset($_POST["loginButton"])) {

    $email = $_POST['email'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT email, user_password FROM users where email = '$email' and user_password = 'user_password' LIMIT 1";
    $sql_run = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($sql_run);
    $email = $row["email"];
    $user_password = $row["user_password"];

    header("Location: RegistrationUI.php");
} 
