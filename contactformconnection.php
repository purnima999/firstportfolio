<?php

$to ="purnimapathak999@gmail.com";
$subject = "Response from website"
$message = " I am very thankful to you";
$headers = "From:purnimapathak999@gmail.com";

if(mail($to, $subject, $message , $headers)){
    echo "Mail send Successfully";

    else
    {
        echo"Something went wrong try again leter!";
    }
}


?>