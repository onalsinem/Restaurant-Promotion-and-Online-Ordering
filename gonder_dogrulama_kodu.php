
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['mail'];
    $verificationCode = generateVerificationCode();

    // Doğrulama kodunu e-posta ile gönder
    $subject = 'Doğrulama Kodu';
    $message = 'Doğrulama kodunuz: ' . $verificationCode;
    $headers = 'From: your_email@example.com' . "\r\n" .
        'Reply-To: your_email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($email, $subject, $message, $headers)) {
        echo 'Doğrulama kodu e-posta adresinize gönderildi.';
    } else {
        echo 'E-posta gönderirken bir hata oluştu.';
    }
}

// Rastgele bir doğrulama kodu oluşturur
function generateVerificationCode() {
    $characters = '0123456789';
    $codeLength = 6;
    $code = '';

    for ($i = 0; $i < $codeLength; $i++) {
        $code .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $code;
}
?>