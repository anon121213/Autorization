<?php 

    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $usercheck = mysqli_query($sql, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

    if(mysqli_num_rows($usercheck) > 0){

        $user = mysqli_fetch_assoc($usercheck);

        $_SESSION['user'] = [
            'id' => $user['id'],
            'avatar' => $user['avatar'],
            'login' => $user['login'],           
            'email' => $user['email']
        ];

        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'incorrect login or pass';
        header('Location: ../signin.php');
    }
?>