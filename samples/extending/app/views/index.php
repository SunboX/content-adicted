
<? if(SampleApp::get('core.user')->hasMessages()): ?>
<div id="messages">
	<? foreach(SampleApp::get('core.user')->getMessages() as $message): ?>
   	<?= $message ?><br />
    <? endforeach; ?>
</div>
<? endif; ?>

<hr />

<h2>Latest News</h2>

<?= $template['news'][0]['text'] ?>