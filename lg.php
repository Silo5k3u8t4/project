<?php
require 'vendor/autoload.php';
session_start();

// Database connection parameters
$servername = "localhost";
$username = "polyprep";
$password = "poly@321";
$dbname = "sps";
$dbname2 = "lgu";

// Check if OTP form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['otp'])) {
    $otp = $_POST['otp'];

    // Check if OTP is correct
    if ($_SESSION['otp'] == $otp) {
        // Redirect to admin page
        header("Location: admin.php");
        exit();
    } else {
        // Incorrect OTP
        echo "Incorrect OTP. Please try again.";
    }
}

// Get user input
$user_username = $_POST['username'];
$user_password = $_POST['password'];

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL query for login
    $loginStmt = $conn->prepare("SELECT * FROM si WHERE user = :username AND pass = :password");
    $loginStmt->bindParam(':username', $user_username);
    $loginStmt->bindParam(':password', $user_password);
    $loginStmt->execute();

    // Check if a row is returned
    if ($loginStmt->rowCount() > 0) {
        // Authentication successful
        $_SESSION['user'] = $user_username; // Store username in session

        // Redirect admin to OTP verification on the same page
        if (in_array($user_username, ['ShamnasS', 'JoyalJJ', 'MelJ', 'SammyCS', 'AishuPS', 'Rvcrohith'])) {
            // Generate and store OTP in session
            $otp = rand(100000, 999999);
            $_SESSION['otp'] = $otp;
            sendOTPEmail($otp, $user_username);
            ?>
            <!-- OTP verification form -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="otp">Enter OTP:</label>
                <input type="text" id="otp" name="otp" required>
                <button type="submit">Verify OTP</button>
            </form>
            <?php
            // Update the 'lgu' table
        $conn2 = new PDO("mysql:host=$servername;dbname=$dbname2", $username, $password);
        $updateStmt = $conn2->prepare("INSERT INTO loggers (username, no_of_times) VALUES (:username, 1) ON DUPLICATE KEY UPDATE no_of_times = no_of_times + 1");
        $updateStmt->bindParam(':username', $user_username);
        $updateStmt->execute();
        } else {
            // Redirect normal user to home page
            header("Location: home.html");
            exit();
        }
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
// Function to send OTP email
function sendOTPEmail($otp, $user_username) {
    // Sender's Gmail credentials
    $sender_email = 'polyprep44@gmail.com';
    $sender_password = 'fcfm bjxb oavk errn';

    // Recipient's email address
    if($user_username='ShamnasS')
    {
        $recipient_email = 'shamnashamsudeen28@gmail.com';
    }
    if($user_username='JoyalJJ')
    {
        $recipient_email = 'joyaljhonson723@gmail.com';
    }
    if($user_username='AishuPS')
    {
        $recipient_email = 'aiswaryaps268@gmail.com';
    }
    if($user_username='Rvcrohith')
    {
        $recipient_email = 'rohithvc03@gmail.com';
    }
    if($user_username='MelJ')
    {
        $recipient_email = 'mineminer363@gmail.com';
    }
    if($user_username='SammyCS')
    {
        $recipient_email = 'samuelcswky@gmail.com';
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->SMTPDebug = 0; 
    $mail->isSMTP(); 
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $sender_email;
    $mail->Password = $sender_password;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->isHTML(true);
    $mail->Subject = 'Your OTP';
    $mail->Body = 'Your OTP is: ' . $otp;
    $mail->setFrom($sender_email, 'Polyprep');
    $mail->addAddress($recipient_email);

    // Send the email
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>
