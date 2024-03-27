<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
session_start();
$servername = "localhost";
$username = "polyprep";
$password = "poly@321";
$dbname = "sps";
$dbname2 = "lgu";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['otp'])) {
    $otp = $_POST['otp'];
    if ($_SESSION['otp'] == $otp) {
        header("Location: admin.php");
        exit();
    } else {
        // Incorrect OTP
        echo "Incorrect OTP. Please try again.";
    }
}
$user_username = $_POST['username'];
$user_password = $_POST['password'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $loginStmt = $conn->prepare("SELECT * FROM si WHERE user = :username AND pass = :password");
    $loginStmt->bindParam(':username', $user_username);
    $loginStmt->bindParam(':password', $user_password);
    $loginStmt->execute();
    if ($loginStmt->rowCount() > 0) {
        $_SESSION['user'] = $user_username;
        $conn2 = new PDO("mysql:host=$servername;dbname=$dbname2", $username, $password);
        $updateStmt = $conn2->prepare("INSERT INTO loggers (username, no_of_times) VALUES (:username, 1) ON DUPLICATE KEY UPDATE no_of_times = no_of_times + 1");
        $updateStmt->bindParam(':username', $user_username);
        $updateStmt->execute();
        if (in_array($user_username, ['ShamnasS', 'JoyalJJ', 'MelJ', 'SammyCS', 'AishuPS', 'Rvcrohith'])) {
            header("Location: admin.php");
            exit();
        } else {
            header("Location: home.html");
            exit();
        }
    } else {
        echo "Invalid username or password";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
