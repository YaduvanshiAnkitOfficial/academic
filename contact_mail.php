<?php
$toEmail = "yaduvanshiankit@outlook.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
    // Set a 200 (okay) response code.
    http_response_code(200);
    print "<p class='success' style='background-color: #0DADB7;'>Thank You! Your message has been sent.</p>";
} else {
    // Set a 500 (internal server error) response code.
    http_response_code(500);
    print "<p class='error' style='background-color: #e60000;'>Oops! Something went wrong and we couldn't send your message.</p>";
}
?>