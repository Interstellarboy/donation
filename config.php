<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "donation";

$name = $_POST['firstname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$number = $_POST['number'];
$amount = $_POST['amount'];


// Create Connection
//$q = intval($_GET['q']);

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check Connection
if($conn->connect_error) {
 die("connection failed");
}
else{
    $stmt = $conn->prepare("insert into donation(name,email,address,city,number,amount)values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$name,$email,$address,$city,$number,$amount);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
    body{
        background-image: url("image/thanku.jpeg");
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
    }
</style>
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You! <?php echo $name?></h1>
        <p class="lead"><strong>
        There are people who don’t donate because they assume everyone else is, and there are those who take up the torch and run with it. Thank you for being the latter, and for your kind and heartwarming donation.
        </strong></p>
        <p><a href="index.html">continue to homepage</a></p>
        <hr>


      </div>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>





