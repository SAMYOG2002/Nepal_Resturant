<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nepal_resturant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];

    $sql = "INSERT INTO reservation (name, email, phone, reservation_date, reservation_time, guests, message)
    VALUES ('$name', '$email', '$phone', '$date', '$time', '$guests', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully made!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
