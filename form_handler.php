<?php>
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@activatetech.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name./n".
              "User Email: $visitor_email./n".
              "User Phone: $visitor_phone./n".
              "Subject: $subject./n".
              "User Message: $message./n";


$to = 'kodildy@alumni.ncsu.edu';

$headers = "From: $email_from /r/n";

$headers .= "Reply-To: $visitor_email /r/n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>