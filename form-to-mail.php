<?php
    $name = $_POST['name'];
    $visitor_mail= $_POST['email'];
    $message= $_POST['message'];


    //* Compressed email

    $email_from = '';
    $email_subject = '';
    $email_body = '';

    $to = "vendas@beplus.com";
    $headers = "From: $email_form \r\n";
    $header .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
>