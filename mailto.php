<?php include 'header.php' ; ?>

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
$header = 'From: $_POST["email"]';

mb_send_mail($to, $subject, $message, $header);
?>

<div class="container">
<p class="message" style="margin-top:90px;">
お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br>
</p>
</div>
</body>
</html>
