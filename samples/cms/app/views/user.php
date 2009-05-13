<ul id="submenu">
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/user" title="Benutzerübersicht" class="current">Verwaltung</a></li>
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/user/add" title="Einen neuen Benutzer anlegen">Neuer Benutzer</a></li>
</ul>

<div class="wrap">


<h2>Benutzer</h2>

<table class="list">
	<tr>
		<th scope="col">Nick</th>
		<th scope="col">Name</th>
		<th scope="col">Aktionen</th>
	</tr>
	<? foreach($template['users'] as $user): ?>
	<tr>
		<td><?= $user['username'] ?></td>
		<td><?= $user['realname'] ?></td>
		<td>
			<a href="<?= ContentAdicted::get('core.run.basepath') ?>/user/<?= $user['id'] ?>/edit" title="Diesen Benutzer bearbeiten">Bearbeiten</a> 
			<? if(ContentAdicted::get('core.user')->id() != $user['id']): ?> 
			<a href="<?= ContentAdicted::get('core.run.basepath') ?>/user/<?= $user['id'] ?>/delete" title="Diesen Benutzer löschen" onclick="return confirm('Wirklich löschen?')">Löschen</a>
			<? endif; ?>
		</td>
	</tr>
	<? endforeach; ?>
</table>

</div>