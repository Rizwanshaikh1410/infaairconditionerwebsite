<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $brand = htmlspecialchars($_POST['brand']);
    $question = htmlspecialchars($_POST['question']);

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'rockstargamingr2@gmail.com'; // अपने ईमेल पते के साथ बदलें
        $mail->Password = 'lopmvwxqzmyharso'; // अपने जीमेल ऐप पासवर्ड के साथ बदलें
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Disable SSL certificate verification
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Sender and recipient details
        $mail->setFrom($email, $username);
        $mail->addAddress('rockstargamingr2@gmail.com'); // अपने ईमेल पते के साथ बदलें

        // Email subject and body
        $mail->isHTML(true);
        $mail->Subject = "New Inquiry from $username";
        $mail->Body = "
        <html>
        <head>
            <title>Inquiry</title>
        </head>
        <body>
            <h2>Inquiry Details</h2>
            <p><strong>Username:</strong> $username</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Brand:</strong> $brand</p>
            <p><strong>Question:</strong> $question</p>
        </body>
        </html>
        ";

        // Send email
        $mail->send();
        echo 'Email sent successfully.';
    } catch (Exception $e) {
        echo "Email sending failed. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request method.";
}

?>
