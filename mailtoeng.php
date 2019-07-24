<?php
include 'headereng.php';
?>
<?php

mb_language('Japanese');
mb_internal_encoding('UTF-8');

// mb_send_mail($to, $subject, $message);

$honbun = "";
	$honbun .= "メールフォームよりお問い合わせがありました。\n\n";
	$honbun .= "【お名前】\n";
	$honbun .= $_POST["name"]."\n\n";
	$honbun .= "【メールアドレス】\n";
	$honbun .= $_POST["email"]."\n\n";
	$honbun .= "【お問い合わせ内容】\n";
	$honbun .= $_POST["message"]."\n\n";

$to = "tofudesukedo@gmail.com";
$subject = "ウェブサイト制作依頼";
$message = "$honbun";
$headers = 'From: $_POST["email"]';

mail($to, $subject, $message, $headers);
?>
<div class="container">
<p class="message" style="margin-top:90px;">
Thank you for contacting me. I will reply within 1-2 days.<br>
</p>
</div>
</body>
</html>
