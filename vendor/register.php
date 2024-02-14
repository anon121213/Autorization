<?php 

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password_confirm = md5($_POST['password_confirm']);
    $avatar = $_FILES['avatar'];

    if($password === $password_confirm){

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];

        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)){
            $_SESSION['message'] = 'incorrect img';
            header('Location: ../signup.php');
        }

        mysqli_query($sql, "INSERT INTO `users` (`id`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$login', '$email', '$password', '$path')");
        header('Location: ../signin.php');
        
    }else {
        $_SESSION['message'] = 'Pass is incorrect';
        header('Location: ../signup.php');
    }

?>