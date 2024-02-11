<?php
// Start session
session_start();

// Database connection parameters
$servername = "localhost"; // Change to your MySQL server address
$username = "polyprep"; // Change to your MySQL username
$password = "poly@321"; // Change to your MySQL password
$dbname = "sps"; // Change to your MySQL database name
$dbname2 = "lgu"; // Change to your MySQL database name

// Get user input
$user_username = $_POST['username'];
$user_password = $_POST['password'];

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL query for login
    $loginStmt = $conn->prepare("SELECT * FROM si WHERE user = :username AND pass = :password");
    $loginStmt->bindParam(':username', $user_username);
    $loginStmt->bindParam(':password', $user_password);
    $loginStmt->execute();

    // Check if a row is returned
    if ($loginStmt->rowCount() > 0) {
        // Authentication successful
        $_SESSION['user'] = $user_username; // Store username in session

        // Update the 'lgu' table
        $conn2 = new PDO("mysql:host=$servername;dbname=$dbname2", $username, $password);
        $updateStmt = $conn2->prepare("INSERT INTO loggers (username, no_of_times) VALUES (:username, 1) ON DUPLICATE KEY UPDATE no_of_times = no_of_times + 1");
        $updateStmt->bindParam(':username', $user_username);
        $updateStmt->execute();
        // Redirect to the home page
        header("Location: home.html");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
