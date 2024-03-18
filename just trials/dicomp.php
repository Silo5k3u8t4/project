<?php
    $inpg='<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>polyprep website</title><link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png"><link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png"><link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png"><link rel="manifest" href="/site.webmanifest"><link rel="stylesheet" href="ind.css"></head>
    <body>
      <div class="frame-container">
        <iframe class="frame1" src="top.html" scrolling="no"></iframe>
        <iframe class="frame2" src="check.php" name="main" ></iframe>
      </div>
    </body>
    </html>';
    $hpg='<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>home</title>
      <link href="hs.css"  rel="stylesheet">
    </head>
      <body>
          <canvas class="background"></canvas>
          <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
          <script>
          window.onload= function() {
            Particles.init({selector: ".background"});
          };
          </script> 
          <div class="container">
              <div class="box box-1" style="--img: url(https://i.postimg.cc/0jwsP6f2/prep.jpg);" data-text="Exam preperation"></div>
              <div class="box box-2" style="--img: url(https://i.postimg.cc/c4NxdSK1/17973872.jpg);" data-text="Quiz Time"></div>
              <div class="box box-3" style="--img: url(https://i.postimg.cc/kG3jRw88/quiz1.jpg);" data-text="Knowledge Center"></div>
              <div class="box box-4" style="--img: url(https://i.postimg.cc/sDzSBbBK/pexels-rdne-stock-project-5530775.jpg);" data-text="Notes Upload"></div>
              <div class="box box-5" style="--img: url(https://i.postimg.cc/mrccrSsk/5899209.jpg);" data-text="Future scope"></div>
          </div>
          <script src="hss.js"></script>
      </body>
  </html>
  ';
  $lgpg='<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link href="lg.css" rel ="stylesheet">
  </head>
  <body>
      <canvas class="background"></canvas>
          <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
          <script>
          window.onload= function() {
            Particles.init({selector: ".background"});
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
              <p>Don'.'t have an account? <a href="signup2.html">Sign Up</a></p>
          </div>
          <button type="submit" class="login-btn">Login</button>
      </form>
  </div>
  
  </body>
  </html>
  
  ';
  $mpg='<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
  </head>
    <body>
      <canvas class="background">
      </canvas>
          <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
          <script>
          window.onload= function() {
            Particles.init({selector: ".background"});
          };
          </script>
      <div class="container">
        <center>
        <div class="one">
          <button onclick="playPause()" name="clicker">Play/Pause</button> 
        </div>
        </center>
        <div class="two">
          <center>
            <video id="video1" width="640" height="360">
              <source src="movie.mp4" type="video/mp4">
            </video></center>
        </div>
        <div class="three">
          <button name="login"><a href="login.html" style="text-decoration:none;">LOGIN</a></button>
        </div>
      </div>
    </body>
  
    <script> 
    var myVideo = document.getElementById("video1"); 
    function playPause() { 
        if (myVideo.paused) 
            myVideo.play(); 
          else 
            myVideo.pause(); 
    }
  </script>
  </html>
  ';
  $npg='<!DOCTYPE html>
  <html>
  <head>
  <title>ha</title>
  <link href="note.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
      <canvas class="background"></canvas>
          <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
          <script>
          window.onload= function() {
            Particles.init({selector: ".background"});
          };
          </script>
  <div class="container">
       <ul id="menu">
              <a class="menu-button icon-plus" id="open-menu" href="#menu" title="Show navigation"></a>
              <a class="menu-button icon-minus hide" href="#0" title="Hide navigation"></a>
              <li class="menuitem menuitem-1" data-text="CE">
                  <a href="ex.html" id="one">
                      <font>CE</font>
                  </a>
              </li>
              <li class="menuitem menuitem-2" data-text="ME">
                  <a href="#" id="two">
                      <font>ME</font>
                  </a>
              </li>
              <li class="menuitem menuitem-3" data-text="CT">
                  <a href="#" id="3">
                      <font>CT</font>
                  </a>
              </li>
              <li class="menuitem menuitem-4" data-text="EC">
                  <a href="#" id="4">
                      <font>EC</font>
                  </a>
              </li>
              <li class="menuitem menuitem-5" data-text="EE">
                  <a href="#" id="5">
                      <font>EE</font>
                  </a>
              </li>
          </ul>
    
    <div class="content">
      <div class="text">
        <h1>Select your course</h1>
      </div>
    </div>
  </div>
  
  </body>
  </html>
  ';
  $sgpg='<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Signup</title>
      <link href="su.css"  rel="stylesheet">
  </head>
  <body>
      <canvas class="background"></canvas>
          <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
          <script>
          window.onload= function() {
            Particles.init({selector: ".background"});
          };
          </script>
  
      <div class="signup-container">
          <h2>Signup</h2>
          <form id="signupForm" action="sign.php" method="POST" onsubmit="validateForm()">
  
          
              <input type="text" id="username" name="username" placeholder="Username" required>
  
         
              <input type="text" id="college" name="college" placeholder="College name" required>
  
       
              <input type="password" id="password" name="password" placeholder="Password" required>
              
              
              <input type="checkbox" id="rememberme"/><font>remember me</font>
              
  
  
              <button type="submit">Signup</button>
              <p id="errorMessage" class="error-message"></p>
          </form>
      </div>
  
      <script>
      function validateForm() {
          var username = document.getElementById("username").value;
          var college = document.getElementById("college").value;
          var password = document.getElementById("password").value;
          var errorMessage = document.getElementById("errorMessage");
  
          if (username === "" || college === "" || password === "") {
              errorMessage.textContent = "All fields are required";
          } else {
              // Perform AJAX request or redirect here
              alert("Signup successful! Redirecting to login page...");
          }
      }
  </script>
  
  </body>
  </html>
  ';
  $tppg='<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="tp.css" rel="stylesheet">
  </head>
  <body>
      <img src="logo.jpeg" alt="not found" name="logo">
      <p align="right">
          <a target="main" href="logout.php"><b>LOGOUT</b></a>
          <img src="exit.png" alt="notfound" name="v">||
          <a target="main" href="about.html"><b>ABOUT</b></a>
          <img src="team.png" name="t"> || 
          <a href="mailto:polyprep44@gmail.com"><b>CONTACT US</b></a>
          <img name="con" src="customer-service.png"/>
      </p>
  </body>
  </html>
  ';
  $ups='<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>
      <canvas class="background"></canvas>
          <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
          <script>
          window.onload= function() {
            Particles.init({selector:".background"});
          };
          </script>
      <p>will be uploadin</p>
  </body>
  </html>';
?>