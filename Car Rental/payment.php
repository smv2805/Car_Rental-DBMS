<?php
$email = $_GET['username'];
$days = $_GET['days'];
$car_name = $_GET['car_name'];

$server = "localhost";
$user = "root";
$password = "";
$db = "car_rental";

$conn = mysqli_connect($server, $user, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT rate from car where car_name = '$car_name'";
$result = $conn->query($sql);
$row = mysqli_fetch_row($result);
$amount = $row[0] * $days;
?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/stylebook.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php">Home</a>
        <a href="Booknow.php" class="active">BookNow</a>
        <a href="#Contactus">Contact Us</a>
        <a href="#aboutus">About Us</a>
        <button id="LS">Login/SignUp</button>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>

    <div class="container">
        <form action="final.php">
            <br>
            <label for="a">Car Name</label>
            <input class="form-control" type="text" value="<?= $car_name ?>" name="car_name" id="a">
            <br>
            <label for="b">email-id</label>
            <input class="form-control" type="text" value="<?= $email ?>" name="username" id="b">
            <br>
            <label for="c">Total Amount</label>
            <input class="form-control" type="text" value="<?= $amount ?>" name="amount" id="c">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Mode of Payment</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Credit Card</option>
                    <option>Debit Card</option>
                    <option>Net Banking</option>
                    <option>UPI</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Pay Now</button>
        </form>
    </div>
</body>

</html>