<?php

/** Require StagPHP SMTP Controller */
require 'dist/smtp.php';

if(isset($_POST['message'])){
  if(!defined('SMC_FROM_NAME')) define('SMC_FROM_NAME', 'No Reply');
  if(!defined('SMC_FROM_EMAIL')) define('SMC_FROM_EMAIL', 'no-reply@climateorb.com');
  if(!defined('SMC_REPLY_TO_NAME')) define('SMC_REPLY_TO_NAME', 'No Reply');
  if(!defined('SMC_REPLY_TO_EMAIL')) define('SMC_REPLY_TO_EMAIL', 'no-reply@climateorb.com');

  $stag_smtp = new stag_smtp;

  $test = 'Test Email From Development Form';

  $result = $stag_smtp->send_mail(array(
    'to' => 'developergkindia@gmail.com',
    'subject' => $test,
    'html-email' => TRUE,
    'template-loc' => dirname(__FILE__).'/template.html',
    'template-data' => array(
      'title' => $test,
      'heading' => $test,
      'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
    )
  ));
} ?>

<form enctype="multipart/form-data" method="POST" action=""> 
	<label>Message <textarea name="message"></textarea> </label>
	<label><input type="submit" name="button" value="Submit" /></label> 
</form>