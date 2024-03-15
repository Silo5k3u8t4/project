<?php
require 'vendor/autoload.php';
session_start();
$servername = "localhost";
$username = "polyprep";
$password = "poly@321";
$dbname = "sps";
$dbname2 = "lgu";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['otp'])) {
    $otp = $_POST['otp'];
    if ($_SESSION['otp'] == $otp) {
        header("Location: admin.php");
        exit();
    } else {
        // Incorrect OTP
        echo "Incorrect OTP. Please try again.";
    }
}
$user_username = $_POST['username'];
$user_password = $_POST['password'];
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $loginStmt = $conn->prepare("SELECT * FROM si WHERE user = :username AND pass = :password");
    $loginStmt->bindParam(':username', $user_username);
    $loginStmt->bindParam(':password', $user_password);
    $loginStmt->execute();
    if ($loginStmt->rowCount() > 0) {
        $_SESSION['user'] = $user_username;
        if (in_array($user_username, ['ShamnasS', 'JoyalJJ', 'MelJ', 'SammyCS', 'AishuPS', 'Rvcrohith'])) {
            $otpn;
            $ss='abcedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            for($i=0;$i<6;$i++)
            {
                $otpn=$otpn.strval(rand(0,9)).$ss[rand(0,strlen($ss)-1)];
            }
            $_SESSION['otp'] = $otpn;
            sendOTPEmail($otpn, $user_username);
            ?>
            <!-- OTP verification form -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="otp">Enter OTP:</label>
                <input type="text" id="otp" name="otp" required>
                <button type="submit">Verify OTP</button>
            </form>
            <?php
        $conn2 = new PDO("mysql:host=$servername;dbname=$dbname2", $username, $password);
        $updateStmt = $conn2->prepare("INSERT INTO loggers (username, no_of_times) VALUES (:username, 1) ON DUPLICATE KEY UPDATE no_of_times = no_of_times + 1");
        $updateStmt->bindParam(':username', $user_username);
        $updateStmt->execute();
        } else {
            header("Location: home.html");
            exit();
        }
    } else {
        echo "Invalid username or password";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
function sendOTPEmail($otp, $user_username) {
    $sender_email = 'polyprep44@gmail.com';
    $sender_password = 'fcfm bjxb oavk errn';
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
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>
