<!DOCTYPE html >
<html>
<body>
<?php
$guest_msg=$_GET['guest_msg'];
$guest_name=$_GET['guest_name'];
$guest_email=$_GET['guest_email'];
include "Admin/company_settings/company_info.php";
include "Admin/emailConfig.php";
include("phpmailer/PHPMailerAutoload.php");
date_default_timezone_set('Etc/UTC');
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = $from;
$mail->Password = $password;
$mail->setFrom($from, $site_name);
$mail->addReplyTo($from, $site_name);
$mail->msgHTML($guest_msg);
$mail->AltBody = $guest_msg;
$mail->addAddress($guest_email, "Administrator");
$mail->Subject = 'Contact Request from '.$site_name;
if (!$mail->send()) {
	echo $mail->ErrorInfo;
    echo '<script type="text/javascript">alert("Message Was Not Sent, Please Try Again Later");window.location=\'ContactUs.php\';</script>';
} else {
    echo '<script type="text/javascript">alert("Message Sent Successfully");window.location=\'ContactUs.php\';</script>';
}
?>
</body>
</html>
