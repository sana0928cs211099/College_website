<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@example.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                 "Message: $message.\n";

                 $to = 'sanakhan300407262@gmail.com';
                 $headers = "From: $email_from \r\n";
                 $headers.= "Reply-To: $visitor_email \r\n";
            

                 if(mail($to, $email_subject, $email_body, $headers)){
                     echo "Email sent successfully.";
                 } else {
                     echo "Email failed to send.";
                 }

                 // Redirect the user to a success page
                 header('Location: success.html');
?>

?>