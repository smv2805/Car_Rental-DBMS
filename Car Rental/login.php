<?php
    include "header.php";
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "car_rental";

    $conn = mysqli_connect($server, $user, $password, $db);
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    $message = "Enter your details";
    if(isset($_POST['emailid'])){
        $email = $_POST['emailid'];
        $password = $_POST['pwd'];
        $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password' LIMIT 1";
        if($result = $conn->query($sql)){
            if(mysqli_num_rows($result)==1){
                header("Location: index.php?username=$email");
            }
            else
            {
                $message = "User doesn't exist in the db.";
            }
        }
        

    }
?>
<link rel="stylesheet" href="css/login.css">
<form action="" method="post">
    <div ><input type="email" placeholder="E-mail" name="emailid" id="emailid" required></div>
    <div><input type="password" placeholder="Password" name="pwd" id="pwd" required></div>
    <div><input type="submit" value="Log In" id="button"></div>
</form>
<p style="color:white; text-align:center;"><?=$message ?></p>
<a href="create.php">Create a new account</a>