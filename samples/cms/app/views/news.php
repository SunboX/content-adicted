<ul id="submenu">
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/news" title="Newsübersicht" class="current">Verwaltung</a></li>
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/news/add" title="Eine neue Meldung anlegen">Neue Meldung</a></li>
</ul>

<div class="wrap">

<h2>News</h2>

<table class="list">
	<tr>
		<th scope="col">Datum</th>
		<th scope="col">Text</th>
		<th scope="col">Aktionen</th>
	</tr>
	<? foreach($template['newss'] as $news): ?>
	<tr>
		<td><?= date('d.m.Y', $news['date']) ?></td>
		<td><?= Util::wordcut(strip_tags($news['text']), 45, ' [...]') ?></td>
		<td>
			<a href="<?= ContentAdicted::get('core.run.basepath') ?>/news/<?= $news['id'] ?>/edit" title="Diese Meldung bearbeiten">Bearbeiten</a> 
			<a href="<?= ContentAdicted::get('core.run.basepath') ?>/news/<?= $news['id'] ?>/delete" title="Diese Meldung löschen" onclick="return confirm('Wirklich löschen?')">Löschen</a>
		</td>
	</tr>
	<? endforeach; ?>
</table>

</div>