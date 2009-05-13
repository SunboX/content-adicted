<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>content adicted</title>
    
    <link rel="shortcut icon" href="<?= ContentAdicted::get('core.run.basepath') ?>/assets/gfx/favicon.ico" type="image/x-icon" />
    <link type="text/css" href="<?= ContentAdicted::get('core.run.basepath') ?>/assets/css/content-adicted.css" rel="stylesheet" media="all" />

</head>
<body>

<div id="login">
<a href="http://visualdrugs.net/" title="Powered by Visual DRUGS"></a>

<? if(ContentAdicted::get('core.user')->hasMessages()): ?>
<div id="login_message">
	<? foreach(ContentAdicted::get('core.user')->getMessages() as $message): ?>
   	<?= $message ?><br />
    <? endforeach; ?>
</div>
<? endif; ?>

<form name="loginform" id="loginform" action="<?= ContentAdicted::get('core.run.basepath') ?>/login" method="post" accept-charset="utf-8">
    <p>
        <label>Benutzername:<br />
        <input type="text" name="user" class="input" size="20" tabindex="10" value="<?= $template['user'] ?>" /></label>
    </p>
    <p>
        <label>Passwort:<br />
        <input type="password" name="pass" class="input" size="20" tabindex="20" /></label>
    </p>
    <p class="submit">
    	<input type="submit" name="submit" value="Anmelden &raquo;" tabindex="100" />
    </p>
</form>
</div>

</body>
</html>