<?php
session_start();
if (isset($_SESSION['user'])) {
    echo '<script>window.location.href = "home.html";</script>';
} else {
    echo '<script>window.location.href = "main.html";</script>';
}
?>
