<?php include 'header.php' ; ?>

<?php

mb_language('Japanese');
mb_internal_encoding('UTF-8');

$to = "tofudesukedo@gmail.com";
$subject = $_POST["name"];
$message = $_POST["message"];
$headers = $_POST["email"];

mail($to, $subject, $message, $headers);
?>

<div class="container">
<p class="message" style="margin-top:90px;">
お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br>
</p>
</div>
</body>
</html>
