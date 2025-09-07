<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['message'];

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp-relay.sendinblue.com'; // Brevo SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'shubhamdighe45@gmail.com';
        $mail->Password   = 'A0gP7t6Y3aOSXWh2';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('shubhamdighe412@gmail.com', 'shubham dighe');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        if ($mail->send()) {
            echo "<script>alert('Email sent successfully!');</script>";
        }
    } catch (Exception $e) {
        echo "<script>alert('Email sending failed: {$mail->ErrorInfo}');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
<body>
    <h2>Send Email</h2>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Subject:</label>
        <input type="text" name="subject" required><br><br>

        <label>Message:</label>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Send Email</button>
    </form>
</body>
</html>
