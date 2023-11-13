<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Database connection (replace these variables with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "resturent";

    // Create connection
    $conn = new mysqli($servername, $username, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL query to check user credentials
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, verify password
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];
        $userRole = $row["role"];

        if (password_verify($password, $hashedPassword)) {
            if ($userRole == "admin") {
                // Redirect admin users to admindashboard.php
                header("Location: admin.php");
                exit();
            } else if ($userRole == "user") {
                // Redirect regular users to userdashboard.php
                header("Location: userlogin.php");
                exit();
            } else {
                echo "Unknown user role!";
            }
        } else {
            echo "Incorrect password!";
        }
    } else {
        echo "User not found!";
    }

    $conn->close();
}
?>
