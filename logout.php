<?php
// Start session
session_start();

// Destroy the session
session_destroy();

// Redirect to main.html
header("Location: main.html");
exit();
?>
