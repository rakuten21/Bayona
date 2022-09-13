<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];
$area = $_POST['area'];
$time = $_POST['time'];
$date = $_POST['date'];

$conn = new mysqli('localhost','root','','gustare');
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into reservation (firstName, lastName, email, phoneNumber, area, time, date) values(?, ?, ?, ?, ?, ?, ?)");
    $datetime = date("Y-m-d");
    $stmt->bind_param("sssisss", $firstName, $lastName, $email, $phoneNumber, $area, $time, $date);
    $stmt->execute();
    echo 'Reservation Successful. Please wait for our confirmation on the contact information you gave to us.<br>To go back to the website <a href="http://localhost/Bayona/index.php">CLICK HERE</a>';
    $stmt->close();
    $conn->close();
}
?>