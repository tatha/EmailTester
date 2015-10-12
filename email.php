<?php
if(isset($_REQUEST['send'])) {
//echo "<pre>";
//print_r($_REQUEST);
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: Tathagata ( PHP Test ) <tathagata.test@mail.com>' . "\r\n";
if(mail($_REQUEST['to'],$_REQUEST['subject'],$_REQUEST['msg'],$headers)) {
	echo '<span id="sendInfo" class="success">Mail Sent</span>';
}


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Email Integration Test</title>
<link href="css/mail.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/email.js"></script>
</head>

<body>
<h1>Email Integration Tester</h1>
<form name="mail_form" action="" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="15%"><em><strong>To</strong></em></td>
    <td width="2%"><em><strong>:</strong></em></td>
    <td><input type="text" name="to" id="to" value="tathagatabasu.basu@gmail.com" size="100%"/><span id="infoTo"></span></td>
  </tr>
  <tr>
    <td><em><strong>Subject</strong></em></td>
    <td><em><strong>:</strong></em></td>
    <td><input type="text" name="subject" id="subject" value="Test" size="100%" /><span id="infoSub"></span></td>
  </tr>
  <tr valign="top">
    <td><em><strong>Message</strong></em></td>
    <td><em><strong>:</strong></em></td>
    <td><textarea name="msg" id="msg" value="" cols="76" rows="10"/>


<hr>
Test Mail, Please ignore.
<hr />
System Generated Mail.<br>
Do not reply to this mail.<br>
    
    
    </textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
    <input type="submit" name="send" id="send" value="Send mail" />
    <input type="reset" name="reset" id="reset" value="Cancel" />
    </td>
  </tr>
</table>
</form>
</body>
</html>