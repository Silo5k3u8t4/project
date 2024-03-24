<?php
    $xend='<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>polyprep website</title>
      <link rel="apple-touch-icon" sizes="180x180" href="imgs/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="imgs/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="imgs/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="stylesheet" href="../cst/ind.css">
    </head>
    <body>
      <div class="frame-container">
        <iframe class="frame1" src="../top.html" scrolling="no"></iframe>
        <iframe class="frame2" src="../check.php" name="main" ></iframe>
      </div>
    </body>
    </html>';
    $lgph='<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link href="cst/lg.css" rel ="stylesheet">
    </head>
    <body>
        <canvas class="background"></canvas>
            <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
            <script>
            window.onload= function() {
              Particles.init({selector:".background");
            };
            </script>
    
    <div class="login-container">
        <h2>Login</h2>
        <form class="login-form" action="lg.php" method="POST">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="signup-link">
                <p>need an account? <a href="signup2.html">Sign Up</a></p>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
    </div>
    
    </body>
    </html>
    
    '

?>