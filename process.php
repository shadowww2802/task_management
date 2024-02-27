<?php
session_start();
include("dbconfig.php");

if (isset($_POST["registerButton"])) {

    $user_password = $_POST["user_password"];
    $first_name = $_POST["first_name"];
    $middle_name = isset($_POST["middle_name"]) ? $_POST['middle_name'] : '';
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    $query = "INSERT INTO `users`(email, user_password, first_name, middle_name, last_name) VALUES ('$email', '$user_password', '$first_name', '$middle_name', '$last_name')";
    $query_result = mysqli_query($con, $query);

    if ($query_result === true) {
        header("Location: LogInUI.php");
        exit();
    } else {
        echo "error";
    }

    $con->close();
}
