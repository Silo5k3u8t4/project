

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Page</title>
<link rel="stylesheet" href="styles.css">
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0; /* Corrected margin value */
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

.section {
    margin-bottom: 20px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
}

form {
    margin-top: 10px;
}

input[type="file"] {
    display: block;
    margin-bottom: 10px;
}

button {
    padding: 5px 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
<script>
    let count = parseInt(localStorage.getItem('visitorCount')) || 0;
    count++;
    localStorage.setItem('visitorCount', count);
    document.getElementById('visitor-count').innerText = count;
</script>

<div class="section question-paper-upload">
        <h2>Question Paper Upload</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm('question-paper-file')">
            <input type="file" name="file" id="question-paper-file">
            <input type="hidden" name="id" value="question-paper-file">
            <button type="submit">Upload</button>
        </form>
    </div>
    <!-- Notes Upload section -->
    <div class="section notes-upload">
        <h2>Notes Upload</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm('notes-file')">
            <input type="file" name="file" id="notes-file">
            <input type="hidden" name="id" value="notes-file">
            <button type="submit">Upload</button>
        </form>
    </div>
    <!-- Quiz Upload section -->
    <div class="section quiz-upload">
        <h2>Quiz Upload</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm('quiz-file')">
            <input type="file" name="file" id="quiz-file">
            <input type="hidden" name="id" value="quiz-file">
            <button type="submit">Upload</button>
        </form>
    </div>
</div>
<script>
function validateForm(inputId) {
    // Get the file input element
    var fileInput = document.getElementById(inputId);
    // Check if file input is empty
    if (fileInput.files.length === 0) {
        // Display error message
        alert('Please select a file to upload.');
        // Prevent form submission
        return false;
    }
    // Form is valid, allow submission
    return true;
}
</script>
</body>
</html>
