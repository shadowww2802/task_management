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
}

elseif (isset($_POST["loginButton"])) {

    $email = $_POST['email'];
    $user_password = $_POST['user_password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND user_password = '$user_password'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        header("Location: LogInUI.php");
        exit();
    }
}

elseif (isset($_POST["createTaskButton"])) {

    $task_title = $_POST["task_title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $due_date = $_POST["due_date"];

    $query = "INSERT INTO `tasks`(`task_title`, `description`, `priority`, `due_date`) VALUES ('$task_title','$description','$priority','$due_date')";
    $query_result = mysqli_query($con, $query);

    if ($query_result === true) {
        header("Location: CRUD/view_task.php");
        exit();
    } else {
        echo "error";
        exit();
    }
}
