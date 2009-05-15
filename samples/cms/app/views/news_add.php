<ul id="submenu">
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/news" title="Newsübersicht">Verwaltung</a></li>
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/news/add" title="Eine neue Meldung anlegen" class="current">Neue Meldung</a></li>
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
        <legend>Datum</legend>
        <div><input type="text" name="date" size="30" tabindex="2" /></div>
    </fieldset>
    
    <fieldset>
        <legend>Text</legend>
		
		<script type="text/javascript">
		//<![CDATA[
			window.addEvent('load', function()
			{
				$('news-text').mooEditable(
				{
					actions: 'bold italic underline strikethrough | insertunorderedlist insertorderedlist | undo redo | createlink unlink '
				});
			});
		//]]>
		</script>

        <div><textarea name="text" id="news-text" rows="10"></textarea></div>
    </fieldset>
    
    <p class="submit"><input type="submit" name="submit" tabindex="4" value="Speichern" /></p>
    
</form>

</div>