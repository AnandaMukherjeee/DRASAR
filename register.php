<?php

include 'config.php';
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $pass=mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass=mysqli_real_escape_string($conn, md5($_POST['cpassword']));

    $select= mysqli_query($conn, "SELECT * FROM `users` WHERE email='$email' AND password='$pass'") or die('query failed');

    if(mysqli_num_rows($select)>0){
        $message[]='User Already Exists!';
    }
    else{
        mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name','$email','$pass')") or die('Query Failed');
        $message[]='Resitered Successfully!';
        header('location:login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            <h3>sign-up</h3>
            <input type="text" name="name" required placeholder="Enter Username" class="box">
            <input type="email" name="email" required placeholder="Enter Email" class="box">
            <input type="password" name="password" required placeholder="Enter Password" class="box">
            <input type="password" name="cpassword" required placeholder="Confirm Password" class="box">
            <input type="submit" name="submit" class="btn" value="SUBMIT">
            <p>Already have an account?<a href="login.php">Log-in</a></p>
        </form>
    </div>
</body>
</html>