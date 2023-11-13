<?php require_once('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
<h2>Reservation Table</h2>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Number of Guests</th>
                <th>Date</th>
                <th>Time</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>


        
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
            // SQL query to select data from reservation table
            $select_query = "SELECT * FROM reservation";
            $result = $conn->query($select_query);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['email']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['number_guests']."</td>
                            <td>".$row['date']."</td>
                            <td>".$row['time']."</td>
                            <td>".$row['message']."</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No reservations found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>


<form id="loginForm" action="process_login.php" method="post">
    <!-- ... your form fields ... -->
    <!-- Change the label to "Home" and the variable name accordingly -->
    <button type="button" class="btn btn-primary" onclick="goToHome()">Home</button>
</form>

<script>
    function redirectToRegister() {
        window.location.href = "registration.php";
    }

    // Change variable name for better readability
    function goToHome() {
        window.location.href = "index1.php";
    }
</script>

<?php mysqli_close($conn); ?>
