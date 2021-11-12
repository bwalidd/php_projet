<?php require('core/init.php'); ?>

<?php
//Get Template & Assign Vars
$template = new Template('templates/register.php');

//Assign Vars
$template->title = 'Create An Account';

//Display template
echo $template;