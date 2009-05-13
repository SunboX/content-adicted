<ul id="submenu">
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/news" title="Newsübersicht" class="current">Verwaltung</a></li>
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/news/add" title="Eine neue Meldung anlegen">Neue Meldung</a></li>
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
        <div><input type="text" name="date" size="30" tabindex="1" value="<?= date('d.m.Y', $template['news']['date']) ?>" /></div>
    </fieldset>
    
    <fieldset><legend>Text</legend>
        <script type="text/javascript" src="<?= ContentAdicted::get('core.run.basepath') ?>/assets/fckeditor/fckeditor.js"></script>
        <script type="text/javascript">
        
        window.addEvent('domready', function()
        {
            var oFCKeditor = new FCKeditor('text');
            oFCKeditor.ToolbarSet = 'Basic';
            oFCKeditor.BasePath = '<?= ContentAdicted::get('core.run.basepath') ?>/assets/fckeditor/';
            oFCKeditor.Height	= 300 ;
            oFCKeditor.ReplaceTextarea();
        });
        
        </script>
        <div><textarea name="text" rows="10" tabindex="2"><?= $template['news']['text'] ?></textarea></div>
    </fieldset>
    
    <p class="submit"><input type="submit" name="submit" tabindex="3" value="Speichern" /></p>
    
</form>

</div>