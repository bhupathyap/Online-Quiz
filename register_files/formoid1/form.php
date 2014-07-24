<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-red.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-red.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-metro-red" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Get Started</h2></div>
	<div class="element-input"  title="Entet Name1" <?frmd_add_class("input")?>><label class="title">Name1<span class="required">*</span></label><input class="medium" type="text" name="input" required="required"/></div>
	<div class="element-input"  title="Enter Name2" <?frmd_add_class("input1")?>><label class="title">Name2<span class="required">*</span></label><input class="medium" type="text" name="input1" required="required"/></div>
	<div class="element-input"  title="Enter Your Team Name" <?frmd_add_class("input2")?>><label class="title">Team Name<span class="required">*</span></label><input class="large" type="text" name="input2" required="required"/></div>
	<div class="element-input"  title="Enter Your College Name " <?frmd_add_class("input3")?>><label class="title">College<span class="required">*</span></label><input class="large" type="text" name="input3" required="required"/></div>
	<div class="element-number"  title="Enter Your Mobile no" <?frmd_add_class("number")?>><label class="title">Mobile no<span class="required">*</span></label><input class="large" type="text" min="0" max="100" name="number" required="required" value=""/></div>
	<div class="element-email"  title="Enter Your Email ID" <?frmd_add_class("email")?>><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-red.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>