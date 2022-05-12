<?php $to=$_GET['email'];

$headers="From:"."futureeducation.inc@gmail.com"; $code=rand(1000,9999); $message=$code; $subject="Your Verification code";

mail($to, $subject, $message, $headers); echo'{"code":"'.$code.'"}';
