<?php require_once('connection.php'); ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Tables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

  <style>

    .space1{

        margin-top:20px;
    }
  </style>
   
</head>
<body>



<div class="space1">




<header class="header">

   <div class="flex">

      <a href="#" class="logo">Signature cuisine</a>

      <nav class="navbar">
         <a href="admin.php">add Food</a>
         <a href="products.php">view Food</a>
         <a href="admindashboard.php">Reservation/User Tabales</a>
      </nav>

      

     

</header>








<div class="container">
    <h2>Staff Table</h2>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Email</th>
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
            
            // SQL query to select data from user table
            $user_select_query = "SELECT name, role, email FROM user";
            $user_result = $conn->query($user_select_query);

            if ($user_result->num_rows > 0) {
                // Output data of each row
                while($row = $user_result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['role']."</td>
                            <td>".$row['email']."</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>

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
            $reservation_select_query = "SELECT name, email, phone, number_guests, date, time, message FROM reservation";
            $reservation_result = $conn->query($reservation_select_query);

            if ($reservation_result->num_rows > 0) {
                // Output data of each row
                while($row = $reservation_result->fetch_assoc()) {
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

</form>

























<!-- Changaccordingly -->

<div class="space1">









        <tbody>
            <?php
         

            ?>
        </tbody>
    </table>

    <h2>customer Feedback</h2>
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
            $customerfeedback_select_query = "SELECT name, email, phone, number_guests, date, time, message FROM customerfeedback";
            $customerfeedback = $conn->query($customerfeedback_select_query);

            if ($reservation_result->num_rows > 0) {
                // Output data of each row
                while($row = $customerfeedback->fetch_assoc()) {
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

    <form id="loginForm" action="process_login.php" method="post">
    <!-- ... your form fields ... -->
   
    <!-- Change the label to "Home" and the variable name accordingly -->
    <button type="button" class="btn btn-primary" onclick="goToHome()">Home</button>
</form>




<!-- Changaccordingly -->







<script>
    function redirectToRegister() {
        window.location.href = "register.php";
    }

    // Change variable name for better readability
    function goToHome() {
        window.location.href = "index1.php";
    }
</script>

</body>
</html>
<?php mysqli_close($conn); ?>
