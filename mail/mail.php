<?php
$to = "chandanvishwas1997@gmail.com";
$subject = "Test Mail";
$message = "Hello world!";
$from = "mohiton5pro@gmail.com";
$headers = array("From: $from",
    "Reply-To: mohiton5pro@gmail.com",
    "X-Mailer: PHP/" . PHP_VERSION
);
$headers = implode("\r\n", $headers);
mail($to, $subject, $message, $headers);

echo "Mail Sent.";    

?>