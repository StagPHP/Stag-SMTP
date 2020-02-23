<?php

/** Require StagPHP SMTP Controller */
require 'dist/smtp.php';

if(isset($_POST['message'])){
  if(!defined('SMC_FROM_NAME')) define('SMC_FROM_NAME', 'No Reply');
  if(!defined('SMC_FROM_EMAIL')) define('SMC_FROM_EMAIL', 'no-reply@climateorb.com');
  if(!defined('SMC_REPLY_TO_NAME')) define('SMC_REPLY_TO_NAME', 'No Reply');
  if(!defined('SMC_REPLY_TO_EMAIL')) define('SMC_REPLY_TO_EMAIL', 'no-reply@climateorb.com');

  $stag_smtp = new stag_smtp;

  $result = $stag_smtp->send_mail(array(
    'to' => 'developergkindia@gmail.com',
    'subject' > 'Test Email From Development Form',
    'email-body' => $_POST['message']
  ));
} ?>

<form enctype="multipart/form-data" method="POST" action=""> 
	<label>Message <textarea name="message"></textarea> </label>
	<label><input type="submit" name="button" value="Submit" /></label> 
</form>