<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize and fetch POST data
    $name    = isset($_POST['name']) ? htmlspecialchars(strip_tags($_POST['name'])) : '';
    $phone   = isset($_POST['phone']) ? htmlspecialchars(strip_tags($_POST['phone'])) : '';
    $email   = isset($_POST['email']) ? htmlspecialchars(strip_tags($_POST['email'])) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars(strip_tags($_POST['subject'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(strip_tags($_POST['message'])) : '';

    // Validate required fields
    if (empty($name) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
        echo json_encode(["status" => "failed", "message" => "All fields are required."]);
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["status" => "failed", "message" => "Invalid email address."]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'newdedi.clouddreams.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tester@clouddreams.in';
        $mail->Password   = 'OUHbP$W2$';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & recipient
        $mail->setFrom('tester@clouddreams.in', 'Heaven Key');
        $mail->addAddress('gokulnath@clouddreams.in', 'Heaven Key');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: $subject";
        $mail->Body = "
            <html>
            <body style='font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; margin: 0;'>
                <div style='max-width: 600px; background: #fff; padding: 25px 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); margin: auto;'>
                    <h2 style='color: #003428; margin-bottom: 20px;'>New Contact Form Submission</h2>
                    <p><strong>Name:</strong> {$name}</p>
                    <p><strong>Phone:</strong> {$phone}</p>
                    <p><strong>Email:</strong> {$email}</p>
                    <p><strong>Subject:</strong> {$subject}</p>
                    <p><strong>Message:</strong><br>{$message}</p>
                    <hr style='margin: 30px 0; border: none; border-top: 1px solid #eee;'>
                    <p style='font-size: 12px; color: #999; margin: 0;'>Sent via Oasis Apparels Contact Form.</p>
                </div>
            </body>
            </html>
        ";

        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true,
            ],
        ];

        $mail->send();
        echo json_encode(["status" => "success", "message" => "Message sent successfully!"]);
    } catch (Exception $e) {
        echo json_encode(["status" => "failed", "message" => "Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    echo json_encode(["status" => "failed", "message" => "Invalid request method."]);
}
