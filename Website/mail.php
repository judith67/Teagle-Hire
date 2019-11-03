<?php
$from    = $_POST['email'];
$to      = 'judithkaushik@gmail.com';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From:'. $from . "\r\n" .
  'Reply-To: judithkaushik@gmail.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "Thank you for the mail.";
header("location:./index.html");
?>
