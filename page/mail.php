 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
//查询次日值日人员email
$dbName = "db_elwg_life";
$con = mysql_connect("115.156.216.95", "lidasong", "123");
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db($dbName, $con);
if (!$db_selected) {
    die('Could not connect: ' . mysql_error());
}
mysql_query("set names utf8");
$query = mysql_query("SELECT member_name FROM later WHERE label='1'  LIMIT 1 ");
//值日未完成按钮触发label变化
$later = mysql_fetch_array($query);
$email = mysql_query("SELECT email FROM contacts WHERE member_name='$later[0]'");
if (!$later) $to = $email;
else {
    $query = mysql_query("SELECT email FROM contacts WHERE on_duty=1 AND duty_or_not='no'  LIMIT 1 ");
    $later = mysql_fetch_array($query);
    $to = $later[0];
}
//邮件功能
set_time_limit(120); //
require_once ("../test/class.phpmailer.php");
function smtp_mail($sendto_email, $subject, $body, $extra_hdrs, $user_name) {
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
    $mail->AddAddress($sendto_email, "yangli"); // 收件人邮箱和姓名
    $mail->AddReplyTo("kang.yang@163.com", "163.com");
    //$mail->WordWrap = 50; // set word wrap
    $mail->AddAttachment("d:/a.rar", "abc");
    $mail->IsHTML(true); // send as HTML
    $mail->Subject = $subject;
    $mail->Body = '
<html><head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
' . $body . '<br/>
</body>
</html>';
    $mail->AltBody = "text/html";
    if (!$mail->Send()) {
        echo "邮件发送有误 <p>";
        echo "邮件错误信息: " . $mail->ErrorInfo;
        exit;
    } else {
        echo "$user_name $sendto_email 邮件发送成功!<br />";
    }
}

$content = "明天的实验室卫生就拜托你啦！";
smtp_mail($to, '实验室卫生清洁', $content, 'htbill.com', '总管');
mysql_close($con);
?>
