<?php

$content =<<<EOC
<p>{$lang->lang('list_admins', array($admin_profiles))}</p>
<p>{$lang->lang('contact_info', array($email, $email))}</p>
EOC;

$title = $lang->lang('contact_title');

echo GWF_Box::box($content, $title);

echo $form;
