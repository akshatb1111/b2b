<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set up email parameters
    $to = "braintobodynutrition@gmail.com"; // Replace with your email address
    $subject = "New Contact Us Form Submission";
    $body = "You have received a new message from the contact form:\n\n".
            "Name: $firstName $surname\n".
            "Phone: $phone\n".
            "Email: $email\n".
            "Message:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>