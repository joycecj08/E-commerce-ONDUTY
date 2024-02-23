<?php
$servername = "sql203.infinityfree.com";  // Replace with your MySQL server name
$username = "if0_35221225";         // Replace with your MySQL username
$password = "qphqC7GoSZA2SWm";             // Replace with your MySQL password (if you have set one during WampServer installation)
$dbname = "if0_35221225_joyce_iwp";  // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform authentication (replace this with your authentication logic)
    if (authenticateUser($email, $password)) {
        // Redirect to a welcome page upon successful login
        header("Location: cia1.html");
        exit;
    } else {
        // Redirect to a login error page upon unsuccessful login
        header("Location: login_error.php");
        exit;
    }
}


function authenticateUser($email, $password) {
    global $conn;
    
    // Query to select a user by email and password (replace 'users' with your actual table name)
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        return true; // Authentication successful
    } else {
        return false; // Authentication failed
    }
}



// You can add database connection and authentication logic here.

// For secure authentication, consider using password hashing and prepared statements for database queries.
?>
