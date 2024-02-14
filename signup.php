<?php 
    session_start();
    if(isset($_SESSION['user'])){
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signiup</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <form action="vendor/register.php" method="post" enctype="multipart/form-data">
        <label>login</label>
        <input type="text" name="login" placeholder="login">
        <label>email</label>
        <input type="malto" name="email" placeholder="email">
        <label>avatar</label>
        <input type="file" class="impimg" name="avatar">
        <label>password</label>
        <input type="password" name="password" placeholder="password">
        <label>repeate password</label>
        <input type="password" name="password_confirm" placeholder="password confirm">
        <button type="submit">signup</button>
        <?php 
            if(isset($_SESSION['message'])){
                echo '<p>'. $_SESSION['message'] .'</p>';
            }
            unset($_SESSION['message']);
        ?>
        <p>You have an accaunt? <a href="signin.php">signin</a></p>
    </form>
    
    
</body>
</html>