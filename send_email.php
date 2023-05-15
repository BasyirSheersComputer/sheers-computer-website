<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set email recipient
  $recipient_email = "sales@sheerscomputer.com"; // Replace with the desired recipient email address

  // Set email subject
  $subject = "New Contact Form Submission";

  // Build email content
  $email_content = "Name: $name\n";
  $email_content .= "Email: $email\n";
  $email_content .= "Message:\n$message";

  // Set email headers
  $headers = "From: $name <$email>";

  // Send email
  $success = mail($recipient_email, $subject, $email_content, $headers);

  // Check if email was sent successfully
  if ($success) {
    echo "Thank you! Your message has been sent.";
  } else {
    echo "Sorry, there was a problem sending your message. Please try again later.";
  }
}
?>
