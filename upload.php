<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES["file"])) {
        // Get the name of the file
        $fileName = basename($_FILES["file"]["name"]);

        // Specify the path to the desktop directory
        $desktopDir = "./uploads/";

        // Create a directory with the same name as the file
        $targetDir = $desktopDir . $fileName;

        // Check if the target directory exists, if not, create it
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Check if file has been uploaded successfully
        if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
            $targetFile = $targetDir . '/' . $fileName;
            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                echo '<div style="background-color: #dff0d8; color: #3c763d; border: 1px solid #d6e9c6; border-radius: 5px; padding: 10px; margin-bottom: 10px;">';
                echo "The file <strong>" . htmlspecialchars($fileName) . "</strong> has been uploaded successfully.";
                echo '</div>';
            } else {
                echo '<div style="background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; border-radius: 5px; padding: 10px; margin-bottom: 10px;">';
                echo "Sorry, there was an error moving your file.";
                echo '</div>';
            }
        } else {
            echo '<div style="background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; border-radius: 5px; padding: 10px; margin-bottom: 10px;">';
            echo "Sorry, there was an error uploading your file.";
            echo '</div>';
        }
    } else {
        echo '<div style="background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; border-radius: 5px; padding: 10px; margin-bottom: 10px;">';
        echo "No file uploaded.";
        echo '</div>';
    }
} else {
    echo '<div style="background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; border-radius: 5px; padding: 10px; margin-bottom: 10px;">';
    echo "Invalid request method.";
    echo '</div>';
}
?>
