<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $firstName = $_POST["f_name"];
    $lastName = $_POST["l_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Database connection parameters
$servername = "sql203.infinityfree.com";      // MySQL server (usually "localhost")
$username = "if0_35221225";         // MySQL username
$password = "qphqC7GoSZA2SWm"; // MySQL password (set during installation)
$database = "if0_35221225_joyce_iwp";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into the database (replace 'users' with your actual table name)
    $sql = "INSERT INTO users (f_name, l_name, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        echo "Registration successful!";
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
