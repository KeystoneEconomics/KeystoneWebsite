<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$company = htmlspecialchars($_POST['company']);
$message = htmlspecialchars($_POST['message']);

$to = "accounts@keystoneeconomics.co.uk";
$subject = "New Website Enquiry";

$body = "New enquiry from website:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Company: $company\n\n";
$body .= "Message:\n$message\n";

$headers = "From: website@keystoneeconomics.co.uk\r\n";
$headers .= "Reply-To: $email\r\n";

mail($to, $subject, $body, $headers);

echo "Thank you. Your message has been sent.";

}

?>
