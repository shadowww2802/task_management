<?php
session_start();
include("dbconfig.php");

// if (isset($_POST["loginButton"])) {

//     $email = $_POST['email'];
//     $user_password = $_POST['user_password'];

//     $login_query = "SELECT `user_id`, `email`, `user_password`, `first_name`, `middle_name`, `last_name` FROM `users` WHERE `email` = '$email' AND `user_password` = '$user_password' LIMIT 1 ";
//     $login_result = mysqli_query($con, $login_query);

//     if ($login_result) {
//         if (mysqli_num_rows($login_result) > 0) {
//             $data = mysqli_fetch_assoc($login_result);

//             $user_id = $data['user_id'];
//             $full_name = $data['first_name'] . '' . $data['middle_name'] . '' . $data['last_name'];
//             $email = $data['email'];

//             $_SESSION['auth'] = true;
//             $_SESSION['auth_user'] = [
//                 'user_id' => $user_id,
//                 'user_name' => $full_name,
//                 'email' => $email,
//             ];

//             $_SESSION['status'] = "Welcome $full_name!";
//             $_SESSION['status_code'] = "success";
//             header("Location: index.php");
//             exit();
//         } else {
//             $_SESSION['status'] = "Invalid Username/Password";
//             $_SESSION['status_code'] = "error";
//             header("Location: index.php");
//             exit();
//         }
//     } else {
//         $_SESSION['status'] = "Error executing the login query" . mysqli_error($con);
//         $_SESSION['status_code'] = "success";
//         header("Location: register.php");
//         exit();
//     }
// }

?>