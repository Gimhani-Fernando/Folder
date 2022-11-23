<?php
    $emailTo = "gimcifer@gmail.com";
    $subject = "I hope this works";
    $body = "I think you're great!!";
    $headers = "From: gimhanif44@gmail.com";

    if(mail($emailTo, $subject, $body, $headers)){
        echo "The email was sent successfully (as far as I know)";
    }else{
        echo "The email could not be sent!";
    }
?>