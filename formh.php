<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='vinayakpublicschool.online';
$email_subject='New form submission';
$email_body="User Name : $name.\n".
              "User Email : $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";
 $to = 'aman.parmar2020@vitbhopal.ac.in' ;   
$headers="From: $email_from \r\n" ;
$headers .="Reply-To:$visitor_email \r\n" ;
mail($to,$email_subject,$email_body,$headers);
header("Location: Contactus.html");
?>