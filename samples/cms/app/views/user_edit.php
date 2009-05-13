<ul id="submenu">
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/user" title="Benutzerübersicht" class="current">Verwaltung</a></li>
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/user/add" title="Einen neuen Benutzer anlegen">Neuer Benutzer</a></li>
</ul>

<? if(ContentAdicted::get('core.user')->hasMessages()): ?>
<div id="messages_accept">
	<? foreach(ContentAdicted::get('core.user')->getMessages() as $message): ?>
    <p><?= $message ?></p>
    <? endforeach; ?>
</div>
<? endif; ?>

<div class="wrap">

<form action="<?= ContentAdicted::get('core.run.self') ?>" method="post" accept-charset="utf-8">

    <fieldset>
        <legend>Benutzername</legend>
        <div><input type="text" name="username" size="30" tabindex="1" value="<?= $template['user']['username'] ?>" /></div>
    </fieldset>
    
    <fieldset>
        <legend>Vor- und Nachname</legend>
        <div><input type="text" name="realname" size="30" tabindex="2" value="<?= $template['user']['realname'] ?>" /></div>
    </fieldset>
    
    <fieldset>
        <legend>Passwort <span class="description">(leer lassen um das Passwort nicht zu ändern)</span></legend>
        <div><input type="password" name="password" size="30" tabindex="3" /></div>
    </fieldset>
    
    <p class="submit"><input type="submit" name="submit" tabindex="4" value="Speichern" /></p>
    
</form>

</div>