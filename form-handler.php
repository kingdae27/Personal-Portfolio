<?php

/**
 * Contact Form Handler
 * 
 * This PHP script processes data submitted via a contact form,
 * sends an email to the specified recipient, and redirects the user
 * to a confirmation page.
 * 
 * @Daelen Bows
 * @version 1.1
 * @date: 01-19-2025
 */

// Collect form data from the POST request
$name = $_POST['name']; // The name entered by the user
$visitor_email = $_POST['email']; // The user's email address
$subject = $_POST['subject']; // The subject of the message
$message = $_POST['message']; // The content of the message

// Email settings
$email_from = 'info@yourwebsite.com'; // The sender's email address ()
$email_subject = 'New Form Submission'; // The subject of the email

// Construct the email body
$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User Message: $message.\n";

// Recipient email address
$to = 'daelenjames@icloud.com';

//Headers for the email
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// Send the email
mail($to,$email_subject,$email_body,$headers);

// Redirect to the contat confirmation page
header("Location: contact.html");

?>
