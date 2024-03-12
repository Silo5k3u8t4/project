<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"]) && isset($_POST["id"])) {
        $id = $_POST["id"];
        // Specify the path to the desktop directory
        $desktop_dir = "./uploads/";
        // Create a directory on the desktop with the received id
        $target_dir = $desktop_dir . $id . "/";
        
        // Check if the target directory exists, if not, create it
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        
        // Check if file has been uploaded successfully
        if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded to folder " . $id . ".";
            } else {
                echo "Sorry, there was an error moving your file.";
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "Missing parameters (id or file).";
    }
} else {
    echo "Invalid request method.";
}
?>
