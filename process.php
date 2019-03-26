<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    

    $email_from = 'overstepco@gmail.com';
    $email_subject = 'Contact From Website';
    $email_body = "Name: $name.\n".
        "Email: $visitor_email\n".
        "Message: $message";

    $to = "overstepco@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to, $email_subject, $email_body, $headers);
    
    header("Location: index.html");



?>
