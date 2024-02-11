<?php
// Start session
session_start();

if (isset($_SESSION['user'])) {
    // User is logged in, display home.html
    echo '<script>window.location.href = "home.html";</script>';
} else {
    // User is not logged in, display main.html
    echo '<script>window.location.href = "main.html";</script>';
}
?>
