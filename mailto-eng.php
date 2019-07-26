<?php
include 'header-english.php';
?>
<?php

mb_language('Japanese');
mb_internal_encoding('UTF-8');

// mb_send_mail($to, $subject, $message);

$to = "tofudesukedo@gmail.com";
$subject = $_POST["name"];
$message = $_POST["message"];
$headers = $_POST["email"];

$result = mail($to, $subject, $message, $headers);
?>
<div class="container">
<p class="message" style="margin-top:90px;">
Thank you for contacting me. I will reply within 1-2 days.<br>
</p>
</div>
</body>
</html>
