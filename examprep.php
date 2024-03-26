<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Educational Help for Polytechnic Students</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }
    .background {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 1;
    }

    .select-box {
        margin-bottom: 20px;
    }

    .playlist-link {
        display: block;
        color: black;
        text-decoration: none;
        margin-bottom: 10px;
    }
</style>
</head>
<body>
    <canvas class="background"></canvas>
    <script src="./node_modules/particlesjs/dist/particles.min.js"></script>
    <script>
        window.onload= function() {
            Particles.init({selector: '.background'});
        };
    </script>
<div class="container">
    <h1>Educational Help for Polytechnic Students</h1>

    <div class="select-box">
        <select id="branch" onchange="updatePlaylistLinks()">
            <option value="">Select Branch</option>
            <option value="ME">Mechanical Engineering</option>
            <option value="CT">Computer Technology</option>
            <option value="CE">Civil Engineering</option>
            <option value="EE">Electrical Engineering</option>
            <option value="EC">Electronics and Communication Engineering</option>
        </select>
    </div>

    <div class="select-box">
        <select id="semester" onchange="updatePlaylistLinks()">
            <option value="">Select Semester</option>
            <?php for ($i = 1; $i <= 6; $i++): ?>
                <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
    </div>

    <div class="select-box">
        <select id="subject" onchange="updatePlaylistLinks()">
            <option value="">Select Subject</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <!-- Add more subjects as needed -->
        </select>
    </div>

    <div id="playlist-links"></div>
<script>
    function updatePlaylistLinks() {
        var branch = document.getElementById("branch").value;
        var semester = document.getElementById("semester").value;
        var subject = document.getElementById("subject").value;

        if (branch && semester && subject) {
            var playlistLinks = document.getElementById("playlist-links");
            playlistLinks.innerHTML = '';

            // Sample playlist links (replace with actual links)
            var playlists = [
                "https://www.youtube.com/playlist?list=PLUl4u3cNGP61KHzhg3JIJdK08JLSlcLId",
                "https://www.youtube.com/playlist?list=PLUl4u3cNGP61KHzhg3JIJdK08JLSlcLId",
                "https://www.youtube.com/playlist?list=PLUl4u3cNGP61KHzhg3JIJdK08JLSlcLId"
            ];

            playlists.forEach(function(playlist) {
                var link = document.createElement("a");
                link.href = playlist;
                link.textContent = "View Playlist";
                link.className = "playlist-link";
                playlistLinks.appendChild(link);
            });
        }
    }
</script>
</body>
</html>
