<?php

require_once('../../ContentAdicted.php');
require_once('../../lib/Util.php');

ContentAdicted::set(array(
	'core.database.dns' => 'mysql:host=localhost;dbname=content_adicted',
	'core.database.username' => 'root',
	'core.database.password' => ''
));

ContentAdicted::bootstrap('development');
//ContentAdicted::bootstrap('production');

ContentAdicted::register(array(
	'/' => 'start',
	'/start' => 'start',
	'/login' => 'login',
	'/login/logout' => 'login_logout',
	'/user' => 'user',
	'/user/add' => 'user_add',
	'/user/(user_id:[0-9]+)/edit' => 'user_edit',
	'/user/(user_id:[0-9]+)/delete' => 'user_delete',
	'/news' => 'news',
	'/news/add' => 'news_add',
	'/news/(news_id:[0-9]+)/edit' => 'news_edit',
	'/news/(news_id:[0-9]+)/delete' => 'news_delete'
));

ContentAdicted::dispatch();

?>