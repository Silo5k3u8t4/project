<?php
$encryptionKey = "your-secret-key";
function encryptData($data, $key) {
    // Initialization vector
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    // Encrypt the data
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    // Encode the encrypted data and IV as base64
    $encryptedData = base64_encode($encrypted);
    $encodedIV = base64_encode($iv);
    // Return encrypted data and IV
    return array("data" => $encryptedData, "iv" => $encodedIV);
}
// Function to decrypt data using AES
function decryptData($encryptedData, $key, $iv) {
    // Decode the encrypted data and IV from base64
    $decodedData = base64_decode($encryptedData);
    $decodedIV = base64_decode($iv);
    
    // Decrypt the data
    $decrypted = openssl_decrypt($decodedData, 'aes-256-cbc', $key, 0, $decodedIV);
    
    // Return decrypted data
    return $decrypted;
}

// Your HTML content
$htmlContent = "<html><head><title></title></head><body><h1>djjdjsksk</h1></body></html>";

// Encrypt the HTML content
$encrypted = encryptData($htmlContent, $encryptionKey);
$encryptedHTML = $encrypted["data"];
$iv = $encrypted["iv"];

// Decrypt the HTML content
$decryptedHTML = decryptData($encryptedHTML, $encryptionKey, $iv);
?>

<html>
<head><title></title></head>
<body>
<?php
// Output the decrypted HTML content
echo $decryptedHTML;
?>
</body>
</html>
