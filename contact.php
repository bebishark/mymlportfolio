<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senderName = $_POST['senderName'];
    $senderEmail = $_POST['senderEmail'];
    $subject = $_POST['emailSubject'];
    $message = $_POST['emailMessage'];

    // Compose the email
    $to = "your-email@gmail.com"; // Change this to your Gmail address
    $headers = "From: $senderName <$senderEmail>";
    $body = "Subject: $subject\n\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed!";
    }
}
