<?php
    $name= $_POST['name'];
    $visitor_email = $_POSY['email'];
    $message = $_POST['message'];

    $email_form = 'purnimapathak999@gmail.com';
    $email_subject ="NEW Form Submission";
    $email_body ="User Name: $name.\n". 
    "User Email: $ visitor_email.\n".
    "User Message: $message.\n".

    $to ="purnimapathak999@gmail.com";
    $header ="Form: $email_formv\r\n";
    $headers .="Reply-To: $visitor_email\r\n";
    mail)$to,$email_subject,$email_body,$headers);
header("Location:index.html");
?>