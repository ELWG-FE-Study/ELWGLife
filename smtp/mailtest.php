<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
/*******************************
*
*******************************/
set_time_limit(120);//
require_once("class.phpmailer.php");

function smtp_mail ( $sendto_email, $subject, $body, $extra_hdrs, $user_name) {
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->Host = "smtp.163.com"; // SMTP servers 注意：好像听说是只有2006年以前申请的163邮箱具有此功能

$mail->SMTPAuth = true; // turn on SMTP authentication

$mail->Username = "nhsprite"; // SMTP username 注意：普通邮件认证不需要加 @域名
$mail->Password = "8294063850nihao"; // SMTP password(我把我的密码给隐了)
$mail->From = "nhsprite@163.com"; // 发件人邮箱
$mail->FromName = "nhsprite"; // 发件人


$mail->CharSet = "utf-8"; // 这里指定字符集！

$mail->Encoding = "base64";
$mail->AddAddress($sendto_email,"yangli"); // 收件人邮箱和姓名

$mail->AddReplyTo("kang.yang@163.com","163.com");
//$mail->WordWrap = 50; // set word wrap
$mail->AddAttachment("d:/a.rar", "abc");

//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment('stat.rar','更改后的名字.rar');
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");

$mail->IsHTML(true); // send as HTML

        // 邮件主题

$mail->Subject = $subject;
// 邮件内容

$mail->Body = '
<html><head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
'.$body.
'<br/>
</body>
</html>';
$mail->AltBody ="text/html";
if(!$mail->Send())
{
  echo "邮件发送有误 <p>";
  echo "邮件错误信息: " . $mail->ErrorInfo;
  exit;
}
else {
  echo "$user_name $sendto_email 邮件发送成功!<br />";
}
}
// 参数说明(发送到, 邮件主题, 邮件内容, 附加信息, 用户名)

//smtp_mail('93635537@qq.com', 'tmail', 'NULL', '163.com', 'hii');
$content ="hahaahahahaahahahahahahah呵呵呵呵呵呵";

//smtp_mail('1913996550@qq.com', '发邮测试', $content , 'htbill.com', 'hii');
smtp_mail('1032274844@qq.com', '发邮测试', $content , 'htbill.com', 'hii');
?>
</html>
