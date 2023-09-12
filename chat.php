<?php

error_reporting(E_ALL);
ini_set('display_errors',1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "tejasvinig04@gmail.com"; 
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for your message! We'll get back to you soon.";
} else {
    echo "Invalid request.";
}
?>
