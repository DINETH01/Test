<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST["name"]);
    $role = htmlspecialchars($_POST["role"]);
    $email = htmlspecialchars($_POST["email"]);
    $userPassword = htmlspecialchars($_POST["password"]); // Store user input password separately

    // Hash the password for security
    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    // Database connection (replace these variables with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $dbPassword = ""; // Rename the database connection password variable
    $dbname = "resturent";

    // Create connection
    $conn = new mysqli($servername, $username, $dbPassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if the email already exists
    $checkEmailQuery = "SELECT email FROM user WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "Error: Email already exists!";
    } else {
        // SQL query to insert data into the database
        $sql = "INSERT INTO user (name, role, email, password) VALUES ('$name', '$role', '$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to a success page after successful registration
            header("Location: index1.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
