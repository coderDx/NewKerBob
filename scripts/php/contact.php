<?php

session_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$website = $_POST['website'];
$verification = $_POST['verification'];

$toAddress = 'info@kerbob.com';

$subject = 'KerBob Contact Form Submission';

$message = "The following form data was submitted:" . "\n\n" .
    "First Name: " . $fname . "\n" .
    "Last Name: " . $lname . "\n" .
    "Company: " . $company . "\n" .
    "Phone: " . $phone . "\n" .
    "E-Mail: " . $email . "\n" .
    "Website: " . $website . "\n" .
    "Verification: " . $verification . "\n";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70);

mail($toAddress, $subject, $message);

//$confirmation = "Thank you! Your message has been sent. Someone will be contacting you shortly." .
//    "<br /><br /><a href='/'><input type='button' value='Back' /></a>";

//echo $confirmation;

header( 'Location: /confirmation.php' ) ;