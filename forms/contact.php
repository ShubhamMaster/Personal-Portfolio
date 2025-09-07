<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../PHPMailer/src/Exception.php';
require __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer/src/SMTP.php';

// Include database connection
require __DIR__ . '/../connection.php'; 

header('Content-Type: application/json');

$mail = new PHPMailer(true);
$response = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Truncate message after 10 words
    $words = explode(" ", $message);
    $shortMessage = count($words) > 10 ? implode(" ", array_slice($words, 0, 10)) . "..." : $message;

    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        try {
            // SMTP settings (Gmail)
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'shubhamdighe.socse@sandipuniversity.edu.in';
            $mail->Password   = 'ygpu fkeq ckfx yhiy'; // Use an "App Password"
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Email settings
            $mail->setFrom('shubhamdighe.socse@sandipuniversity.edu.in', 'Shubham Dighe');
            $mail->addAddress($email, $name); // Send email to the user
            $mail->Subject = "Thank You for Contacting Us";

            // Email Body (Formatted)
            $mail->isHTML(true);
            $mail->Body = "
               <html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .header { background-color: #007bff; color: white; padding: 10px; text-align: center; font-size: 20px; border-radius: 5px 5px 0 0; }
        .content { margin-top: 20px; font-size: 16px; }
        .footer { margin-top: 20px; font-size: 14px; color: #777; text-align: center; }
        .footer a { color: #007bff; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>Thank You for Contacting Us</div>
        <div class='content'>
            <p>Hello <b>$name</b>,</p>
            <p>We have received your message:</p>
            <blockquote style='background:#f8f9fa; padding:10px; border-left: 3px solid #007bff;'>
                \"$shortMessage\"
            </blockquote>
            <p>We appreciate your interest and will get back to you shortly.</p>
            <p>Best Regards,<br><b>Shubham Dighe</b></p>
        </div>
        <div class='footer'>
            <p>Check out my portfolio:: <a href='https://shubhamresume.wuaze.com/' target='_blank'>https://shubhamresume.wuaze.com/</a></p>
        </div>
    </div>
</body>
</html>

            ";

            if ($mail->send()) {
                $response = ["status" => "success", "message" => "Message submitted and email sent successfully."];
            } else {
                $response = ["status" => "error", "message" => "Database saved, but email failed: " . $mail->ErrorInfo];
            }
        } catch (Exception $e) {
            $response = ["status" => "error", "message" => "Error sending email: " . $mail->ErrorInfo];
        }
    } else {
        $response = ["status" => "error", "message" => "Database error: " . mysqli_error($conn)];
    }

    mysqli_close($conn);
    echo json_encode($response);
}
?>
