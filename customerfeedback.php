




<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resturent";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $numberGuests = $_POST['number-guests'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // SQL query to insert data into Reservation table
    $sql = "INSERT INTO customerfeedback (name, email, phone, number_guests, date, time, message)
            VALUES ('$name', '$email', '$phone', '$numberGuests', '$date', '$time', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
// Perform database operations here

// Close the connection when you are done
$conn->close();







?>
