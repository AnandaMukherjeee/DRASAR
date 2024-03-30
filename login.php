<?php

include 'config.php';
session_start();
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $pass=mysqli_real_escape_string($conn, md5($_POST['password']));

    $select= mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email' AND password='$pass'") or die('query failed');

    if(mysqli_num_rows($select)>0){
        $row=mysqli_fetch_assoc($select);
        $_SESSION['user_id']=$row['id'];
        header('location:index.php');
    }
    else{
        $message[]='Incorrect Password or Email Id';

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
    }
}
?>
<div class="form-container">
        <form id="form" method="POST" action="">
            <h3>LOGIN</h3>
            <input type="email" name="email" required placeholder="Enter Email" class="box">
            <input type="password" name="password" required placeholder="Enter Password" class="box">
            <input type="submit" name="submit" class="btn" value="SUBMIT">
            <p>Don't have an account? <a href="register.php">Sign-up</a></p>
        </form>
    </div>
</body>
</html>