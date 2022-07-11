<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='info@yourwebsite.com';

$email_subject='New Form Submission';

$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $visitor_email.\n";

$to='gatealarisa@gmail.com';

$headers="Form: $email_form \r\n";

$headers .="Reply-To: $visitator_email \r\n";

mail($to,$headers,$email_subject,$email_body);

headers("Location: contact.html");


?>