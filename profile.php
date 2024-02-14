<?php 
    session_start();

    if(!isset($_SESSION['user'])){
        header('Location: signup.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body class="profile">    
    <img src="<?= $_SESSION['user']['avatar']; ?>"  width = 100px; alt="avatar.png">
    <h2><?= $_SESSION['user']['login']; ?></h2>
    <p><?= $_SESSION['user']['email']; ?></p>
    <a href="vendor/logout.php" name="logout">logout</a>
</body>
</html>