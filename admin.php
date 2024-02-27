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
    margin: 0;
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

.visitor-tracking, .question-paper-upload, .notes-upload {
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
<div class="container">
    <h1>Admin Page</h1>
    <div class="visitor-tracking">
        <h2>Visitor Tracking</h2>
        <p>Total Visitors: <span id="visitor-count">0</span></p>
    </div>
    <div class="question-paper-upload">
        <h2>Question Paper Upload</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="question-paper-file">
            <button type="submit">Upload</button>
        </form>
    </div>
    <div class="notes-upload">
        <h2>Notes Upload</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" id="notes-file">
            <button type="submit">Upload</button>
        </form>
    </div>
</div>
<script>
    let count = parseInt(localStorage.getItem('visitorCount')) || 0;
    count++;
    localStorage.setItem('visitorCount', count);
    document.getElementById('visitor-count').innerText = count;
</script>
</body>
</html>

