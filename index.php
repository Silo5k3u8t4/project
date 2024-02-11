<!DOCTYPE html>
<html>
<head>
  <title>polyprep website</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <style>
    .frame-container {
      display: flex;
      flex-direction: column;
      height: 100vh;
    }
    .frame1,
    .frame2 {
      border: none;
    }
    .frame2 {
      flex-grow: 10;
    }
  </style>
</head>
<body>
  <div class="frame-container">
    <iframe class="frame1" src="top.html"></iframe>
    <iframe class="frame2" src="check.php" name="main" ></iframe>
  </div>
</body>
</html>

