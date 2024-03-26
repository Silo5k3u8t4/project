<!DOCTYPE html>
<html>
<head>
    <title>Notes Link Page</title>
    <!-- Your CSS and other head elements -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden; /* Prevent scrollbars due to Particle.js animation */
        }

        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        #notes-list {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Shadow effect */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2; /* Header background color */
        }

        tr:nth-child(even) {
            background-color: #f9f9f9; /* Even row background color */
        }

        tr:hover {
            background-color: #e9e9e9; /* Hover effect */
        }

        a {
            text-decoration: none;
            color: #007bff; /* Link color */
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3; /* Hover color */
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
    <div id="notes-list">
        <?php
        // Check if the course parameter is set
        if(isset($_GET['course'])) {
            // Establish a connection to your database
            $servername = "localhost";
            $username = "polyprep"; // Your MySQL username
            $password = "poly@321"; // Your MySQL password
            $dbname = $_GET['course']; // Database name received from the query parameter

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch all tables in the specified database
            $sql = "SHOW TABLES";
            $result = $conn->query($sql);

            // Display notes fetched from each table
            if ($result->num_rows > 0) {
                // Output data of each table
                while($row = $result->fetch_row()) {
                    $tableName = $row[0];
                    // Display the table name as a heading
                    echo "<h2>$tableName</h2>";
                    // Fetch and display data from the table
                    $sql = "SELECT * FROM $tableName";
                    $tableResult = $conn->query($sql);
                    if ($tableResult->num_rows > 0) {
                        $count = 0;
                        echo "<table>";
                        echo "<tr>"; // Start a new row
                        while($tableRow = $tableResult->fetch_assoc()) {
                            // Output each note link
                            echo "<td><a href='" . $tableRow['note_link'] . "'>" . $tableRow['note_link'] . "</a></td>";
                            $count++;
                            // Start a new row after every 4 links
                            if ($count % 4 == 0) {
                                echo "</tr><tr>";
                            }
                        }
                        echo "</table>";
                    } else {
                        echo "<p>No notes available for this table.</p>";
                    }
                }
            } else {
                echo "<p>No tables found in this database.</p>";
            }

            // Close database connection
            $conn->close();
        } else {
            echo "<p>Database name parameter not provided.</p>";
        }
        ?>
    </div>
</body>
</html>
