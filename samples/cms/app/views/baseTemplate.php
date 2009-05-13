<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>content adicted</title>
    
    <link rel="shortcut icon" href="<?= ContentAdicted::get('core.run.basepath') ?>/assets/gfx/favicon.ico" type="image/x-icon" />
    
    <link rel="stylesheet" type="text/css" href="<?= ContentAdicted::get('core.run.basepath') ?>/assets/css/content-adicted.css" />
    
    <script type="text/javascript" src="<?= ContentAdicted::get('core.run.basepath') ?>/assets/javascript/mootools-core.js"></script>
    <script type="text/javascript" src="<?= ContentAdicted::get('core.run.basepath') ?>/assets/javascript/mootools-more.js"></script>
    
    <script type="text/javascript" src="<?= ContentAdicted::get('core.run.basepath') ?>/assets/javascript/Fx.ProgressBar.js"></script>
    <script type="text/javascript" src="<?= ContentAdicted::get('core.run.basepath') ?>/assets/javascript/Swiff.Uploader.js"></script>
    <script type="text/javascript" src="<?= ContentAdicted::get('core.run.basepath') ?>/assets/javascript/FancyUpload2.js"></script>

</head>
<body>
		
<div id="head"><a href="<?= ContentAdicted::get('core.run.basepath') ?>/start"><img src="<?= ContentAdicted::get('core.run.basepath') ?>/assets/gfx/content-adicted.gif" title="content adicted" width="278" height="45" /></a></div>

<ul id="mainmenu">
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/news" title="News verwalten"
	<?= $template['navi'] == 'news' ? ' class="current"' : '' ?>>News</a></li>
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/user" title="Benutzer verwalten"
	<?= $template['navi'] == 'user' ? ' class="current"' : '' ?>>Benutzer</a></li>
	<li><a href="<?= ContentAdicted::get('core.run.basepath') ?>/login/logout" title="Session beenden">Logout</a></li>
</ul>

<div id="include"><?= $content ?></div>

<div id="footer">
    <div id="footer-inside">
        <a href="http://visualdrugs.net" class="copy"></a>
        <p>copyright &copy;2007 – 2009 <a href="http://visualdrugs.net">Visual DRUGS</a></p>
    </div>
</div>

</body>
</html>



