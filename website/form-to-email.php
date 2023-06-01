<?php
  $name = isset($_POST['name']);
  $visitor_email = isset($_POST['email']);
  $contact_phone_number = isset($_POST['number']);
  $options = isset($_POST['options']);
  $message = isset($_POST['message']);


	$email_from = 'no.name.024new@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".
                            
  $to = "1202320@student.roc-nijmegen.nl";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers)


?>    