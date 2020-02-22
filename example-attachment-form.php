<?php

/** Require StagPHP SMTP Controller */
require 'dist/smtp.php';

if(isset($_POST['message'])){
  if(!defined('SMC_MAIL_HANDLER')) define('from_name', 'No Reply');
  if(!defined('SMC_FROM_EMAIL')) define('from_name', 'no-reply@climateorb.com');
  if(!defined('SMC_REPLY_TO_NAME')) define('from_name', 'No Reply');
  if(!defined('SMC_REPLY_TO_EMAIL')) define('from_name', 'no-reply@climateorb.com');

  $stag_smtp = new stag_smtp;

  $result = $stag_smtp->send_mail(array(
    'to'                    => 'developergkindia@gmail.com',
    'subject'               => 'Test Email From Development Form',
    'message'               => $_POST['message'],
    'attachment-field-name' => 'attachment'
  ));
} ?>

<form enctype="multipart/form-data" method="POST" action=""> 
	<label>Message <textarea name="message"></textarea> </label>
  <label>Attachment <input type="file" name="attachment" /></label>
	<label><input type="submit" name="button" value="Submit" /></label> 
</form>