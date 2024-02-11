<?php
// Start session
session_start();

// Database connection parameters
$servername = "localhost"; // Change to your MySQL server address
$username = "polyprep"; // Change to your MySQL username
$password = "poly@321"; // Change to your MySQL password
$dbname = "sps"; // Change to your MySQL database name

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get form data
    $username = $_POST['username'];
    $college = $_POST['college'];
    $password = $_POST['password'];

    // Insert data into the 'up' table
    $sql = "INSERT INTO si (user, college, pass) VALUES (:username, :college, :password)";
    
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':college', $college);
    $stmt->bindParam(':password', $password);

    // Execute the statement
    $stmt->execute();

    echo "Signup successful!";
    echo '<script>window.location.href = "login.html";</script>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
