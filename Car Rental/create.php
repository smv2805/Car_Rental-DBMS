<?php
include "header.php "
?>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "car_rental";

$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$message = "Enter your details";
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $sql = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";
    echo $sql;
    if ($conn->query($sql) == TRUE) {
        $message = "Account Created";
    } else {
        $message = "ERROR: $conn->error";
    }
}
?>
<link rel="stylesheet" href="css/create.css">
<form method="post">
    <div><input type="email" placeholder="E-mail" id="email" name="email" required></div>
    <div><input type="password" placeholder="Password" id="pwd" name="pwd" required></div>
    <div><input type="submit" value="Sign Up" id="button"></div>
</form>
<p style="color:white; text-align:center;"><?= $message ?></p>
<a href="login.php" style="margin-left: 48%; color:yellow; text-decoration: none;">Login</a>