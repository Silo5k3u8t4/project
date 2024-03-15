<?php
session_start();
$servername = "localhost";
$username = "polyprep"; 
$password = "poly@321";
$dbname = "sps";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $username = $_POST['username'];
    $college = $_POST['college'];
    $password = $_POST['password'];
    $sql = "INSERT INTO si (user, college, pass) VALUES (:username, :college, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':college', $college);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo "Signup successful!";
    echo '<script>window.location.href = "login.html";</script>';
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
