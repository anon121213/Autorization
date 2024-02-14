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
    <form action="vendor/login.php" method="post" enctype="multipart/form-data">
        <label>email</label>
        <input type="malto" name="email" placeholder="email">
        <label>password</label>
        <input type="password" name="password" placeholder="password">
        <button type="submit">signin</button>
        <?php 
            if(isset($_SESSION['message'])){
                echo '<p>'. $_SESSION['message'] .'</p>';
            }
            unset($_SESSION['message']);
        ?>
        <p>You have'not an accaunt? <a href="signup.php">sigup</a> </p>  
    </form>
    
</body>
</html>